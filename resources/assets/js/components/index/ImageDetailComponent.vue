<template>
    <div id="img-detail" class="modal" v-if="image">
        <div class="modal-close">
            <a href="#!" class="modal-action modal-close waves-effect waves-green red btn-floating">
                <i class="material-icons tiny">close</i>
            </a>
        </div>
        <div class="modal-content" v-if="image">
            <div class="row margin-b-0">
                <div class="valign-wrapper col s12">
                    <div class=" waves-effect waves-block waves-light left no-padding margin-r-4">
                        <img :src="image.path" class="circle avatar-medium" :alt="image.title">
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
                    <div>
                        <img src="/img/1.jpg" alt="" class="width-100">
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
                                <i class="material-icons tiny">comment</i>(<span>{{image.comment_count}}</span>)
                            </a>
                            <a href="">
                                <i class="material-icons tiny">thumb_up</i>(<span>{{image.favor_count}}</span>)
                            </a>
                        </div>
                    </div>
                    <!-- 图标区 结束 -->
                    <div class="divider" style="margin: 4px auto"></div>
                    <!-- 评论区 开始 -->
                    <div class="row">
                        <div v-for="comment in comments" class="col s12 font-12">
                            <div class="col s12 no-padding">
                                <img :src="comment.user.avatar" class="circle avatar-tiny margin-r-4"
                                     :alt="comment.user.name">
                                <span>{{comment.created_at}}</span>
                                <span class="margin-r-4">发布评论</span>
                            </div>
                            <div class="col s12 card-panel teal padding-4">
                                <p class="white-text margin-0">
                                    <a v-if="comment.at_user.id" href="#!">@{{comment.at_user.name}}</a>{{comment.content}}
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
                    <a href="#!" class="waves-effect waves-block waves-light">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                    <a href="#!" class="waves-effect waves-block waves-light">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                    <a href="#!" class="waves-effect waves-block waves-light">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['image', 'comments']
    }
</script>
