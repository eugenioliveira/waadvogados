<template>
    <div>
        <label :for="name" class="block font-semibold mb-2">{{ label }}</label>
        <div class="relative">
            <transition name="fade">
                <div
                    v-if="loading"
                    class="absolute pin z-50 flex fa-2x items-center justify-center rounded bg-blue-dark text-white"
                >
                    <i class="fas fa-sync fa-spin"></i>
                </div>
            </transition>

            <select
                class="block w-full bg-white border border-grey-dark hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                :class="{'border-red' : error}"
                :disabled="options.length == 0"
                :value="value"
                @input="updateValue($event.target.value)"
                :name="name"
            >
                <option>Selecione...</option>
                <option
                    v-for="(option, key) in options"
                    :key="key"
                    :value="option.value"
                >{{ option.text }}</option>
            </select>
            <div v-if="error" class="text-sm text-red my-1">{{ error }}</div>
        </div>
    </div>
</template>

<script>
    import Velocity from "velocity-animate";

    export default {
        name: "SelectInput",

        props: {
            name: { type: String, required: true },
            label: { type: String, required: true },
            value: { default: null },
            options: { type: Array, required: true },
            loading: { type: Boolean, default: false },
            error: { type: [Boolean, String], default: false }
        },

        methods: {
            updateValue(value) {
                this.$emit("input", value);
            }
        }
    };
</script>

<style>
    .fade-enter-active,
    .fade-leave-active {
        transition: ease 0.5s;
    }
    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }
</style>
