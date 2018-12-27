<header class="navbar fixed-top navbar-inverse">
    <div class="col-md-12">
            <a href="{{route('home')}}" id="logo">{{ $webSet->title}}</a>
            <nav class="navbar navbar-expand-sm float-right">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link text-white">首页</a></li>
                    @foreach($tags as $tag)
                        <li class="nav-item">
                            <a href="{{route('Tag.show',$tag->tag_name)}}" class="nav-link text-white">{{$tag->tag_name}}</a>
                        </li>
                        @endforeach
                </ul>
            </nav>
            <div class="search">
                <img src="{{asset('images/header/search.png')}}" width="24px">
            </div>
        </div>
</header>