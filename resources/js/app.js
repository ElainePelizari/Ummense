require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
vue.use(VueRouter);

// window.Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import ProductsIndex from './components/products/ProductsIndex.vue';
import ProductsCreate from './components/products/ProductsCreate.vue';
import ProductsEdit from './components/products/ProductsEdit.vue';


const routes = [
    {
        path: '/',
        components: {
            productsIndex: ProductsIndex
        }
    },
    {path: '/products/create', component: ProductsCreate, name: 'createProduct'},
    {path: '/products/edit/:id', component: ProductsEdit, name: 'editProduct'},
]

const router = new VueRouter({ mode: 'history' });

const app = new Vue(Vue.util.extend({ router })).$mount('#app');