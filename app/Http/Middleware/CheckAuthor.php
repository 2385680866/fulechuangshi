<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\UsersModel;
class CheckAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断用户有没有登录
        if($request->session()->has("users")){
            //判断用户是不是作者
            $author = session("users");
            $authorInfo=UsersModel::where("username",$author['username'])->first();
            if($authorInfo['status'] == 1){
                return $next($request);
            }else{
                return redirect("/index/authorapply");
            } 
        }else{
            dd(2345);
            return redirect("/login");
        }
        
    }
}
