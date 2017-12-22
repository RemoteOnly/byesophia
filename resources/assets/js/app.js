import './bootstrap';

window.Vue = require('vue');
import Vuex from 'vuex';

Vue.use(Vuex);

import store from './store/store'
import {mapState} from 'vuex'

// 引入组件
import RecommendComponent from './components/index/RecommendComponent';
import WaterfallComponent from './components/index/WaterfallComponent';
import imageDetailComponent from './components/image_detail/ImageDetailComponent';

Vue.component('recommend-component', RecommendComponent);
Vue.component('image-detail-component', imageDetailComponent);
Vue.component('waterfall-component', WaterfallComponent);

new Vue({
    el: '#app',
    store
});
