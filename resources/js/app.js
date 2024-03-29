/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('wa-carousel', require('./components/WaCarousel.vue').default);
Vue.component('accordion', require('./components/Accordion.vue').default);

// Componentes relacionados às notícias
Vue.component('news', require('./components/News/News.vue').default);
Vue.component('news-tab', require('./components/News/NewsTab.vue').default);

// Componentes de forms
Vue.component('contact-form', require('./components/ContactForm.vue').default);

const app = new Vue({
    el: '#app'
});
