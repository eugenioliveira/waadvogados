<template>
    <form>
        <div class="flex mb-4">
            <div class="w-1/2 mr-4">
                <text-input
                    name="completeName"
                    label="Nome completo"
                    v-model="form.completeName"
                    @keydown.native="form.errors.clear('completeName')"
                ></text-input>
            </div>
            <div class="w-1/2">
                <text-input
                    name="email"
                    label="Endereço de e-mail"
                    v-model="form.email"
                    @keydown.native="form.errors.clear('email')"
                ></text-input>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="flex-1 mr-4">
                <text-input
                    name="phone"
                    label="Telefone"
                    v-model="form.phone"
                    placeholder="DDD + Telefone. Ex.: 35999999999"
                    @keydown.native="form.errors.clear('phone')"
                ></text-input>
            </div>
            <div class="w-36 mr-4">
                <select-input
                    name="state"
                    label="Estado"
                    :options="states"
                    v-model="form.state"
                    @change.native="getCities()"
                ></select-input>
            </div>
            <div class="flex-1">
                <select-input
                    name="city"
                    label="Cidade"
                    :options="cities"
                    :loading="loadingCities"
                    v-model="form.city"
                ></select-input>
            </div>
        </div>
        <div class="w-full mb-4">
            <textarea-input
                name="message"
                label="Digite a sua mensagem"
                v-model="form.message"
                @keydown.native="form.errors.clear('message')"
            ></textarea-input>
        </div>
        <div class="text-center">
            <button
                @click.prevent="submitForm()"
                class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded mr-4"
            >Enviar</button>
            <button
                @click.prevent="form.reset()"
                class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded"
            >Limpar</button>
        </div>
    </form>
</template>

<script>
    import Form from "./Form/Form";
    import TextInput from "./Form/TextInput";
    import SelectInput from "./Form/SelectInput";
    import TextareaInput from "./Form/TextareaInput";

    export default {
        name: "ContactForm",

        components: { TextInput, SelectInput, TextareaInput },

        props: {
            action: { type: String, required: true }
        },

        data() {
            return {
                form: {},
                errors: {},
                states: [],
                cities: [],
                loadingStates: false,
                loadingCities: false
            };
        },

        methods: {
            getCities() {
                this.cities = [];
                this.loadingCities = true;
                axios
                    .get(
                        `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${
                            this.form.state
                        }/municipios`
                    )
                    .then(response => {
                        _.orderBy(response.data, ["nome"]).map(city => {
                            this.cities.push({
                                value: `${city.nome} - ${
                                    city.microrregiao.mesorregiao.UF.sigla
                                }`,
                                text: city.nome
                            });
                        });
                        this.loadingCities = false;
                    });
            },

            submitForm() {
                this.form.post(this.action);
            }
        },

        created() {
            this.loadingStates = true;
            axios
                .get("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
                .then(response => {
                    _.orderBy(response.data, ["nome"]).map(state => {
                        this.states.push({ value: state.id, text: state.sigla });
                        this.loadingStates = false;
                    });
                });
        },

        mounted() {
            let formData = {};
            this.$children.forEach(input => {
                formData[input.name] = "";
            });
            this.form = new Form(formData);
        }
    };
</script>