<template>
    <form>
        <div class="flex mb-4">
            <div class="w-1/2 mr-4">
                <text-input name="completeName" label="Nome completo" v-model="form.completeName"></text-input>
            </div>
            <div class="w-1/2">
                <text-input name="email" label="Endereço de e-mail" v-model="form.email"></text-input>
            </div>
        </div>
        <div class="flex mb4">
            <div class="flex-1 mr-4">
                <text-input name="phone" label="Telefone" v-model="form.phone"></text-input>
            </div>
            <div class="w-24 mr-4">
                <select-input name="state" label="Estado" :options="states" v-model="form.state"></select-input>
            </div>
            <div class="flex-1">
                <text-input name="city" label="Cidade" v-model="form.city"></text-input>
            </div>
        </div>
    </form>
</template>

<script>

    import Form from './Form/Form';
    import TextInput from './Form/TextInput';
    import SelectInput from './Form/SelectInput'

    export default {
        name: "ContactForm",

        components: {TextInput, SelectInput},

        props: {
            action: {type: String, required: true}
        },

        data() {
            return {
                form: {},
                states: {}
            }
        },

        mounted() {
            let formData = {};
            this.$children.forEach((input) => {
                formData[input.name] = ''
            })
            this.form = new Form(formData);

            axios.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados').then(response => {
                this.states = response.data;
            });
        }
    }
</script>