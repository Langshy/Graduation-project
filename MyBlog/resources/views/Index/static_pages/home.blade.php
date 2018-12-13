{{--子视图通过进程父类视图，渲染内容--}}
@extends('Index.layouts.default')
@section('title','主页')
@section('content')
    <div class="col-md-12 home">
        {{--主视图--}}
        <div class="bg-image">
            <img src="{{asset('images/bg/922bc262a48857ac982c0b067cc94b57.jpg')}}" width="100%">


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
        </div>


        <div class="row">
            {{--热点图--}}
            <div class="hot col-md-10 offset-md-1">
                <div class="hot_type">
                   <div class="top_image_1"></div>
                </div>
            </div>

            推荐文章
        </div>
    </div>
@stop