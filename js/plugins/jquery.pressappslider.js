$(function(){
	$("#pressappslider").slick({
		dots: false,
		infinite: true,
		centerMode:false,
		slidesToShow: 7,
		slidesToScroll: 1,
		autoplay:true,
		rows: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			}
		]
	});
});