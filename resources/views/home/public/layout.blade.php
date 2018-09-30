
<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <title>包子个人博客</title>
    <meta name="keywords" content="个人博客,个人博客,个人博客模板" />
    <meta name="description" content="个人博客" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/m.css')}}" rel="stylesheet">
    <script src="{{asset('home/js/jquery.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('home/js/comm.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('home/js/modernizr.js')}}"></script>
    <![endif]-->
</head>
<body>
<header class="header-navigation" id="header">
    <nav><div class="logo"><a href="/">包子个人博客</a></div>
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="starlist">
            <li><a href="{{route('home.index.index')}}">首页</a></li>
            <li><a href="{{route('home.article.index')}}">文章</a></li>
            <li><a href="{{route('home.img.index')}}">相册</a></li>
            <li><a href="{{route('home.gbook.index')}}">留言</a></li>
            <li><a href="{{route('home.about.index')}}">关于我</a></li>
        </ul>
    </nav>
</header>




    @yield('content')



<footer>
    <p>Design by <a href="http://www.yangqq.com" target="_blank">杨青个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
<a href="#" class="cd-top">Top</a>

    @yield('js')

</body>
</html>