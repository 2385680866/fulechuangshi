<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
            return $next($request);
        }else{
            return redirect("/login");
        }
        
    }
}
