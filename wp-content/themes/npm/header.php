<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
		<link rel="manifest" href="icon/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
		<!--animation--->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<link src="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

		<meta name="description" content="<?php bloginfo('description'); ?>"/>
		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
		</script>
<style>
.contboo{
    border-radius: 50%;
}
button.accordion {
    position: fixed;
    bottom: 15px;
    left: 15px;
}
.acdiv {
    left: 20px;

}
.logo-img{width: 57%;}
.scrollon{padding-bottom: 8px;}
.wishlist-test .articlesList article .alImage {
    width: 100%;
    max-width: 100%;
    height: 242px;
    overflow: hidden;
}
</style>
<script type="text/javascript">
	_linkedin_partner_id = "495420";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script><script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=495420&fmt=gif" />
</noscript>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBF75ZQ');</script>
<!-- End Google Tag Manager -->
<!-- Owl Stylesheets -->
    <link rel="stylesheet" href="http://localhost:8081/npm/wp-content/themes/npm/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost:8081/npm/wp-content/themes/npm/js/owlcarousel/assets/owl.theme.default.min.css">


<style>
.dropbtn {
    padding: 16px;
    font-size: 16px;
    border: none;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.sub-menu {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.sub-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.text-top {
    z-index: 999;
}
.sub-menu a:hover {background-color: #ddd;}
.dropdown:hover .sub-menu {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

    <script src="https://localhost:8081/npm/wp-content/themes/npm/js/owlcarousel/owl.carousel.js"></script>


	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1333325126781355');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=1333325126781355&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	</head>
	<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBF75ZQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<?php $bg_stri1_main=get_field('bg_stri1_main'); ?>
<?php if (is_page(182)){ //landing-may ?>
		<div class="strip1 about-po row" id="strip1" <?php echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>
<?php }else{ ?>
<div class="strip1 row" id="strip1" <?php echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>
<?php } ?>

		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
<header class="header clear" role="banner" >
	<div id="headerBGs" class="">
		<div class="wrapper">
			<!--icons-->
			<div class="row mobile-logo"  style="margin-top:10px; ">
				<!-- nav icons-->
						<div class="col mainmenu" >
							<nav class="nav right" role="navigation">
									<ul>
										<li>
										<a class="wishlist-icon"  href="/my-wish-list/">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/w1.svg" style="width: 28px;" alt="Logo" ><span class="header-icontext">Wish<span class="header-coltextw">List</span></span>
										</a>
									   </li>
						<!---search desktop-->
										<li>
										   	<?php get_sidebar(); ?>
									   </li>
			   		  	<!--- / search -->
									 <li>
										<!--a class="" style="padding: 0;" href="<?php echo home_url(); ?>">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/Globe-01.svg" style="width: 28px;" alt="Logo" ><span class="text-lng"></span>
										<!---btn lng Dropdown-->
										<!--span class="dropdown" ><a class="no-padding" style="font-size: 20px;padding:0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="btnlng-drow" src="<?php echo get_template_directory_uri(); ?>/img/down-arow.png"></a></span>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item"  style="font-size:16px" href="#">He</a>
										    <a class="dropdown-item"  style="font-size:16px" href="#">En</a>
									  </div-->
										<!--/a-->
										<div class="dropdown">
										<?php //echo do_shortcode('[google-translator]'); ?>
										<?php //html5blank_nav3(); ?>
										</div>
									</li>
						 <!--/ lng-->
							</ul>
					</nav>
				</div>
		<hr />
	</div>
	<!--<hr class="desktop-show2" style="color:#76b143">-->


<!--icons-->
			<div class="row mobile-logo" id="headerBG" >
					<!-- logo -->
			<div class="col-2 logo-top" id="headerMobile">
				<div class="logo">
					<a  href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					</a>
				</div>

			 </div>
				<!-- /logo -->

				<!--mobile icons-->
				<div class="mobile-show4 ">
<?php
/*global $wpdb;
$user = new WP_User(get_current_user_id());

echo '<pre>';
print_r($user);
echo '<pre>';*/
//$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}gd_mylist WHERE option_id = ".$user->roles[0], OBJECT );
?>
					<a  href="/my-wish-list/" class="col-4" href="<?php echo home_url(); ?>">
					<img class="logo-fix" src="<?php echo get_stylesheet_directory_uri();?>/img/icons/w1.svg"  style="width: 28px;" alt="Logo" >
					</a>

				<!--<a  class="col-4" data-toggle="modal" data-target="#search3"  href="<?php echo home_url(); ?>">-->
				<a  class="col-4"  href="<?php echo home_url(); ?>">
				<img class="logo-fix" src="<?php echo get_template_directory_uri(); ?>/img/icons/Search-01.svg" style="width: 28px;" alt="Logo" >
 	<?php get_sidebar(); ?>
				</a>


				<!-- Modal search -->
<div style="display:none" class="modal fade" id="search3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
 	<?php get_sidebar(); ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<?php get_sidebar(); ?>

      </div>

    </div>
  </div>
</div>

				<a class="col-4"  href="<?php echo home_url(); ?>">
				<img class="logo-fix" src="<?php echo get_stylesheet_directory_uri();?>/img/icons/Globe-01.svg"  style="width: 28px;" alt="Logo" >
				</a>

			</div>
				<!--mobile icons-->

			<!-- nav menu -->
			<div class="col-10 mainmenu">
				<nav class="nav right" role="navigation">
					<hr class="" style="color:#76b143; width:100%">
					<?php html5blank_nav(); ?>
						<ul class="ul-top">
							<li style="display:none">
								<a  class="btn-no-visib" data-toggle="modal" data-target="#exampleModalLong2" href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="Logo" >
								</a>
							</li>
				<!--search modal-->
				<!--- / search modal-->

						<!--	<li class="right-icon-share">
								<a  target="_blank" rel="nofollow" href="<?php/// echo $share; ?>">
								<img src="<?php ///echo get_template_directory_uri(); ?>/img/share.png" alt="Logo" >
								</a>
							</li>-->
							<li style="display:none" >
								<a  target="_blank" rel="nofollow" href="<?php echo $player; ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="Logo" >
								</a>
							</li>

						</ul>
				</nav>
			</div>

			<!--col-md-10 end-->

		<!--	<hr />-->
		</div>
</div>
</div>
<?php /*
<!---popup shay--->
		<div id="coo-popoup" style="display:none" class="coo-popoup">
				<div class="overlay"></div>
				<div class="content">
						<img class="bg" src="<?php echo get_stylesheet_directory_uri();?>/img/pop-up-cookies.png" alt="">
						<span class="close" onclick="closecoo()"><img class="bg" style="width: 100%; height: 39px;position: relative;top: 8px;" src="<?php echo get_stylesheet_directory_uri();?>/img/agre.png" alt=""></span>
				</div>
		</div>
		<!---popup shay--->

		<!---popup shay2--->

		<div id="exit-popoup" style="display:none" class="exit-popoup">
		            <div class="overlay"></div>
		            <div class="content">
		                <img class="bg" src="<?php echo get_stylesheet_directory_uri();?>/img/pop-up.png" alt="">
		                <span class="close"></span>

		                <div class="box">
		                    <h4 style="padding-left: 15px;color:#979696;font-size: 27px;"> Could not find </h4>
		                    <span style="padding-left: 15px;color:#38c8f3;font-size: 27px;font-weight: 500;"> what you were looking for? </span>
							<h5 style="padding-left: 15px;color:#979696;font-size: 22px;"> Send us a message and we can help you </h5>
		                    <div class="tnp tnp-subscription">
		                        <?php echo do_shortcode('[contact-form-7 id="277" title="Contact  form with country"]'); ?>
		                    </div>
		                    <span class="close-in-content"> לא, תודה </span>


		                </div>



		            </div>
		  </div>

			<!---popup shay 2--->

style="display:none"
*/ ?>



		<div id="coo-popoup"  class="coo-popoup" style="display:none">
			<div class="overlay"></div>
			<div class="content" style="margin-top: auto;">
					<img class="bg sbg" src="https://localhost:8081/npm/wp-content/uploads/2019/01/cookies3-11.jpg" alt="">
					<span class="close" onclick="closecoo()"><img class="bg frtg" src="<?php echo get_stylesheet_directory_uri();?>/img/agre.png" alt=""></span>
					<span class="close asda" onclick="closecoods()"><p style="left: 5px; text-align: left;font-size: 14px;">i disagree</p></span>
			</div>
		</div>

<script>
/*
function closewish(){
var date = new Date,
day = 1; // day save cookie
date.setDate(date.getDate() + day);
document.cookie = "coo-wish=no; path=/; expires=" + date.toUTCString();
$("#coo-wish").remove();

}


function getCookiewish(name) {

var matches = document.cookie.match(new RegExp(
"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
));
return matches ? decodeURIComponent(matches[1]) : undefined;
}
var alertwin = getCookiewish("coo-wish");
if (alertwin == "no") {
//alert(alertwin);
$("#coo-wish").remove();
}else{
	$("#coo-wish").css("display", "");
}
*/



function closecoo(){
var date = new Date,
day = 120; // day save cookie
date.setDate(date.getDate() + day);
document.cookie = "coo-popoup=no; path=/; expires=" + date.toUTCString();
$("#coo-popoup").remove();

}


function closecoods(){
	window.location.replace("http://www.google.com");
}


function getCookiecoo(name) {

var matches = document.cookie.match(new RegExp(
"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
));
return matches ? decodeURIComponent(matches[1]) : undefined;
}


var alertwin = getCookiecoo("coo-popoup");
if (alertwin == "no") {
//alert(alertwin);
$("#coo-popoup").remove();
}else{
	$("#coo-popoup").css("display", "");
}
</script>
			</header>
			<!-- /header -->
		</div>
	</div>
