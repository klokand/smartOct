@extends('app-front')
@section('content')
@include('partial.slider')
<div id="buttons-section" class="row">
<div class="col-md-4">
	<a href="/component/tienda/manufacturers/products?layout=products"><img alt="free-shipping" src="/img/free-shipping.png" class="img-responsive" ></a>
</div>
<div class="col-md-4"><a href="/awards"><img src="/img/drtoytile.png" alt="drtoytile" class="img-responsive"></a></div>
<div class="col-md-4"><a target="_blank" href="http://www.facebook.com/QuickSmartGo"><img class="img-responsive" alt="Connect with us on Facebook" src="/img/connect-facebook.png"></a></div>
</div>
<div id="video-action">
	<h2>View the QuickSmart products in action</h2>
	<div class="col-md-3">
	<a class='youtube' href="http://www.youtube.com/embed/LuV_nQnaDDk?rel=0&amp;wmode=transparent"><img src="/img/easyfold-stroller-video.png"></a><p>Easy Fold Stroller</p>
	</div>
	<div class="col-md-3">
	<a class='youtube' href="http://www.youtube.com/embed/2-1U7ZbvFZc?rel=0&amp;wmode=transparent"><img src="/img/backpack-stroller-video.png"></a><p>Backpack Stroller</p>
	</div>
	<div class="col-md-3">
	<a class='youtube' href="http://www.youtube.com/embed/Z7KZcI-okPQ?rel=0&amp;wmode=transparent"><img src="/img/travel-cot-video.png"></a><p>3 in 1 Travel Cot</p>
	</div>
	<div class="col-md-3">
	<a href="#"><img src="/img/easyfold-stroller-video.png"></a><p>Safe Guard Stroller</p>
	</div>
</div>
<div id="products">
<h2>Product Range</h2>
	<div class="col-md-2">
	<a href="#"><img class="img-responsive" src="/img/Geometric Red-t.jpg"></a>
	</div>
	<div class="col-md-2">
	<a href="#"><img class="img-responsive" src="/img/Black-t.jpg"></a>
	</div>
	<div class="col-md-2">
	<a href="#"><img class="img-responsive" src="/img/award grey EFS-t.jpg"></a>
	</div>
	<div class="col-md-2">
	<a href="#"><img class="img-responsive" src="/img/award red EFS-t.jpg"></a>
	</div>
	<div class="col-md-2">
	<a href="#"><img class="img-responsive" src="/img/award travel cot-t.jpg"></a>
	</div>
</div>
@endsection