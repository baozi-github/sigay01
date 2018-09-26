@extends('home/public/layout')

@section('content')

<article>
    <aside class="l_box">
        @include('home/public/about')
        @include('home/public/img')
        @include('home/public/search')
        @include('home/public/type')
        @include('home/public/guanzhu')
    </aside>
    <main class="r_box">
        <div class="gbook">


            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-21          </span> wither</p>
                    <p class="fbinfo">Thank you so much !</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-21          </span> 渣渣辉</p>
                    <p class="fbinfo">感谢博主分享，目前正在学习</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-21          </span> 大白菜</p>
                    <p class="fbinfo">请问</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-21          </span> 雪中飞舞</p>
                    <p class="fbinfo">12313</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-21          </span> 蔡文姬</p>
                    <p class="fbinfo">12</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-21          </span> 测试2</p>
                    <p class="fbinfo">rwer</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-20          </span> 爱丽丝</p>
                    <p class="fbinfo">&lt;script&gt;alert(&quot;hello world!&quot;)&lt;/script&gt;</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-20          </span> 蝴蝶飞</p>
                    <p class="fbinfo">                  <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        &lt;br&gt;</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-20          </span> ll</p>
                    <p class="fbinfo">sdsd</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-19          </span> 放大发</p>
                    <p class="fbinfo">fvSGSG</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-19          </span> 放大发</p>
                    <p class="fbinfo">的国防部宣布</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-18          </span> fdfds</p>
                    <p class="fbinfo">sdfffffffffffffffffffff</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-16          </span> a</p>
                    <p class="fbinfo">sssaaa</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-14          </span> 撒旦</p>
                    <p class="fbinfo">很不错</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-08          </span> 蓝莲花</p>
                    <p class="fbinfo">我就是试一试</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-07          </span> 袁韦韦</p>
                    <p class="fbinfo">借鉴借鉴</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-09-01          </span> 流年</p>
                    <p class="fbinfo">挺好的，打算参考下做一个</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-08-31          </span> 最后的疼爱</p>
                    <p class="fbinfo">准备仿照博主的博客自己做一个博客系统了</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-08-28          </span> xiaoming</p>
                    <p class="fbinfo">这个博客看起来很帅</p>
                </ul>
            </div>





            <div class="fb">
                <ul>
                    <p class="fbtime"><span>
          2018-08-27          </span> 123</p>
                    <p class="fbinfo">界面好看</p>
                </ul>
            </div>





            <div class="gbox">
                <form action="../../enews/index.php" method="post" name="form1" id="form1">
                    <p> <strong>来说点儿什么吧...</strong></p>
                    <p><span> 您的姓名:</span>
                        <input name="name" type="text" id="name" />
                        *</p>
                    <p><span>联系邮箱:</span>
                        <input name="email" type="text" id="email" />
                        *</p>
                    <p><span class="tnr">留言内容:</span>
                        <textarea name="lytext" cols="60" rows="12" id="lytext"></textarea>
                    </p>
                    <p>
                        <input type="submit" name="Submit3" value="提交" />
                        <input name="enews" type="hidden" id="enews" value="AddGbook" />
                    </p>
                </form>
            </div>
        </div>
    </main>
</article>

@endsection
