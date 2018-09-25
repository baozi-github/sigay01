@extends('admin.public.layout')

@section('title','文章添加')

@section('content')
	<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
	<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/uploader/webuploader.css')}}" />

	<link rel="stylesheet" type="text/css" href="{{asset('admin/layui-v2.4.3/layui/css/layui.css')}}" />

	@include('admin.public.error')
	<article class="page-container">
		<form   action="{{ route('admin.article.doadd')}}" method="post" enctype="multipart/form-data"  class="form form-horizontal" id="form-member-add">
			{{csrf_field()}}
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="{{ old('title')  }}" placeholder="" id="" name="title">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">文章作者：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="@if(old('author')) {{old('author')}} @else {{config('admin.pics.default_name')}} @endif" placeholder="" id="" name="author">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
				<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="type" class="select">
					<option value="0" @if(old('type')==0) selected @endif>全部类型</option>
					<option value="1" @if(old('type')==1) selected @endif>PHP</option>
					<option value="2" @if(old('type')==2) selected @endif>Laravel</option>
					<option value="3" @if(old('type')==3) selected @endif>ThinkPHP</option>
					<option value="4" @if(old('type')==4) selected @endif>JQuery</option>
					<option value="5" @if(old('type')==5) selected @endif>MYSQL</option>
				</select>
				</span> </div>
			</div>

			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">关键词：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="{{old('keywords')}}" placeholder="" id="" name="keywords">
				</div>
			</div>

			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<textarea name="miaoshu" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符"  >{{old('miaoshu')}}</textarea>
					<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
				</div>
			</div>



            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>封面：</label>
                <div class="formControls col-xs-4 col-sm-4">
                    <div id="filePicker2">文章图片</div>
                    <input type="hidden" value="@if(old('pic')) {{old('pic')}} @else {{ asset('admin/pic/php.jpg') }} @endif" name="pic" id="cover_img">
                </div>
                <div class="formControls col-xs-4 col-sm-4">
                    <img src="" style="width: 300px;" id="pic">
                </div>
            </div>



			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
				<div class=" col-xs-8 col-sm-9">
					<textarea id="www" name="content"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
				</div>
			</div>

			<input type="submit" value="提交" class="layui-btn layui-btn-warm" style="margin-left: 800px;margin-top: 20px">
		</form>
	</article>

@endsection

@section('js')
	<!--请在下方写此页面业务相关的脚本-->
	<script type="text/javascript" src="{{asset('admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/layui-v2.4.3/layui/layui.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/ueditor/ueditor.config.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/ueditor/ueditor.all.min.js')}}"></script>

    {{--pic--}}

    <script type="text/javascript" src="{{asset('admin/uploader/webuploader.js')}}"></script>

	<script type="text/javascript">

        var ue = UE.getEditor('www', {
            initialFrameHeight: 500
        });

            var uploader = WebUploader.create({
                auto:true,
                swf: "{{ asset('admin/uploader/Uploader.swf') }}",
                server: "{{route('admin.public.uppic')}}",
                pick: "#filePicker2",
                fileVal: 'pic',
                formData: {
                    _token: '{{csrf_token()}}',
                    node:'article',
                    defaultpic:'{{config('admin.pics.default_pic')}}'
                },
                accept: {
                    title: "Image",
                    extensions: "gif,jpg,jpeg,bmp,png",
                    mimeTypes: 'image/*'
                }
            });
            //上传进度
            uploader.on( 'uploadProgress', function( file, percentage ) {
                var $li = $( '#'+file.id ),
                    $percent = $li.find('.progress span');

                // 避免重复创建
                if ( !$percent.length ) {
                    $percent = $('<p class="progress"><span></span></p>')
                        .appendTo( $li )
                        .find('span');
                }
                $percent.css( 'width', percentage * 100 + '%' );
            });
            //上传成功
            uploader.on( 'uploadSuccess', function( file ,ret) {
                $('#pic').attr('src',ret.pic);
                $('#cover_img').val(ret.pic);

            });



	</script>
@endsection
<!--/请在上方写此页面业务相关的脚本-->












