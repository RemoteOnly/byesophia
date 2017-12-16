import './bootstrap';

window.Vue = require('vue');
import store from './store/store'
import {mapState} from 'vuex'

// 引入组件
import RecommendComponent from './components/index/RecommendComponent';
import WaterfallComponent from './components/index/WaterfallComponent';
import ImageDetailComponent from './components/index/ImageDetailComponent';

Vue.component('recommend-component', RecommendComponent);
Vue.component('waterfall-component', WaterfallComponent);
Vue.component('image-detail-component', ImageDetailComponent);

new Vue({
    el: '#app',
    store,
    computed: mapState(['current_image', 'current_image_comments'])
});
