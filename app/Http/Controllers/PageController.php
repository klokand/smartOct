<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use DB;
use URL;

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
		return view('contactus');
	}
		public function watchUs(){
		return view('watchUs');
	}
		public function aboutUs(){
		return view('aboutus');
	}
		public function privacyPolicy(){
		return view('privacyPolicy');
		}
		
		public function search(){
			$q = Input::get('searchWord');
			$searchTerms = explode(' ', $q);
			$query = DB::table('searchIndex');
			foreach($searchTerms as $term)
				{
				$query->where('description', 'LIKE', '%'. $term .'%');
				}
				$results = $query->get();
				$result_number = $query->count();
				$resultCode = "<ul>";
				foreach($results as $result){
					$link = URL::to('/')."/".$result->type."/".$result->url;
					$resultCode = $resultCode."<li class='result-item'><a href='".$link."'><h3>".$result->url."</h3><p>".$result->description."</p></a></li>";
				}
				$resultCode = $resultCode."</ul>";
				return view('searchWithResult')->with(compact("resultCode","result_number"));
			}

}
