@extends('app-front')
@section('content')
<div id="productdetail" class="detail row">
	<div class="passage-wrap row">
	 <div class="product-section">

		<div class="product-description col-md-5">
			<div class="title1">Backpack</div>
			<div class="title2">Stroller</div>
			<div class="summary">The Backpack Stroller is light and compact enough to fold neatly into its own comfortable backpack. In fact most airlines find it very cabin-friendly. How travel savvy is that?</div>
			<div class="list">
				<ul>
					<li>Weighs less than 5Kg</li>
					<li>No assembly required</li>
					<li>Easy to fold</li>
					<li>Suitable from 6 months</li>
					<li>Padded seat and foot rest</li>
				</ul>
			</div>
		</div>
		<div class="product-image col-md-3">
		<img src="/img/Backpack Stroller Geometric Red and Grey.jpg" class="img-responsive color-image1">
		<img src="/img/Backpack Stroller Black with Lime Accent.jpg" class="img-responsive color-image2">
		</div>
		<div class="product-rightside col-md-4">
		 <div class="product-tranbox col-md-12">
			<div class="product-side1 col-md-12">
			$199.99 AUD</div>
			<div class="product-colors col-md-12">
			<div class="radio">
				<label>
					<input type="radio" name="ColorRadios1" id="color-button1" value="QBPS10202" checked>
					<img src="/img/Geometric-red-grey21.png">
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="ColorRadios1" id="color-button2" value="QBPS10200">
					<img src="/img/Black with Lime Accent.png">
				</label>
			</div>
			</div>
			<div class="product-actionbuttons hidden-print col-md-12">
			<a class="btn btn-success print-button"  href="#" role="button" href="#"><i class="fa fa-print fa-2x"></i></a>

			</div>
		 </div>
		 <div class="product-viewbuttons nopadding hide-fold hidden-print col-md-12">
			<ul>
				<li><a a class="allView">View All</a></li>
				<li><a class="zoom-image" href="/img/Backpack Stroller Black with Lime Accent.jpg">Zoom</a></li>
				<!--<li><a src="#">Fold</a></li>-->
			</ul>
		 </div>
		</div>
	 </div>
	 <div class="nopadding product-images hidden-print col-md-12">
		<a class="group1" href="/img/3629x5443-bp-stroller-walking.jpg" title=""><img class="p-img img-thumbnail" src="/img/3629x5443-bp-stroller-walking.jpg"></a>
		<a class="group1" href="/img/THIS-FITS-IN-HERE.jpg" title=""><img class="p-img img-thumbnail" src="/img/THIS-FITS-IN-HERE.jpg"></a>
		<a class="group1" href="/img/Backpack Stroller Geometric Red and Grey.jpg" title=""><img class="p-img img-thumbnail" src="/img/Backpack Stroller Geometric Red and Grey.jpg"></a>
		<a class="group1" href="/img/backpack stroller in cabin.jpg" title=""><img class="p-img img-thumbnail" src="/img/backpack stroller in cabin.jpg"></a>
		<a class="group1" href="/img/backpack_07[1].jpg" title=""><img class="p-img img-thumbnail" src="/img/backpack_07[1].jpg"></a>

		<a class='youtube' href="http://www.youtube.com/embed/ph3KYjio7kw?rel=0&amp;wmode=transparent"><img class="p-img img-thumbnail" src="/img/eb-v2.jpg"></a>
		<a class='youtube' href="http://www.youtube.com/embed/tYI2kQmRAfY?rel=0&amp;wmode=transparent"><img class="p-img img-thumbnail" src="/img/eb-v5.jpg"></a>
	 </div>
	 <div class="hidden-print col-md-4"><img class="img-responsive col-md-offset-2 col-md-8" src="/img/Silver-Back-Pack-Stroller-AWard.jpg">
	 <!--<p>I get so many jealous looks in the carpark when I open my stroller with one hand, and little Issy in my other arm. She loves it too which makes my life easier.</p><h3>Karinne Mcneill</h3>-->
	 </div>

<div class="productInfo">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
    <li role="presentation"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="features">
		<img class="img-responsive" src="/img/backpack stroller features page 923x373.jpg">
	</div>
    <div role="tabpanel" class="tab-pane" id="specifications">
	<ul>
			<li>Weighs less than 5kg!</li><li>
Suitable from 6 months</li><li>
Folds in 4 easy steps into a backpack for ease of storage and transportation</li><li>
No assembly required</li><li>
5 point harness and canopy</li><li>
Padded seat and foot rest</li><li>
Stylish wheels</li><li>
Shopping basket</li><li>
Carry bag with shoulder pads included</li><li>
Dual Wheels, with a swivel front wheel</li><li>
One brake lever – operating both wheels</li><li>
Elasticized back pocket</li><li>
Padded backpack with mesh side storage pockets for bottles, nappies, keys etc</li><li>
Suitable for children from 6 months up to 20kg/44lbs</li><li>
New Quicksmart Buckle– the first buckle designed to comply with Australian Standard AS/NZS 2088: 2009</li><li>
Ideal for airline travel</li><li>Compliant with AS/NZS 2088: 2009</li>
		</ul>
	</div>
  </div>

	</div>
</div>

</div>
@endsection
