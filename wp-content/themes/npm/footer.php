<style>
.watapp img {
    width: 93%;
    margin: 6px 0 0 0;
}
</style>
<!-- footer desktop-->
<div class="watapp"><a href="https://api.whatsapp.com/send?phone=972552449798" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fin-01-01.svg" alt="Logo" class="logo-img"></a></div>
<div id="footer-menu" class=" justify-content-md-center footer-menu desktop-show row" style="background-color: #505050;padding-top: 17px;">

	<!--icons-->
	<div class="row mobile-logo ">
			<!-- logo -->
	<div class="" >
		<div class="logo logo-center">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_footer.png" alt="Logo" class="logo-img">
			</a>
		</div>
	   </div>
		<!-- /logo -->


	<!-- nav menu -->
	<div class="col mainmenu">
		<nav class="nav right" role="navigation">
			<?php html5blank_nav2(); ?>
			<hr class="" style="color:white !important; width:100%; background-color:white">
		</nav>
		<!--widget contact data--->
				<?php if(function_exists('dynamic_sidebar') || dynamic_sidebar('footer-info-1')):?>
				<div class="block">
					<?php dynamic_sidebar('footer-info-1');?>
				</div>
				<?php endif ;?>
		<!--widget contact data--->


	</div>
	<!--col-md-10 end-->

	<!--icon--->
	<div class="social-icons align-self-center center">
	<?php if(function_exists('dynamic_sidebar') || dynamic_sidebar('footer-social-icons')):?>
	<div class="">
		<?php dynamic_sidebar('footer-social-icons');?>
	</div>
	<?php endif ;?>
	</div>


	<!--	<hr />-->
	</div>


	<!--end icon--->
	</div>

<!-- end desktop footer -->


<!--</div>-->
<footer class="row desktop-show" role="contentinfo">
	<div>
		<img src="<?php  echo get_template_directory_uri(); ?>/img/pas1.gif" alt="pas" class="logo-img" style="width: 100%;" />
	</div>
	<!-- copyright -->

		<div class="col-6 align-self-center">
			<p class="footer-copyright">
			<span style="font-size: 14px;" class="content-info-text">© Copyright 2018. NPM. All Rights Reserved</span>
			</p>
		</div>
	<!-- /copyright -->
	<div class="col-6 align-self-center">
		<p class="center">
		<span  style="font-size: 14px;" class="content-info-text">Design and development </span>
		  <span>
			<a href="https://I-L.org.il" target="_blank">
				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
				<img style="    width: 63px; position: relative; top: -4px;" src="<?php  echo get_template_directory_uri(); ?>/img/icon_logo_footer.png" alt="Logo">
			</a>
		</span>
		</p>
</div>

</footer>
<!-- /footer -->
<?php //html5blank_nav3(); ?>

<!--kat mobile-->
<!---footer only for mobole-->
<div class=" mobile-show" >
	<div class="wrapper row">
		<div class="col-md-6">
					<span style="font-size: 14px;" class="content-info-text">Design and development </span>
					  <span>
						<a href="https://I-L.org.il" target="_blank">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img style="    width: 63px; position: relative; top: -4px;" src="<?php  echo get_template_directory_uri(); ?>/img/icon_logo_footer.png" alt="Logo">
						</a>
					</span>
			</div>
</div>

</div>
	<div class="row mobile-show" style="min-height:80px">
		<div class="col-2 bg-icon bg-border center">
		</div>
		<div class="col-4 bg-icon bg-border center">
			<a href="tel:+97248702206" target="_blank">
				<img class="text-top-bg"  src="<?php echo get_template_directory_uri(); ?>/img/phone_icon.png" alt="Logo" >
				<span style="display:block; color:white; margin-top:5px;">Call </span>
			</a>
		</div>
		<div class="col-4 bg-icon bg-border center">
			<a href="mailto:info@npm.co.il" target="_blank">
				<img class="text-top-bg" src="<?php echo get_template_directory_uri(); ?>/img/mail_icon.png" alt="Logo" >
					<span style="display:block; color:white;margin-top:5px;">E-Mail </span>
			</a>
		</div>
		<div class="col-2 bg-icon bg-border center">
			<!--a href="http://m.me/newpermanentmakeup" target="_blank">
				<img class="text-top-bg" src="<?php echo get_template_directory_uri(); ?>/img/messenger_icon.png" alt="Logo" >
					<span style="display:block; color:white;margin-top:5px;">Facebook chat</span>
			</a-->
		</div>
	</div>
<!--kat mobile--->


</div>
<!-- /wrapper -->

<!--script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script-->
<?php wp_footer(); ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.1.3/jquery.min.js"></script>-->
<!-- analytics -->


<script>
/*

$(function() {
  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...

 var $newjq = jQuery.noConflict();

  $newjq(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        console.log('Scroll up');
    }
    else {
        if($newjq(this).scrollTop() < 50){
			  var target = $newjq('#bottom');
			  target = target.length ? target : $newjq('[name=' + this.hash.slice(1) + ']');
			  if (target.length) {
				$newjq('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return true;
			  }
		}
    }
});

*/
/*****************/

    var wpcf7Elm = document.querySelector( '.wpcf7' );
    wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        window.setTimeout(function(){ window.location = "https://localhost:8081/npm/thanks-page/"; },1000);
    }, false );
    /*****************/
	
	
	/******** contact *********/
	jQuery(function ($) {
		var now = new Date();
		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);
		var today = now.getFullYear()+"-"+(month)+"-"+(day);
		var d = new Date();
		var hr = d.getHours();
		var min = d.getMinutes();
		var ampm = "am";
		var x;
		$('#datePicker').val(today);
		$("#datePicker").attr("min", today);
		if (min < 10) {
			min = "0" + min;
		}
		if( hr > 12 ) {
			hr -= 12;
			ampm = "pm";
		}
		x = hr + ":" + min + ampm;
		$('#yoururl').val('<?php echo $url; ?>'); // ערוץ	
		$('#yourtime').val(x); // ערוץ	
		console.log(x);
	});
	/******** contact *********/
	
	
	
	
	
	
	
	
	
/*jQuery(function ($) {
   var now = new Date(); 
   var day = ("0" + now.getDate()).slice(-2);
   var month = ("0" + (now.getMonth() + 1)).slice(-2);
   var today = now.getFullYear()+"-"+(month)+"-"+(day);
  $('#datePicker').val(today);
$("#datePicker").attr("min", today);
});*/
</script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="200105776724541" size="25"
  theme_color="#1fc3f3">
</div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52141933, "init", {
        id:52141933,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52141933" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
