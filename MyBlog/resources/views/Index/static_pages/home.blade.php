{{--子视图通过进程父类视图，渲染内容--}}
@extends('Index.layouts.default')
@section('title','主页')
@section('content')
    <div class="home col-md-12">
        {{--主视图--}}
        <section class="bg">
            <div class="bg-image">
                <img src="{{asset('images/bg/922bc262a48857ac982c0b067cc94b57.jpg')}}" width="100%">
            </div>

            <div class="wrap-hello">
                <div class="warp-image">
                    <a href="#">
                        <img src="{{asset('images/bg/26144a7639f5500f7b642e90943fe349 (1).jpeg')}}">
                    </a>
                </div>
                <div class="warp-type">
                    <p>每天写作一点点！</p>
                </div>
            </div>
        </section>


        <div class="content row">
            {{--热点图--}}
            <section class="hot col-md-8">
                <hr>
                <p>热点话题：</p>
                <div class="hot_type page-left"></div>
                <div class="hot_type page-right"></div>
                <div class="hot_type page-left"></div>
            </section>

            {{--最新文章--}}
            <section class="article col-md-8">
                <p>最新文章：</p>
                <hr>
                <div class="article-page">
                    <div class="article-image">
                        <img src="{{asset('images/bg/003.jpg')}}">
                    </div>
                    <p class="article-title">
                        刀剑神域（Sword Art Online）
                    </p>
                    <p class="article-content">
                        刀剑神域》是由川原砾著作，abec插画的日本轻小说作品，由电击文库出版发行。《刀剑神域》原本是川原砾为了参加2002年的电击游戏小说大奖而写的长篇小说，但由于文章过长而无法参加后，改为在网络上以“九里史生”的名义连载。连载时间是2002年11月～2008年7月，2004年开始受到大量关注。
                    </p>
                    <div class="article-time">
                        <img src="{{asset('images/content/time.png')}}">
                        <a href="#">发布于 2018-10-19</a>
                    </div>
                    <div class="article-more">
                        <a href="#"><img src="{{asset('images/content/more.png')}}"></a>
                    </div>
                    <div class="article-read-info">
                        <img src="{{asset('images/content/see.png')}}">
                        <span>1</span>&nbsp;
                        <img src="{{asset('images/content/sey-talk-d-a.png')}}">
                        <span>1</span>
                    </div>
                </div>
                <hr>
                <div class="article-page">
                    <div class="article-image">
                        <img src="{{asset('images/bg/003.jpg')}}">
                    </div>
                    <p class="article-title">
                        刀剑神域（Sword Art Online）
                    </p>
                    <p class="article-content">
                        刀剑神域》是由川原砾著作，abec插画的日本轻小说作品，由电击文库出版发行。《刀剑神域》原本是川原砾为了参加2002年的电击游戏小说大奖而写的长篇小说，但由于文章过长而无法参加后，改为在网络上以“九里史生”的名义连载。连载时间是2002年11月～2008年7月，2004年开始受到大量关注。
                    </p>
                    <div class="article-time">
                        <img src="{{asset('images/content/time.png')}}">
                        <a href="#">发布于 2018-10-19</a>
                    </div>
                    <div class="article-more">
                        <a href="#"><img src="{{asset('images/content/more.png')}}"></a>
                    </div>
                    <div class="article-read-info">
                        <img src="{{asset('images/content/see.png')}}">
                        <span>1</span>&nbsp;
                        <img src="{{asset('images/content/sey-talk-d-a.png')}}">
                        <span>1</span>
                    </div>
                </div>
                <hr>
                <div class="article-page">
                    <div class="article-image">
                        <img src="{{asset('images/bg/003.jpg')}}">
                    </div>
                    <p class="article-title">
                        刀剑神域（Sword Art Online）
                    </p>
                    <p class="article-content">
                        刀剑神域》是由川原砾著作，abec插画的日本轻小说作品，由电击文库出版发行。《刀剑神域》原本是川原砾为了参加2002年的电击游戏小说大奖而写的长篇小说，但由于文章过长而无法参加后，改为在网络上以“九里史生”的名义连载。连载时间是2002年11月～2008年7月，2004年开始受到大量关注。
                    </p>
                    <div class="article-time">
                        <img src="{{asset('images/content/time.png')}}">
                        <a href="#">发布于 2018-10-19</a>
                    </div>
                    <div class="article-more">
                        <a href="#"><img src="{{asset('images/content/more.png')}}"></a>
                    </div>
                    <div class="article-read-info">
                        <img src="{{asset('images/content/see.png')}}">
                        <span>1</span>&nbsp;
                        <img src="{{asset('images/content/sey-talk-d-a.png')}}">
                        <span>1</span>
                    </div>
                </div>
                <hr>
                <div class="article-page">
                    <div class="article-image">
                        <img src="{{asset('images/bg/003.jpg')}}">
                    </div>
                    <p class="article-title">
                        刀剑神域（Sword Art Online）
                    </p>
                    <p class="article-content">
                        刀剑神域》是由川原砾著作，abec插画的日本轻小说作品，由电击文库出版发行。《刀剑神域》原本是川原砾为了参加2002年的电击游戏小说大奖而写的长篇小说，但由于文章过长而无法参加后，改为在网络上以“九里史生”的名义连载。连载时间是2002年11月～2008年7月，2004年开始受到大量关注。
                    </p>
                    <div class="article-time">
                        <img src="{{asset('images/content/time.png')}}">
                        <a href="#">发布于 2018-10-19</a>
                    </div>
                    <div class="article-more">
                        <a href="#"><img src="{{asset('images/content/more.png')}}"></a>
                    </div>
                    <div class="article-read-info">
                        <img src="{{asset('images/content/see.png')}}">
                        <span>1</span>&nbsp;
                        <img src="{{asset('images/content/sey-talk-d-a.png')}}">
                        <span>1</span>
                    </div>
                </div>
                <hr>
                <div class="more">更多</div>
            </section>
        </div>
    </div>
@stop