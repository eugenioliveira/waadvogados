<template>
    <carousel :per-page="1" @pageChange="changeCurrentPage" :autoplay="true" :loop="true" :autoplay-timeout="4000"
              :autoplay-hover-pause="true">
        <slide data-name="areas">
            <div class="w-full lg:h-300 bg-slide text-white relative z-10">
                <div class="w-1/2 lg:w-1/4 ml-5"
                     :class="{ 'animate-caption' : currentPage === 0, hidden : currentPage !== 0}">
                    <p class="font-serif lg:text-3xl">ÁREAS DE ATUAÇÃO</p>
                    <div class="border-2 border-white my-1"></div>
                    <div class="border-2 border-white my-1"></div>
                    <p class="mt-6 text-sm">DIREITO CIVIL, DIREITO TRIBUTÁRIO, DIREITO DO TRABALHO, DIREITO ECONÔMICO,
                        ENTRE OUTRAS ÁREAS.</p>
                </div>
            </div>
            <div class="w-full flex justify-end" style="margin-top: -300px">
                <img src="/img/Direito.jpg" alt="">
            </div>
        </slide>
        <slide data-name="profissionais">
            <div class="w-full lg:h-300 bg-slide text-white relative z-10">
                <div class="w-1/2 lg:w-1/4 ml-5"
                     :class="{ 'animate-caption' : currentPage === 1, hidden : currentPage !== 1}">
                    <p class="font-serif lg:text-3xl">PROFISSIONAIS</p>
                    <div class="border-2 border-white my-1"></div>
                    <div class="border-2 border-white my-1"></div>
                    <p class="mt-6 text-sm uppercase">
                        Nossa equipe conta com vasta experiência, com advogados e profissionais de outras áreas, que
                        possibiita uma prestação de serviços qualificada.
                    </p>
                </div>
            </div>
            <div class="w-full flex justify-end" style="margin-top: -300px">
                <img src="/img/Direito.jpg" alt="">
            </div>
        </slide>
    </carousel>
</template>

<script>

    import {Carousel, Slide} from 'vue-carousel';

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
                setTimeout(() => this.currentPage = page, 300)
            }
        }
    }
</script>