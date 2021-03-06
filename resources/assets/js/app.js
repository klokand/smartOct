$(document).ready(function() {
	$('#carousel-slider').carousel();
	$('#banner1').myelinSlider({});
	$('#banner2').myelinSlider({});

	$(".group1").colorbox({rel:'group1',maxWidth:800,height:700,});
	$(".zoom-image").colorbox({rel:'zoom-image',});
	$(".fold-image").colorbox({rel:'fold-image',maxWidth:800,height:700,});
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});

	$("#color-button2").click(function(){
		if(!$(".color-image2").is(":visible")){
			$(".color-image1").hide();
			$(".color-image2").show();
		}
    });

    $("#color-button1").click(function(){
		if(!$(".color-image1").is(":visible")){
			$(".color-image2").hide();
			$(".color-image1").show();
		}
    });


	$.fn.tubber.defaults.apiKey = 'AIzaSyA9lThqAGto42AvFyIXNbDRsA70SS3q6pI';
$('#video-container').tubber({
	channelId:'UCaZ5QBBhbTLPbELkAWqToYg',
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

$('#queryForm').submit(function(event) {

	/* stop form from submitting normally */
  	event.preventDefault();
	var fname = $('input[name=firstName]').val();
	var lname = $('input[name=lastName]').val();
	var email = $('input[name=email]').val();
	var country = $('#country option:selected').val();
	var telephone = $('input[name=telephone]').val();
	var type = $('#type option:selected').val();
	var message = $('textarea[name=message]').val();
	var token =$('input[name=_token]').val();
		var url ="enquiry";
		var $post ={};
		$post.fname = fname;
		$post.lname = lname;
		$post.email = email;
		$post.country = country;
		$post.telephone = telephone;
		$post.type = type;
		$post.message = message;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				console.log(data);
				var result = $.trim(data);
				if(result =="sent out"){
					$("input").val("");
					$("textarea").val("");
					$.prompt("Message has been sent out");
				}
			}
		});
		return false;
	});

});
