<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\AuthorModel;
use App\Models\ReadModel;
use App\Models\CategoryModel;
use App\Models\LabelModel;
class AuthorController extends Controller
{
    //作者专区
    public function index(){
        //获取用户登录信息
        $userinfo = session("users");
        //根据用户名称查询作家信息
        $authorInfo = AuthorModel::where(['author_name'=>$userinfo['username']])->first();
        session("author_id",$authorInfo['author_id']);
        return view("/index/author/index",['authorInfo'=>$authorInfo]);
    }
    //作者申请页
    public function apply(){
        return view("/index/author/apply");
    }
    //作家申请
    public function doapply(Request $request){
        //获取作家信息
        $data = $request->except("_token");
        //获取登录用户信息
        $username = session("users.username");
        if($data['author_name'] != $username){
            echo "登录账号与申请账号不一致,正在为你跳转......";
            header("refresh:5,url=/author/apply");exit;
        }
        if(empty($data['author_nickname']) && empty($data['author_email']) && empty($data['author_card'])){
            echo "笔名和邮箱或身份证号不能为空,正在为你跳转......";
            header("refresh:5,url=/author/apply");exit;
        }
        //生成图片路径
        if ($request->hasFile('author_img')) {
            $data['author_img'] = $this->upload("author_img","/images/author");
        }
        $res = AuthorModel::create($data);
        if($res){
            session(["author"=>$data]);
            echo "正在审核,正在为你跳转首页......";
            header("refresh:5,url=/");exit;
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
    //作家列表
    public function list(){
        //获取用户登录信息
        $userinfo = session("users");
        //根据用户名称查询作家信息
        $authorInfo = AuthorModel::where(['author_name'=>$userinfo['username']])->first();
        //通过作家ID查询作家的作品
        $readInfo = ReadModel::where(['author_id'=>$authorInfo['author_id']])->get();
        //查询作家作品数量
        return view("/index/author/list",[
            'readInfo'=>$readInfo, 
            'authorInfo'=>$authorInfo
        ]);
    }
    //添加新书
    public function new(){
        $userinfo = session("users");
        //根据用户名称查询作家信息
        $authorInfo = AuthorModel::where(['author_name'=>$userinfo['username']])->first();
        //获取分类数据
        $cateInfo = CategoryModel::get();
        $cateInfo = $this->getTree($cateInfo);
        //获取标签数据
        $labelInfo = LabelModel::get();
        return view("/index/author/new",[
            'cateInfo'=>$cateInfo,
            'authorInfo'=>$authorInfo,
            "labelInfo"=>$labelInfo
        ]);
    }
    public function getTree($cateInfo,$parend_id=0,$level=0)
    {
        static $list = [];
        foreach ($cateInfo as $key => $value) {
            if( $value['parend_id'] == $parend_id )
            {
                $value['level'] = $level;
                $list[]=$value;
                unset($cateInfo[$key]);
               $this->getTree( $cateInfo, $value['cate_id'],$level+1);
            }
        }
        return $list;
    }
    //添加新书
    public function newdo(Request $request){
        
        $data = $request->except("_token");
        if(!empty($data['label_id'])){
            $data['label_id']=implode($data['label_id'],",");
        }
        if ($request->hasFile('read_img')) {
            $data['read_img'] = $this->upload("read_img","/images/read");
        }
        if ($request->hasFile('home_img')) {
            $data['home_img'] = $this->upload("home_img","/images/read");
        }
        $res = ReadModel::create($data);
        if($res){
            return redirect("/read/index");
        }
    }
}
