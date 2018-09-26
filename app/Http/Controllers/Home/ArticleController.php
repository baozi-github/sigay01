<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
       return view("home.article.index");
    }

    public function info(){
        return view("home.article.info");
    }
}
