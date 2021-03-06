<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--设置视图title--}}
    <title>@yield('title','首页')</title>
    <link type="text/css" rel="stylesheet" href="{{url('css/app.css')}}">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</head>
<body id="page-index">
@include('Index.layouts._header')
{{--通用视图，子视图通过继承通用视图将内容显示于@yield('content')之中--}}
@yield('content')
@include('Index.layouts._top')
@include('Index.layouts._search')
@include('Index.layouts._footer')
</body>
</html>