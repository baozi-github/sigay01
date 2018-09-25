{{--错误信息提示--}}

{{--错误提示--}}
@if(count($errors)>0)
    <div style="margin-left: 250px;" class="Huialert Huialert-error" id="error">
        <i class="Hui-iconfont">&#xe6a6;</i>
        @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
        @endforeach
    </div>

    <script>

            function error (){
                $('#error').remove();
            }

            var t1 = window.setInterval(error,2000);



    </script>
@endif