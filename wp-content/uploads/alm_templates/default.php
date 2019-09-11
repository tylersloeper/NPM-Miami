<article>
 <a class="readmore" href="<?php echo the_permalink()?>">
	 <div class="alImage">
		 <?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
	 </div>
 </a>
	 <div class="alContent">
		<a class="readmore" href="<?php echo  the_permalink()?>">
		 <strong><?php echo wp_trim_words(get_the_title(), 30, '')?> <span><?php the_field('sub_title')?></span></strong></a>
		 <div class="rcCinside">
		
			 <p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
<div class="col readmore">
		<a class="btn">
				<?php echo do_shortcode( "[show_gd_mylist_btn]" ); ?>
		</a>
		</div>
			 
	
		 </div>
	 </div>
	 <div class="clearfix"></div>
 </article>