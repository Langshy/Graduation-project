<?php

namespace App\Http\Controllers\Index;

use App\Model\tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Index\webSet;

class IndexController extends Controller
{
    //
    public function home(){

        //获取网站设置
        $webSet = webSet::first();

        //获取主标签
        $tags = tag::get()->where('tag_showIndex',true)->take(6);

        return view('Index/static_pages/home',compact('webSet','tags'));
    }

}
