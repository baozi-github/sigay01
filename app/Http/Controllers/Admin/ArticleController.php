<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Articles;

class ArticleController extends Controller
{
    //列表展示
    public function index(){
        $data = Articles::all();

        return view('admin.article.index',compact('data'));
    }
    //添加页面
    public function create(){
        return view('admin.article.create');
    }
    //执行添加
    public function doadd(Request $request){
        //表单验证
        $this->validate($request,[
            'title' => 'required',
            'author' => 'required',
            'type' => 'required',
            'keywords' => 'required|max:60',
            'miaoshu'  => 'required|max:600',
            'pic' => 'required',
            'content' => 'required'
        ]);
       $data = $request->except('_token');
      //添加数据库
        Articles::create($request->except('_token'));
        return redirect()->route('admin.index.index');
    }
    //后台点击标题查看
    public function doLook($id){
        $data = Articles::all()->where('id',$id);
        dump($data);
    }
}
