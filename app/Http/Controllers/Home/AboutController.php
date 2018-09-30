<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends BaseController
{
    public function index(){
        return view('home.about.index');
    }
}
