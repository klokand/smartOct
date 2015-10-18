@extends('app-front')
@section('content')
<div id="search" class="detail row">
	<div class="title col-md-12 clear-fix">Search</div>
	<div class="passage-wrap row">
		<div class="passage col-md-7">
		<p>Total:{!!$result_number!!} results found.</p>
 
		{!!$resultCode!!}
		</div>
		<div class="col-md-5 de-image"><img class="img-responsive" src="/img/About-Us_50K.jpg"></div>
	</div>
</div>
@endsection