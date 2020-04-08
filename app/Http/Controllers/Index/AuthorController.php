<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\AuthorModel;
class AuthorController extends Controller
{
    //作者专区
    public function index(){
        return view("/index/author/index");
    }
    //作者申请
    public function apply(){
        return view("/index/author/apply");
    }
    //作者添加
    public function doapply(Request $request){
        $data = $request->except("_token");
        $username = session("users.username");

        if($data['author_name'] != $username){
            echo "登录账号与申请账号不一致,正在为你跳转......";
            header("refresh:5,url=/author/apply");exit;
        }
        if(empty($data['author_nickname']) && empty($data['author_email']) && empty($data['author_card'])){
            echo "笔名和邮箱或身份证号不能为空,正在为你跳转......";
            header("refresh:5,url=/author/apply");exit;
        }
        if ($request->hasFile('author_img')) {
            $data['author_img'] = $this->upload("author_img","/images/author");
        }
        $usersInfo = UsersModel::where(["username"=>$data['author_name']])->first();
        if(!empty($usersInfo)){
            UsersModel::where(["username"=>$usersInfo['username']])->update(["status"=>1]);
            $res = AuthorModel::create($data);
            if($res){
                return redirect("/author");
            }
        }else{
            $res = AuthorModel::create($data);
            if($res){
                return redirect("/author/index");
            }
        }
    }
    //图片上传
    public function upload($fileName,$nameFile){
        if (request()->file($fileName)->isValid()) {
            $photo = request()->file($fileName);
            $code = rand(111111,999999);
            $img = $code.".jpg";
            $store_result = $photo->storeAs($nameFile,$img);
        }
        return $store_result;
    }
}
