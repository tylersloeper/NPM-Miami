<?php /* Template Name: About Page Template */ get_header();

$ytb = get_field("aboute_youtube_code",182);
$topImage = get_field('inside_top_image'); ?>
<div class="thertab"></div>
	<main role="main">

                <section id="topImage" class="row">
                    <img class="img-full top-banner" src="<?php // echo $topImage ;?>">

                </section>

				<section id="topImage" class="row">
		                <div  class="img-top2">
		                <?php $video = get_field('video');
		                if ($video):?>
		                    <div  class="maImage col-md-12 text-left ">
		                        <?php //echo $video; ?>
									<div  id="player"></div>
		                    </div>
		                <?php endif; ?>
		                </div>

						<a class="onclick-stop"  onclick="stopVideo(event)">
						<img id="plyimg" class="cursor-pointer" src="<?php $stop_icon=get_field('stop_icon');  echo $stop_icon;  ?>"><span id="ply" style="display:none" class="text-stop">STOP</span>
						</a>

						<a class="onclick-play" onclick="muteVideo(event)">
						<img id="mutimg" class="cursor-pointer" src="<?php $play_icon=get_field('play_icon');  echo $play_icon;  ?>"><span id="mut" style="display:none" class="text-stop">mute</span>
						</a>
		        </section>


<!--close-->
			<?php $bg_stri1_main=get_field('bg_stri1_main'); ?>
			<section id="bg-about" class="bg-about row" style="display:none"  id="bg" <?php  echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>
					<div class="wrapper">
					 <?php // $strip1_text=get_field('strip1_text');  echo '<h2 class="title">' .$strip1_text . '</h2>'  ?>
						<!--<div>
							<img class="height-icon"  src="<?php //echo $strip1_img; ?>" alt="" >
					   </div>-->
					   <div class="col-6 left text-left" style="margin: 20px;">
						   	<img class="cursor-pointer" src="<?php $stop_icon=get_field('stop_icon');  echo $stop_icon;  ?>"><span class="text-stop" style="display:none">STOP</span>
							<img class="cursor-pointer" style="margin-left: 20px;" src="<?php $play_icon=get_field('play_icon');  echo $play_icon;  ?>">
					   </div>
					   <div class="col-6"></div>
					</div>
				</section>

				<!--strip 5 post-->
								<section id="strip6_about" class="row">
										<div class="row">
											<?php $post_object = get_field('strip5_post');
											$post_title = $post_object->post_title;
											$postID = $post_object->ID;
											$content_post = get_post($postID);
											$content = $content_post->post_content;
											$content = apply_filters('the_content', $content);
											$content = str_replace(']]>', ']]&gt;', $content);
											?>
											<div class="maContent col-md-7 col-12 padding-about" >
												<h2><?php /// echo $post_title ?></h2>
												<p><?php echo $content; ?></p>
												<a style="display:none" class="readmore" href="<?php echo the_permalink($postID) ?>">קראו עוד >></a>
											</div>
											<div class=" col-md-5 col-12 right align-self-end  mobile-img2" style="right:-15px;" >
												<?php  the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
											</div>
										</div>
										<div class="clearfix"></div>
								</section>

						           <?php $bg_stri7_main=get_field('bg_stri7_main'); ?>
							<section id="strip7_about" class="row" <?php  echo $bg_stri7_main ? 'style="background-image:url(' . $bg_stri7_main .')"' : ' ' ?>>
									<?php  get_template_part('template-parts/client-template'); ?>
									</section>

									<!--section id="strip7_about" class="row" <?php  echo $bg_stri7_main ? 'style="background-image:url(' . $bg_stri7_main .')"' : ' ' ?>>
											<?php  //get_template_part('template-parts/test-page'); ?>
											</section-->

									<!--section class="padding-carusel" style="background-color: #dfebec;padding:45px">
												<?php //echo do_shortcode('[wcp-carousel id="1313" order="DESC" orderby="date" count="10"]') ?>
									</section-->

									<section id="contact-page">
									<?php  get_template_part('template-parts/contact-template'); ?>
									</section>

	<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			var ytb = '<?php echo $ytb;?>';
      console.log('ytb code:'+ytb);
			if(!ytb){
				ytb = "_99R7qGkSck";
			}

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '900',
          width: '1920',
          videoId: ytb,
			playerVars: {'autoplay': 1,'controls': 0, 'showinfo':0, 'rel':0, 'showsearch':0,'autohide':0,'wmode':'opaque','mute':1,'playsinline':1,'loop':1,'playlist':ytb },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          //setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
		var vt = document.getElementById('ply').innerHTML;
		if(vt == 'STOP'){
			document.getElementById('ply').innerHTML = 'PLAY';
			document.getElementById('plyimg').src = '<?php echo get_stylesheet_directory_uri();?>/img/icons/Play-01.svg';
			player.stopVideo();
		}else{
			document.getElementById('ply').innerHTML = 'STOP';
			document.getElementById('plyimg').src = '<?php echo get_stylesheet_directory_uri();?>/img/icons/Pause-01.svg';
			player.playVideo();
		}
        //player.stopVideo();
		console.log(vt);
      }
	  function muteVideo() {
			var vt = document.getElementById('mut').innerHTML;
			if(vt == 'mute'){
				document.getElementById('mut').innerHTML = 'unmute';
				document.getElementById('mutimg').src = '<?php echo get_stylesheet_directory_uri();?>/img/icons/s1.svg';
				player.setVolume(0);
			}else{
				document.getElementById('mut').innerHTML = 'mute';
				document.getElementById('mutimg').src = '<?php echo get_stylesheet_directory_uri();?>/img/icons/s2.svg';
				player.setVolume(100);
			}
		  //player.mute();
	  }



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
<style>
img.attachment-.size-.wp-post-image {width: 44%; max-width: 100%; padding: 20px 0}
@media (max-width: 900px) {
	img.attachment-.size-.wp-post-image {display: block; width:100%}
	.wcp-carousel-main-wrap .slick-slider {display:block; width:100%}
	.car-caption {display:block; width:100%; }
	#carousel-1313 .rpc-title {margin-top: 20px}

}


</style>
	</main>


<?php get_footer(); ?>
