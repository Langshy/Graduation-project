<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function home(){
        return view('Index/static_pages/home');
    }

    public function home1(){
        return view('Index/static_pages/home1');
    }
}
