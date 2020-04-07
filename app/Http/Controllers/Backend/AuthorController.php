<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthorModel;
use App\Models\UsersModel;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorInfo = AuthorModel::get();
        return view("/backend/author/index",[
            "authorInfo"=>$authorInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/backend/author/create");
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
        
        if(empty($data['author_name'])){
            dd("作者名称不能为空");
        }
        if ($request->hasFile('author_img')) {
            $data['author_img'] = $this->upload("author_img","/images/author");
        }
        $usersInfo = UsersModel::where(["username"=>$data['author_name']])->first();
        if(!empty($usersInfo)){
            UsersModel::where(["username"=>$usersInfo['username']])->update(["status"=>1]);
            $res = AuthorModel::create($data);
            if($res){
                return redirect("/index/author");
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("/backend/author/show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("/backend/author/edit");
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
        if(empty($data['author_name'])){
            dd("作者名称不能为空");
        }
        if ($request->hasFile('author_img')) {
            $data['author_img'] = $this->upload("author_img","/images/author");
        }
        $res = AuthorModel::where(["author_id"=>$id])->update($data);
        if($res){
            return redirect("/author/index");
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
        //
    }
}
