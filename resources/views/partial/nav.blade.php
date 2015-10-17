<nav class="navbar navbar-default clearfix hidden-print">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li class="dropdown 
	@if(Request::is('move/*'))
					active"
					@endif
 ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Move <span class="caret"></span></a>
          <ul class="dropdown-menu">
            		<div id="section">
			
			<div id="banner1" class="banner">
				<ul class="banner-img">
					<li><a href="/move/Safeguard Newborn Stroller" id="mb00"><img src="../img/SafeGuard-S-nav.jpg" alt="" /></a></li>
					<li><a href="/move/Easyfold Stroller" id="mb01"><img src="../img/easy-fold-stroller.jpg" alt="" /></a></li>
					<li><a href="/move/Backpack Stroller" id="mb02"><img src="../img/backpack-stroller.jpg" alt="" /></a></li>
					<li><a href="/move/test1" id="mb03"><img src="../img/comfort-pack.jpg" alt="" /></a></li>
					<li><a href="/move/test1" id="mb04"><img src="../img/footmuff.jpg" alt="" /></a></li>
					<li><a href="/move/test1" id="mb05"><img src="../img/caddy.jpg" alt="" /></a></li>
					<li><a href="/move/test1" id="mb06"><img src="../img/boot-cover.jpg" alt="" /></a></li>
					<li><a href="/move/test1" id="mb07"><img src="../img/weather-shield.jpg" alt="" /></a></li>
				</ul>
				<ul class="banner-txt">
					<li><a href="/move/Safeguard Newborn Stroller" class="mb00">Safe Guard Stroller</a></li>
					<li><a href="/move/Easyfold Stroller" class="mb01">Easy Fold Stroller</a></li>
					<li><a href="/move/Backpack Stroller" class="mb02">Backpack Stroller</a></li>
					
					<!-- Hidden accessaries part
					<li class="catalog"><a href="#" class="Title">Accessories</a></li>
					<li><a href="/move/test1" class="mb03">Comfort Pack</a></li>
					<li><a href="/move/test1" class="mb04">Footmuff</a></li>
					<li><a href="/move/test1" class="mb05">Caddy</a></li>
					<li><a href="/move/test1" class="mb06">Boot Cover</a></li>
					<li><a href="/move/test1" class="mb07">Weather Shield</a></li>
					-->
				</ul>
			</div>
			
		</div>
          </ul>
        </li>
		 <li class="dropdown 
	@if(Request::is('relax/*'))
					active"
					@endif
 ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relax <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div id="section">
			
			<div  id="banner2" class="banner">
				<ul class="banner-img">
					<li><a href="/relax/Easyfold Travel Cot" id="mb08"><img src="../img/3-in-1-travel-cot.jpg" alt="" /></a></li>
					<li><a href="/relax/test1" id="mb09"><img src="../img/3-in-1-travel-bassinet.jpg" alt="" /></a></li>
				</ul>
				<ul class="banner-txt">
					<li><a href="/relax/Easyfold Travel Cot" class="mb08">Trave Cot</a></li>
					<!-- Hidden accessaries part
					<li><a href="/relax/test1" class="mb09">Trave Bassinet</a></li>
					-->
				</ul>
			</div>
          </ul>
		  <li 
					@if(Request::path() == 'watch-us')
					class="active"
					@endif
					><a href="/watch-us">Watch Us</a></li>
		  <li 
					@if(Request::path() == 'contact-us')
					class="active"
					@endif
					><a href="/contact-us">Contact Us</a></li>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>