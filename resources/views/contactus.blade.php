@extends('app-front')
@section('content')
<div id="contactus" class="detail row">
	<div class="title col-md-12 clear-fix">Contact Us</div>
	<div class="passage-wrap row">
		<div class="passage col-md-8">
			<p>information on where you can buy these products please email us today on<p>
			<div class="col-md-1"><i class="fa fa-envelope fa-1x"></i></div><div class="col-md-11">orders@dalegroup.com.au</div>
			<div class="col-md-1"><i class="fa fa-phone-square fa-1x"></i></div><div class="col-md-11"> +61 3 95530024</div>
		</div>
		<div class="col-md-4 de-image"><img class="img-responsive" src="/img/Stockists_50K.jpg"></div>
		<div class="queryForm col-xs-12 col-sm-12 col-md-8">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="contactName" placeholder="FullName">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="contactEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="contactEmail" placeholder="Contact number">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message" rows="5"></textarea>
					</div>
					<div class="g-recaptcha form-group" data-sitekey="6Lcj2g4TAAAAAONnhhStFLJ0ZchtwWaxaoNPkwwB"></div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
				</form>	
</div>
	</div>
</div>
@endsection