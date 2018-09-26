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


    //接口测试 获取节假日
    public function test(){
        $t = date('ymd');
        $url = "http://api.goseek.cn/Tools/holiday?date=".$t;
        $d = file_get_contents($url); //获取值  结果为字符串
        #file_put_contents('1.txt',$url); 直接将链接保存了下来  而不是页面的输出结果
        dump($d);
        $d = json_decode($d);  //将字符串 转成对象
        dump($d);
        $d = get_object_vars($d); //将对象转成 数组
        echo gettype($d);
        dump($d);
        echo $t;
    }
}















