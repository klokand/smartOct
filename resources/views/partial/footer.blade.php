	@if(Request::is('move/*')||Request::is('relax/*'))
<div id="products">
<h2>Related Products</h2>
	<div class="item col-md-3">
	<a href="/move/Easyfold Stroller"><img class="img-responsive" src="/img/award grey EFS-t.jpg"></a>
	</div>
	<div class="item col-md-3">
	<a href="/move/Easyfold Stroller"><img class="img-responsive" src="/img/award red EFS-t.jpg"></a>
	</div>
	<div class="item col-md-3">
	<a href="/move/Backpack Stroller"><img class="img-responsive" src="/img/Geometric Red-t.jpg"></a>
	</div>
	<div class="item col-md-3">
	<a href="/move/Backpack Stroller"><img class="img-responsive" src="/img/Black-t.jpg"></a>
	</div>
</div>

@endif

<div id="footer" class="hidden-print">
<div class="footer-links">
	<div class="col-md-3"><a class="footer-about" href="/about-us"></a></div>
	<div class="col-md-3"><a class="footer-contact" href="/contact-us"></a></div>
	<div class="col-md-3"><a class="footer-youtube" target="_blank" href="https://www.youtube.com/channel/UCi_E5lbC8IdHFNlnBn7DhFQ"></a></div>
	<div class="col-md-3"><a class="footer-pdf" href="https://s3-ap-southeast-2.amazonaws.com/dalegroupinternational/Move+by+PLayette+Stroller+26-7-17.pdf" target="_blank"></a></div>
</div>
<!--
<div class="col-md-2 footer1">
<ul>
	<h4>About Us</h4>
	<li><a href="#">About Us</a></li>
	<li><a href="#">Design & Construction</a></li>
	<li><a href="#">Awards</a></li>
	<li><a href="#">ACompany</a></li>
	<li><a href="#">Contact Us</a></li>
	<li><a href="#">Where to Buy</a></li>
</ul>
</div>
<div class="col-md-2 footer2">
	<ul>
	<h4>Support</h4>
	<li><a href="#">FAQ's</a></li>
	<li><a href="#">Product Help</a></li>
	<li><a href="#">Parts</a></li>
	<li><a href="#">Warranty</a></li>
	<li><a href="#">Return Policy</a></li>
	<li><a href="#">Shipping and Delivery Policy</a></li>
	<li><a href="#">CPSIA Product Registration</a></li>
	</ul>
</div>
<div class="col-md-2 footer3">
<ul>
	<h4>Community</h4>
	<li><a href="#">Facebook</a></li>
	<li><a href="#">Youtube</a></li>
	<li><a href="#">Blog</a></li>
	<li><a href="#">WPromotions</a></li>
</ul>
</div>

<div class="col-md-2 footer4">
<ul>
	<h4>Countries</h4>
	<li><a href="#">Australia</a></li>
	<li><a href="#">USA</a></li>
	<li><a href="#">Japan</a></li>
	<li><a href="#">Italy</a></li>
	<li><a href="#">France</a></li>
	<li><a href="#">UK</a></li>
	<li><a href="#">Taiwan</a></li>
</ul>
</div>
<div class="col-md-2 footer5">
<h4 class="col-md-4">Download QuickSmart Brochure</h4>
<a href="http://www.quicksmartgo.com/index.php?option=com_rubberdoc&amp;view=doc&amp;id=1&amp;format=raw" class="col-md-8"><img src="/img/quicksmart-brochure.jpg" alt=""></a>
</div>
-->
<div class="col-md-12 footer6 row">
	<ul>
		<li>{{Carbon\Carbon::today()->format('Y')}}© Dalegroup International</li>
		<li><a href="/privacy-policy">Privacy Policy</a></li>
	</ul>
</div>
</div>
