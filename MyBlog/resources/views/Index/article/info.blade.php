{{--子视图通过进程父类视图，渲染内容--}}
@extends('Index.layouts.default')
@section('title','主页')
@section('content')
    <div class="article-info col-md-12">
        {{--没有背景图片--}}
        <div class="row col-md-10 offset-md-1">
            <header class="article-title col-md-12">
                <h1>Hello World</h1>
                <p>发布于 2018-08-16 144 次阅读</p>
                <hr>
            </header>
            <section class="article-content">
                <article>
                    <div class="entry-content"></div>
                    <div class="post-foot">
                        <p>知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</p>
                        <div class="like-share">
                            <img src="{{asset('images/bg/share.png')}}">
                            &nbsp;
                            <img src="{{asset('images/bg/like.png')}}">
                            <span>0</span>
                        </div>
                        <div class="post-tag">
                            <img src="{{asset('images/bg/tag.png')}}">
                            <a href="">笔记</a>&nbsp;<a href="">动漫</a>
                        </div>
                    </div>
                </article>
            </section>
            <section class="post-author">

            </section>
        </div>
    </div>
@stop