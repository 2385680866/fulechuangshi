<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateInfo = CategoryModel::get();
        return view("/backend/category/index",['cateInfo'=>$cateInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取分类信息
        $cateInfo = CategoryModel::get();
        return view("/backend/category/create",["cateInfo"=>$cateInfo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token");
        $data['cate_img'] = "/images/category/".$data['cate_img'];
        $res = CategoryModel::create($data);
        if($res){
            return redirect("/category/index");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取分类信息
        $cateInfo = CategoryModel::get();
        //根据id获取一条数据
        $info = CategoryModel::where(['cate_id'=>$id])->first();
        return view("/backend/category/edit",[
            "cateInfo"=>$cateInfo,
            "info"=>$info
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except("_token");
        $data['cate_img'] = "/images/category/".$data['cate_img'];
        $res = CategoryModel::where(['cate_id'=>$id])->update($data);
        if($res){
            return redirect("/category/index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删词一条数据
        $res = CategoryModel::destroy($id);
        if($res){
            return redirect("/category/index");
        }
    }
    //唯一性验证
    public function cateName(Request $request)
    {
        $cate_id=$request->cate_id;
        $cate_name=$request->cate_name;
        if(empty($cate_id)){
            $where=['cate_name'=>$cate_name];
        }else{
            $where=[['cate_name',"=",$cate_name],["cate_id","<>",$cate_id]];
        }
        $count = CategoryModel::where($where)->count();
        if($count>=1){
            return 1;
        }else{
            return 0;
        }
    }
}
