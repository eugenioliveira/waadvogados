<template>
    <div>
        <label :for="name" class="block font-semibold mb-2">{{ label }}</label>
        <div class="relative">
            <select class="block
                           appearance-none
                           w-full
                           bg-white
                           border border-grey-dark
                           hover:border-grey
                           px-4 py-2 pr-8
                           rounded shadow
                           leading-tight
                           focus:outline-none focus:shadow-outline">
                <option v-for="option in options" :value="option.id">{{ option.sigla }}</option>
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SelectInput",

        props: {
            name: {type: String, required: true},
            label: {type: String, required: true},
            value: {default: null},
            options: {type: Object, required: true}
        },

        methods: {
            updateValue(value) {
                this.$emit('input', value);
            }
        }
    }
</script>