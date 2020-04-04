<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*****************************************************前台管理*************************************************/
Route::get('/',"Index\\IndexController@index");//首页
Route::get('/index/detail/{id}',"Index\\IndexController@detail");//详情页
Route::get('/index/library',"Index\\IndexController@index");//原书库
Route::get('/index/search',"Index\\SearchController@index");//搜索
Route::get('/index/cate/{id}',"Index\\CategoryController@index");//分类详情
Route::get('/index/bang',"Index\\BangController@index");//排行榜
Route::get('/index/author',"Index\\AuthorController@index")->middleware("check.login");//作者专区
Route::get('/index/cateindex',"Index\\CategoryController@cateindex");//顶级分类详情
Route::get('/backend/login',"Backend\\LoginController@login");//后台登录

/*****************************************************后台管理*************************************************/

Route::get('/admin',"Backend\\IndexController@index");//首页
// //图书管理
Route::get('/read/index',"Backend\ReadController@index");//首页
Route::get('/read/create',"Backend\\ReadController@create");//添加页
Route::post('/read/store',"Backend\\ReadController@store");//添加执行
Route::get('/read/edit/{id}',"Backend\\ReadController@edit");//修改页
Route::post('/read/update/{id}',"Backend\\ReadController@update");//修改执行
Route::get('/read/show',"Backend\\ReadController@show");//详情
Route::get('/read/destroy/{id}',"Backend\\ReadController@destroy");//删除
//分类管理
Route::get('/category/index',"Backend\\CategoryController@index");//首页
Route::get('/category/create',"Backend\\CategoryController@create");//添加页
Route::post('/category/store',"Backend\\CategoryController@store");//添加执行
Route::get('/category/edit/{id}',"Backend\\CategoryController@edit");//修改页
Route::post('/category/update/{id}',"Backend\\CategoryController@update");//修改执行
Route::get('/category/destroy/{id}',"Backend\\CategoryController@destroy");//删除
Route::get('/category/cateName',"Backend\\CategoryController@cateName");//唯一验证
//作者管理
Route::get('/author/index',"Backend\\AuthorController@index");//首页
Route::get('/author/create',"Backend\\AuthorController@create");//添加页
Route::post('/author/store',"Backend\\AuthorController@store");//添加执行
Route::get('/author/edit/{id}',"Backend\\AuthorController@edit");//修改页
Route::post('/author/update',"Backend\\AuthorController@update");//修改执行
Route::get('/author/destroy',"Backend\\AuthorController@destroy");//删除
Route::get('/author/authorName',"Backend\\AuthorController@authorName");//唯一验证
//链接管理
Route::get('/link/index',"Backend\\LinkController@index");//首页
Route::get('/link/create',"Backend\\LinkController@create");//添加页
Route::post('/link/store',"Backend\\LinkController@store");//添加执行
Route::get('/link/edit/{id}',"Backend\\LinkController@edit");//修改页
Route::post('/link/update/{id}',"Backend\\LinkController@update");//修改执行
Route::get('/link/destroy',"Backend\\LinkController@destroy");//删除
Route::get('/link/linkName',"Backend\\LinkController@linkName");//唯一验证
//作品标签
Route::get('/label/index',"Backend\\LabelController@index");//首页
Route::get('/label/create',"Backend\\LabelController@create");//添加页
Route::post('/label/store',"Backend\\LabelController@store");//添加执行
Route::get('/label/edit/{id}',"Backend\\LabelController@edit");//修改页
Route::post('/label/update/{id}',"Backend\\LabelController@update");//修改执行
Route::get('/label/show',"Backend\\LabelController@show");//详情
Route::get('/label/destroy',"Backend\\LabelController@destroy");//删除
Route::get('/label/labelName',"Backend\\LabelController@labelName");//唯一验证