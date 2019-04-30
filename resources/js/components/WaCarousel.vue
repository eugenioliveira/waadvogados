<template>
    <carousel :per-page="1" @pageChange="changeCurrentPage" :autoplay="true" :loop="true" :autoplay-timeout="4000"
              :autoplay-hover-pause="true">
        <slide data-name="areas">
            <div class="w-full lg:h-300 bg-slide text-white relative z-10">
                <transition appear :css="false" @before-enter="beforeEnter" @enter="enter" @leave="leave">
                    <div class="w-1/2 lg:w-1/4 ml-5 pt-10" v-show="currentPage === 0">
                        <p class="font-serif lg:text-3xl">ÁREAS DE ATUAÇÃO</p>
                        <div class="border-2 border-white my-1"></div>
                        <div class="border-2 border-white my-1"></div>
                        <p class="mt-6 text-xs md:text-base">DIREITO CIVIL, DIREITO TRIBUTÁRIO, DIREITO DO TRABALHO,
                            DIREITO
                            ECONÔMICO,
                            ENTRE OUTRAS ÁREAS.</p>
                    </div>
                </transition>
            </div>
            <div class="w-full flex justify-end" style="margin-top: -300px">
                <img src="/img/Direito.jpg" alt="">
            </div>
        </slide>
        <slide data-name="profissionais">
            <div class="w-full lg:h-300 bg-slide text-white relative z-10">
                <transition appear :css="false" @before-enter="beforeEnter" @enter="enter" @leave="leave">
                    <div class="w-1/2 lg:w-1/4 ml-5 pt-10" v-show="currentPage === 1">
                        <p class="font-serif lg:text-3xl">PROFISSIONAIS</p>
                        <div class="border-2 border-white my-1"></div>
                        <div class="border-2 border-white my-1"></div>
                        <p class="mt-6 text-xs md:text-base uppercase">
                            Nossa equipe conta com vasta experiência, com advogados e profissionais de outras áreas, que
                            possibiita uma prestação de serviços qualificada.
                        </p>
                    </div>
                </transition>
            </div>
            <div class="w-full flex justify-end" style="margin-top: -300px">
                <img src="/img/Direito.jpg" alt="">
            </div>
        </slide>
    </carousel>
</template>

<script>

    import {Carousel, Slide} from 'vue-carousel';
    import Velocity from 'velocity-animate';

    export default {
        name: "WaCarousel",

        components: {Carousel, Slide},

        data() {
            return {
                currentPage: 0
            }
        },

        methods: {
            changeCurrentPage(page) {
                this.currentPage = page;
            },

            beforeEnter(el) {
                el.style.opacity = 0;
            },

            enter(el, done) {
                Velocity(el, {translateY: "30px", opacity: 1}, {delay: 500, duration: 500}, {complete: done});
            },

            leave(el, done) {
                Velocity(el, {translateY: "-30px", opacity: 0}, {delay: 500, duration: 500}, {complete: done});
            }
        }
    }
</script>

<style>

    .slide-fade-enter {
        transform: translateY(-30px);
        opacity: 0;
    }

    .slide-fade-enter-active {
        transition: all 1s ease-in-out;
    }


</style>