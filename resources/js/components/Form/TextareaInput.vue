<template>
    <div>
        <label :for="name" class="block font-semibold mb-2">{{ label }}</label>
        <textarea
            @input="updateValue($event.target.value)"
            class="appearance-none border border-grey-dark shadow rounded w-full py-2 px-3 focus:outline-none focus:shadow-outline focus:border-grey"
            :class="{'border-red' : error}"
            :name="name"
            :value="value"
            cols="30"
            rows="10"
        ></textarea>
        <div v-if="error" class="text-sm text-red my-1">{{ error }}</div>
    </div>
</template>

<script>
    export default {
        name: "TextareaInput",

        props: {
            name: { type: String, required: true },
            label: { type: String, required: true },
            value: { default: null },
            error: { type: [Boolean, String], default: false }
        },

        methods: {
            updateValue(value) {
                this.$emit("input", value);
            }
        }
    };
</script>