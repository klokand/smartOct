$(document).ready(function() {
	$('#carousel-slider').carousel();
	$('#banner1').myelinSlider({});	
	$('#banner2').myelinSlider({});
	
	$(".group1").colorbox({rel:'group1',maxWidth:800,height:700,});
	$(".zoom-image").colorbox({rel:'zoom-image',});
	$(".fold-image").colorbox({rel:'fold-image',maxWidth:800,height:700,});
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
	
	$.fn.tubber.defaults.apiKey = 'AIzaSyA9lThqAGto42AvFyIXNbDRsA70SS3q6pI';
$('#video-container').tubber({
	username: 'QuickSmartGo',
	itemsPerPage: 9,
	embedVideo: false,
	showVideoTitle: true,
	loadingControl: $('#video-loading'),
	prevPageControl: $('#video-prev-page'),
	nextPageControl: $('#video-next-page'),
	templates: {
		thumbnail: '<img src="{{image_medium}}">'
	}
});

$(".print-button").click(function(){
        window.print();
    });
$("a.allView").click(function(){
	$(".group1").trigger("click");
});

});