<template>
    <div class="row waterfall">
        <div v-for="group in groups" class=" col m3 s6">
            <div v-for="item in group" class="card" :id="'image-' + item.id">
                <div class="card-image card-image-0 waves-effect waves-block waves-light">
                    <img class="activator" :src="item.path" :title="item.title" :data-image-id="item.id"
                         @click="setCurrentImageInfo($event)">
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
                        <a href="#" style="margin: 0" class="comment" :data-image-id="item.id"
                           @click="showDetail($event)">
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

        <image-detail-component @loadNextOrPrev="listenLoadNextOrPrev" :image_path="current_image_path"
                                :image_id="current_image_id"></image-detail-component>
    </div>
</template>

<script>
    import waterfall_api from './../../api/waterfall-api';
    import 'lodash';
    import {mapState} from 'vuex';

    export default {
        data() {
            return {
                items: [],
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
                current_image_path: '',
                current_image_id: 0,

                tolerance: 0.5,
                page: 1,
                limit: 20
            }
        },
        computed: {
            groups() {
                return [this.items_0, this.items_1, this.items_2, this.items_3];
            }
        },
        // 组件创建之前进行数据的获取和分栏
        created() {
            this.loadImages(this.page, this.limit, false);
        }
        ,
        watch: {
            should_to_load_images(new_value, old_value) {
                console.log(new_value);
                if (new_value === true) {
                    this.loadImages(this.page + 1, this.limit);
                }
            }
        }
        ,
        methods: {
            // 加载图片
            loadImages: function (page = 1, limit = 20, set_current_image_id = false) {
                let _this = this;
                waterfall_api.getWaterfall(page, limit, function (waterfall_items) {
                    let items = _.map(waterfall_items, function (item) {
                        item.ratio = _.round(item.height / item.width, 2);
                        // 保存图片对象
                        _this.items.push(item);

                        return item;
                    });

                    if (items.length > 0) {
                        _this.page = page;
                        if (set_current_image_id) {
                            _this.current_image_id = items[0].id;
                            _this.current_image_path = items[0].path;
                        }
                    }

                    //TODO 判断栏目数量
                    if (true) {
                        _this.groupImages(items, 4);
                    } else {
                        _this.groupImages(items, 2);
                    }
                });
            }
            ,
            // 将图片分组
            groupImages: function (items, column_count, scroll_to_current_image = false) {
                let _this = this;
                _.forEach(items, function (item) {
                    // 筛选出最低的那个栏位
                    let min_column = _.minBy(_this.columns, 'min_height_ratio');

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

                // 定位
                if (items && scroll_to_current_image) {
                    _this.scrollToCurrentImage(items[0].id);
                }
            },

            // 弹窗显示图片的详情
            setCurrentImageInfo: function (event) {
                console.log($(event.currentTarget).attr('src'));
                this.current_image_path = $(event.currentTarget).attr('src');
                this.current_image_id = $(event.currentTarget).data('image-id');
                $('#img-detail').modal('open')
            },

            listenLoadNextOrPrev: function (direction) {
                let _this = this;
                let index = _.findIndex(this.items, function (item) {
                    return item.id === _this.current_image_id;
                });
                if (index !== -1) {
                    // 下一张
                    if (direction === 'left') {
                        if (index !== this.items.length - 1) {
                            this.current_image_id = this.items[index + 1].id;
                            // 定位
                            this.scrollToCurrentImage(this.current_image_id);
                        } else {
                            // 从服务器加载数据，并设置新加载的第一张为要显示的数据
                            this.loadImages(this.page + 1, this.limit, true);
                        }
                    } else {
                        if (index > 0) {
                            this.current_image_id = this.items[index - 1].id;
                        }
                    }
                } else {
                    alert('加载失败');
                }
            },

            // 滚动定位
            scrollToCurrentImage: function (image_id) {
                $("html, body").animate({
                    scrollTop: $('#image-' + image_id).offset().top
                }, {
                    duration: 500,
                    easing: "swing"
                });
            }
        }
    }
</script>
