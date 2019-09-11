<?php /* Template Name: scroll Page Template */ get_header();

$topImage = get_field('inside_top_image'); ?>
	<main role="main">



<section id="scroll1" class="scroll1" style="background-color: blue; height: 50vw;">
<div class="row wrapper">
	<a href="#scroll2">
	katerina 1
</a>
</div>
</section>





<section id="scroll2" class="scroll2" style="background-color: yellow; height: 50vw;">
	<div class="row wrapper">
<a >
		katerina2
	</a>
	</div>
</section>


<h1 class="title" id="top" style="background-color: yellow; height: 50vw;">Imagine your things at the top</h1>
<!-- Everything that you want smooth scrolling you should put that class -->
<!-- Remember: that's because i changed the script -->
<a class="smoothScroll" href="#bottom">Click here to smooth scroll to the bottom of the page</a>
<div class="content"></div>
<h1 class="title">And here the content that the user will reach through the link<small>sorry for the bad english</small></h1>
<!-- Always put the class="smoothScroll" -->
<!-- Always make sure to put href="#some-local-id" -->
<a class="smoothScroll" href="#top" id="bottom">Click here to smooth scroll to the top of the page</a>

<!-- Get jQuery down below so it can work properly -->
<!-- You can get any other version, it's just an example -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Change the speed of the scroll in the JS file. Follow the instructions there -->




<script>


$(function() {
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
});

// Change the speed to whatever you want
// Personally i think 1000 is too much
// Try 800 or below, it seems not too much but it will make a difference

$(document).on('click', 'a[href^="#scroll1"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $('#scroll1').offset().top
     }, 500);
});
</script>


		<section class="padding-carusel" style="background-color: #dfebec;padding:45px">
				<?php echo do_shortcode('[wcp-carousel id="1313" order="DESC" orderby="date" count="10"]	'); ?>
	</section>


	<script>

	///window.scroll({ top: 2500, left: 0, behavior: 'smooth' });

	//document.querySelector('#scroll1').scrollIntoView({ behavior: 'smooth' });


	//document.querySelector('scroll1').scrollIntoView({ behavior: 'smooth' });


/*	$('html, body').animate({
         scrollTop: $('.scroll1').offset().top
     }, 200);
});

$(window).scroll(function(event){
			event.preventDefault();
if($(this).scrollTop() > 270){

   $('#scroll2').addClass('scrollon2');
	 	$('#scroll2').removeClass('noscroll2');


	return false;

}
else {

	$('#scroll2').removeClass('scrollon2');
	setTimeout(function () {
			$('#scroll2').addClass('noscroll2 bounceInUp');
	}, 100);


		return false;

}
});
*/

$('scroll1').scrollTop()>50 => {
    $('html, body').animate({
        scrollTop: $('scroll2').offset().top
    }, 200);
});

	</script>


<!--script type="text/javascript">
  var tag = document.createElement('script');
  tag.id = 'iframe-demo';
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('existing-iframe-example', {
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
    });
  }
  function onPlayerReady(event) {
    document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
  }
  function changeBorderColor(playerStatus) {
    var color;
    if (playerStatus == -1) {
      color = "#37474F"; // unstarted = gray
    } else if (playerStatus == 0) {
      color = "#FFFF00"; // ended = yellow
    } else if (playerStatus == 1) {
      color = "#33691E"; // playing = green
    } else if (playerStatus == 2) {
      color = "#DD2C00"; // paused = red
    } else if (playerStatus == 3) {
      color = "#AA00FF"; // buffering = purple
    } else if (playerStatus == 5) {
      color = "#FF6DOO"; // video cued = orange
    }
    if (color) {
      document.getElementById('existing-iframe-example').style.borderColor = color;
    }
  }
  function onPlayerStateChange(event) {
    changeBorderColor(event.data);
  }
</script-->

	</main>


<?php get_footer(); ?>
