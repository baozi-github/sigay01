<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




# 后台页面路由

#登陆页面
Route::get('login','Admin\LoginController@login')->name('admin.login.login');

#登陆提交
Route::post('admin/login/dologin','Admin\LoginController@dologin')->name('admin.login.dologin');

#首页
Route::get('admin/index','Admin\IndexController@index')->name('admin.index.index')->middleware('users');

#文章列表也
Route::group(['middleware'=>'users','prefix'=>'admin/article','namespace'=>'Admin'],function(){
    Route::get('index','ArticleController@index')->name('admin.article.index');
    Route::get('create','ArticleController@create')->name('admin.article.create');
    Route::post('doadd','ArticleController@doadd')->name('admin.article.doadd');
    //点击标题查看路由
    Route::get('doLook/{id}','ArticleController@doLook')->name('admin.article.doLook');
});

#文章上传路由
Route::post('admin/public/uppic','Admin\PublicController@uppic')->name('admin.public.uppic');