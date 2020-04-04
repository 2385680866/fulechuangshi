<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ReadModel;
class IndexController extends Controller
{
    //首页
    public function index()
    {       
        //获取分类信息
        $cateInfo = CategoryModel::where(['parend_id'=>0])->get();
        return view("/index/index",[
            'cateInfo'=>$cateInfo
        ]);
        return view("/index/index");
    }
    //搜索页面
    public function detail($id)
    {
        $readFind = ReadModel::join("category","read.cate_id","=","category.cate_id")
                    ->where(['read_id'=>$id])->first();
        //获取上一级信息
        $readcate = $this->toplevel($readFind);
        $readcate['level2']= $readFind['read_name'];
        return view("/index/detail",[
            'readcate'=>$readcate,
            'readFind'=>$readFind
        ]);
    }
    //原书库
    public function library()
    {
        return view("/index/library");
    }
    //搜索页面
    public function search()
    {
        return view("/index/search");
    }
    //获取顶级分类
    public function toplevel($cateInfo){
        $arr=[];
        $cateInfo= CategoryModel::where("cate_id",$cateInfo['cate_id'])->first();
        $cateInfo1= CategoryModel::where("cate_id",$cateInfo['parend_id'])->first();
        $arr['level0']=$cateInfo1['cate_name'];
        $arr["level1"]=$cateInfo['cate_name'];
        return $arr;
    }
      
}
