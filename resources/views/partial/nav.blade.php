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
         <li
	@if(Request::is('move/*'))
					class="dropdown active"
          @else
          class="dropdown"
					@endif
 >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Move <span class="caret"></span></a>
          <ul class="dropdown-menu">
            		<div id="section">

			<div id="banner1" class="banner">
				<ul class="banner-img">
					<!--<li><a href="/move/Safeguard Newborn Stroller" id="mb00"><img src="../img/SafeGuard-S-nav.jpg" alt="" /></a></li>-->
					<li><a href="/move/Easyfold Stroller" id="mb01"><img src="../img/easy-fold-stroller.jpg" alt="" /></a></li>
					<li><a href="/move/Backpack Stroller" id="mb02"><img src="../img/Backpack Stroller Geometric Red and Grey-t.jpg" alt="" /></a></li>
					<li><a href="/move/Accessory-Comfort Pack" id="mb03"><img src="../img/comfort-pack.jpg" alt="" /></a></li>
					<li><a href="/move/Accessory-Footmuff" id="mb04"><img src="../img/footmuff.jpg" alt="" /></a></li>
					<li><a href="/move/Accessory-Caddy" id="mb05"><img src="../img/caddy.jpg" alt="" /></a></li>
					<li><a href="/move/Accessory-Boot-Cover" id="mb06"><img src="../img/boot-cover.jpg" alt="" /></a></li>
					<li><a href="/move/Accessory-Weather-Shield" id="mb07"><img src="../img/weather-shield.jpg" alt="" /></a></li>
				</ul>
				<ul class="banner-txt">
					<!--<li><a href="/move/Safeguard Newborn Stroller" class="mb00">Safe Guard Stroller</a></li>-->
					<li><a href="/move/Easyfold Stroller" class="mb01">Easy Fold Stroller</a></li>
					<li><a href="/move/Backpack Stroller" class="mb02">Backpack Stroller</a></li>

					<li class="catalog"><a href="#" class="Title">Accessories</a></li>
					<li><a href="/move/Accessory-Comfort Pack" class="mb03">Comfort Pack</a></li>
					<li><a href="/move/Accessory-Footmuff" class="mb04">Footmuff</a></li>
					<li><a href="/move/Accessory-Caddy" class="mb05">Caddy</a></li>
					<li><a href="/move/Accessory-Boot-Cover" class="mb06">Boot Cover</a></li>
					<li><a href="/move/Accessory-Weather-Shield" class="mb07">Weather Shield</a></li>
				</ul>
			</div>

		</div>
          </ul>
        </li>

<!-- hiden nav relax tag
        <li
     @if(Request::is('relax/*'))
         class="dropdown active"
     @else
         class="dropdown"
     @endif
   >
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relax <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <div id="section">

         <div  id="banner2" class="banner">
           <ul class="banner-img">
             <li><a href="/relax/Easyfold Travel Cot" id="mb08"><img src="../img/3-in-1-travel-cot.jpg" alt="" /></a></li>
             <li><a href="/relax/test1" id="mb09"><img src="../img/3-in-1-travel-bassinet.jpg" alt="" /></a></li>
           </ul>
           <ul class="banner-txt">
             <li><a href="/relax/Easyfold Travel Cot" class="mb08">Travel Cot</a></li>

           </ul>
         </div>
         </div>
             </ul>
           </li>
-->


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

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
