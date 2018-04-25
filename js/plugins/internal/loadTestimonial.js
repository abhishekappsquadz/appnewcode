
// TESTIMONIAL
loadTestimonials('text');
function loadTestimonials(ttype){
	var loader = $('#Loader_text');
	var random = Math.random();
	var action = "https://www.appsquadzinfo.com/app/getLatestTestimonial/"+random;
	var pageData = 'a:2:{s:11:"headingType";s:11:"mobile_page";s:17:"showDiscussButton";b:1;}';
	$.ajax({
		type:"POST",
		url:action,
		data:{testimonialtype:ttype,pagetype:'',pageData:pageData},
		beforeSend: function() {
			loader.show();
		},
		success: function(data){
			//console.log(data); return false;
			if(data != 'bottom_reached') {
				loader.hide();
				
				$('#ktestimonialTextDiv').html(data);
				init();
				
			}else{
				loader.hide();
			}
			
		},
		complete: function(){
		}
	});
}

$(function(){
	$(document).on('click','section#landing_testimonials button.slick-arrow',function () {
		var currLink 	= $(this);
		var selectedId 	= currLink.parents('section').parents('section').attr("id");
		selectedId 		= '#'+selectedId;
		 //alert(selectedId);

		 var topSet = -140;
		if($(selectedId).hasClass('get-in-touch-section')) {
			 topSet = -300;
		}
		$.smoothScroll({
		  scrollTarget: selectedId,
		  speed: 1000,
		  offset: topSet
		});
	});
});


// --------------------------------------------
function init(){
	$("#landing_testimonials").slick({
		dots: false,
		infinite: true,
		centerMode:false,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay:true,
		rows:1,
		responsive: [
		{
		   breakpoint: 991,
		   settings: {
			   slidesPerRow: 1,
			   rows: 1,
			   slidesToScroll: 1,
			   slidesToShow: 2,
			}
		},
		{
		   breakpoint: 767,
		   settings: {
			   slidesPerRow: 1,
			   rows: 1,
			   slidesToScroll: 1,
			   slidesToShow: 1,
			}
		}
		]
	});
	
	// On before slide change
	$('#landing_testimonials').on('afterChange', function(event, slick, currentSlide, nextSlide){
		if ($(window).width() < 991) {
			var myEm = currentSlide;
			$( "div" ).not( "[data-slick-index = "+myEm+"]" ).removeClass('cr-active');
			$('div[data-slick-index = '+myEm+']').addClass('cr-active');
		}else{
			var myEm = currentSlide+1;
			$( "div" ).not( "[data-slick-index = "+myEm+"]" ).removeClass('cr-active');
			$('div[data-slick-index = '+myEm+']').addClass('cr-active');
		}
	});
	
	// Get the current slide
	var currentSlide = $('#landing_testimonials').slick('slickCurrentSlide');
	if ($(window).width() < 991) {
		var myEm = currentSlide;
		$( "div" ).not( "[data-slick-index = "+myEm+"]" ).removeClass('cr-active');
		$('div[data-slick-index = '+myEm+']').addClass('cr-active');
	}else{
		var myEm = currentSlide+1;
		$( "div" ).not( "[data-slick-index = "+myEm+"]" ).removeClass('cr-active');
		$('div[data-slick-index = '+myEm+']').addClass('cr-active');
	}
	
	$('.ttcbss').on('click',function (e) {
		e.preventDefault();
		//var selectedId = $(this).attr('href');
		var selectedId = '#'+$('.get-in-touch-section').attr('id');
		var data_from = $(this).attr('data-from');
		var topSet = -140;
		if($(selectedId).hasClass('get-in-touch-section')) {
			 topSet = -300;
		}
		$.smoothScroll({
		  scrollTarget: selectedId,
		  speed: 2000,
		  offset: topSet
		});
	});
}

