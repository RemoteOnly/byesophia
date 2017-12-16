import Vue from 'vue'
import Vuex from 'vuex'
import {
    SET_CURRENT_IMAGE,
    RESET_CURRENT_IMAGE,
    SET_CURRENT_IMAGE_COMMENTS,
    RESET_CURRENT_IMAGE_COMMENTS
} from "./mutation-types";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        current_image: {},
        current_image_comments: []
    },
    mutations: {
        // 设置要查看的图
        [SET_CURRENT_IMAGE](state, payload) {
            state.current_image = payload.image;
        },
        // 关闭详情弹窗的时候恢复为null
        [RESET_CURRENT_IMAGE](state) {
            state.current_image = null;
        },
        // 设置要查看图的评论
        [SET_CURRENT_IMAGE_COMMENTS](state, payload) {
            state.current_image_comments = payload.comments;
        },
        // 关闭详情弹窗的时候恢复为[]
        [RESET_CURRENT_IMAGE_COMMENTS](state) {
            state.current_image_comments = [];
        },
    }
});

export default {store}