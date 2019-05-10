<template>
    <form>
        <div class="flex mb-4">
            <div class="w-1/2 mr-4">
                <text-input
                    name="completeName"
                    label="Nome completo"
                    v-model="form.completeName"
                    :error="form.errors.get('completeName')"
                    @keydown.native="form.errors.clear('completeName')"
                ></text-input>
            </div>
            <div class="w-1/2">
                <text-input
                    name="email"
                    label="Endereço de e-mail"
                    v-model="form.email"
                    :error="form.errors.get('email')"
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
                    :error="form.errors.get('phone')"
                    @keydown.native="form.errors.clear('phone')"
                ></text-input>
            </div>
            <div class="w-36 mr-4">
                <select-input
                    name="state"
                    label="Estado"
                    :options="states"
                    v-model="form.state"
                    :error="form.errors.get('state')"
                    @change.native="getCities()"
                ></select-input>
            </div>
            <div class="flex-1">
                <select-input
                    name="city"
                    label="Cidade"
                    :options="orderedCities"
                    :loading="loadingCities"
                    v-model="form.city"
                    :error="form.errors.get('city')"
                    @change.native="form.errors.clear('city')"
                ></select-input>
            </div>
        </div>
        <div class="w-full mb-4">
            <textarea-input
                name="message"
                label="Digite a sua mensagem"
                v-model="form.message"
                :error="form.errors.get('message')"
                @keydown.native="form.errors.clear('message')"
            ></textarea-input>
        </div>
        <vue-recaptcha
            ref="invisibleRecaptcha"
            @verify="submitForm"
            size="invisible"
            :sitekey="siteKey"
        ></vue-recaptcha>
        <div class="text-center">
            <button
                @click.prevent="executeRecaptcha"
                class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded mr-4"
                :class="{'button-disabled' : form.errors.any()}"
                :disabled="form.errors.any()"
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
    import VueRecaptcha from "vue-recaptcha";

    export default {
        name: "ContactForm",

        components: { TextInput, SelectInput, TextareaInput, VueRecaptcha },

        props: {
            action: { type: String, required: true },
            siteKey: { type: String, required: true }
        },

        computed: {
            orderedCities() {
                return _.orderBy(this.cities, ["text"]);
            }
        },

        data() {
            return {
                form: new Form({
                    completeName: "",
                    email: "",
                    phone: "",
                    state: "",
                    city: "",
                    message: "",
                    recaptcha: ""
                }),
                states: [],
                cities: [],
                loadingStates: false,
                loadingCities: false
            };
        },

        methods: {
            getCities() {
                this.form.errors.clear("state");
                this.cities = [];
                this.loadingCities = true;
                axios
                    .get(
                        `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${
                            this.form.state
                        }/municipios`
                    )
                    .then(response => {
                        response.data.map(city => {
                            this.cities.push({
                                value: `${city.nome} - ${
                                    city.microrregiao.mesorregiao.UF.sigla
                                }`,
                                text: _.deburr(city.nome)
                            });
                        });
                        this.loadingCities = false;
                    });
            },

            // execute the recaptcha widget
            executeRecaptcha() {
                this.$refs.invisibleRecaptcha.execute();
            },

            submitForm(token) {
                this.form.recaptcha = token;
                this.form.post(this.action);
                this.$refs.invisibleRecaptcha.reset();
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
        }
    };
</script>