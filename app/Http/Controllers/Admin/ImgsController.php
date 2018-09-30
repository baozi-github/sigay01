<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use SnappyImage;

class ImgsController extends Controller
{
    /**
	* 图片列表

    */
    public function index ()
    {
    	$data = [];
    	#return view('admin.imgs.index',compact('data'));
    	$pdf = PDF::loadView('admin.imgs.index', $data);
		return $pdf->download('invoice.pdf');
    }

}
