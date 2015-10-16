@extends('app-front')
@section('content')
<div id="productdetail" class="detail row">
	<div class="passage-wrap row">
	 <div class="product-section">
	
		<div class="product-description col-md-5">
			<div class="title1">Backpack</div>
			<div class="title2">Stroller</div>
			<div class="summary">The QuickSmart Backpack Stroller is loight and compact enough to fold neatly into its own comfortable backpack. In fact most airlines find it very cabin-friendly. How travel savvy is that?</div>
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
		<img src="/img/quicksmart-2797_comforter_lr.png" class="img-responsive">
		</div>
		<div class="product-rightside col-md-4">
		 <div class="product-tranbox col-md-12">
			<div class="product-side1 col-md-12">
			$199.99 AUD</div>
			<div class="product-colors col-md-12">
			<div class="radio">
				<label>
					<input type="radio" name="ColorRadios1" id="ColorRadios1" value="QBPS10202">
					<img src="/img/Geometric-red-grey21.png">
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="ColorRadios1" id="ColorRadios1" value="QBPS10200">
					<img src="/img/Black with Lime Accent.png">
				</label>
			</div>
			</div>
			<div class="product-actionbuttons hidden-print col-md-12">
			<a class="btn btn-success print-button"  href="#" role="button" href="#"><i class="fa fa-print fa-2x"></i></a>

			</div>
		 </div>
		 <div class="product-viewbuttons nopadding hidden-print col-md-12">
			<ul>
				<li><a src="#">360 View</a></li>
				<li><a src="#">Zoom</a></li>
				<li><a src="#">Fold</a></li>
			</ul>
		 </div>
		</div>
	 </div>
	 <div class="nopadding product-images hidden-print col-md-8">
		<div class="col-md-4"><a class='youtube' href="http://www.youtube.com/embed/LuV_nQnaDDk?rel=0&amp;wmode=transparent"><img class="img-responsive" src="/img/easy-fold-stroller-sizzle.png"></a></div>
		<div class="col-md-4"><a class="group1" href="/img/easyfold1.jpg" title=""><img class="img-responsive" src="/img/QS0719.png"></a></div>
		<div class="col-md-4"><a class="group1" href="/img/easy-fold-stroller.jpg" title=""><img class="img-responsive" src="/img/Quicksmart-2760.png"></a></div>
	 </div>
	 <div class="feedbacks hidden-print col-md-4"><p>I get so many jealous looks in the carpark when I open my stroller with one hand, and little Issy in my other arm. She loves it too which makes my life easier.</p><h3>Karinne Mcneill</h3></div>
	
	<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
    <li role="presentation"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="features">Features</div>
    <div role="tabpanel" class="tab-pane" id="specifications">Specifications</div>
  </div>

	</div>
</div>
	
</div>
@endsection