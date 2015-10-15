@extends('app-front')
@section('content')
<div id="watchUs" class=" detail row">
	<div class="title col-md-12 clear-fix">Watch Us</div>
	<div class="passage-wrap row">
		<div class="example" id="video">
			<div id="video-container" class="video-container"></div>			
				<nav>
					<ul class="pagination pager">
						<li><a id="video-prev-page" href="#">Previous</a></li>
						<li><a id="video-next-page" href="#">Next</a></li>
					</ul>
				</nav>
		</div>
	</div>
</div>
@endsection