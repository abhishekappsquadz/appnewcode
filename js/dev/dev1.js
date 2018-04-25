
// ---------------LIGHTSLIDER CODE-----------------------


$(document).ready(function($) { 
	$('a').attr('tabindex',-1); 
});

window.intercomSettings = {
	app_id: "emnqcxhx"
};

$(document).ready(function($) { 
	$('a').attr('tabindex',-1); 

});


function returnFalse(){
    return false;
}
function androidAppDevAnimation(){
    var $win = $(window);
    $win.on("scroll", function(){
        var $ele1 = $("#overflow-slide_1") || " ";
        var $ele2 = $("#ourTeamSection .front-img") || " ";
        var $imgsForAnimation1 = $(".transforming-imgs .imageforanimate1");
        var $imgsForAnimation2 = $(".transforming-imgs .imageforanimate2");
        var $imgsForAnimation4 = $(".transforming-imgs .imageforanimate4");
        
        var pos = $win.scrollTop();
        var offsetpos1 = $ele1.offset().top;
        var offsetpos2 = $ele2.offset().top;
        
        if( pos > (offsetpos1 - 600 ) ) {
            $imgsForAnimation1.addClass("animation-img1");
            $imgsForAnimation2.addClass("animation-img2");
            $imgsForAnimation4.addClass("animation-img4");
        }
        else {
            $imgsForAnimation1.removeClass("animation-img1");
            $imgsForAnimation2.removeClass("animation-img2");
            $imgsForAnimation4.removeClass("animation-img4");
        }
        
        if( pos > (offsetpos2 - 600 ) ){
            $ele2.addClass("rightto63");
        }
        else{
            $ele2.removeClass("rightto63");
        } 
    });
}
($("#overflow-slide_1, #ourTeamSection .front-img").length)?androidAppDevAnimation():returnFalse();


    // Android app development button trigger for light slider 
    $(".overFlow_Detail .button1").bind("click", (function () {
        $(".slick-slider > .slick-prev").trigger("click");
        
    }));
$(".button2").bind("click", (function () {
    $(".slick-slider > .slick-next").trigger("click");
}));

$(".regular").slick({
    dots: true,
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 1
});

$(".regular1").slick({
	dots: true,
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1
});


document.querySelector("#loadmore").addEventListener("click", function(){
	document.querySelector("#news_data").classList.add("news_data_load_more");
	console.log("Button Clicked");
	this.classList.add("no-display");
});

$('#iv').imageview();
