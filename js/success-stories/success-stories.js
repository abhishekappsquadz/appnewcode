$(document).ready(function() {

	function successStroiesFunction(){
		if (window.innerWidth > 991) {
			$(window).scroll(function () {
				var successStoriesIndicatorInit = $('.success-stories').offset().top - 1;
				var successStoriesIndicatorEnd = $('.success-stories').offset().top + $('.success-stories').height() - window.innerHeight + 1;
				if ($(window).scrollTop() > successStoriesIndicatorInit && $(window).scrollTop() < successStoriesIndicatorEnd) {
					$('.success-stories-indicator').addClass('active');
					$('.success-screens').addClass('active');
				} else {
					$('.success-stories-indicator').removeClass('active');
					$('.success-screens').removeClass('active');
				}
			});
			$('.success-story-item').each(function (i) {
				$('.success-stories-indicator ul').append('<li class="ssindicate' + i + '"></li>');
			});
			$('.success-stories-indicator ul').css({
				'margin-top': $('.success-stories-indicator ul').height() / -2
			});
			$(".success-stories").sectionsnap({
				delay: 100,
				reference: 1,
				selector: '.success-story-item',
				animationTime: 400,
				offsetTop: 100,
				offsetBottom: 80
			});
		}
		
	}
	
	function returnFalse(){
		console.log("returnFalse()");
	}

	($(".success-stories").length)?successStroiesFunction():returnFalse();
});