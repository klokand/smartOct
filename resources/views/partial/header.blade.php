<div id="topbar" class="row">
	<div id="logo" >
		<div id="logo1" class="col-md-3"><a href="/" title="QuickSmartMOve"><img class="img-responsive" src="/img/Move by Playette Logo.jpg" alt="QuickSmartMove"></a></div>
		<div id="topbar2" class="col-md-9">
				<div id="searchBar" class="col-md-offset-8 col-md-5 hidden-print">
					<form name="search" method="POST" action="{{URL::route('search')}}" class="navbar-form navbar-left" role="search">
				  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			        <div class="form-group">
			          <input type="text" name="searchWord" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			      </form>
				</div>
				<div id="topSocials" class="col-md-offset-8 col-md-4 hidden-print">
				<a href="https://www.youtube.com/channel/UCi_E5lbC8IdHFNlnBn7DhFQ" rel="nofollow" title="YouTube: Playette" target="_blank"><img class="img-responsive" src="/img/youtube.png" alt="YouTube: QuickSmartMove"></a>
					<a href="/contact-us">Contact Us</a>
				</div>
			<div id="logo2" class="col-md-offset-2 col-md-10"><img src="/img/on-the-go.jpg" class="img-responsive"></div>
			<div id="navContainer" class="col-md-12">
					@include('partial.nav')
			</div>
		</div>
	</div>
</div>
