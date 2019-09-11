<?php /* Template Name: Test Page Template */ get_header();

$topImage = get_field('inside_top_image'); ?>

<?php $FrontPage = get_option('page_on_front');
 ?>


 
 
<?php echo do_shortcode( '[sp_wpcarousel id="4712"]' ); ?>
 
<!-- Get jQuery down below so it can work properly -->
<!-- You can get any other version, it's just an example -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



	  <main>

	    <!--section for mobile  kat-->


























    <section id="strip2_gallery2" class="show-mobilepanel">
  <div class="row center" >
        <!--new nav-->
  <div class="row center wrapper">
<div class="wrapper" style="padding: 60px 0">

  <a href="" class="show-form btn btn-primary" data-target="t1">tab 1
    <div class="col-12 ">
   <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
      <div class="">
   <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
         <div class="bg-grid-no">
             <div class="center cursor-pointer">
                 <img class="strip3-img " src="<?php the_sub_field(image_cat1,$FrontPage) ?>">
                     <p class="text-grid"><?php the_sub_field(title_panel1,$FrontPage) ?></p>
             </div>
         </div>
   <!--        </a>-->
   </div>
   <?php endwhile; else: endif; ?>
   </div>
   <!--tab 1--->
  </a>
  <a href="" class="show-form btn btn-primary" data-target='t2'>tab 2
  <!---tab 2-->

  <div class="col-12 ">
  <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
  <div class="">
  <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
     <div class="bg-grid-no">
         <div class="center cursor-pointer">
             <img class="strip3-img " src="<?php the_sub_field(image_cat2,$FrontPage) ?>">
                 <p class="text-grid"><?php the_sub_field(title_panel2,$FrontPage) ?></p>
         </div>
     </div>
  <!--        </a>-->
  </div>
  <?php endwhile; else: endif; ?>
  </div>

  </a>
    <!---tab3-->
  <a href="" class="show-form btn btn-primary" data-target='t3'>tab 3
  <!-- <div class="col-12 ">
  <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
   <div class="">
  <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
      <div class="bg-grid-no">
          <div class="center cursor-pointer">
              <img class="strip3-img " src="<?php the_sub_field(image_cat3,$FrontPage) ?>">
                  <p class="text-grid"><?php the_sub_field(title_panel3,$FrontPage) ?></p>
          </div>
      </div>
  <!--        </a>-->
  </div>
  <?php endwhile; else: endif; ?>
  </div>-->

  </a>
  <!--description block 1--->
  <div>
  <div class="collapse" data-target='t1'>
    <p style="padding-left: 3%;  padding-right: 3%;">1 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    <div class="card card-body line1">
    <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
        <div class="row justify-content-md-center justify-content-center">

       <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
          <div class="">
       <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                 <div class="center cursor-pointer col-md-11 text-left">
                     <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                         <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                          <p class="description col-md-9" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_1,$FrontPage) ?></p>
                 </div>
             </div>
       <!--        </a>-->
       </div>
       <?php endwhile; else: endif; ?>

       </div>


    </div>
</div>
<div class="collapse" data-target='t2'>
    <p style="padding-left: 3%;  padding-right: 3%;">2 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    <div class="card card-body line1">
    <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
        <div class="row justify-content-md-center justify-content-center">

       <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
          <div class="">
       <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                 <div class="center cursor-pointer col-md-11 text-left">
                     <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                         <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                          <p class="description col-md-9" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_2,$FrontPage) ?></p>
                 </div>
             </div>
       <!--        </a>-->
       </div>
       <?php endwhile; else: endif; ?>

       </div>


    </div>
</div>
<div class="collapse" data-target='t3'>
  <div class="card card-body line1">
  <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
      <div class="row justify-content-md-center justify-content-center">

     <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
        <div class="">
     <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
           <div class="bg-grid-no">
               <div class="center cursor-pointer col-md-11 text-left">
                   <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                       <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                        <p class="description col-md-9" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_3,$FrontPage) ?></p>
               </div>
           </div>
     <!--        </a>-->
     </div>
     <?php endwhile; else: endif; ?>

     </div>


  </div>
    <p style="padding-left: 3%;  padding-right: 3%;">3 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
</div>
</div>

  <!-- /description block 1--->

</div>
</div>
</div>
<!--/ block1--->

<div class="wrapper">
	<img src="http://npmsite.goil.co.il/wp-content/uploads/2018/10/UnlimitedGlow.png">
</div>


<!--block2--->
<div class="row center" >
      <!--new nav-->
<div class="row center wrapper">
    <!--description block 2--->
  <div>
  <div class="collapse" data-target='t4'>
    <div class="card card-body line1">
    <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
        <div class="row justify-content-md-center justify-content-center">

       <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
          <div class="">
       <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                 <div class="center cursor-pointer col-md-11 text-left">
                     <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                         <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                          <p class="description col-md-9" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_4,$FrontPage) ?></p>
                 </div>
             </div>
       <!--        </a>-->
       </div>
       <?php endwhile; else: endif; ?>

       </div>


    </div>
      <p style="padding-left: 3%;  padding-right: 3%;">4 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
  </div>

  <div class="collapse" data-target='t5'>
      <p style="padding-left: 3%;  padding-right: 3%;">5 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
      <div class="card card-body line1">
      <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
          <div class="row justify-content-md-center justify-content-center">

         <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
            <div class="">
         <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
               <div class="bg-grid-no">
                   <div class="center cursor-pointer col-md-11 text-left">
                       <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                           <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                            <p class="description col-md-9" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_5,$FrontPage) ?></p>
                   </div>
               </div>
         <!--        </a>-->
         </div>
         <?php endwhile; else: endif; ?>

         </div>


      </div>
  </div>


  <div class="collapse" data-target='t6'>
    <div class="card card-body line1">
    <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
        <div class="row justify-content-md-center justify-content-center">

       <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
          <div class="">
       <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                 <div class="center cursor-pointer col-md-11 text-left">
                     <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                         <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                          <p class="description col-md-9" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_6,$FrontPage) ?></p>
                 </div>
             </div>
       <!--        </a>-->
       </div>
       <?php endwhile; else: endif; ?>

       </div>


    </div>
      <p style="padding-left: 3%;  padding-right: 3%;">6 - Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
  </div>
</div>

  <!-- /description block 1--->

<div class="wrapper" style="padding: 60px 0">

  <a href="" class="show-form btn btn-primary" data-target='t4'>tab 4
  <!---tab4-->
  <div class="col-12  ">
  <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
  <div class="">
  <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
    <div class="bg-grid-no">
        <div class="center cursor-pointer">
            <img class="strip3-img " src="<?php the_sub_field(image_cat4,$FrontPage) ?>">
                <p class="text-grid"><?php the_sub_field(title_panel4,$FrontPage) ?></p>
        </div>
    </div>
  <!--        </a>-->
  </div>

  <?php endwhile; else: endif; ?>
  </div>

  </a>
  <a href="" class="show-form btn btn-primary" data-target='t5'>tab 5
  <!--ta 5-->

  <div class="col-12 ">
  <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
  <div class="">
  <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
  <div class="bg-grid-no">
     <div class="center cursor-pointer">
         <img class="strip3-img " src="<?php the_sub_field(image_cat5,$FrontPage) ?>">
             <p class="text-grid"><?php the_sub_field(title_panel5,$FrontPage) ?></p>
     </div>
  </div>
  <!--        </a>-->
  </div>

  <?php endwhile; else: endif; ?>
  </div>

  </a>
  <a href="" class="show-form btn btn-primary" data-target='t6'>tab 6
  <!--ta 6-->

  <div class="col-12 ">
  <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
  <div class="">
  <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
  <div class="bg-grid-no">
    <div class="center cursor-pointer">
        <img class="strip3-img " src="<?php the_sub_field(image_cat6,$FrontPage) ?>">
            <p class="text-grid"><?php the_sub_field(title_panel6,$FrontPage) ?></p>
    </div>
  </div>
  <!--        </a>-->
  </div>
  <?php endwhile; else: endif; ?>
  </div>

  </a>





</div>
</div>
</div>

</section>

<!--block2--->

<script>
  $('.show-form').on('click', function (event){
    event.preventDefault();
    var elem = $(this); //writing $(this) every time is bad
    var target = $('div[data-target="'+elem.attr("data-target")+'"]');

    if(elem.hasClass('active')){
        //remove from this
        elem.removeClass("active");
        //close box
        target.slideUp("slow");
    } else { //toggle menu when clicking on some other link
        //remove from everywhere
        $('.show-form').removeClass('active');
        //slide every box up
        $('.collapse').slideUp("slow");
        //add to this only
        elem.addClass('active');
        //slide associated box down
        target.slideDown("slow");
    }
});
</script>



	    <!--section for mobile--->
	  </main>


<?php get_footer(); ?>
