<template>
    <!-- 推荐 开始 -->
    <div class="row recommend margin-b-0">
        <div v-for="item in items" class="col m3 s6 waves-effect waves-block waves-light">
            <a :href="'#' + item.id">
                <img :src="item.path" :alt="item.title">
            </a>
        </div>
    </div>
    <!-- 推荐 结束 -->
</template>

<script>
    import recommend_api from './../../api/recommend-api.js';

    export default {
        data() {
            return {
                items: []
            }
        },

        beforeCreate() {
            let _this = this;
            recommend_api.getRecommend(function (items) {
                _this.items = items;
            });
        }
    }
</script>
