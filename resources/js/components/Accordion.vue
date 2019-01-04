<template>

    <div class="w-full my-2">

        <div @click="toggle"
             class="flex z-10 cursor-pointer justify-between items-center border-2 p-2 border-blue-darkest rounded-lg text-blue-darkest">
            <h3 class="uppercase font-serif">{{ title }}</h3>
            <font-awesome-icon :icon="isOpen ? 'minus' : 'plus'"></font-awesome-icon>
        </div>

        <transition
                v-bind:css="false"
                v-on:enter="enter"
                v-on:leave="leave"
        >
            <slot v-if="isOpen"></slot>
        </transition>


    </div>

</template>

<script>

    import {library} from '@fortawesome/fontawesome-svg-core';
    import {faMinus, faPlus} from '@fortawesome/free-solid-svg-icons';
    import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome';
    import velocity from 'velocity-animate';

    library.add(faMinus, faPlus);

    export default {
        name: "Accordion",

        components: {FontAwesomeIcon},

        props: ['title', 'body'],

        data() {
            return {
                isOpen: false
            }
        },

        methods: {
            toggle() {
                this.isOpen = !this.isOpen
            },
            enter(el, done) {
                Velocity(el, 'slideDown', {duration: 500}, {complete: done});
            },
            leave(el, done) {
                Velocity(el, 'slideUp', {complete: done})
            }
        }
    }
</script>