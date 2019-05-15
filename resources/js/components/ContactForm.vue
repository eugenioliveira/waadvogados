<template>
    <form>
        <div class="md:flex my-2">
            <div class="w-full md:w-1/2 mb-2 md:mr-4">
                <text-input
                    name="completeName"
                    label="Nome completo"
                    v-model="form.completeName"
                    :error="form.errors.get('completeName')"
                    @keydown.native="form.errors.clear('completeName')"
                ></text-input>
            </div>
            <div class="w-full md:w-1/2">
                <text-input
                    name="email"
                    label="Endereço de e-mail"
                    v-model="form.email"
                    :error="form.errors.get('email')"
                    @keydown.native="form.errors.clear('email')"
                ></text-input>
            </div>
        </div>
        <div class="md:flex my-2">
            <div class="w-full md:flex-1 mb-2 md:mr-4">
                <text-input
                    name="phone"
                    label="Telefone"
                    v-model="form.phone"
                    placeholder="DDD + Telefone. Ex.: 35999999999"
                    :error="form.errors.get('phone')"
                    @keydown.native="form.errors.clear('phone')"
                ></text-input>
            </div>
            <div class="md:w-36 mb-2 md:mr-4">
                <select-input
                    name="state"
                    label="Estado"
                    :options="states"
                    v-model="form.state"
                    :error="form.errors.get('state')"
                    @change.native="getCities()"
                ></select-input>
            </div>
            <div class="w-full md:flex-1">
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
        <div class="w-full my-2">
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
    import Form from "./Form/Form.js";
    import Headers from "./Form/Headers.js";
    import TextInput from "./Form/TextInput.vue";
    import SelectInput from "./Form/SelectInput.vue";
    import TextareaInput from "./Form/TextareaInput.vue";
    import VueRecaptcha from "vue-recaptcha";

    export default {
        name: "ContactForm",

        components: { TextInput, SelectInput, TextareaInput, VueRecaptcha },

        props: {
            // A ação do formulário de contato.
            action: { type: String, required: true },
            // A chave para verificação reCaptcha v2
            siteKey: { type: String, required: true }
        },

        // Ordena as cidades por nome.
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
                // Classe responsável pela manipulação dos cabeçalhos axios
                headers: new Headers(),
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
                // Busca os estados na API do IBGE
                let url =
                    "https://servicodados.ibge.gov.br/api/v1/localidades/estados/" +
                    this.form.state +
                    "/municipios";
                this.getExternalData(url).then(data => {
                    data.map(city => {
                        this.cities.push({
                            value:
                                city.nome +
                                " - " +
                                city.microrregiao.mesorregiao.UF.sigla,
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

            // Customiza a instância axios para realizar chamadas externas.
            getExternalData(url) {
                return new Promise((resolve, reject) => {
                    // Remove os cabeçalhos
                    this.headers.unsetHeaders();
                    axios
                        .get(url)
                        .then(response => {
                            resolve(response.data);
                        })
                        .catch(error => {
                            resolve(error.response.data);
                        });
                    // Retorna com os cabeçalhos
                    this.headers.setHeaders();
                });
            },

            submitForm(token) {
                this.form.recaptcha = token;
                this.form.post(this.action);
                this.$refs.invisibleRecaptcha.reset();
            }
        },

        created() {
            this.loadingStates = true;
            this.getExternalData(
                "https://servicodados.ibge.gov.br/api/v1/localidades/estados"
            ).then(data => {
                _.orderBy(data, ["nome"]).map(state => {
                    this.states.push({ value: state.id, text: state.sigla });
                    this.loadingStates = false;
                });
            });
        }
    };
</script>