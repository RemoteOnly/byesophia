<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/plugins/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Bye Sophia</title>
</head>
<body>
<div class="container" id="app">
    <!-- 导航 开始 -->
    <div class="row hide-on-med-and-up">
        <div class="col s2">
            <a class="btn btn-floating"><i class="material-icons">menu</i></a>
        </div>
        <div class="col s10">logo</div>
    </div>

    <div class="row hide-on-small-only">
        <div class="col m12">
            <nav>
                <div class="nav-wrapper" style="position: relative;">
                    <a href="#!" class="brand-logo left">logo</a>
                    <ul style="margin-left: 70px">
                        <li><a href="#!">人物</a></li>
                        <li><a href="#!">建筑</a></li>
                        <li><a href="#!">风景</a></li>
                        <li><a href="#!">美食</a></li>
                        <li><a href="#!">风俗</a></li>
                        <li><a href="#!">山</a></li>
                        <li><a href="#!">枫叶</a></li>
                        <li>
                            <a href="#" class="dropdown-category" data-activates="more-category">
                                更多<i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                    </ul>
                    <ul class="right">
                        <li><a href="#!">注册</a></li>
                        <li>
                            <a href="#!" class="dropdown-me" data-activates="me">
                                登录<i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- 更多下拉 开始 -->
        <ul id="more-category" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <!-- 更多下拉 结束 -->
        <!-- 个人中心下拉 开始 -->
        <ul id="me" class="dropdown-content">
            <li><a href="#!">图片</a></li>
            <li><a href="#!">文章</a></li>
            <li><a href="#!">粉丝</a></li>
            <li><a href="#!">关注</a></li>
            <li class="divider"></li>
            <li><a href="#!">退出</a></li>
        </ul>
        <!-- 个人中心下拉 结束 -->
    </div>
    <!-- 导航 结束 -->
    <recommend-component></recommend-component>
    <!-- 图片流 开始 -->
    <waterfall-component></waterfall-component>
    <!-- 图片流 结束 -->

    <div class="row">
        <div class="col s4 push-s4 center-align">
            <a href="#!" class="btn">more ...</a>
        </div>
    </div>

    <!-- 图片详情占位 开始 -->

    <!-- 图片详情占位 结束 -->
</div>
<!-- ------------------------------------------------------------------------------------------------------------- -->
<div class="container">
    <!-- 搜索 开始 -->
    <div class="row">
        <div class="input-field col  s8 push-s1">
            <input id="search" type="text">
            <label for="search">搜索</label>
        </div>
        <div class="input-field col  s1 push-s1">
            <button class="btn-floating"><i class="material-icons">search</i></button>
        </div>
    </div>
    <!-- 搜索 结束 -->

    <!-- 文章列表 开始 -->
    <div class="row paper-list">
        <div class="col m10 s12">
            <div class="col s12 no-padding">
                <div class="col s3 no-padding waves-effect waves-block waves-light">
                    <a href="#!">
                        <img src="/img/1.jpg" alt="" class="paper-cover width-100">
                    </a>
                </div>
                <div class="col s9">
                    <div class="margin-r-4 left waves-effect waves-block waves-light" style="height: 32px">
                        <a href="#!">
                            <img src="/img/1.jpg" alt="" class="circle avatar-tiny">
                        </a>
                    </div>
                    <h6 class="truncate flow-text">
                        <a href="#!"> 如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京</a>
                    </h6>
                    <div class="clear-left"></div>
                    <p class="flow-text font-12 margin-0" style="max-height: 54px; overflow-y: hidden">
                        如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京
                        如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京
                        如何穷游东京如何穷游东京
                    </p>
                    <div class="col s12 no-padding right-align">
                        <a href="#!">删除</a>
                        <a href="#!">阅读</a>
                        <a href="#!">评论</a>
                        <a href="#!">赞</a>
                        <span>2017-10-10</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m2 hide-on-small-only">
            <div class="col s12 waves-effect waves-block waves-light">
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
            <div class="col s12 waves-effect waves-block waves-light">
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
            <div class="col s12 waves-effect waves-block waves-light">
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
            <div class="col s12 waves-effect waves-block waves-light">
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s4 push-s4 center-align">
            <a href="#!" class="btn">more ...</a>
        </div>
    </div>
    <!-- 文章列表 结束 -->

    <!-- 文章详情 开始 -->
    <div id="paper-detail" class="modal">
        <div class="modal-close">
            <a href="#!" class="modal-action modal-close waves-effect waves-green red btn-floating">
                <i class="material-icons tiny">close</i>
            </a>
        </div>
        <div class="modal-content">
            <!-- 标题 start -->
            <div class="row margin-b-0">
                <div class="col s12">
                    <h5 class="center-align">如何穷游日本</h5>
                    <div class="center-align">
                        <a href="#!">
                            <img src="/img/1.jpg" alt="" class="circle avatar-medium">
                        </a>
                        <br>
                        <span>2017-10-10</span>
                    </div>
                </div>
            </div>
            <!-- 标题 end -->


            <div class="row">
                <div class="col m10 push-m1 s12">
                    <!-- 正文 start -->
                    <div class="col s12">
                        <img src="/img/1.jpg" alt="" class="width-100">
                        内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域
                        内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域
                        内容区域内容区域内容区域内容区域
                    </div>
                    <!-- 正文 end -->
                    <!-- 图标区 开始 -->
                    <div class="row margin-b-0">
                        <div class="right">
                            <a href="" class="margin-r-4">
                                <i class="material-icons tiny">comment</i>(<span>删除</span>)
                            </a>
                            <a href="" class="margin-r-4">
                                <i class="material-icons tiny">comment</i>(<span>阅读</span>)
                            </a>
                            <a href="" class="margin-r-4">
                                <i class="material-icons tiny">comment</i>(<span>评论</span>)
                            </a>
                            <a href=""><i class="material-icons tiny">thumb_up</i>(<span>赞</span>)</a>
                        </div>
                    </div>
                    <!-- 图标区 结束 -->
                    <div class="divider" style="margin: 4px auto"></div>
                    <!-- 评论区 开始 -->
                    <div class="row">
                        <div class="col font-12">
                            <div class="col s12 no-padding">
                                <img src="/img/1.jpg" class="circle avatar-tiny margin-r-4" alt="" title="小樱">
                                <span>2017-10-10</span>
                                <span class="margin-r-4">发布评论</span>
                            </div>
                            <div class="col s12 card-panel teal padding-4">
                                <p class="white-text margin-0">I am a very simple card. I am good at containing small
                                    bits of
                                    information.
                                    I am convenient because I require little markup to use effectively. I am similar to
                                    what is called a panel in other frameworks.
                                </p>
                                <div class="right">
                                    <a href="" class="margin-r-4">
                                        回复
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col font-12">
                            <div class="col s12 no-padding">
                                <img src="/img/1.jpg" class="circle avatar-tiny margin-r-4" alt="" title="小田">
                                <span class="margin-r-4">2017-10-10</span>
                                <span class="margin-r-4">回复</span>
                                <img src="/img/1.jpg" class="circle avatar-tiny margin-r-4" alt="" title="小樱">
                            </div>
                            <div class="col s12 card-panel teal padding-4">
                                <p class="white-text margin-0">I am a very simple card. I am good at containing small
                                    bits of
                                    information.
                                    I am convenient because I require little markup to use effectively. I am similar to
                                    what is called a panel in other frameworks.
                                </p>
                                <div class="right">
                                    <a href="#!">回复</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 评论区 结束 -->
                </div>
            </div>
        </div>
    </div>
    <!-- 文章详情 结束 -->
</div>
<!-- ------------------------------------------------------------------------------------------------------ -->

<div class="container">
    <div class="row" style="background-image: url('/img/1.jpg');color: white">
        <div class="col s12 center-align" style="margin: 30px auto 20px auto">
            <img src="/img/1.jpg" alt="" class="avatar-medium circle">
            <div><span>小田</span></div>
            <div><span>粉丝1000</span></div>
        </div>
        <div class="col s12">
            <div class="col s4 center-align">图片 1300</div>
            <div class="col s4 center-align">文章 1300</div>
            <div class="col s4 center-align">关注的人 1300</div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------个人中心 图片列表---------------------------------------------------- -->
    <div class="row">
        <div class="col m10 s12 no-padding">
            <div>
                <div>
                    <img src="/img/1.jpg" alt="" class="avatar-tiny circle">
                    <span>小田</span>
                    <span>2017-10-10</span>
                    <span>日本.东京</span>
                </div>
                <div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                </div>
                <div class="right-align">
                    <a href="">评论(100)</a>
                    <a href="">赞(100)</a>
                    <a href="">删除</a>
                </div>
            </div>

            <div>
                <div>
                    <img src="/img/1.jpg" alt="" class="avatar-tiny circle">
                    <span>小田</span>
                    <span>2017-10-10</span>
                    <span>日本.东京</span>
                </div>
                <div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                    <div class="col s3 padding-l-0">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </div>
                </div>
                <div class="right-align">
                    <a href="">评论(100)</a>
                    <a href="">赞(100)</a>
                    <a href="">删除</a>
                </div>
            </div>
        </div>
        <div class="col m2 hide-on-small-only padding-r-0">
            <div>
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
            <div>
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
            <div>
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
            <div>
                <a href="#!">
                    <img src="/img/1.jpg" alt="" class="width-100">
                </a>
            </div>
        </div>
        <div class="col s12 center-align">
            <a href="#!" class="btn">...</a>
        </div>
    </div>

    <!-- -------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------个人中心 文章列表----------------------------------------- -->
    <div class="row">
        <!-- 文章列表 开始 -->
        <div class="row paper-list">
            <div class="col m10 s12">
                <div class="col s12 no-padding">
                    <div class="col s3 no-padding waves-effect waves-block waves-light">
                        <a href="#!">
                            <img src="/img/1.jpg" alt="" class="paper-cover width-100">
                        </a>
                    </div>
                    <div class="col s9">
                        <div class="margin-r-4 left waves-effect waves-block waves-light" style="height: 32px">
                            <a href="#!">
                                <img src="/img/1.jpg" alt="" class="circle avatar-tiny">
                            </a>
                        </div>
                        <h6 class="truncate flow-text">
                            <a href="#!"> 如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京</a>
                        </h6>
                        <div class="clear-left"></div>
                        <p class="flow-text font-12 margin-0" style="max-height: 54px; overflow-y: hidden">
                            如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京
                            如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京如何穷游东京
                            如何穷游东京如何穷游东京
                        </p>
                        <div class="col s12 no-padding right-align">
                            <a href="#!">删除</a>
                            <a href="#!">阅读</a>
                            <a href="#!">评论</a>
                            <a href="#!">赞</a>
                            <span>2017-10-10</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m2 hide-on-small-only">
                <div class="col s12 waves-effect waves-block waves-light">
                    <a href="#!">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                </div>
                <div class="col s12 waves-effect waves-block waves-light">
                    <a href="#!">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                </div>
                <div class="col s12 waves-effect waves-block waves-light">
                    <a href="#!">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                </div>
                <div class="col s12 waves-effect waves-block waves-light">
                    <a href="#!">
                        <img src="/img/1.jpg" alt="" class="width-100">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s4 push-s4 center-align">
                <a href="#!" class="btn">more ...</a>
            </div>
        </div>
        <!-- 文章列表 结束 -->
    </div>

    <!-- -------------------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------个人中心 关注的人------------------------------------------- -->
    <div class="row">
        <div class="col s3 center-align">
            <a href="#1">
                <img src="/img/1.jpg" alt="" class="circle avatar-medium">
                <div><span>小田</span></div>
                <div class="font-12">
                    <div>图片<span>100</span> 文章<span>100</span></div>
                    <div>粉丝<span>100</span></div>
                    <div><span>2017-10-10</span></div>
                </div>
            </a>
        </div>
        <div class="col s3 center-align">
            <a href="#1">
                <img src="/img/1.jpg" alt="" class="circle avatar-medium">
                <div><span>小田</span></div>
                <div class="font-12">
                    <div>图片<span>100</span> 文章<span>100</span></div>
                    <div>粉丝<span>100</span></div>
                    <div><span>2017-10-10</span></div>
                </div>
            </a>
        </div>
        <div class="col s3 center-align">
            <a href="#1">
                <img src="/img/1.jpg" alt="" class="circle avatar-medium">
                <div><span>小田</span></div>
                <div class="font-12">
                    <div>图片<span>100</span> 文章<span>100</span></div>
                    <div>粉丝<span>100</span></div>
                    <div><span>2017-10-10</span></div>
                </div>
            </a>
        </div>
        <div class="col s3 center-align">
            <a href="#1">
                <img src="/img/1.jpg" alt="" class="circle avatar-medium">
                <div><span>小田</span></div>
                <div class="font-12">
                    <div>图片<span>100</span> 文章<span>100</span></div>
                    <div>粉丝<span>100</span></div>
                    <div><span>2017-10-10</span></div>
                </div>
            </a>
        </div>
        <div class="col s3 center-align">
            <a href="#1">
                <img src="/img/1.jpg" alt="" class="circle avatar-medium">
                <div><span>小田</span></div>
                <div class="font-12">
                    <div>图片<span>100</span> 文章<span>100</span></div>
                    <div>粉丝<span>100</span></div>
                    <div><span>2017-10-10</span></div>
                </div>
            </a>
        </div>
        <div class="col s12 center-align">
            <a href="#!" class="btn">...</a>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------------------------ -->
<!-- --------------------------------------------bottom 导航 ---------------------------------------------- -->
<div class="fixed-action-btn toolbar hide-on-med-and-up">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li class="waves-effect waves-light"><a href="#!" id="bottom-home"><i class="material-icons">home</i></a></li>
        <li class="waves-effect waves-light"><a href="#!" id="bottom-publish-img"><i
                        class="material-icons">add_a_photo</i></a></li>
        <li class="waves-effect waves-light"><a href="#!" id="bottom-following"><i class="material-icons">group</i></a>
        </li>
    </ul>
</div>
<!-- ------------------------------------------------------------------------------------------------------ -->
<!-- -------------------------------------------- 发布图片弹窗 ----------------------------------------------- -->
<div id="publish-img" class="modal">
    <div class="modal-close">
        <a href="#!" class="modal-action modal-close waves-effect waves-green red btn-floating">
            <i class="material-icons tiny">close</i>
        </a>
    </div>
    <div class="modal-content padding-4">
        <div class="row margin-b-0">
            <div class="row">
                <form class="col s12 padding-4">
                    <div class="row">
                        <div class="col s4">
                            <div class="row">
                                <div class="input-field col s12">
                                    <select multiple>
                                        <option disabled>可多选</option>
                                        <option value="1">风景</option>
                                        <option value="2">美女</option>
                                        <option value="3">火车</option>
                                    </select>
                                    <label>分类</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1">日本</option>
                                    </select>
                                    <label>国家</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1">东京</option>
                                        <option value="2">大阪</option>
                                        <option value="3">名古屋</option>
                                    </select>
                                    <label>地区</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="text">
                                    <label>具体地址</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s8">
                            <div class="col s4 padding-4">
                                <img src="/img/1.jpg" alt="" class="width-100">
                            </div>
                            <div class="col s4 padding-4">
                                <img src="/img/1.jpg" alt="" class="width-100">
                            </div>
                            <div class="col s4 padding-4">
                                <img src="/img/1.jpg" alt="" class="width-100">
                            </div>
                            <div class="col s4 padding-4">
                                <img src="/img/1.jpg" alt="" class="width-100">
                            </div>
                            <div class="col s4 padding-4">
                                <img src="/img/1.jpg" alt="" class="width-100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">描述</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button id="form-publish-img" type="button" class="btn">发布</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------------------------ -->
<!-- --------------------------------------------- 发布文章弹窗 ----------------------------------------------- -->
<div id="publish-paper" class="modal">
    <div class="modal-close">
        <a href="#!" class="modal-action modal-close waves-effect waves-green red btn-floating">
            <i class="material-icons tiny">close</i>
        </a>
    </div>
    <div class="modal-content padding-4">
        <div class="row margin-b-0">
            <div class="row">
                <form class="col s12 padding-4">
                    <div class="row">
                        <div class="col s12 m6 no-padding">
                            <div class="input-field col s12">
                                <input id="disabled" type="text" class="validate">
                                <label for="disabled">标题</label>
                            </div>
                            <div class="input-field col s12">
                                <select multiple>
                                    <option disabled>可多选</option>
                                    <option value="1">风景</option>
                                    <option value="2">美女</option>
                                    <option value="3">火车</option>
                                </select>
                                <label>分类</label>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <img src="/img/1.jpg" alt="" style="width: 300px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">内容</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button id="form-publish-img" type="button" class="btn">发布</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------------------------ -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('/plugins/materialize-css/dist/js/materialize.js') }}"></script>

<script>
    $(document).ready(function () {
        $(".dropdown-category").dropdown();
        $(".dropdown-me").dropdown();
        $('select').material_select();
        // 弹窗初始化
        $('.modal').modal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                inDuration: 300, // Transition in duration
                outDuration: 200, // Transition out duration
                startingTop: '4%', // Starting top style attribute
                endingTop: '1%', // Ending top style attribute
                ready: function (modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    //alert("Ready");
                    console.log(modal, trigger);
                },
                complete: function () {
                    //alert('Closed');
                } // Callback for Modal close
            }
        );

        // 文章详情弹窗
        $('.paper-list h6 a, .paper-cover').click(function () {
            $('#paper-detail').modal('open');
        });

        // 发布图片弹窗
        /* $('#bottom-publish-img').click(function () {
             $('#publish-img').modal('open');
         });*/

        $('#bottom-publish-img').click(function () {
            $('#publish-paper').modal('open');
        });
    })
</script>
</body>
</html>