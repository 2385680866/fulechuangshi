<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersModel;
class LoginController extends Controller
{
    //登录页
    public function login(){
        return view("/index/login/login");
    }
    //登录
    public function loginDo(Request $request){
        $data = $request->except("_token");
        $info = UsersModel::where(["username"=>$data['username']])->first();
        if(!empty($info)){
            if($info['password'] == md5($data['password'])){
                session(['login'=>$info]);
                return redirect("/");
            }else{
                echo "账户密码不正确";
                header("refresh:5,url=/login");exit;
            }
        }else{
            echo "账户密码不正确";
            header("refresh:5,url=/login");exit;
        }
        dd($data);
  
    }
    //注册页
    public function reg(){
        return view("/index/login/reg");
    }
    //注册
    public function regDo(Request $request){
        $code = session("code");
        $data = $request->except("_token");
        if(empty($data['username'])){
            echo "手机号不能为空";
            header("refresh:5,url=/reg");exit;
        }
        if(empty($data['password'])){
            echo "密码不能为空";
            header("refresh:5,url=/reg");exit;
        }
        if($data['code']!=$code){
            echo "验证码不正确";
            header("refresh:5,url=/reg");exit;
        }
        $data['password']=md5($data['password']);
        unset($data['code']);
        $res = UsersModel::create($data);
        if($res){
            return redirect("/login");
        }else{
            return redirect("/reg");
        }
    }
    //获取验证码
    public function getCode(Request $request){
        $username = $request->username;
        $code = rand(100000,999999);
        session(["code"=>$code]);
        return $code;
    }

}
