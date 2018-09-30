<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Articles;

class ArticleController extends BaseController
{
    public function index(){
        $this->get_type();
        die();
        $data = Articles::all();
       return view("home.article.index",compact('data'));
    }

    public function info(){
        return view("home.article.info");
    }
}
