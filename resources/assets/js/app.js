/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'vuex';
Vue.use(Vuex);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('category', require('./components/Category.vue'));
Vue.component('location', require('./components/Location.vue'));
Vue.component('allcategory', require('./components/AllCategories.vue'));
Vue.component('product', require('./components/Product.vue'));
Vue.component('banner', require('./components/Banner.vue'));
Vue.component('createdproduct', require('./components/CreatedProduct.vue'));

const store = new Vuex.Store({
    state: {
        categories: [],
        locations: [],
        products: [],
        created_product: [],
        baseUrl: "http://127.0.0.1:8000/api",
    },
    getters: {
        allCategories: state => state.categories,

        allLocations: state => state.locations,

        allProducts: state => state.products,


    },
    actions: {
        async fetchCategories({commit}){
            const response = await axios.get(store.state.baseUrl + '/category');
            commit('setCategories', response.data)
        },

        async fetchLocations({commit}){
            const response = await axios.get(store.state.baseUrl + '/location')
            commit('setLocations', response.data)
        },
        async fetchProducts({commit}){
            const response = await axios.get(store.state.baseUrl + '/product?limit=20')
            commit('setProducts', response.data)
        }
    },
    mutations: {
        setCategories: (state, categories) => (state.categories = categories),

        setLocations: (state, locations) => (state.locations = locations),

        setProducts: (state, products) => (state.products = products)
    }
});

const app = new Vue({
    el: '#app',
    store
});
