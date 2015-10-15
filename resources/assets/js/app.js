$(document).ready(function() {
	$('#carousel-slider').carousel();
	$('#banner1').myelinSlider({});	
	$('#banner2').myelinSlider({});
	
	
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
});