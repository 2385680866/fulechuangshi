<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
