{{--子视图通过进程父类视图，渲染内容--}}
@extends('Index.layouts.default')
@section('title','主页')
@section('content')
    <div class="article-class col-md-12">
        <div class="row col-md-10 offset-md-1">
            <section class="type-title col-md-5 offset-md-5">
                <p>PHP</p>
            </section>
            {{--<section class="find-no col-md-10 offset-md-1">--}}
                {{--<span>没有找到任何的东西，试一试搜索功能！</span>--}}
            {{--</section>--}}
            <section class="article col-md-10 offset-md-1">
                <div class="article-page">
                    <div class="article-image">
                        <a href="{{route('article')}}"><img src="{{asset('images/bg/003.jpg')}}"></a>
                    </div>
                    <a href="{{route('article')}}"><p class="article-title">
                        刀剑神域（Sword Art Online）
                    </p></a>
                    <p class="article-content">
                        刀剑神域》是由川原砾著作，abec插画的日本轻小说作品，由电击文库出版发行。《刀剑神域》原本是川原砾为了参加2002年的电击游戏小说大奖而写的长篇小说，但由于文章过长而无法参加后，改为在网络上以“九里史生”的名义连载。连载时间是2002年11月～2008年7月，2004年开始受到大量关注。
                    </p>
                    <div class="article-time">
                        <img src="{{asset('images/content/time.png')}}">
                        <a href="#">发布于 2018-10-19</a>
                    </div>
                    <div class="article-more">
                        <a href="{{route('article')}}"><img src="{{asset('images/content/more.png')}}"></a>
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