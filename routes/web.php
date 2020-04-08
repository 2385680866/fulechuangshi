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
Route::get('/quit',"Index\\LoginController@quit");//退出
//登录
Route::prefix('login')->group(function () {
    Route::get('/',"Index\\LoginController@login");//登录页
    Route::post('/',"Index\\LoginController@loginDo");//登录
});
Route::get('/qrcode',"Index\\LoginController@qrcode");//生成二维码图片
Route::get('/getCode',"Index\\LoginController@getCode");//获取验证码
//注册
Route::prefix('reg')->group(function () {
    Route::get('/',"Index\\LoginController@reg");//注册页
    Route::post('/',"Index\\LoginController@regDo");//注册
});

Route::prefix('/index')->group(function () {
    Route::get('/detail/{id}',"Index\\IndexController@detail");//详情页
    Route::get('/library',"Index\\IndexController@index");//原书库
    Route::get('/search',"Index\\SearchController@index");//搜索
    Route::get('/cate/{id}',"Index\\CategoryController@index");//分类详情
    Route::get('/bang',"Index\\BangController@index");//排行榜
    Route::get('/cateindex',"Index\\CategoryController@cateindex");//顶级分类详情
});
Route::prefix('/author')->group(function () {
    Route::get('/',"Index\\AuthorController@index")->middleware("check.author");//作者专区
    Route::get('/apply',"Index\\AuthorController@apply")->middleware("check.login");//作者申请
    Route::post('/doapply',"Index\\AuthorController@doapply")->middleware("check.login");//作者申请

});




/*****************************************************后台管理*************************************************/

//后台登录
Route::prefix('/admin')->group(function () {
    Route::get('/login',"Backend\\LoginController@login");//后台登录页
    Route::post('/login',"Backend\\LoginController@loginDo");//后台登录

    Route::get('/reg',"Backend\\LoginController@reg");//后台注册页
    Route::post('/reg',"Backend\\LoginController@regDo");//后台注册
});
//中间件
Route::middleware("check.admin")->group(function () {
    //首页
    Route::get('/admin',"Backend\\IndexController@index")->middleware("check.admin");//首页
    //图书管理
    Route::prefix('/read')->group(function () {
        Route::get('/index',"Backend\ReadController@index");//首页
        Route::get('/create',"Backend\\ReadController@create");//添加页
        Route::post('/store',"Backend\\ReadController@store");//添加执行
        Route::get('/edit/{id}',"Backend\\ReadController@edit");//修改页
        Route::post('/update/{id}',"Backend\\ReadController@update");//修改执行
        Route::get('/show',"Backend\\ReadController@show");//详情
        Route::get('/destroy/{id}',"Backend\\ReadController@destroy");//删除
        Route::get('/readName',"Backend\\ReadController@readName");//唯一验证
    });
    //分类管理
    Route::prefix('/category')->group(function () {
        Route::get('/index',"Backend\\CategoryController@index");//首页
        Route::get('/create',"Backend\\CategoryController@create");//添加页
        Route::post('/store',"Backend\\CategoryController@store");//添加执行
        Route::get('/edit/{id}',"Backend\\CategoryController@edit");//修改页
        Route::post('/update/{id}',"Backend\\CategoryController@update");//修改执行
        Route::get('/destroy/{id}',"Backend\\CategoryController@destroy");//删除
        Route::get('/cateName',"Backend\\CategoryController@cateName");//唯一验证
    });
    //作家管理
    Route::prefix('/author')->group(function () {
        Route::get('/index',"Backend\\AuthorController@index");//首页
        Route::get('/create',"Backend\\AuthorController@create");//添加页
        Route::post('/store',"Backend\\AuthorController@store");//添加执行
        Route::get('/edit/{id}',"Backend\\AuthorController@edit");//修改页
        Route::post('/update/{id}',"Backend\\AuthorController@update");//修改执行
        Route::get('/destroy/{id}',"Backend\\AuthorController@destroy");//删除
        Route::get('/authorName',"Backend\\AuthorController@authorName");//唯一验证
    });
    //链接管理
    Route::prefix('/link')->group(function () {
        Route::get('/index',"Backend\\LinkController@index");//首页
        Route::get('/create',"Backend\\LinkController@create");//添加页
        Route::post('/store',"Backend\\LinkController@store");//添加执行
        Route::get('/edit/{id}',"Backend\\LinkController@edit");//修改页
        Route::post('/update/{id}',"Backend\\LinkController@update");//修改执行
        Route::get('/destroy',"Backend\\LinkController@destroy");//删除
        Route::get('/linkName',"Backend\\LinkController@linkName");//唯一验证
    });
    //作品标签管理
    Route::prefix('/label')->group(function () { 
        Route::get('/index',"Backend\\LabelController@index");//首页
        Route::get('/create',"Backend\\LabelController@create");//添加页
        Route::post('/store',"Backend\\LabelController@store");//添加执行
        Route::get('/edit/{id}',"Backend\\LabelController@edit");//修改页
        Route::post('/update/{id}',"Backend\\LabelController@update");//修改执行
        Route::get('/show',"Backend\\LabelController@show");//详情
        Route::get('/destroy',"Backend\\LabelController@destroy");//删除
        Route::get('/labelName',"Backend\\LabelController@labelName");//唯一验证
    });
});
