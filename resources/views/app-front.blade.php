<!DOCTYPE html>
<html lang="en">
<head>
	<!--
	<base href="http://www.quicksmartmove.com/">	-->
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="quicksmart, strollers, cots, high chairs, ride ons, portable children strollers">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="title" content="QuickSmartMove">
	<meta name="description" content="Quicksmart foldable, portable, compact strollers, cots, high chairs and ride ons, are cleverly created to keep families on the go.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Playettemove</title>
	<link href="/output/final.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="container">
		<div id="rl-indent" class="col-md-12">
			<div class="bgCover col-md-12">
			<div id="header-slider-wrap">
			@include('partial.header')
			@if(Request::is('/'))
					@include('partial.slider')
			@endif
			</div>
			<div id="content" class="row">
				@yield('content')
			</div>
			@include('partial.footer')
			</div>
		</div>
	</div>
	<!-- Scripts -->
	<script src="/output/final.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
