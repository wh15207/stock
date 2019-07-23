<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    //
    public function home(){
        return "首页";
    }

    public function help(){
        return "帮助";
    }

    public function about(){
        return "关于我们";
    }
}
