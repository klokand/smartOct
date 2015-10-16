<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

		public function index()
	{
		return view('index');
	}
	
		public function contactUs()
	{
		return view('contactUs');
	}
		public function watchUs(){
		return view('watchUs');
	}
		public function aboutUs(){
		return view('aboutUs');
	}

}
