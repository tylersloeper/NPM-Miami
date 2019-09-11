<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package npm
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span class="sep"></span>
                <a href="//<?php
                $options = get_option('sample_theme_options');
                echo $options['sitetext']; ?>" target="_blank" ?>
                    <img src="<?php echo ( get_template_directory_uri() ); ?>/images/icon_logo_sfooter.png">
                    <span>Design & Develop</span>
                </a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!--[if lt IE 9]>
<script src="<?php echo ( get_template_directory_uri() ); ?>/libs/html5shiv/es5-shim.min.js" ></script>
<script src="<?php echo ( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo ( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo ( get_template_directory_uri() ); ?>/libs/respond/respond.min.js"></script>
<![endif]-->

</body>
</html>
