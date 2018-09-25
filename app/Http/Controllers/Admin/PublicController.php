<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function uppic(Request $request){
        $pic = $request->get('defaultpic',config('admin.pics'));
        $nodename = $request->get('node','article');
        //判断是否上传图片
        if($request->hasFile('pic')){
            $t = date('ymd',time());
            $ret = $request->file('pic')->store($nodename.'/'.$t,'upload');
            $pic = '/uploads/'.$ret;
        }

        return ['pic'=>$pic];
    }
}
