<template>
    <div>
        <ul class="list-reset flex border-blue-darker border-b">
            <li class="mr-1" v-for="tab in tabs">
                <a href="#" @click.prevent="changeTab(tab)" class="tab-news tab-news-normal"
                   :class="{'tab-news-active' : tab.isActive }">{{ tab.title }}</a>
            </li>
        </ul>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "News",

        data() {
            return {
                tabs: []
            }
        },

        methods: {
            changeTab(selectedTab) {
                this.tabs.forEach(tab => {
                    tab.isActive = (tab.name === selectedTab.name);
                })
            }
        },


        created() {
            this.tabs = this.$children;
        }
    }
</script>