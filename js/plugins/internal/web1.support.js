
// ----------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// ---------------------QUOTE--------------------divide js-----------------------------------
// ----------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------


$("#requestQuoteFormstep1").on("click", function (event) {
	if (stepValidateRequestQuote(1)) {
		event.stopPropagation();
		var anchor = $("#what-you-making");
		var position = anchor.position().top + $('.popup-header').height() + 134;
		$(".start-projectinner").animate({
			scrollTop: position
		}, 1000, 'swing');
	}
});

$("#requestQuoteFormstep2").on("click", function () {
	if (stepValidateRequestQuote(2)) {
		var anchor = $("#what-you-making2");
		var position = anchor.position().top + $('.popup-header').height() + 134;
		$(".start-projectinner").animate({
			scrollTop: position
		}, 1000, 'swing');
	}
});

$("#requestQuoteFormstep3").on("click", function () {
	if (stepValidateRequestQuote(3)) {
		var anchor = $("#time-framework");
		var position = anchor.position().top + $('.popup-header').height() + 134;
		$(".start-projectinner").animate({
			scrollTop: position
		}, 1000, 'swing');
	}
});

/* $('[id^="quoteby_"]').click(function(){
	var id = this.id;
	id = id.split('_');
	crid = id[1];
	$('[id^="quotebydiv_"]').removeClass('checked');
	$("#quotebydiv_"+crid).addClass('checked');
	
	$('[id^="quotebylable_"]').removeClass('active');
	$("#quotebylable_"+crid).addClass('active');
	alert($("#quotebylable_"+crid).attr('class'));
	
	$('[id^="quoteby_"]').attr('checked',false);
	$(this).attr('checked',true);
}); */


$('[id^="quoteby_"]').click(function () {
	if ($(this).is(':checked') && this.id == 'quoteby_2') {
		if ($('#quoteby_1').is(':checked')) {
			$('#quoteby_1').click();
		}
	}
	if ($(this).is(':checked') && this.id == 'quoteby_1') {
		if ($('#quoteby_2').is(':checked')) {
			$('#quoteby_2').click();
		}
	}
});


$('[id^="ContactsCategory_"]').click(function () {
	var checkBoxId = $(this).attr('id');
	var selectedId = checkBoxId.replace('ContactsCategory_', '');
	if ($(this).is(':checked')) {
		for (rk = 1; rk <= 7; rk++) {
			if (rk != selectedId) {
				if ($('#ContactsCategory_' + rk).is(':checked')) {
					$('#ContactsCategory_' + rk).click();
				}
			}
		}

	}
});

//$("#mobilenumber2").intlTelInput("setNumber", "+91");

$("#mobilenumber2").on("countrychange", function (e, countryData) {
	//alert(JSON.stringify(countryData.dialCode));
	$('#ContactsCallingCode2').val('+' + countryData.dialCode);
});



	//var countryData = $("#mobilenumber2").intlTelInput("getSelectedCountryData");
	//var country_code = countryData.iso2;
	//country_code = country_code.toUpperCase();
	//alert(country_code);
	// $('select[name="country"] option[value=AL]').attr('selected','selected');


	// Set validation rule
	//$('#gritter-notice-wrapper').css('top','100px');

	$.validator.addMethod("check_quoteby", function (value, element, param) {
		if ($('#quoteby_1').is(":checked") || $('#quoteby_2').is(":checked")) {
			return true;
		} else {
			return false;
		}
	}, 'Please select Individual/Company.');


	$.validator.addMethod("check_company", function (value, element, param) {
		if ($('#quoteby_2').is(":checked")) {
			if ($.trim($('#ContactsCompany2').val()) == '') {
				return false;
			} else {
				return true;
			}
		} else {
			return true;
		}
	}, 'Please enter company name.');

	$.validator.addMethod("check_skypeid", function (value, element, param) {
		if ($('#ContactsCommunicationMethod_3').is(":checked")) {
			if ($.trim($('#ContactsSkypeid2').val()) == '') {
				return false;
			} else {
				return true;
			}
		} else {
			return true;
		}
	}, 'Please enter skype Id.');

	$.validator.addMethod("check_communication_method", function (value, element, param) {
		var oncheck = 0;
		$('[id^="ContactsCommunicationMethod_"]').each(function () {
			if ($(this).is(":checked")) {
				oncheck = 1;
			}
		});
		if (oncheck) {
			return true;
		} else {
			return false;
		}
	}, 'Please select atleast one communication method.');


	$.validator.addMethod("check_category", function (value, element) {
		var oncheck = 0;
		$('[id^="ContactsCategory_"]').each(function () {
			if ($(this).is(":checked")) {
				oncheck = 1;
			}
		});
		if (oncheck) {
			return true;
		} else {
			return false;
		}
	});

	var validator = $("#requestQuoteForm").validate({
		ignore: [],
		rules: {
			"data[Contacts][quoteby]": {
				check_quoteby: true
			},
			"data[Contacts][name]": {
				required: true
			},
			"data[Contacts][email]": {
				required: true,
				email: true
			},
			"data[Contacts][phone]": {
				required: true,
				minlength: 5,
				maxlength: 15
			},
			"data[Contacts][company]": {
				check_company: true
			},
			"data[Contacts][skypeid]": {
				check_skypeid: true
			},
			"country": {
				required: true
			},
			"data[Contacts][communication_method][]": {
				check_communication_method: true
			},
			"data[Contacts][category][]": {
				check_category: function (element) {
					return checkStep(element);
				}
			},
			"data[Contacts][message]": {
				required: function (element) {
					return checkStep(element);
				}
			},
			"data[Contacts][budget]": {
				required: function (element) {
					return checkStep(element);
				}
			},
			"data[Contacts][time_frame]": {
				required: function (element) {
					return checkStep(element);
				}
			},
		},
		messages: {
			"data[Contacts][quoteby]": {
				check_quoteby: 'Please select Individual/Company.',
			},
			"data[Contacts][name]": {
				required: 'Please enter your name.',
			},
			"data[Contacts][email]": {
				required: 'Please enter your email address.',
				email: 'Please enter valid email address.'
			},
			"data[Contacts][phone]": {
				required: 'Please enter your phone number.',
				minlength: 'Phone number is no less than 5 digits.',
				maxlength: 'Phone number is no more than 15 digits.',
			},
			"data[Contacts][company]": {
				check_company: 'Please enter company name.',
			},
			"data[Contacts][skypeid]": {
				check_skypeid: 'Please enter skype Id.',
			},
			"country": {
				required: 'Please select country.',
			},
			"data[Contacts][communication_method][]": {
				check_communication_method: 'Please select atleast one communication method.',
			},
			"data[Contacts][category][]": {
				check_category: 'Please select atleast one category.',
			},
			"data[Contacts][message]": {
				required: 'Please enter description.',
			},
			"data[Contacts][budget]": {
				required: 'Please select project budget.',
			},
			"data[Contacts][time_frame]": {
				required: 'Please select when do you want to get started?.',
			},
		},
		errorPlacement: function (error, element) {
			return true;
		},
		invalidHandler: function (form, validator) {
			var errors = validator.numberOfInvalids();
			var errorMsgs = '';
			$.each(validator.invalid, function (key, val) {
				errorMsgs += val + '<br />';
			});
			if (errorMsgs) {
				$('.gritter-item-wrapper').remove();

				/* $.gritter.add({
				    title: 'Quote Error:',
				    fade_in_speed: 'medium',
				    fade_out_speed: 2000,
				    time: 3000,
				    text: errorMsgs,
				    sticky: false,
				    class_name: 'growl-danger',
				}); */
			}
		}
	});



function checkStep(element) {
	var step = $('#step_value').val();
	var id = element.id;
	if (step == 1) {
		return false;
	} else if (step == 2) {
		if (id.indexOf('ContactsCategory_') >= 0) {
			return true;
		} else {
			return false;
		}
	} else if (step == 3) {
		if (id.indexOf('ContactsMessage2') >= 0 || id.indexOf('ContactsCategory_') >= 0) {
			return true;
		} else {
			return false;
		}
	} else {
		return true;
	}
}

function stepValidateRequestQuote(step) {
	$('#step_value').val(step);
	if (step == 1) {} else if (step == 2) {} else if (step == 3) {}

	var IsValidForm = false;
	if ($('#requestQuoteForm').valid()) {
		IsValidForm = true;
	} else {
		IsValidForm = false;
	}
	return IsValidForm;
}
            
function validateRequestQuote(){
	$('#step_value').val(4);
	if($('#requestQuoteForm').valid()){
		var recapcharesponse2 = grecaptcha.getResponse( CRecaptchaField2 ); 

		// if($.trim($('#g-recaptcha-response').val().length > 1) == 'false') {

			if(!recapcharesponse2) {
			$('.gritter-item-wrapper').remove();
			/* $.gritter.add({
				title: 'Captcha error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: "Captcha code is required.",
				sticky: false,
				class_name: 'growl-danger',
			}); */
			$('#RecaptchaField2').addClass('newsletter_form_error');
			return false;
		}  
		return true;
	} else  {
		return false;
	}
	$('#requestQuoteForm').unbind('submit');	
}



$(document).on('ready', function () { 
	var s;
	var RecapLength1 = 0;
	var RecapLength2 = 0;
	var RecapLength3 = 0;
	var CRecaptchaField1 = '';
	var CRecaptchaField2 = '';
	var CRecaptchaField3 = '';
	var CRecaptchaField4 = '';
	
	var  CaptchaCallback = function () {
		//RecapLength1 = $('#RecaptchaField1').length; 
		RecapLength1 = document.getElementById("RecaptchaField1");
		if (RecapLength1 !== null) {
			CRecaptchaField1 = grecaptcha.render('RecaptchaField1', {
				'sitekey': '6LfhJhcUAAAAABDENatVe90Kw4-pWz6vodN3pzDa'
			});
		}
	
		//RecapLength2 = $('#RecaptchaField2').length; 
		RecapLength2 = document.getElementById("RecaptchaField2");
		if (RecapLength2 !== null) {
			CRecaptchaField2 = grecaptcha.render('RecaptchaField2', {
				'sitekey': '6LfhJhcUAAAAABDENatVe90Kw4-pWz6vodN3pzDa'
			});
		}
	
		//RecapLength3 = $('#RecaptchaField3').length; 
		RecapLength3 = document.getElementById("RecaptchaField3");
		if (RecapLength3 !== null) {
			CRecaptchaField3 = grecaptcha.render('RecaptchaField3', {
				'sitekey': '6LfhJhcUAAAAABDENatVe90Kw4-pWz6vodN3pzDa'
			});
		}
	
		//RecapLength4 = $('#RecaptchaField4').length; 
		RecapLength4 = document.getElementById("RecaptchaField4");
		if (RecapLength4 !== null) {
			CRecaptchaField4 = grecaptcha.render('RecaptchaField4', {
				'sitekey': '6LfhJhcUAAAAABDENatVe90Kw4-pWz6vodN3pzDa'
			});
		}
	
	};
	

	$("#step1").on("click", function (event) {
		event.stopPropagation();
		var anchor = $("#what-you-making");
		var position = anchor.position().top + $('.popup-header').height() + 134;
		$(".start-projectinner").animate({
			scrollTop: position
		}, 1000, 'swing');
	});

	$("#step2").on("click", function () {
		var anchor = $("#what-you-making2");
		var position = anchor.position().top + $('.popup-header').height() + 134;
		$(".start-projectinner").animate({
			scrollTop: position
		}, 1000, 'swing');
	});

	$("#step3").on("click", function () {
		var anchor = $("#time-framework");
		var position = anchor.position().top + $('.popup-header').height() + 134;
		$(".start-projectinner").animate({
			scrollTop: position
		}, 1000, 'swing');
	});

	$('.checkbox2 input:checkbox').change(function () {
		if ($(this).is(":checked")) {
			$(this).parent().parent().addClass("checked");
		} else {
			$(this).parent().parent().removeClass("checked");
		}
	});


	/* this script used for inquery section Great, tell us about your project */
	$('.common-textarea').on('change keyup keydown paste cut', 'textarea', function () {
		$(this).height(0).height(this.scrollHeight);
	}).find('textarea').change();

	$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true // 100% fit in a container
	});

	$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
	});


}); // end doc ready


// $(function () {
// 	SyntaxHighlighter.all();
// });


function imgError(image, path) {
	image.onerror = "";
	if (path) {
		image.src = path;
	} else {
		image.src = "img/no-image100x100.jpg";
	}
	return true;
}


/* console.log( $.cookie('CakeCookie[User][eapi_id]') );
         
console.log( $(location).attr('href') ); */

//alert(readCookie('CakeCookie[User]') );

//alert( JSON.parse( $.cookie('CakeCookie[User]') ).eapi_id  );

//if( $.cookie('CakeCookie[User][eapi_id]') != undefined )

var cookies = '';

if ($.cookie('CakeCookie[User]') != undefined) {
	cookies = JSON.parse($.cookie('CakeCookie[User]'));
}

if (cookies != undefined && cookies != '' && cookies.eapi_id != undefined && cookies.eapi_id != '') {
	//alert("fff");

	var locationVar = $(location).attr('href');

	// var eapi_idCookie = $.cookie('CakeCookie[User][eapi_id]') ;

	var eapi_idCookie = cookies.eapi_id;

	var pageTitle = $('title').html();
	$.ajax({
		type: "POST",
		url: "https://www.konstantinfo.com/contacts/user_visits/" + eapi_idCookie,
		data: {
			eapi_id: eapi_idCookie,
			page: locationVar,
			title: pageTitle
		},
		success: function (data) {

		}

	});
}


function onTaskCloneScroll() {
	var scrollPos = $(document).scrollTop();
	//alert('scrollPos-'+scrollPos);
	$('.common--cust-nav a').each(function () {
		//console.log($(this)); return false;
		var currLink = $(this);
		var refElement = $(currLink.attr("href"));

		var top_position = refElement.position().top - 200;
		if (top_position <= scrollPos && top_position + refElement.height() > scrollPos) {
			$('.common--cust-nav a').removeClass("active");
			currLink.addClass("active");
		}
	});
}

         
$(".Page-scrolling-fixed-nav li").hover(
	function() {
		$('ul').addClass("hovering");
		$(this).addClass("hover").siblings("li").removeClass("hover");
	},
	function() {
		$('ul').removeClass("hovering");
		$(this).removeClass("hover");
	}
);

var bannerSectionHeight = $('.Page-scrolling-fixed-banner').height() - 200;
if($('.Page-scrolling-fixed-banner').length > 0){
	$(window).scroll(function() {
	   // console.log($(this).scrollTop());
		if ($(this).scrollTop() > bannerSectionHeight){  
			$('header').addClass("sticky fadeInM animated1");
			$('.Page-scrolling-fixed-nav').addClass("scroll-nav-fixed fadeInM animated1");
			$('.custom-navbar.mobile-nav').addClass("sticky");
		}else{
			$('header').removeClass("sticky fadeInM animated1");
			$('.Page-scrolling-fixed-nav').removeClass("scroll-nav-fixed fadeInM animated1");
			$('.custom-navbar.mobile-nav').removeClass("sticky");
		}

	});
}

(function () {
	$("#progressbar").show();
	$(window).scroll(function () {
		var s = $(document).scrollTop(),
			d = $(document).height() - $(window).height();
		$("#progressbar").attr('max', d);
		$("#progressbar").attr('value', s);
	});
})();

window.__lc = window.__lc || {};
window.__lc.license = 8684871;
(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();

window.intercomSettings = {
	app_id: "emnqcxhx"
};

(function () {
	var w = window;
	var ic = w.Intercom;
	if (typeof ic === "function") {
		ic('reattach_activator');
		ic('update', intercomSettings);
	} else {
		var d = document;
		var i = function () {
			i.c(arguments)
		};
		i.q = [];
		i.c = function (args) {
			i.q.push(args)
		};
		w.Intercom = i;

		function l() {
			var s = d.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = 'https://widget.intercom.io/widget/emnqcxhx';
			var x = d.getElementsByTagName('script')[0];
			x.parentNode.insertBefore(s, x);
		}
		if (w.attachEvent) {
			w.attachEvent('onload', l);
		} else {
			w.addEventListener('load', l, false);
		}
	}
})();

$(function(){
	// $(document).on('click','ul.flex-direction-nav li',function () {
	// 	var currLink 	= $(this);
	// 	var selectedId 	= currLink.parents('section').attr("id");
	// 	selectedId 		= '#'+selectedId;
	// 	//alert(selectedId);
	// 	var topSet = -140;
	// 	if($(selectedId).hasClass('get-in-touch-section')) {
	// 		 topSet = -300;
	// 	}
	// 	$.smoothScroll({
	// 	  scrollTarget: selectedId,
	// 	  speed: 1000,
	// 	  offset: topSet
	// 	});
	// });
	
	$('html').click(function (e) {
		var clickElementId = e.target.id;
		if (clickElementId.indexOf("portfoliotestimonialli_") >= 0){
			var self = $('#'+clickElementId);
			self.toggleClass( "active" );
		}else if (clickElementId.indexOf("portfoliotestimoniala_") >= 0){
			var self = $('#'+clickElementId).parent();
			self.toggleClass( "active" );
		}else if (clickElementId.indexOf("portfoliotestimoniali_") >= 0){
			var self = $('#'+clickElementId).parents('li');
			self.toggleClass( "active" );
		} else {
			var self = $('[id^="portfoliotestimonialli_"]');
			self.removeClass( "active" );
		}
		
		if (clickElementId.indexOf("main_toggle_vidwrap-") >= 0){
			$('.theater-toggle').trigger("click");
		}
	});
	
	$('.flexslider').flexslider({
		animation: "slide",
		slideshow:false,
		start: function(slider){
		  $('body').removeClass('loading');
		}
	});
}); 

//-------------------------------------------------------------------- 
//-------------------------------------------------------------------- 
//--------------------------------------------------------------------


$(document).ready(function(){
	var countPress = parseInt('14');
	var countInterview = parseInt('10');
	var press_page = 1;
	$("#loadmore_press").click(function() {
		press_page++;
		loadMedai('press',countPress,press_page);
	}); 

	var interview_page = 1;
	$("#loadmore_interview").click(function() {
		interview_page++;
		loadMedai('interview',countInterview,interview_page);
	});
	
});

function loadMedal(ttype, totalRecords, page){
	var loader = $('#Loader_press');
	var loader_btn = $('#loadmore_press');
	if(ttype=='interview'){
		var loader = $('#Loader_interview');
		var loader_btn = $('#loadmore_interview');
	}
	if(!page){
		page = 1;
	}
	var action = "https://www.appsquadzinfo.com/homes/load_media/page:"+page;
	$.ajax({
		type:"POST",
		url:action,
		data:{media_type:ttype},
		beforeSend: function() {
			loader.show();
			loader_btn.hide();
		},
		success: function(data){
			if(data != 'bottom_reached') {
				loader.hide();
				loader_btn.show();
				if(ttype == 'press') {
					$('#div_press').before(data);
					if(totalRecords > $('.marginb30').length) {
						$('#loadmore_press').show();
					}else{
						$('#loadmore_press').hide();
					}
				}else if(ttype == 'interview') {
					$('#div_interview').before(data);
					if(totalRecords > $('.interview-block-box').length) {
						$('#loadmore_interview').show();
					}else{
						$('#loadmore_interview').hide();
					}
				}
			}else{
				//$('#loadmore_press').hide();
				//$('#loadmore_interview').hide();
				loader.hide();
				loader_btn.hide();
			}
		},
		complete: function(){
		}
	});
}



var pageNumber 	= 1;
var totalCount  	= parseInt('39'); 
$(document).ready(function(){
	$('#loadmore_data a').addClass('active');
	loadSurveyTestimonials();
	
	$("#loadmore_data").click(function() {
		loadSurveyTestimonials();
	});
	
});

function loadSurveyTestimonials(){
	var actionurl = "https://www.konstantinfo.com/survey/loadMoreSurveyTestimonials/page:"+pageNumber;
	$.ajax({
		type:"POST",
		url:actionurl,
		beforeSend: function() {
			$('#loadmore_data a').addClass('active');
		},
		success: function(data){
			if(data != 'bottom_reached') {
				$('#survey_testimonials_div').append(data);
				if(totalCount > $('.count-list').length) {
					$('#loadmore_data').show();
				}else{
					$('#loadmore_data').hide();
				}
				pageNumber +=1;
			}else{
				$('#loadmore_data').hide();
			}
			
		},
		complete: function(){
			$('#loadmore_data a').removeClass('active');
		}
	});
}


// ---------------LIGHTSLIDER CODE-----------------------

$(".ncs-animateblock").on("mouseenter", function(){
	$(".ncs-animateblock .about_client").addClass("animate");
	$(".ncs-animateblock .about_client > h4").addClass("font-60");
	$(".ncs-animateblock .about_client > h1").addClass("font-130");
});
$(".ncs-animateblock").on("mouseleave", function(){
	$(".ncs-animateblock .about_client").removeClass("animate");
	$(".ncs-animateblock .about_client > h4").removeClass("font-60");
	$(".ncs-animateblock .about_client > h1").removeClass("font-130");
});
$(".casestudy-ncs .solution-block").on("mouseenter", function(){
	$(this).addClass("bg-blue");
	$(this).find("p, h2").addClass("text-white");
});
$(".casestudy-ncs .solution-block").on("mouseleave", function(){
	$(this).removeClass("bg-blue");
	$(this).find("p, h2").removeClass("text-white");
});

$(".content-slider").lightSlider({
	loop:true,
	keyPress:true
});

