@extends('home/public/layout')


@section('content')


<article>
    <aside class="l_box">
        @include('home/public/search')
        @include('home/public/type')
        @include('home/public/tuijian')
        @include('home/public/paihang')
        @include('home/public/biaoqian')
        @include('home/public/guanzhu')
    </aside>
    <main class="r_box">

        @forelse($data as $k=>$v)

        <li><i><a href="/tuseday/diary/19.html" title="{{$v->title}}"><img src="{{$v->pic}}" alt="一个三十而立的男程序员真实讲述：代码搅乱我的生活" /></a></i>
            <h3><a href="/tuseday/diary/19.html" target="_blank" >{{$v->title}}</a></h3>
            <p>{{$v->miaoshu}}</p>
        </li>

        @empty
        暂无数据
        @endforelse













































        <div class="pagelist"></div>
    </main>
</article>

@endsection