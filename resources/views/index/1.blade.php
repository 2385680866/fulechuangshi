/*****************************************************前台管理*************************************************/
Route::get('/',"Index\\IndexController@index");//首页
Route::get('/',"Index\\IndexController@index");//首页
Route::get('/index/detail/{id}',"Index\\IndexController@detail");//详情页
Route::get('/index/library',"Index\\IndexController@index");//原书库
Route::get('/index/search',"Index\\SearchController@index");//搜索
Route::get('/index/cate/{id}',"Index\\CategoryController@index");//分类详情
Route::get('/index/bang',"Index\\BangController@index");//排行榜
Route::get('/index/author',"Index\\AuthorController@index")->middleware("check.login");//作者专区


Route::get('/backend/login',"Backend\\LoginController@login");//后台登录

//阅读
