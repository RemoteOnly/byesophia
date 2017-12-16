
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
window.Vue = require('vue');
import store from 'vuex'


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import ExampleComponent from './components/ExampleComponent.vue';
import RecommendComponent from './components/index/RecommendComponent';
import WaterfallComponent from './components/index/WaterfallComponent';

Vue.component('example-component',ExampleComponent );
Vue.component('recommend-component',RecommendComponent);
Vue.component('waterfall-component',WaterfallComponent);

new Vue({
    el:'#app',
    store
});
