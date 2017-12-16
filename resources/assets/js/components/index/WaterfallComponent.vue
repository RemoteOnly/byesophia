<template>
    <div class="row waterfall">
        <div v-for="group in items" class=" col m3 s6">
            <div v-for="item in group" class="card" :data-key="item.id">
                <div class="card-image card-image-0 waves-effect waves-block waves-light">
                    <img class="activator" :src="item.path" :title="item.title" @click="showDetail">
                </div>
                <div class="card-content padding-4 margin-b-0">
                    <div class="card-title margin-b-0">
                        <div class="valign-wrapper">
                            <div class=" waves-effect waves-block waves-light left no-padding" style="min-width: 32px">
                                <img src="/img/1.jpg" class="circle " alt="" width="32px" height="32px">
                            </div>
                            <div style="font-size: 15px;line-height: 100%;margin-left: 4px"
                                 class="col s12 no-padding">
                                <div class="padding-b-4">
                                    <div class="col s12 no-padding">
                                        <span class="truncate">{{ item.user.name }}</span>
                                    </div>
                                    <div class="col s12 no-padding font-12 ">
                                        <div class="col m12 l6 no-padding">{{ item.created_at }}</div>
                                        <div class="col m12 l6 no-padding">
                                            <a href="#!"> {{ item.area }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action card-action-modify">
                    <div class="col s4  center-align no-padding">
                        <a href="#" style="margin: 0">
                            <i class="material-icons tiny">person_add</i>
                            <span class="hide-on-med-and-down">(<span>{{ item.user.following_count }}</span>)</span>
                        </a>
                    </div>
                    <div class="col s4 center-align no-padding">
                        <a href="#" style="margin: 0" class="comment">
                            <i class="material-icons tiny">comment </i>
                            <span class="hide-on-med-and-down">(<span>{{ item.comment_count }}</span>)</span>
                        </a>
                    </div>
                    <div class="col s4 center-align no-padding">
                        <a href="#" style="margin: 0">
                            <i class="material-icons tiny">thumb_up</i>
                            <span class="hide-on-med-and-down">(<span>{{ item.favor_count }}</span>)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import waterfall_api from './../../api/waterfall-api';
    import 'lodash';
    import {SET_CURRENT_IMAGE, SET_CURRENT_IMAGE_COMMENTS} from '../../store/mutation-types';

    export default {
        data() {
            return {
                items_0: [],
                items_1: [],
                items_2: [],
                items_3: [],
                columns: [
                    {column_index: 0, min_height_ratio: 0},
                    {column_index: 1, min_height_ratio: 0},
                    {column_index: 2, min_height_ratio: 0},
                    {column_index: 3, min_height_ratio: 0}
                ],
                tolerance: 0.5
            }
        },
        computed: {
            items: function () {
                return [this.items_0, this.items_1, this.items_2, this.items_3];
            }
        },
        // 组件创建之前进行数据的获取和分栏
        beforeCreate() {
            let _this = this;
            waterfall_api.getWaterfall(function (waterfall_items) {
                let items = _(waterfall_items).map(function (item) {
                    item.ratio = _.round(item.height / item.width, 2);
                    return item;
                });

                //TODO 判断栏目数量
                if (true) {
                    _this.groupImages(items, 4);
                } else {
                    _this.groupImages(items, 2);
                }
            });
        },
        methods: {
            // 将图片分组
            groupImages: function (items, column_count) {
                let _this = this;
                _(items).forEach(function (item) {
                    // 筛选出最低的那个栏位
                    let min_column = _this.columns[0];
                    for (let i = 1; i < _this.columns.length; i++) {
                        if (min_column.min_height_ratio > _this.columns[i].min_height_ratio) {
                            min_column = _this.columns[i];
                        }
                    }
                    // 往最低的栏位上插入元素
                    switch (min_column.column_index) {
                        case 0:
                            _this.items_0.push(item);
                            _this.columns[0].min_height_ratio += item.ratio + _this.tolerance;
                            break;
                        case 1:
                            _this.items_1.push(item);
                            _this.columns[1].min_height_ratio += item.ratio + _this.tolerance;
                            break;
                        case 2:
                            if (column_count === 4) {
                                _this.items_2.push(item);
                                _this.columns[2].min_height_ratio += item.ratio + _this.tolerance;
                            }
                            break;
                        case 3:
                            if (column_count === 4) {
                                _this.items_3.push(item);
                                _this.columns[3].min_height_ratio += item.ratio + _this.tolerance;
                            }
                            break;
                        default:
                            _this.items_0.push(item);
                            _this.columns[0].min_height_ratio += item.ratio + _this.tolerance;
                            break
                    }
                });
            },

            // 弹窗显示图片的详情
            showDetail: function () {
                let _this = this;
                // 获取图片元信息
                let image = image_detail.getImageDetail(1, function (image) {
                    console.log(image);
                    _this.image = image;
                });
                _this.$store.commit([SET_CURRENT_IMAGE], {image: image});
                // 获取图片的评论
                let comments = image_detail.getImageComments(1, 1, 20, function (comments) {
                    _this.comments = comments;
                });
                _this.$store.commit([CURRENT_IMAGE_COMMENTS], {comments: comments});

                $('#img-detail').modal('open')
            }
        }
    }
</script>
