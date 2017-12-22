<template>
    <div id="img-detail" class="modal">
        <div class="modal-close">
            <a href="#!" class="modal-action modal-close waves-effect waves-green red btn-floating">
                <i class="material-icons tiny">close</i>
            </a>
        </div>
        <div class="modal-content">
            <div class="row margin-b-0">
                <div class="valign-wrapper col s12">
                    <div class=" waves-effect waves-block waves-light left no-padding margin-r-4">
                        <img :src="image.user.avatar" class="circle avatar-medium"
                             :alt="image.user.name">
                    </div>
                    <div class="no-padding">
                        <div class="padding-b-4">
                            <div class="col s-12 no-padding">
                                <span class="truncate">{{ image.user.name }}</span>
                            </div>
                            <div class="col s12 no-padding font-12 ">
                                <div class="col s12 m6 no-padding">
                                    拍摄于<a href="#!" class="margin-r-4"> {{ image.area }} </a><span>{{ image.created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col m8 push-m1 s12">
                    <div style="display: flex;align-items: center;justify-content: center;position: relative">
                        <div v-show="is_loading_image" class="preloader-wrapper big active"
                             style="position: absolute;z-index: 10000;">
                            <div class="spinner-layer spinner-blue">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="spinner-layer spinner-red">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="spinner-layer spinner-yellow">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="spinner-layer spinner-green">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                        <div v-show="is_loading_image"
                             style="position: absolute;width: 100%;height: 100%;background: #000;opacity: 0.5"></div>
                        <img :src="image.path || image_path" alt="" class="width-100"
                             id="current-image">
                    </div>

                    <!-- 描述区 开始 -->
                    <div class="row margin-b-0">
                        <div class="col s12">
                            <p class="flow-text font-12">
                                {{ image.description }}
                            </p>
                        </div>
                    </div>
                    <!-- 描述区 结束 -->

                    <!-- 图标区 开始 -->
                    <div class="row margin-b-0">
                        <div class="right">
                            <a href="" class="margin-r-4">
                                <i class="material-icons tiny">comment</i>(<span>{{ image.comment_count }}</span>)
                            </a>
                            <a href="">
                                <i class="material-icons tiny">thumb_up</i>(<span>{{ image.favor_count }}</span>)
                            </a>
                        </div>
                    </div>
                    <!-- 图标区 结束 -->
                    <div class="divider" style="margin: 4px auto"></div>
                    <!-- 评论区 开始 -->
                    <div class="row">
                        <div v-for="comment in image_comments" class="col s12 font-12"
                             v-show="!is_loading_image">
                            <div class="col s12 no-padding">
                                <img :src="comment.user.avatar" class="circle avatar-tiny margin-r-4"
                                     :alt="comment.user.name">
                                <span>{{ comment.created_at }}</span>
                                <span class="margin-r-4">发布评论</span>
                            </div>
                            <div class="col s12 card-panel teal padding-4">
                                <p class="white-text margin-0">
                                    <a v-if="comment.at_user" href="#!"> @{{ comment.at_user.name }} </a>
                                    {{ comment.content }}
                                </p>
                                <div class="right">
                                    <a href="" class="margin-r-4">
                                        回复
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 评论区 结束 -->
                </div>
                <div class="col m3 push-m1 hide-on-small-only ">
                    <a v-for="related_image in related_images"
                       @click="getImage(related_image.id,false)"
                       :data-image-id="related_image.id" href="#!"
                       class="waves-effect waves-block waves-light">
                        <img :src="related_image.path" alt="" class="width-100">
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import image_detail_api from '../../api/image-detail-api';
    import 'hammerjs'

    export default {
        props: ['image_path', 'image_id'],
        data() {
            return {
                image: {
                    'id': 0,
                    'path': '/img/1.jpg',
                    'title': '',
                    'area': '',
                    'description': '',
                    'width': 100,
                    'height': 100,
                    'favor_count': 0,
                    'comment_count': 0,
                    'created_at': '2017-10-10',
                    'user': {
                        'id': 0,
                        'name': '',
                        'following_count': 0,
                        'avatar': '/img/1.jpg'
                    },

                },
                image_comments: [],
                related_images: [],

                is_loading_image: false,
                hammertime: null
            }
        },
        mounted: function () {
            let _this = this;
            console.log(document.getElementById('current-image'));
            this.hammertime = new Hammer(document.getElementById('current-image'), {
                domEvents: true
            });
            $('#current-image').on('swipeleft', function () {
                _this.loadNexOrPrev('left');
            });
            $('#current-image').on('swiperight', function () {
                _this.loadNexOrPrev('right')
            });
        },
        watch: {
            image_id(new_value, old_value) {
                this.getImage(new_value, true);
                this.getImageComments(new_value);
            }
        },
        methods: {
            getImage: function (image_id, with_related_images = false) {
                let _this = this;
                this.is_loading_image = true;
                image_detail_api.getImageDetail(image_id, with_related_images, function (image, related_images) {
                    _this.image = image;
                    if (with_related_images) {
                        _this.related_images = related_images;
                    }
                    _this.is_loading_image = false;
                });
            },

            getImageComments: function (image_id) {
                let _this = this;
                // 获取图片的评论
                image_detail_api.getImageComments(image_id, 1, 20, function (comments) {
                    _this.image_comments = comments;
                });
            },

            // 鼠标左右滑动加载图片
            loadNexOrPrev: function (direction) {
                this.is_loading_image = true;
                this.$emit('loadNextOrPrev', direction);
            }
        }
    }
</script>
