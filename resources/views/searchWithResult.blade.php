@extends('app-front')
@section('content')
<div id="search" class="detail row">
	<div class="title col-md-12 clear-fix">Search</div>
	<div class="passage-wrap row">
		<div class="passage col-md-7">
			<script>
  (function() {
    var cx = '009308918043393960165:8huffums9pm';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
		</div>
		<div class="col-md-5 de-image"><img class="img-responsive" src="/img/About-Us_50K.jpg"></div>
	</div>
</div>
@endsection