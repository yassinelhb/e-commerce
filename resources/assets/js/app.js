
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyBolCNVHeljKc8ef_oH5s7LVvJc6oc7LBQ",
    },
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('maps', require('./components/maps.vue'));
Vue.component('chats', require('./components/chats.vue'));
Vue.component('listproducts', require('./components/listProducts.vue'));
Vue.component('search', require('./components/search.vue'));
Vue.component('searchHeader', require('./components/searchHeader.vue'));
Vue.component('products', require('./components/products.vue'));



const app = new Vue({
    el: '#app',
});

window.hello = function () {
    document.documentElement.scrollTop = 0
}

