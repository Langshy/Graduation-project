{{--子视图通过进程父类视图，渲染内容--}}
@extends('Index.layouts.default')
@section('title','主页')
@section('content')
    <div class="row gary">
        <div class="col-md-3 home-left">
            <section class="Blogger col-md-11 offset-md-1">
                <p>Mr.Chen的博客</p>
                <p>邮箱：<span>langshy@163.com</span></p>
            </section>

            {{--常用链接--}}
            <section class="col-md-11 offset-md-1 left-page">
                <h3>常用链接</h3>
                <ul>
                    <li>全部文章</li><hr>
                    <li>我的随笔</li><hr>
                    <li>我的随笔</li>
                </ul>
            </section>

            {{--文章分类--}}
            <section class="col-md-11 offset-md-1 left-page">
                <h3>文章分类</h3>
                <ul>
                    <li>php</li><hr>
                    <li>php</li><hr>
                    <li>php</li><hr>
                    <li>php</li><hr>
                    <li>php</li>
                </ul>
            </section>

            {{--热点文章--}}
            <section class="col-md-11 offset-md-1 left-page">
                <h3>热点文章</h3>
                <ul>
                    <li>php</li><hr>
                    <li>php</li><hr>
                    <li>php</li><hr>
                    <li>php</li><hr>
                    <li>php</li>
                </ul>
            </section>
        </div>
        <div class="col-md-9 home-right">
            <div class="col-md-12 right-page">
                <div class="col-md-10 offset-md-1">

                    {{--轮播图--}}
                    <div class="title">美好回忆</div>
                    <section class="carousel slide hot" data-ride="carousel">

                        <!-- 指示符 -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- 轮播图片 -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="https://static.runoob.com/images/mix/img_nature_wide.jpg" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="https://static.runoob.com/images/mix/img_mountains_wide.jpg" width="100%">
                            </div>
                        </div>

                        <!-- 左右切换按钮 -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </section>
                    <hr>

                    {{--文章--}}
                    <div class="title">最新文章</div>
                    <section class="Article">
                        <div class="article">

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop