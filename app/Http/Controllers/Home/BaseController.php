<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Support\Facades\Redis;

class BaseController extends Controller
{
    //获取分类
    protected function get_type(){
        //获取分类信息  并设置缓存 并获取 文章条数  吧信息和条数组成一个数组
        //直接查文章  以文章类型分类 获取条数
        //然后判断 如果 类型没有文章  则需要重新 处理  (显示  则判断  不显示 则不处理) types

        if(!Redis::exists('types')  ){
            $types = Type::all();
            Redis::set('types',$types);
            //设置一小时的有效期
            Redis::set('types_time',time());
            echo '123';
        }
        $value = Redis::get('types');
        echo ($value);


    }
    //获取相关 相同标签下 的前五条
    protected function get_about(){

    }

    //获取推荐  前五条信息

    //获取标签

    //获取图片

    //
}
