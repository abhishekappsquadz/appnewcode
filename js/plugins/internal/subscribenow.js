
var wait = 'Please wait...';
var normaltxt = 'Subscribe Now';
var loaderSubmit = $('input#subscribe_now');

$(document).on('click', '#get-the-news-open', function () {

	loaderSubmit.removeAttr('disabled');
	loaderSubmit.attr('value', normaltxt);
	$('#newsletter_email').removeClass('newsletter_form_error');
	$('#newsletter_email').val('');
	$('#newsletter_email').focus();
});

$(document).on('click', 'input#subscribe_now', function () {

	var newsletter_email = $('#newsletter_email').val();
	var email_re = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
	if (!email_re.test(newsletter_email) || !newsletter_email.trim()) {
		$('#newsletter_email').addClass('newsletter_form_error');
		$('#newsletter_email').focus();
		return false;
	} else {
		$('#newsletter_email').removeClass('newsletter_form_error');
	}

	var recapcharesponse = grecaptcha.getResponse(CRecaptchaField3);
	if (!recapcharesponse) {
		$('#RecaptchaField3').addClass('newsletter_form_error2');
		return false;
	} else {
		$('#RecaptchaField3').removeClass('newsletter_form_error2');
	}

	var error = $('#newsletter_error');
	var form = $('#site-searchform1');

	var frm_serialize_data = jQuery("#site-searchform1").serialize();
	var action = "contacts/newsletter.html";
	$.ajax({
		type: "POST",
		url: action,
		//data:{email: newsletter_email },
		data: frm_serialize_data + "&email=" + newsletter_email,
		beforeSend: function () {

			loaderSubmit.attr('disabled', 'disabled');
			loaderSubmit.attr('value', wait);

			error.hide();
		},
		success: function (data) {
			//console.log(data); 
			if (data) {
				//success 
				//send to thanks-for-subscribe.php
				//$('#newsletter_email').val(''); 
				form.attr('action', data);
				form.submit();
			} else {
				error.show();

				loaderSubmit.removeAttr('disabled');
				loaderSubmit.attr('value', normaltxt);

				//alert(data);
			}
			//$('#newsletter_email').val(''); 
		},
		complete: function () {

		}
	});
});