(function ($, root, undefined) {



	$(function () {
        function getCookie(name) {
            var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }
        var alertwin = getCookie("exit-popoup");
        if (alertwin != "no") {
            $(document).mouseleave(function(e){
                if (e.clientY < 0) {
                    $("#exit-popoup").fadeIn("fast");
                    var date = new Date,
                        day = 7; // day save cookie
                    date.setDate(date.getDate() + day);
                    document.cookie = "exit-popoup=no; path=/; expires=" + date.toUTCString();
                }
            });
            $(document).click(function(e) {
                if (($("#exit-popoup").is(':visible')) && (!$(e.target).closest("#exit-popoup .content").length)) {
                    $("#exit-popoup").remove();
                }
            });
            $('#exit-popoup .close, #exit-popoup .close-in-content').on('click', function(event) {
                if ($("#exit-popoup").is(':visible')) {
                    $("#exit-popoup").remove();
                }
            });
        }
    });



	$(function () {

		'use strict';

		// DOM ready, take it away



	});

	$(window).scroll(function(event){
		event.preventDefault();
    if($(this).scrollTop() > 700){
        $('#headerBGs').addClass('scrollon');
		return false;
    } else {
        $('#headerBGs').removeClass('scrollon').addClass('noscroll');
		return false;
    }
});





/* function scroll mouse**/
/*
(function($){
	var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

	$(window).bind('mousewheel', function(event){
		if (!isMobile) {
	    if (event.originalEvent.wheelDelta >= 0) {
	        console.log('Scroll up');


	    } else {
	        if($(this).scrollTop() < 30){
				  var target = $('#bottom');
				  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				  if (target.length) {
					$('html,body').animate({
					  scrollTop: target.offset().top
					}, 1000);
					return true;
				  }
			}
		}
}
	});

})(jQuery);
*/

/***/



/*document.querySelector('#strip2').addEventListener('click', () => {
  scrollIt(
    document.querySelector('#strip2_gallery'),
    300,
    'easeOutQuad',
    () => console.log(`Just finished scrolling to ${window.pageYOffset}px`)
  );
});

$(window).scroll(function(event){
			event.preventDefault();
if($(this).scrollTop() > 270){

   $('#strip2').addClass('scrollon2');
	 	$('#strip2').removeClass('noscroll2');


	return false;

}
else {

	$('#strip2').removeClass('scrollon2');
	setTimeout(function () {
			$('#strip2').addClass('noscroll2 bounceInUp');
	}, 100);


		return false;

}
});



/*$(window).scroll(function(event){
	event.preventDefault();
if($(this).scrollTop() > 300){
	$('#headerMobile').removeClass('noscroll').addClass('scrollon');
	return false;
} else {
	$('#headerMobile').removeClass('scrollon').addClass('noscroll');
	return false;
}
});*/


/////// not vissible scroll  -> not working
//	$(window).scroll(function(){
//    if($(this).scrollTop() > 0){


    //   $('#headerBG').removeClass('noscroll ').addClass('scrollon ');

  // } else {
     //  $('#headerBG').removeClass('scrollon').addClass('noscroll');


//    }
//});



/*
$(window).scroll(function(){
if($(this).scrollTop() < 600){
$('#visible-panel').removeClass('scrollon33').addClass('noscroll33');


} else {
$('#visible-panel').removeClass('noscroll33 ').addClass('scrollon33 ');



}
});*/



/*$(window).scroll(function(event){
	event.preventDefault();
if($(this).scrollTop() > 300){
	$('#headerMobile').removeClass('noscroll').addClass('scrollon');
	return false;
} else {
	$('#headerMobile').removeClass('scrollon').addClass('noscroll');
	return false;
}
});


/*8706768891.eec4e92.37a6d438a1cf427884d0d0fd089b67e2
eec4e92300fc44c0829bc9646fdebec9
048bfe0952aa4efbb76ad283b8db3fb6*/

/*8706768891.1677ed0.8c843defd120424fac24260c15f98d0c*/



$(document).ready(function(){
    var userFeed = new Instafeed({
    get: 'user',
	clientId: '0fa8586d65e94cd1b5256394031135dd',
	userId: 8706768891,
    //accessToken: '6041656962.1677ed0.b57a74e6644143a5bb1a10b2a8c96922',
    accessToken: '8706768891.1677ed0.0fa8586d65e94cd1b5256394031135dd',
    target: 'insta', 
    limit: 10,
    sortBy: 'most-recent',
    resolution: 'standard_resolution',
    template: '<li><img style="margin: 0 0 -25px 0;top:5px;left:5px;filter: grayscale(0%); position: relative;z-index: 99;" src="https://localhost:8081/npm/wp-content/uploads/2018/11/bluehart.png" /> <a class="animation" href="{{link}}"><img src="{{image}}" /></a> </li>',
    after: function() {
        $('#insta').slick({
            slidesToShow: 5,
            infinite: true,
            rtl: false,
            accessibility: false,
            arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 780,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }

            ]

        });

    }
});
userFeed.run();
});


$(function() {

$("input[name='tribe-bar-search']").removeAttr('placeholder');
///$("input[name='tribe-bar-search']").prop('placeholder', '123');
$("input[name='tribe-bar-search']").focus(function(event) {
	/* Act on the event */
///	$("input[name='tribe-bar-search']").prop('placeholder', '');
});

});


//////wish LIST

/*$(function() {
  var wishbuttons =	$(".wishlist-test .wrapper .row");
  console.log("====>"+$(wishbuttons).length);
  $('.wishlist-test').on('click', '.simplefavorite-button', function(event) {
	console.log('click123');
	var p =  $(this).parent();
    var spancount = $(p).find('span').html();
	 console.log(spancount);

  });
});*/


/**
/**

 * Redirect for newsletter

 */

$(function () {

	if ($('.newsletter-center').length > 0) {
		setTimeout(function () {
			window.location.href = "/";
		}, 3000);
	}
	return false;
});




/////


////click
function hover(element) {
                element.setAttribute('src','http://npmsite.goil.co.il//wp-content/themes/npm/img/All-B.png');
                }
      function unhover(element) {
      element.setAttribute('src','https://physiologic.israelweb.co.il/wp-content/themes/physiologic/img/lp2/linkedin.jpg');
		}

 /*onmouseover="hover(this)" onmouseout="unhover(this)"*/

//responsive Menu

    var responsiveMenu =  $(function() {
            // Dropdown toggle
            $('.responsiveMenu').click(function(){
              $(this).next('.nav.nav').toggle();
            });

            //Check if window is smaller then 880 then enable on click event to close the menu when press anywhere at screen
            if ($(window).width() <= 767) {
                    $(document).click(function(e) {
                      var target = e.target;
                      if (!$(target).is('.responsiveMenu') && !$(target).parents().is('.responsiveMenu')) {
                        $('.nav.nav').fadeOut();
                      };
                    });//End click

            }// End window.width

    }); // End  function


//////

/*$(function() {
  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...



  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});*/

// Change the speed to whatever you want
// Personally i think 1000 is too much
// Try 800 or below, it seems not too much but it will make a difference

/*$(document).on('click', 'a[href^="#scroll1"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $('#scroll1').offset().top
     }, 500);
});*/


})(jQuery, this);
