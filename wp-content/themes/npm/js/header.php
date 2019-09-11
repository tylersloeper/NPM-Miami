<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">


		<?php wp_head(); ?>

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<?php
		$FrontPage = get_option('page_on_front');
		$logo=get_field(logo, $FrontPage);
		$tel=get_field(tel, $FrontPage);
		$facebook = get_field(facebook, $FrontPage);
		$phone =get_field(phone, $FrontPage);
		$bg_main_video=get_field(bg_main_video, $FrontPage);		 ?>

		<!--Social icons -->
		<div class="show-mobile"> </div>
		<!--/ social icons-->


		<!-- Modal -->
			<div class="modal slideInLeft animated infinite" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div>
					  <div class='contact-side '>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				            <span aria-hidden="true">&times;</span>
				          </button>
			  			<strong>רוצים לקנות בקלות וביעילות? </strong>
			  		     <p style="font-size:16px !important; margin-top:10px">title </p>
			  			<i class='contact-side-button'></i>
			  		<?php echo do_shortcode('[contact-form-7 id="7" title="טופס יצירת קשר 1"]'); ?>
			  		</div>
			      </div>
			    </div>
			  </div>
			</div>

		<!-- wrapper -->
		<div>
				<!-- header -->
			<header id="header" class="header clear headerfix" role="banner">
				    <div id="headerBG">
					<div class="wrapper">
						<!--header2-->
						<div class="row mobile-logo test">
							<div class="col mobile-logo-center logo-top">
								<ul>
					<!---search-->
									 <li class="desktop-show2">
										<?php get_sidebar(); ?>
									</li>
					 <!--search-->

								</ul>
							</div>
					<!-- /logo -->
	<!--	<hr>-->
						<!-- nav -->
					<div class="col-10 mainmenu">
						<nav class="nav left" role="navigation">
								<ul>
					<!---search desktop-->
									<li>
									<span class="color-new"> דברו איתנו</span>
									 <a class="tel-padd" href="tel:03-9131003"><?php echo $phone ?></a>
									 </li>

									 <li>
					 					<a class="facebook-nopad"  href="<?php echo home_url(); ?>">
					 					<img src="<?php echo get_template_directory_uri(); ?>/img/lng_green.png" alt="Logo" >
					 					</a>
					 				</li>
					 <!--search-->
									</ul>
							</nav>
						</div>
						<hr />
						</div>
						<hr class="desktop-show2" style="color:#76b143">

<!--/ header2-->
					<!-- logo  icons only for mobile  -->
				<div class="row mobile-logo mobile-logo-fix">
					<div class="col-12 mobile-logo-center logo-top mobile-show2">


						<ul style="text-align:left" class="">
							<li class="iconmob_logo col-6">
							   <a class=""  href="<?php echo home_url(); ?>">
							   <img class="logo-fix" src="<?php echo get_template_directory_uri(); ?>/img/logo_green.png" alt="Logo" >
							   </a>
							</li>
							<li class="iconmob_search">
									<?php get_sidebar(); ?>

							   <img src="<?php  echo get_template_directory_uri(); ?>/img/search2_mobile.png" alt="Logo" >

							</li>
						<li class="iconmob_lng">
						   <a class=""  href="<?php echo home_url(); ?>">
						   <img src="<?php echo get_template_directory_uri(); ?>/img/lng_green.png" alt="Logo" >
						   </a>
					   </li>

				  </ul>
			    	</div>
					<!-- /logo -->

					<!-- logo  desktop -->
				<div class="row mobile-logo ">
					<div class="col-md-0 col mobile-logo-center logo-top desktop-show2">
							   <a class=""  href="<?php echo home_url(); ?>">
							   <img src="<?php echo get_template_directory_uri(); ?>/img/new_logo.png" alt="Logo" >
							   </a>
					</div>
					<!-- /logo -->


					<!-- nav -->
				<div class="col-md-10 mainmenu">
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
							<ul>
							<!--	<li><a class="btn-no-visib" href="<?php /// echo $facebook ?>">
									<img src="<?php /// echo get_template_directory_uri(); ?>/img/facebook_green.png" alt="Logo" >
									</a>
								</li>-->
				<!--search-->


				<!---search-->
							</ul>
					</nav>
				</div>
				<hr />
			</div>
		</div>
	</div>
	</div>
					<!-- /nav -->

			</header>
			<!-- /header -->



<!--header 2 test katerina for mobile-->

<!--/ headere 2 test-->


			<?php if( is_front_page() ) { ?>
			<div class='slider row'>

				<?php $bg_main_video=get_field('bg_main_video');	?>
				<section id="" <?php echo $bg_main_video ? 'style="background-image:url(' . $bg_main_video .')"' : ' ' ?>>
				</section>
				<span style="display:none">
					<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
				</span>
			</div>
			<?php } ?>
