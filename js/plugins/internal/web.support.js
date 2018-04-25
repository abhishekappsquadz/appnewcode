window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments)};
gtag('js', new Date());
gtag('config', 'UA-18381062-1');
window.__lo_site_id = 60404;

// (function() {
// 	var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
// 	wa.src = '../d10lpsik1i8c69.cloudfront.net/w.js';
// 	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
// })();
// SLIDER

$(document).ready(function (){
	var id = 'android_app';
	$.ajax({
		url :"/apps_slider.php",
		method: 'POST',
		data: {
		id: id
		},
		success: function (response) {      
			//alert("success");            
			$("#home-portfolio-block").html(response);
			// console.log(response);
			return false;
		},
		error: function(data){
			console.log("#home-portfolio-block error");            
			console.log(data);
		}
	});
});


$(document).on('ready', function() { // start doc ready
	var s;
	var RecapLength1 = 0;
	var RecapLength2 = 0;
	var RecapLength3 = 0;
	var CRecaptchaField1 = '';
	var CRecaptchaField2 = '';
	var CRecaptchaField3 = '';
	var CRecaptchaField4 = '';
var mct1_Options =
{
	sliderId: "mcts1",
	direction: "horizontal",
	scrollInterval: 1400,
	scrollDuration: 800,
	hoverPause: true,
	autoAdvance: true,
	scrollByEachThumb: true,
	circular: true,
	largeImageSlider: null,
	inSyncWithLargeImageSlider: true,
	license: "mylicense"
};
try {
	var thumbnailSlider = new ThumbnailSlider(mct1_Options);
}
catch(err) {
	console.log('Undefined thumbnailSlider');
}

// start doc ready


//change page title when inactive window

/* 'apple-touch-icon-precomposed': 'sitelogo-180x180.png',
				  'icon': 'sitelogo-32x32.png',
				  'shortcut icon': 'sitelogo-32x32.png' */


/* $.mFancyTitle({
				mftMissYou: true,
				mftMissYouTitle: 'Come back, we still miss you!',
				mftTitleBlink: [false, false], // active window, inactive window
				mftTitleMarquee: [false, false],
				mftMissYouFavicon: {
				   
					 'apple-touch-icon-precomposed': 'https://www.konstantinfo.com/favicon.ico',
					'icon': 'https://www.konstantinfo.com/favicon.ico',
					'shortcut icon': 'https://www.konstantinfo.com/favicon.ico'
	 
					
				}
 });  */

var s;
$('.circle').on('click', function () {
	var animClass = $(this).data('animation');
	var removeTime = $(this).data('remove');
	if ($(this).hasClass(animClass)) {
		$(this).removeClass(animClass);
	} else {
		var data_from = $(this).attr('data-from');
		if (data_from == 'req-a-quote') {
			//Reset form
			$('#requestQuoteForm')[0].reset();
			$.gritter.removeAll();

			$(".input-effect input").each(function () {
				$(this).removeClass("has-content");
				$(this).closest('.form-group').removeClass('error');
			})

			$(".form-group select").each(function () {
				$(this).removeClass("has-content");
				$(this).closest('.form-group').removeClass('error');
			})

			$(".input-effect textarea").each(function () {
				$(this).removeClass("has-content");
				$(this).closest('.form-group').removeClass('error');
			});

			$('[id^="quoteby_"]').each(function () {
				$(this).closest('.checkbox2').removeClass('error');
				$(this).parent().parent().removeClass("checked");
				$(this).parent().removeClass("active");
			});
			$('[id^="ContactsCommunicationMethod_"]').each(function () {
				$(this).closest('.checkbox2').removeClass('error');
				$(this).parent().parent().removeClass("checked");
				$(this).parent().removeClass("active");
			});
			$('[id^="ContactsCategory_"]').each(function () {
				$(this).closest('.checkbox2').removeClass('error');
				$(this).parent().parent().removeClass("checked");
				$(this).parent().removeClass("active");
			});
		}

		$(this).addClass(animClass);
		if (typeof removeTime != 'undefined') {
			var el = $(this);
			setTimeout(function () {
				el.removeClass(animClass);
			}, removeTime);
		}
	}
});

$('html').click(function (e) {
	var clickElementId = e.target.id;

	if (clickElementId.indexOf("portfoliotestimonialli_") >= 0) {
		var self = $(this);
		self.toggleClass("active");
	} else if (clickElementId.indexOf("portfoliotestimoniala_") >= 0) {
		var self = $(this).parent();
		self.toggleClass("active");
	} else if (clickElementId.indexOf("portfoliotestimoniali_") >= 0) {
		var self = $(this).parent().parent();
		self.toggleClass("active");
	} else {
		var self = $('[id^="portfoliotestimonialli_"]');
		self.removeClass("active");
	}

	if (clickElementId.indexOf("main_toggle_vidwrap-") >= 0) {
		$('.theater-toggle').trigger("click");
	}
});

//var $nav = $('#navbar > ul > li');
var $nav = $('ul.menu-links > li');
$nav.hover(
	function () {
		$(this).addClass('hover');
	},
	function () {
		$(this).removeClass('hover');

	}
);

/* this script use for mobile case */

/* $("li.submenu a").click(function(){  	
	  $("ul.dropdown").slideToggle("500");       
}); */

var width = $(window).width();
if ((width <= 1199)) {
	$("li.submenu a").click(function () {
		if ($(this).parent().hasClass("active")) {
			$(this).next().slideUp("500");
			$(this).parent().removeClass("active");
		} else {
			$("ul.dropdown").slideUp("500");
			$("li.submenu").removeClass("active");
			$(this).next().slideDown("500");
			$(this).parent().addClass("active");
		}
	});
}

/* this script use for mobile case */
$(".nav-grid").click(function () {
	$(".nav-grid").toggleClass("is-active");
	$(".navigation-part").toggleClass("is-active2");
	$(".menu-social-icon").toggleClass("active");
	$("body").toggleClass("cover-fixed");
});


//heights1
var divMaxHeight = -1;
$('#col-manage-block-heights1 .col-block-height').each(function () {
	divMaxHeight = divMaxHeight > $(this).height() ? divMaxHeight : $(this).height();
});
$('#col-manage-block-heights1 .col-block-height').each(function () {
	$(this).height(divMaxHeight);
});

//heights2
$('#col-manage-block-heights2 .col-block-height').each(function () {
	divMaxHeight = divMaxHeight > $(this).height() ? divMaxHeight : $(this).height();
});
$('#col-manage-block-heights2 .col-block-height').each(function () {
	$(this).height(divMaxHeight);
});

//heights3
$('#col-manage-block-heights3 .col-block-height').each(function () {
	divMaxHeight = divMaxHeight > $(this).height() ? divMaxHeight : $(this).height();
});
$('#col-manage-block-heights3 .col-block-height').each(function () {
	$(this).height(divMaxHeight);
});

//heights4
$('#col-manage-block-heights4 .col-block-height').each(function () {
	divMaxHeight = divMaxHeight > $(this).height() ? divMaxHeight : $(this).height();
});
$('#col-manage-block-heights4 .col-block-height').each(function () {
	$(this).height(divMaxHeight);
});


if ($('.mobile-country').length > 0) {
	$(".mobile-country").intlTelInput({
		// allowDropdown: false,
		// autoHideDialCode: false,
		//autoPlaceholder: "on",
		// dropdownContainer: "body",
		// excludeCountries: ["us"],
		//formatOnDisplay: false,
		geoIpLookup: function (callback) {
			/* $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
			  var countryCode = (resp && resp.country) ? resp.country : "";
			  callback(countryCode);
			}); */
			callback('IN');
		},
		initialCountry: "auto",
		// nationalMode: true,
		// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		//placeholderNumberType: "MOBILE",
		// preferredCountries: ['cn', 'jp'],
		separateDialCode: true,
		utilsScript: "https://www.konstantinfo.com/js/utils.js"
	});

	$('.country-list li').on('click', function () {
		var CallingCode = $(this).attr('data-dial-code');
		$('#ContactsCallingCode').val('+' + CallingCode);
	});

}


function openRequestQuote() {

	$.ajax({
		type: "GET",
		url: "https://www.konstantinfo.com/request-a-quote.php",
		data: {},
		success: function (data) {
			$.getScript('../www.google-analytics.com/analytics.js'); // jQuery shortcut
			window.ga = window.ga || function () {
				(ga.q = ga.q || []).push(arguments)
			};
			ga.l = +new Date;
			ga('create', 'UA-18381062-1', 'auto');
			ga('send', 'pageview', 'request-a-quote.html');
		}
	});

}


/* this script used for inquery section Great, tell us about your project */
$(document).on('click', ".inquiry-btn, .mainsec .btn-section .comman-btn", function () {
	//alert('r');
	var cur_url = window.location.href;
	history.pushState(null, null, cur_url + '?request-a-quote');

	$('body').addClass('no-scroll');
	$('.start-a-project--bg').css({
		'transform-origin': '0px 50vh 0px'
	});

	$('.start-a-project--bg').removeClass('delay_background');
	$('.start-projectinner').removeClass('no-delay');
	$(".start-a-project").removeClass("closed");

	$('#intercom-container').css('display', 'none');
	openRequestQuote();
});

//$(".cs_req_btn").click(function(){
//$(".cs_req_btn").on("click", function(event){
$(document).on('click', ".cs_req_btn", function () {

	var cur_url = window.location.href;
	history.pushState(null, null, cur_url + '?request-a-quote');

	$('body').addClass('no-scroll');
	$('.start-a-project--bg').css({
		'transform-origin': '0px 50vh 0px'
	});

	$('.start-a-project--bg').removeClass('delay_background');
	$('.start-projectinner').removeClass('no-delay');
	$(".start-a-project").removeClass("closed");

	$('#intercom-container').css('display', 'none');
	openRequestQuote();
});


//$(".close-button").click(function(){ 
//$(".close-button").on("click", function(event){
$(document).on('click', ".close-button", function () {

	var cur_url = window.location.href;
	var cur_url = cur_url.replace("?request-a-quote", "");
	history.pushState(null, null, cur_url);

	$('body').removeClass('no-scroll');
	$(".start-a-project").addClass("closed");
	$('.start-projectinner').addClass('no-delay');
	$('.start-a-project--bg').addClass('delay_background');
	$('#intercom-container').css('display', 'block');
});


$("#step1").on("click", function(event){  
	event.stopPropagation();        
	var anchor = $("#what-you-making");     
	var position = anchor.position().top + $('.popup-header').height()+134; 
	$(".start-projectinner").animate({scrollTop: position}, 1000, 'swing');
});

$("#step2").on("click", function(){    
	var anchor = $("#what-you-making2");
	var position = anchor.position().top+$('.popup-header').height()+134;   
	$(".start-projectinner").animate({scrollTop: position}, 1000, 'swing');
});

$("#step3").on("click", function(){    
	var anchor = $("#time-framework");
	var position = anchor.position().top+$('.popup-header').height()+134;   
	$(".start-projectinner").animate({scrollTop: position}, 1000, 'swing');
});

$('.checkbox2 input:checkbox').change(function(){
	if($(this).is(":checked")) {
		$(this).parent().parent().addClass("checked");
	} else {
		$(this).parent().parent().removeClass("checked");
	}
});


/* this script used for inquery section Great, tell us about your project */

$('.common-textarea').on('change keyup keydown paste cut', 'textarea', function () {
$(this).height(0).height(this.scrollHeight);
}).find('textarea').change();




$('.watch-video-block').addClass('fadein');

 $('.video-btn-play').on('click', function() {
				//console.log($(this).parent().removeClass('fadein'));    
		//$(this).parent().attr('class','video-block watch-video-block');
		$(this).parent().removeClass('fadein');
	   // $(this).prev().attr('class','background-image-holder');
		//console.log($(this).prev().attr('class','background-image-holder')); 
		var _video = $(this).next();
		
	   // $(_video).next().find('.videoinfo').removeClass('fadein')
		
		if(!$(this).hasClass('video-btn-pause') && !$(this).hasClass('cust-pause')) {
		  $('.testimonial-video').each(function() {
				$(this).get(0).pause();
				$(this).load();
				$('.video-btn-play').removeClass('video-btn-pause');
		  });

		  _video[0].play();
		
		   
		   $(this).addClass('video-btn-pause');
			
			_video[0].onended = function(e) {
			   $(this).prev().attr('class','video-btn-play');
			}
			return false;

		} else {
			if($(this).hasClass('cust-pause')){
					$('.testimonial-video').each(function() {
					   $(this).get(0).pause();
					   $('.video-btn-play').removeClass('video-btn-pause');
					});
					
					_video[0].play();
				
					$(this).addClass('video-btn-pause');
				 
					_video[0].onended = function(e) {
						$(this).prev().attr('class','video-btn-play');
					}
					$(this).removeClass('cust-pause');
			}else{
				  _video[0].pause();
				  $(this).removeClass('video-btn-pause');
				  $(this).addClass('cust-pause');
			}
		  
		}
		
		return false;
	});

}); // end doc ready

function openRequestedPopup() {
	var w = 420;
	var h = 320;
	var url = "https://www.speakpipe.com/widget/inline/ji7jgvx6jte8ktba3io5f3bbvqvs7stj?rf=https%3A%2F%2Fwww.speakpipe.com%2Fwidget%2Finline%2Fji7jgvx6jte8ktba3io5f3bbvqvs7stj&mode=standalone";
	var title = "Konstant Voice Recorder";
	var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
	var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

	var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
	var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

	var left = ((width / 2) - (w / 2)) + dualScreenLeft;
	var top = ((height / 2) - (h / 2)) + dualScreenTop;
	var newWindow = window.open(url, title, 'scrollbars=yes,  width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);


	/* windowObjectReference = window.open(
	    
		"https://www.speakpipe.com/widget/inline/ji7jgvx6jte8ktba3io5f3bbvqvs7stj?rf=https%3A%2F%2Fwww.speakpipe.com%2Fwidget%2Finline%2Fji7jgvx6jte8ktba3io5f3bbvqvs7stj&mode=standalone",
	    "DescriptiveWindowName",
	    "width=420,height=230,resizable,scrollbars=yes,status=1"
	  );*/
}

/* This script use for get-in touch and contact-us page */
// JavaScript for label effects only
$(window).load(function () {
	//$(".form-group input").val("");

	$(".input-effect input").focusout(function () {
		if ($(this).val() != "") {
			$(this).addClass("has-content");
		} else {
			$(this).removeClass("has-content");
		}
	});

	$(".input-effect select").focusout(function () {
		if ($(this).val() != "") {
			$(this).addClass("has-content");
		} else {
			$(this).removeClass("has-content");
		}
	});

	$(".input-effect textarea").focusout(function () {
		if ($(this).val() != "") {
			$(this).addClass("has-content");
		} else {
			$(this).removeClass("has-content");
		}
	});
         
	$('.flexslider').flexslider({
		animation: "slide",
		slideshow:false,
		start: function(slider){
		  $('body').removeClass('loading');
		}
	});

	$('#grid').masonry({});
});


/* Common for all pages to up top */
$(window).scroll(function () {
	if ($(this).scrollTop() > 300) {
		$('.page_top').addClass("new_page_top fadeInUp animated3");
	} else {
		$('.page_top').removeClass("new_page_top fadeInUp animated3");
	}

	/* this script is used to hide ready to talk popup only for home page*/

	if ($(window).scrollTop() >= (($(document).height() - $(window).height()) - $('.top-bofu').innerHeight())) {
		$('.progress-nav-container').removeClass("prog-show");
	} else {
		if ($(this).scrollTop() > 300) {
			$('.progress-nav-container').addClass("prog-show");
		} else {
			$('.progress-nav-container').removeClass("prog-show");
		}
	}

});

//Form Validations by kiplphp48
$.each($.validator.methods, function (key, value) {
	$.validator.methods[key] = function () {
		if (arguments.length > 0) {
			arguments[0] = $.trim(arguments[0]);
		}

		return value.apply(this, arguments);
	};
});

// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------

// This is for landing page technology section
$(document).on('click', 'section.technologiesProvide li', function () {
	//alert('rd');
	var currLink = $(this);
	var selectedId = currLink.parents('section').attr("id");
	selectedId = '.technologiesProvide'; //'#'+selectedId;
	//alert(selectedId);
	var topSet = -140;
	if ($(selectedId).hasClass('get-in-touch-section')) {
		topSet = -300;
	}
	$.smoothScroll({
		scrollTarget: selectedId,
		speed: 1000,
		offset: topSet
	});
});

//  common js code for landing pages 

var owl = $(".owl-carousel");
if ($(".owl-carousel").length > 0) {
	owl.owlCarousel({
		autoPlay: true,
		rewindNav: true,
		autoHeight: true,
		items: 3, //10 items above 1000px browser width
		itemsDesktop: [1199, 2], //5 items between 1000px and 901px
		itemsDesktopSmall: [991, 2], // 3 items betweem 900px and 601px
		itemsTablet: [600, 1], //2 items between 600 and 0;
		itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
		afterAction: function (el) {
			if ($(window).width() >= 992) {
				//remove class active
				this
					.$owlItems
					.removeClass('active')
				//add class active
				this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem + 1)
					.addClass('active')
			} else {
				this
					.$owlItems
					.removeClass('active')
				//add class active
				this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem)
					.addClass('active')
			}
		}
	});
	// Custom Navigation Events
	$(".customNavigation .next").click(function () {
		owl.trigger('owl.next');
	})
	$(".customNavigation .prev").click(function () {
		owl.trigger('owl.prev');
	})
}


/* this script use for to scroll get-in touch form when user click on ready to talk popup. */

$('.bofu-scroll').on('click', function () {
	$.smoothScroll({
		scrollTarget: '#pop-scroll',
		speed: 2000,
		offset: -80
	});
	return false;
});


// $('.page_top a[href^="#"]').on('click', function (e) {
// 	e.preventDefault();
// 	var target = this.hash,
// 		$target = $(target);
// 	$('html, body').stop().animate({
// 		'scrollTop': '0px'
// 	}, 1500, 'swing', function () {
// 		window.location.hash = target;
// 	});
// });

$('.page_top #gotop').on('click', function (e) {
	e.preventDefault();
	$('html, body').stop().animate({
		'scrollTop': '0px'
	}, 1500, 'swing', function () {

	});
});


/*Scroll support content block according to conettn div height*/
if ($('.custom-support-content-tab').height() != null) {
	var customTab = $('.custom-support-content-tab').height();
	var proposalBlock = '';
	if ($('.proposal-block').length > 0) {
		var proposalBlock = $('.proposal-block').position().top;
	}

	var totalHeight = proposalBlock - customTab;
	$('.support-section').click(function () {
		var totalHeight = proposalBlock - customTab;
		console.log(totalHeight);
		$('html,body').animate({
			scrollTop: totalHeight
		}, 1000);
	});
}

/* This script is used for partner_with_us.ctp page on Become a partner button */

$('.become_a_partner_btn').on('click', function (e) {
	e.preventDefault();
	/*
	var target = this.hash,
	$target = $(target);
	$('html, body').stop().animate({
		'scrollTop': $target.offset().top
	}, 500, 'swing', function () {
		window.location.hash = target; 
	});
	$("#partner-form").css('padding-top','100px'); */
	var selectedId = $(this).attr('href');
	var data_from = $(this).attr('data-from');
	var topSet = -140;
	if ($(selectedId).hasClass('get-in-touch-section')) {
		topSet = -300;
	}
	$.smoothScroll({
		scrollTarget: selectedId,
		speed: 2000,
		offset: topSet
	});

});


$('.cbss').on('click', function (e) {
	e.preventDefault();
	var selectedId = $(this).attr('href');
	var data_from = $(this).attr('data-from');
	var topSet = -140;
	if ($(selectedId).hasClass('get-in-touch-section')) {
		topSet = -300;
	}
	$.smoothScroll({
		scrollTarget: selectedId,
		speed: 2000,
		offset: topSet
	});
});
