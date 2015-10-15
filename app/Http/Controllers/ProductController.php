<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller {

	public function moves($name){
		return view('productDetail')->with('name',$name);
	}
	public function relaxs($name){
		return view('productDetail')->with('name',$name);
	}


}
