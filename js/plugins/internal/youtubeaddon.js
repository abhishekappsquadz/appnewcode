
var players = {};
$(".theater-toggle").unbind('click');
$(document).on("click",".theater-toggle",function(e){
	
	var video = $(".iFrmeClass")
	var theaterToggle = $(".theater-toggle"); 
	var clickedId = $(this).attr('id');
	var clickedIdNew = clickedId.replace("toggle", "iframe");
	
	$("#main_"+clickedId).remove();
	var idStr = video.attr('id');
	
	console.log(clickedIdNew);
	$(".iFrmeClass").not( "#"+clickedIdNew ).removeClass("theater");  
	  
	if( $("#"+clickedId).hasClass('glyphicon-fullscreen') ){
		$('.client-comment-block').addClass('animation-none');
		$("body").addClass('no-scroll');
		$("#main_"+clickedId).addClass('watch-full-video-block');
		$("#"+clickedId).removeClass('glyphicon-fullscreen');
		$("#"+clickedId).addClass('glyphicon-resize-small');
		//setTimeout( function(){ $("#main_"+clickedId).addClass('watch-full-video-block'); }, 1000);	
	}else{
		$('.client-comment-block').removeClass('animation-none');
		$("body").removeClass('no-scroll');
		$("#main_"+clickedId).removeClass('watch-full-video-block');
		$("#"+clickedId).removeClass('glyphicon-resize-small');
		$("#"+clickedId).addClass('glyphicon-fullscreen'); 
		
	}
	$("#"+clickedIdNew).toggleClass("theater"); 
}) ;

var current = '';
function play(data){ 
	if(!$(data).parents('.item').hasClass('cr-active')){
		return false;
	}
	$('.client-comment-block').addClass('animation-none');
	$("body").addClass('no-scroll');
	var url = $(data).attr('data-att');
	var id = $(data).attr('id');
		 
	var clickedIdNew1 =  'toggle_' + id;
	console.log(clickedIdNew1);
		
	console.log($("#"+clickedIdNew1).length);
	if( $("#"+clickedIdNew1).length !== 0 ){
		return false;
	}
	
	
	console.log('play');	
	//$( "#"+id ).hide();
	$( '<div id="main_'+clickedIdNew1+'" class="watch-full-video-block"><div><button class="bcm_btn theater-toggle glyphicon glyphicon-remove" style="display:none;" id="'+clickedIdNew1+'" ></button> <iframe class="iFrmeClass"   id="iframe_' + id + '" frameborder="0" allowfullscreen width="370" border="0" height="206" src="' + url + '"></iframe></div></div>' ).insertAfter( "#"+id );
		
	current =  "iframe_"+id;
	players["iframe_"+id] = new YT.Player( "iframe_"+id, { 
		events: {
			// call this function when player is ready to use
			'onStateChange': function(e){ 
				//console.log(e);
				if( e.data == 1 ){
					current = e.target.a.id ; 
					stop(current);
				}
			} 
		},
		'onReady' : function(e){ console.log('ready'); }
	});
	   
	setTimeout( function(){ 
		//$(data).closest('div').removeClass('fadein');
		//$(data).removeClass('video-btn-play');  
		$('#'+clickedIdNew1).show(); 
	}, 300);	
} 

function stop(current){ 
	for(i=0; i< Object.keys(players).length ;i++){
		if( Object.keys(players)[i] != current ){
			players[Object.keys(players)[i]].pauseVideo();
		}
	}
}



// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "http://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
