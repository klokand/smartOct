@extends('app-front')
@section('content')
<div id="productdetail" class="detail row">
	<div class="passage-wrap row">
	 <div class="product-section">
	
		<div class="product-description col-md-5">
			<div class="title1">Easy fold</div>
			<div class="title2">Foot Muff</div>
			<div class="summary">Baby, it's cold outside. So we designed the Foot Muff specially for our QuickSmart Easy Fold Stroller. It wraps baby head to toe in a cosy cocoon.</div>
			<div class="list">
				<ul>
					<li>Fleece-lined for warmth</li>
					<li>Padded for extreme cold</li>
					<li>Water and snow resistant</li>
					<li>Machine washable</li>
					<li>Integrated for snug fit</li>
				</ul>
			</div>
		</div>
		<div class="product-image col-md-3">
		<img src="/img/Copy of Red Blk Hero Footmuff.jpg" class="img-responsive color-image1">
		<img src="/img/Copy of B09083 Blk Footmuff Hero.jpg" class="img-responsive color-image2">
		</div>
		<div class="product-rightside col-md-4">
		 <div class="product-tranbox col-md-12">
			<div class="product-side1 col-md-12">
			N/A</div>
			<div class="product-colors col-md-12">
			<div class="radio">
				<label>
					<input type="radio" name="ColorRadios1" id="color-button1" value="QEFA09068" checked>
					<img src="/img/Red.png">
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="ColorRadios1" id="color-button2" value="QEFA09083">
					<img src="/img/Black.png">
				</label>
			</div>
			</div>
			<div class="product-actionbuttons hidden-print col-md-12">
			<a class="btn btn-success print-button"  href="#" role="button" href="#"><i class="fa fa-print fa-2x"></i></a>

			</div>
		 </div>
		 <div class="product-viewbuttons nopadding hide-fold hidden-print col-md-12">
			<ul>
				<li><a class="allView">View All</a></li>
				<li><a class="zoom-image" href="/img/Copy of Red Blk Hero Footmuff.jpg">Zoom</a></li>
				<!--
				<li>
				<a class="fold-image" href="/img/efs-f1.jpg">Fold</a>
				<div class="fold-images">
					<a class="fold-image" href="/img/efs-f2.jpg" title=""></a>
					<a class="fold-image" href="/img/efs-f3.jpg" title=""></a>
					<a class="fold-image" href="/img/efs-f4.jpg" title=""></a>
					<a class="fold-image" href="/img/efs-f5.jpg" title=""></a>
					<a class="fold-image" href="/img/efs-f6.jpg" title=""></a>
				</div>
				</li>
				-->
			</ul>
		 </div>
		</div>
	 </div>
	 <div class="nopadding product-images hidden-print col-md-8">
		<a class="group1" href="/img/Copy of Red Blk Hero Footmuff.jpg" title=""><img class="p-img img-thumbnail" src="/img/Copy of Red Blk Hero Footmuff.jpg"></a>
		<a class="group1" href="/img/Copy of B09083 Blk Footmuff Hero.jpg" title=""><img class="p-img img-thumbnail" src="/img/Copy of B09083 Blk Footmuff Hero.jpg"></a>
	
	 </div>
	 <!--
	 <div class="feedbacks hidden-print col-md-4"><p>I get so many jealous looks in the carpark when I open my stroller with one hand, and little Issy in my other arm. She loves it too which makes my life easier.</p><h3>Karinne Mcneill</h3></div>
	 -->
	
<div class="productInfo">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
    <li role="presentation"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="features">
	<p>The QuickSmartTM Easy Fold Stroller Footmuff is super snuggly and is fleece lined for extra warmth and comfort in the colder months</p>
	<ul>
	<li>Fleece lined to keep baby warm and cosy</li>
	<li>Padded for extra comfort</li>
	<li>Machine Washable for a thorough clean</li>
	</ul>
	</div>
    <div role="tabpanel" class="tab-pane" id="specifications">
	<ul><li>
	Designed for use with QuickSmartTM Easy Fold Stroller
	</li><li>

Fleece lined to keep baby warm and cosy</li><li>

Padded for extra comfort</li><li>

Machine Washable for a thorough clean
</li><li>
Suitable for 6 months and up
</li><li>
Harness can still be attached for safety
</li><li>
Re-usable PVC storage bag
</li>
</ul>
	</div>
  </div>

	</div>
</div>
	
</div>
@endsection