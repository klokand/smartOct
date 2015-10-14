/*
* 	MyelinSlider v0.7
* 
*/

(function($){
	
	$.fn.myelinSlider = function(obj){
		
		
		function f() { 
		   var args = [].slice.call( arguments, 1, 3); 
		   return args; 
		} 
		
		function Elems(){};												
		var firstOnBoolean;												
		var autoSlider;
		
		
		var defaults = {
			mode : 'fade',
			item : 7,
			direction : 'down',
			auto : false,
			speed : 3000
		}
		
		var add = {
			type : obj.type,
			direction : obj.direction,
			auto : obj.auto,
			speed : obj.speed,
			dataImg : this.children().eq(0).children(),
			dataTxt : this.children().eq(1).children(),
		    dataImgLen : this.children().eq(0).children().length,
		    item : this.children().eq(1).children().length,
		    targetImg : this.children().eq(0).children().children(),
		    targetTxt : this.children().eq(1).children().children()
		}
		
		 var con = $.extend(defaults, add);
		
				
		if(con.dataImgLen !== con.item) errorFunction('error');

		firstOnBoolean = $(con.dataTxt).eq(0).hasClass('on');

		if(!firstOnBoolean) $(con.dataTxt).eq(0).addClass('on');
		

		$(con.dataTxt).hover(
			function() {
				con.auto = false;
				clearInterval(autoSlider);
				
				if($(con.dataTxt).hasClass('on')) $(con.dataTxt).removeClass('on');
				$(this).addClass('on');
				var tagetNm = $(this).children()[0].className;
				
				for(var i = 0; i < con.dataImgLen; i++){
					if(tagetNm == con.targetImg[i].id){
						$('#'+con.targetImg[i].id).show();
					}else{
						$('#'+con.targetImg[i].id).hide();
					}
				}
			}, function(){
				//autoSlider = setInterval(mgSlider,con.speed);
			}
		);
		

		if(con.auto){
			autoSlider = setInterval(mgSlider,con.speed);
		}
		
		function mgSlider(){
			for(var k = 0; k < con.item; k++){
				if(con.dataTxt.eq(k).hasClass('on')){
					con.dataTxt.eq(k).removeClass('on');
					$('#'+con.targetImg[k].id).hide();
					k++
					if(!con.dataTxt.eq(k).hasClass('on')){
						con.dataTxt.eq(k).addClass('on');
						if(k == con.item){
							$(con.dataTxt).eq(0).addClass('on'); 
							$('#'+con.targetImg[0].id).show();
						}else{
							// console.log($('#'+con.targetImg[k].id));
							$('#'+con.targetImg[k].id).show();
						}
					}
				}
			}
		}
		
		// console.error
		function errorFunction(msg){
			//console.error(msg);
		};
	}
	
})(jQuery);