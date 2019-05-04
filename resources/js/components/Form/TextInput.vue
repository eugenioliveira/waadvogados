<template>
    <div>
        <label :for="name" class="block font-semibold mb-2">{{ label }}</label>
        <input class="appearance-none
                  border
                  border-grey-dark
                  shadow
                  rounded
                  w-full
                  py-2 px-3
                  focus:outline-none focus:shadow-outline focus:border-grey"
               type="text" :value="value" @input="updateValue($event.target.value)" :name="name">
    </div>
</template>

<script>
    export default {
        name: "TextInput",

        props: {
            name: {type: String, required: true},
            label: {type: String, required: true},
            value: {default: null}
        },

        methods: {
            updateValue(value) {
                this.$emit('input', value);
            }
        }
    }
</script>