<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tests;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login.login');
    }

    public function dologin(Request $request){
        $rules = [
            'username' => 'required',
            'password' => 'required',
            'captcha' => 'bail|required|captcha'
        ];
        $message = [
            'username.required' => '请填写用户名',
            'password.required' => '请写密码',
            'captcha.required'  => '请填写验证码',
            'captcha.captcha'   => '验证码错误'
        ];
        $this->validate($request,$rules,$message);

       $username = $request->get('username');
       $password = $request->get('password');

       $data = Tests::where('username',$username)->where('password',$password)->get()->toArray();
       if($data){
           session(['user'=>$data]);
           echo '欢迎登陆' ;
          # dump(session('user'));
           #sleep(3);
           return redirect()->route('admin.index.index');
       }else{
           echo '密码或用户名错误';
       }

    }
}
