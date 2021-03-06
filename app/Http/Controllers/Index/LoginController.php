<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use QRcode;
class LoginController extends Controller
{
    //登录页
    public function login(){
        // $filename = $this->qrcode();
        return view("/index/login/login",["path"=>"/index/picture/code02.png"]);
    }
    //登录
    public function loginDo(Request $request){
        $data = $request->except("_token");
        $info = UsersModel::where(["username"=>$data['username']])->first();
        if(!empty($info)){
            if($info['password'] == md5($data['password'])){
                session(['users'=>$info]);
                return redirect("/");
            }else{
                echo "账户密码不正确";
                header("refresh:5,url=/login");exit;
            }
        }else{
            echo "账户密码不正确";
            header("refresh:5,url=/login");exit;
        }
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
            session(['users'=>$data]);
            return redirect("/");
        }else{
            return redirect("/reg");
        }
    }
    //获取验证码
    public function getCode(Request $request){
        $username = $request->username;
        $code = rand(100000,999999);
        session(["code"=>$code]);
        // $host = "http://yzxyzm.market.alicloudapi.com";
        // $path = "/yzx/verifySms";
        // $method = "POST";
        // $headers = array();
        // array_push($headers,"Authorization:APPCODE " . env('telcode'));
        // $querys = "phone=".$username."&templateId=TP18040314&variable=code:".$code;
        // $bodys = "";
        // $url = $host . $path . "?" . $querys;

        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_CUSTOMREQUEST,$method);
        // curl_setopt($curl, CURLOPT_URL,$url);
        // curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
        // curl_setopt($curl, CURLOPT_FAILONERROR,false);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        // curl_setopt($curl, CURLOPT_HEADER,true);
        // if(1 == strpos("$".$host,"http://"))
        // {
        //     curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        //     curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
        // }
        // $re = curl_exec($curl);
        // $recode = json_decode($re);
        // if($recode['return_code']=='00000'){
        //     return "发送成功";
        // }else{
        //     return "发送失败";
        // }
        return $code;
    }
    //生成二维码图片
    public function qrcode(){
        include public_path('Tools/phpqrcode.php');
        $obj = new QRcode();
        //生成一个唯一标识 识别用户身份
        $uid = uniqid();
        $filename = $uid . ".png";
        $url = "http://".$_SERVER["HTTP_HOST"]."?uid=".$uid;
        $obj->png($url,$filename);
        return $filename;
    }
    //退出
    public function quit(Request $request){
        $res = $request->session()->forget("users");
        if($res == null){
            return redirect("/");
        }
        
    }

}
