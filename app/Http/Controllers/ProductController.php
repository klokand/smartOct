<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller {

	public function moves($name){
		if($name=="Safeguard Newborn Stroller"){
			return view('productDetail-safe')->with('name',$name);
		}else if($name =="Backpack Stroller"){
			return view('productDetail-back')->with('name',$name);
		}else if($name == "Easyfold Stroller"){
			return view('productDetail-easy')->with('name',$name);
		}else if($name == "Accessory-Comfort Pack"){
			return view('productDetail-easyPack')->with('name',$name);
		}else if($name == "Accessory-Footmuff"){
			return view('productDetail-footmuff')->with('name',$name);
		}else if($name == "Accessory-Caddy"){
			return view('productDetail-caddy')->with('name',$name);
		}else if($name == "Accessory-Boot-Cover"){
			return view('productDetail-boot-cover')->with('name',$name);
		}else if($name == "Accessory-Weather-Shield"){
			return view('productDetail-weather-shield')->with('name',$name);
		}else{
			abort(404);
		}

		//return view('productDetail')->with('name',$name);
	}
	public function relaxs($name){
		if($name == "Easyfold Travel Cot"){
			return view('productDetail-cot')->with('name',$name);
		}else{
			abort(404);
		}
	
		//return view('productDetail')->with('name',$name);
	}


}
