<template>
    <div class="m-4" v-if="isActive">
        <div v-if="news.length == 0">Carregando...</div>
        <div v-for="item in news" class="my-4 flex items-center">
            <span class="text-xs text-white inline-block px-2 py-1 mr-2 rounded bg-blue-light"><strong>{{ item.date }}</strong></span>
            <a :href="item.url" target="_blank" class="no-underline text-inherit hover:underline">{{ item.title }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NewsTab",

        props: {
            title: {type: String, required: true},
            name: {type: String, required: true},
            selected: {type: Boolean, default: false},
            provider: {type: String, required: true},
            count: {type: Number, default: 30}
        },

        data() {
            return {
                news: [],
                isActive: false,
            }
        },

        created() {
            let url = '/api/news/' + this.provider + '/' + this.count;
            axios.get(url).then(response => {
                this.news = response.data;
            });
        },

        mounted() {
            this.isActive = this.selected;
        }
    }
</script>
