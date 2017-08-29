(function($){
	var tagInterval;
	var event_type = 'touchstart';
	
	function getUrlVars() {
	    var hash;
	    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	    
	    for(var i = 0; i < hashes.length; i++)
	    {
	        hash = hashes[i].split('=');	        
	        
	         if (hash[0] === "gclid" && $('#input_23_12').length === 1) {
		      $('input#input_23_12').val(hash[1]);  
	        }
	        
	         if (hash[0] === "gclid" && $('#input_22_27').length === 1) {
		      $('input#input_22_27').val(hash[1]);  
	        }	 
	        
	        if (hash[0] === "gclid" && $('#input_26_24').length === 1) {
		      $('input#input_26_24').val(hash[1]);  
	        }	  
	        
	        if (hash[0] === "gclid" ) { 
		    $.cookie(hash[0], hash[1], {expires: 1, path: '/'});  
	        }   
	        
	    }
	}
	
	getUrlVars();

	$(document).ready(function (){
	
	$.getScript("https://api.feefo.com/api/javascript/tlw-solicitors");
		
	 $('.main-txt > p,h1,h2,h3,h4,h5,h6').widowFix({
		 letterLimit: 10
	 });
	 
	 $('.services-nav-link > span.title span').widowFix({
			 letterLimit: 10
	  });
	  
	 $('.credit > a span.description').widowFix({
			 letterLimit: 10
	  });
	 
	 $('a.article-link > span.title span').widowFix({
			 letterLimit: 10
	  });
	
	 $(".selectpicker").selectpicker({
      style: 'btn-default btn-lg hp-select',
      mobile: true,
      size: 5
	  });
	  
	  $('.selectpicker').find('select').selectpicker({
		style: 'btn btn-group btn-default', 
		mobile: true,
		width: '100%'
	});
	
	/* 	MAIN TOP NAVIGATION FUNCTIONS 
		Button functions to open top navigation and 
		control the internal menu functions as well
		as close the menu.
	*/
	
	$('body').on(event_type,'button#nav-btn', function(){
		
		var inner_h = $('#top-nav').find('.nav-wrapper').outerHeight();
				
			$('#top-nav').animate({height: "95vh"}, 300, function(){
				
				$('body').toggleClass('nav-closed nav-open');
				$(this).toggleClass('nav-closed nav-open').removeAttr('style');	
				
			});
				
		return false;
		
	});
	
	$('#top-nav').on(event_type,'button#close-nav', function(){
			
			$('#top-nav').animate({height: "0px"}, 300, function(){
				
				$('body').toggleClass('nav-open nav-closed');
				$(this).toggleClass('nav-open nav-closed').removeAttr('style');	
				$('li.with-sub-nav').removeClass('sub-open').addClass('sub-closed');
				
			});
			
			return false;
			
		});
	
	$('#top-nav').on('click', "li.with-sub-nav > a", function(){
		var parent = $(this).parent();
		var siblings = $(parent).siblings();
		
		$(parent).siblings().removeClass('sub-open').addClass('sub-closed');
		
		if ($(siblings).find('.sub-open').length > 0) {
		$(siblings).find('.sub-open').removeClass('sub-open').addClass('sub-closed');		
		}
		
		//console.log($(siblings).find('.sub-open').length);
		
		$(parent).toggleClass('sub-open sub-closed');

	return false;	
	});
 	
	$('body').on('click', "li.with-sub-nav > a", function(){
		var parent = $(this).parent();
		$(parent).siblings().removeClass('sl-tl-open').addClass('sl-tl-closed');
		
		if ($(parent).hasClass('top-level')) {
			$(parent).find('.sl-tl-open').removeClass('sl-tl-open').addClass('sl-tl-closed');
		}
		
		$(parent).toggleClass('sl-tl-open sl-tl-closed');
		
		
	return false;	
	});
	
	/* 	HEADER SEARCH BUTTON 
		Button functions for search pop up menu
	*/
	
	$('body').on(event_type,'button#search-btn', function(){
	
		if ( $('#search-pop-up').hasClass('off') ) {
			
			$('#search-pop-up').removeClass('off').addClass('on');
			$('body').addClass('search-open');
		} 
		
		return false;
		
	});
	
	$('body').on(event_type,'button#close-search', function(){
	
		if ( $('#search-pop-up').hasClass('on') ) {
			$('#search-pop-up').removeClass('on').addClass('turn-off');
			
			$('.turn-off').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
				$(this).removeClass('turn-off').addClass('off');	
				$('body').removeClass('search-open');
			});

		} 
		
		return false;
		
	});
	
	/* 	ROUTE FINDER BUTTON 
			Button functions for route finder pop up
		*/
		
		$('body').on(event_type,'button#route-finder-btn', function(){
				
			$('#route-finder-pop-up').toggleClass('off on');
			$('body').addClass('route-finder-open');
			
			return false;
			
		});
		
		$('body').on(event_type,'button#close-route-finder', function(){	
			
			if ( $('#route-finder-pop-up').hasClass('on') ) {
				
				$('#route-finder-pop-up').removeClass('on').addClass('turn-off');
				
				$('.turn-off').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			
					$(this).removeClass('turn-off').addClass('off');
					$('body').removeClass('route-finder-open');
					
				});
	
			} 
					
			return false;
		});
		
		/* END OF ROUTE FINDER BUTTON FUNCTIONS */

    
    /* POST CONTINUE READING BUTTONS
	   Functions for the read more button which reveals more
	   content it also has a close function as well. 
    */
    
	$('body').on(event_type,'button#continue-read-btn', function(){
		
		var inner_h = $('#content-extra-inner').outerHeight();
		var container = $("#main-content");
		var scrollTo = $("#content-extra");
		
		container.animate({
		scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop() - 85
		});
		    	
		$('button#continue-read-btn').addClass('hidden');
		
		$('#content-extra').animate({height: inner_h+"px"}, 500, function(){
			$('#content-extra').removeClass('closed').addClass('open').removeAttr('style');
		});

		return false;
		
	});
	
	$('body').on(event_type,'button#close-content-extra-btn', function(){
		
		var parent_pos = $('#content-extra-inner').parent().position().top;
		var container = $("#main-content");
		var scrollTo = $(".content-section");
		
		container.animate({
		scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop() - 105
		});
		
		$('button#continue-read-btn').removeClass('hidden');
		
		//$('main').animate({scrollTop: parent_pos}, 500);
			
		$('#content-extra').animate({height: "0px"}, 500, function(){
			$('#content-extra').removeClass('open').addClass('closed').removeAttr('style');	
		});	
		
		return false;
		
	});
		
	/* XMAS Pop up Function
	  This function controls the Xmas pop up box
    */
    
    	var xmasBox = function(){

			if ($('#xmas-popup-wrap').length === 1 && $('#xmas-popup-wrap').hasClass('pop-up-inactive')) {
				
				$('#xmas-popup-btn-wrap').removeClass('pop-up-inactive').addClass('pop-up-active');
		
				$('#xmas-popup-wrap').fadeIn('slow', function(){
				
					$('.xmas-popup-inner').removeClass('hidden').addClass('animated slideInUp');
				
				});
			
			}
    
		};

    	//Transition end actions
	    $('.xmas-popup-inner').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			
			if ($(this).hasClass('bounceOutDown')) {
			 $('#xmas-popup-wrap').fadeOut('fast').removeClass('pop-up-active').addClass('pop-up-inactive');	
			 $('#xmas-popup-btn-wrap').removeClass('pop-up-active').addClass('pop-up-inactive');
			 $(this).removeClass('animated bounceOutDown').addClass('hidden');
			}
		});
		
		//Button actions
		
		$('body').on(event_type,'button#xmas-popup-btn-open', function(){
	    	
	    	xmasBox();    			
			return false;
			
		});
	
	    
	    $('body').on(event_type,'button#close-xmas-popup', function(){
		    
		   $('.xmas-popup-inner').removeClass('slideInUp').addClass('bounceOutDown');   
	    	      			
			return false;
			
		});
	    
	    /* FAQ's BUTTON ACTIONS
		This function controls the FAQ's next and previous buttons
	    */
	    
	    
	     $('body').on(event_type,'.faq-nav > button', function(){  
		     
		    var faq_id = $(this).data().src;
		    var container = $("#main-content");
		    var scrollTo = $("section#faqs-section");
		   
		    $(this).siblings().removeClass('btn-active');
		    $(this).addClass('btn-active');
		    		    
		   container.animate({
		   scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop() - 85
		   });
	
		    $('.faq-item.active').animate({top: '100%', opacity: 0}, 300, function(){
				$(this).removeClass('active'); 
		    });
		    
		    $('#'+faq_id).animate({top: '0%', opacity: 1}, 500, function(){
				$('#'+faq_id).addClass('active');     
		    });
			
			return false;
			
		});
		/* END FAQ's BUTTON ACTIONS */
	  
		
		/* VIDEO LINKS BUTTON ACTIONS
		These functions control the pop up videos
		that show that embed the your Tube video into the pop up inner wrapper
	    */
	  
	  $('a.video-link').on(event_type, function(){
			var video_id = $(this).attr('href');
			var video = $(video_id).find('video');
			var video_wrap_id = $(video).attr('id')+"-viewing";
			
			$('body').addClass('video-open');
			
			$('#video-viewer').animate({top: '0px', opacity: 1}, 500, function(){
				$(this).toggleClass('viewer-closed viewer-open').removeAttr('style');
				$(video).clone().attr('id', video_wrap_id).appendTo('.video-viewer-inner');
			});
			
			return false;
		});
		
	  $('button#close-video').on(event_type, function(){
			
			$(this).parent().animate({top: '100%', opacity: 0}, 500, function(){
				$(this).toggleClass('viewer-open viewer-closed').removeAttr('style');
				$(this).find('.video-viewer-inner').empty();
				$('body').removeClass('video-open');
			});
			
			return false;

		});
		
		/* POST GALLERY FUNCTION */
		
		$('body').on(event_type,'a.gallery-img-link', function(){
			
			$(this).parent().siblings().removeClass('active');
			$(this).parent().addClass('active');
			var path = $(this).attr('href');
			var target = $('.gallery-items-viewer');
			var img = new Image();
			$(target).empty();
			
			$(img).attr('src', path).addClass('animated fadeIn').appendTo(target);
			
			//console.log(img);
			
		
		return false;
		
		});
			
	});	
	
	$(window).bind('load',function(){
		
		setTimeout(function(){
        	$('body').removeClass('loading');
        	
        	if ($('#wide-map-canvas').length === 1) {
			initMap();	
			}
			
		}, 2000);
		
		$('.has-bg-img').each(function(index, Element) {
				var src = $(Element).data('src');
				//console.log(src);
				if (src !== undefined) {
				$(Element).css('background-image', 'url(' +src+ ')');
	  			}
			});
	
	});

	
})(window.jQuery);