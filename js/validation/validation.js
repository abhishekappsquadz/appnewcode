//Form Validations by kiplphp48
$.validator.setDefaults({
	highlight: function (element) {

		$(element).closest('.form-group').addClass('error');

		var elementid = element.id;
		if (elementid.indexOf('ContactsCommunicationMethod_') >= 0) {
			$('[id^="ContactsCommunicationMethod_"]').each(function () {
				$(this).closest('.checkbox2').addClass('error');
			});
		}

		if (elementid.indexOf('ContactsCategory_') >= 0) {
			$('[id^="ContactsCategory_"]').each(function () {
				$(this).closest('.checkbox2').addClass('error');
			});
		}

		if (elementid.indexOf('quoteby_') >= 0) {
			$('[id^="quoteby_"]').each(function () {
				$(this).closest('.checkbox2').addClass('error');
			});
		}

	},
	unhighlight: function (element) {
		$(element).closest('.form-group').removeClass('error');

		var elementid = element.id;
		if (elementid.indexOf('ContactsCommunicationMethod_') >= 0) {
			$('[id^="ContactsCommunicationMethod_"]').each(function () {
				$(this).closest('.checkbox2').removeClass('error');
			});
		}

		if (elementid.indexOf('ContactsCategory_') >= 0) {
			$('[id^="ContactsCategory_"]').each(function () {
				$(this).closest('.checkbox2').removeClass('error');
			});
		}

		if (elementid.indexOf('quoteby_') >= 0) {
			$('[id^="quoteby_"]').each(function () {
				$(this).closest('.checkbox2').removeClass('error');
			});
		}
	},
	errorElement: 'span',
	errorClass: 'help-block',
	errorPlacement: function (error, element) {
		if (element.parent('.form-control').length) {
			error.insertAfter(element.parent());
		} else {
			error.insertAfter(element);
		}
	}
});


// --------validation for lets talk or get in touch--------------------------
function validateGetintouch() {

	$("#get_in_touch").validate({
		rules: {
			"name": {
				required: true,				
			},
			"country": {
				required: true
			},
			"email": {
				required: true,
				email: true
			},
			"mobile": {
				required: true,
				minlength: 5,
				maxlength: 15,
				number: true
			},
			//"skype_whatsapp": {required: true},
			"category": {
				required: true
			},
			//"message": {required: true},
			"budget": {
				required: true
			},
			"preferences": {
				required: true
			}
			//"file": {required: true},
		},
		messages: {
			"name": {
				required: 'Please enter your name.'
			},
			"country": {
				required: 'Please enter your country .'
			},
			"email": {
				required: 'Please enter your email address.',
				email: 'Please enter valid email address.'
			},
			"mobile": {
				required: 'Please enter your phone number.',
				minlength: 'Phone number is no less than 5 digits.',
				maxlength: 'Phone number is no more than 15 digits.'
			},
			"category": {
				required: 'Please select category.'
			},
			//"skype_whatsapp": {
			//required: 'Please enter your skype id OR whatsapp.',
			//},
			"budget": {
				required: 'Please enter your budget.'
			},
			//"message": {
			//required: 'Please enter your message.',
			//},
			"preferences": {
				required: 'Please enter your preferences.'
			}
			//"file": {
			//required: 'Please enter your file.',
			//}
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
				$.gritter.add({
					title: 'Contact us error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: errorMsgs,
					sticky: false,
					class_name: 'growl-danger'
				});
			}
		}
	});


	$("#contactForm").validate({
		rules: {
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
			"data[Contacts][category]": {
				required: true
			},
			"data[Contacts][message]": {
				required: true
			},
			"data[Contacts][budget]": {
				required: true
			}
		},
		messages: {
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
			"data[Contacts][category]": {
				required: 'Please select interested in.',
			},
			"data[Contacts][message]": {
				required: 'Please enter your message.',
			},
			"data[Contacts][budget]": {
				required: 'Please enter your budget.',
			}
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
				$.gritter.add({
					title: 'Contact us error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: errorMsgs,
					sticky: false,
					class_name: 'growl-danger',
				});
			}
		}
	});

	if ($('#contactForm').valid()) {
		var recapcharesponse = grecaptcha.getResponse(CRecaptchaField1);
		//if($.trim($('#g-recaptcha-response').val().length > 1) == 'false') {
		if (!recapcharesponse) {
			$('.gritter-item-wrapper').remove();
			$.gritter.add({
				title: 'Captcha error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: "Captcha code is required.",
				sticky: false,
				class_name: 'growl-danger',
			});
			return false;
		}
		return true;
	} else {
		return false;
	}
	$('#contactForm').unbind('submit');



	if ($('#get_in_touch').valid()) {
		var recapcharesponse = grecaptcha.getResponse(CRecaptchaField1);
		//if($.trim($('#g-recaptcha-response').val().length > 1) == 'false') {
		if (!recapcharesponse) {
			$('.gritter-item-wrapper').remove();
			$.gritter.add({
				title: 'Captcha error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: "Captcha code is required.",
				sticky: false,
				class_name: 'growl-danger'
			});
			return false;
		}
		return true;
	} else {
		return false;
	}
	$('#get_in_touch').unbind('submit');
}


function validateWebDevPageForm() {

	$("#webPageDevForm").validate({
		rules: {
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
			"data[Contacts][category]": {
				required: true
			},
			"data[Contacts][message]": {
				required: true
			},
			"data[Contacts][budget]": {
				required: true
			}
		},
		messages: {
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
			"data[Contacts][category]": {
				required: 'Please select interested in.',
			},
			"data[Contacts][message]": {
				required: 'Please enter your message.',
			},
			"data[Contacts][budget]": {
				required: 'Please enter your budget.',
			}
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
					title: 'Contact us error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: errorMsgs,
					sticky: false,
					class_name: 'growl-danger',
				}); */
			}
		}
	});

	if ($('#webPageDevForm').valid()) {
		var recapcharesponse = grecaptcha.getResponse(CRecaptchaField4);
		if (!recapcharesponse) {
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
			$('#RecaptchaField4').addClass('newsletter_form_error');
			return false;
		}
		return true;
	} else {
		return false;
	}
	$('#webPageDevForm').unbind('submit');
}

$.validator.setDefaults({
	highlight: function (element) {
		$(element).closest('.form-group').addClass('error');
	},
	unhighlight: function (element) {
		$(element).closest('.form-group').removeClass('error');
	},
	errorElement: 'span',
	errorClass: 'help-block',
	errorPlacement: function (error, element) {
		if (element.parent('.form-control').length) {
			error.insertAfter(element.parent());
		} else {
			error.insertAfter(element);
		}
	}
});

function validateContact() {
	$("#contactForm").validate({
		rules: {
			"name": {
				required: true,
				lettersonly: true
			},
			"email": {
				required: true,
				email: true
			},
			"code": {
				required: true,
				number: true
			},
			"mobile": {
				required: true,
				minlength: 5,
				maxlength: 15,
				number: true
			},
			"category": {
				required: true
			},
			//"message": {required: true},
			"budget": {
				required: true
			},
			"preferences": {
				required: true
			},
		},
		messages: {
			"name": {
				required: 'Please enter your name.',
			},
			"email": {
				required: 'Please enter your email address.',
				email: 'Please enter valid email address.'
			},
			"mobile": {
				required: 'Please enter your phone number.',
				minlength: 'Phone number is no less than 5 digits.',
				maxlength: 'Phone number is no more than 15 digits.',
			},
			"mobile": {
				required: 'Please enter your code.',
			},
			"category": {
				required: 'Please select category.',
			},
			//"message": {
			// required: 'Please enter your message.',
			// },
			"preferences": {
				required: 'Please enter your preferences.',
			},

			// "file": {
			//   required: 'Please enter your file.',
			//},
			"budget": {
				required: 'Please enter your budget.',
			}

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
				$.gritter.add({
					title: 'Contact us error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: errorMsgs,
					sticky: false,
					class_name: 'growl-danger',
				});
			}
		}
	});

	if ($('#contactForm').valid()) {

		var recapcharesponse = grecaptcha.getResponse(CRecaptchaField1);

		//if($.trim($('#g-recaptcha-response').val().length > 1) == 'false') {
		if (!recapcharesponse) {
			$('.gritter-item-wrapper').remove();
			$.gritter.add({
				title: 'Captcha error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: "Captcha code is required.",
				sticky: false,
				class_name: 'growl-danger',
			});
			return false;
		}
		return true;
	} else {
		return false;
	}
	$('#contactForm').unbind('submit');
} ///ends
//////gets touch/

            	
var validator = $("#requestQuoteForm").validate({
	ignore: [],
	rules: {
		"data[Contacts][quoteby]": {check_quoteby: true},
		"data[Contacts][name]": {required: true },
		"data[Contacts][email]": {required: true, email:true},
		"data[Contacts][phone]": {required: true, minlength:5, maxlength:15},
		"data[Contacts][company]": {check_company: true },
		"data[Contacts][skypeid]": {check_skypeid: true },
		"country": {required: true},
		"data[Contacts][communication_method][]": {check_communication_method: true},
		"data[Contacts][category][]": {check_category: function(element) { return checkStep(element); } },
		"data[Contacts][message]": {required: function(element) { return checkStep(element); } },
		"data[Contacts][budget]": {required: function(element) { return checkStep(element); } },
		"data[Contacts][time_frame]": {required: function(element) { return checkStep(element); } },
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

function validateRequestQuote() {

	$("#requestQuoteForm").validate({
		//alert('ashwini');
		rules: {
			"name": {
				required: true,
			},
			// "email": {required: true, email:true},
			// "mobile": {required: true, minlength:5, maxlength:15},
			// "category": {required: true},
			//"message": {required: true},
			// "budget": {required: true},
			// "preferences": {required: true},					 
		},
		messages: {

			"name": {
				required: 'Please enter your name.',
			}
			//  "email": {
			//      required: 'Please enter your email address.',
			//      email: 'Please enter valid email address.'
			//  },
			//  "mobile": {
			//      required: 'Please enter your phone number.',
			//      minlength: 'Phone number is no less than 5 digits.',
			//      maxlength: 'Phone number is no more than 15 digits.',
			//  },
			//   "category": {
			//       required: 'Please select category.',
			//   },
			//"message": {
			// required: 'Please enter your message.',
			// },
			//"budget": {
			//     required: 'Please enter your budget.',
			//  },					

			// "preferences": {
			//    required: 'Please enter your preferences.',
			// }

			// "file": {
			//   required: 'Please enter your file.',
			//},


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
				$.gritter.add({
					title: 'Contact us error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: errorMsgs,
					sticky: false,
					class_name: 'growl-danger',
				});
			}
		}
	});

	if ($('#requestQuoteForm').valid()) {

		var recapcharesponse = grecaptcha.getResponse(CRecaptchaField1);

		//if($.trim($('#g-recaptcha-response').val().length > 1) == 'false') {
		if (!recapcharesponse) {
			$('.gritter-item-wrapper').remove();
			$.gritter.add({
				title: 'Captcha error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: "Captcha code is required.",
				sticky: false,
				class_name: 'growl-danger',
			});
			return false;
		}
		return true;
	} else {
		return false;
	}
	$('#requestQuoteForm').unbind('submit');
}

$('#country_id2').flagStrap({
	buttonSize: "btn-lg",
	buttonType: "btn-country",
	labelMargin: "20px",
	scrollable: true,
	scrollableHeight: "350px"
});

