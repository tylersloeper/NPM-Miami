<?php /* Template Name: Panel old Page Template */
$FrontPage = get_option('page_on_front');
 ?>
	<main role="main">


        <?php  $FrontPage = get_option('page_on_front'); ?>
        <?php $bg_stri1_main=get_field('bg_stri1_main'); ?>
        <?php $strip1_img=get_field('strip1_img'); ?>
        <section class="strip2 row" style="display:none"  id="strip2" <?php /// echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>
            <div class="wrapper">
         <?php $strip1_text=get_field('strip1_text');  echo '<h2 class="title">' .$strip1_text . '</h2>'  ?>
            <div>
            <img class="height-icon"  src="<?php echo $strip1_img; ?>" alt="" >
           </div>
            <a class="btn-3d">INTERACT</a>
            </div>
        </section>

    <!-- /Section Category  3D-->


    <?php $strip2_img=get_field('strip2_img'); ?>

    <!---Project collapse-->


    <?php  $FrontPage = get_option('page_on_front'); ?>
    <section id="strip2_gallery">
    <div class="wrapper width-grid">
    <div class="row-space" >  <!--row-->
        <?php $strip2_text=get_field('strip2_text');  echo '<h2 class="title" style="margin-bottom:50px">' .$strip2_text . '</h2>'  ?>
        <div class="strip2img-width">
       <img class="height-icon  mobile-strip2img" style="width:90%; max-width:100%"  src="<?php echo $strip2_img; ?>" alt="" >
      </div>
    </div>
    </div>
    </section>



    <?php $bg_strip3=get_field('bg_strip3'); ?>
    <?php $strip2_img=get_field('strip2_img'); ?>
    <section id="strip2_gallery2">
    <div class="wrapper width-grid" >

    <!---Panel filter  with +-->
    <div class="top-btnplus">
      <!--    <div > -->
      <a class="btn font-btn color-needles1" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
          Color and needles

        <img class="height-icon"  src="<?php echo $bg_strip3; ?>" alt="" >
      <!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-05.svg">-->

      </a>
      <a class="btn font-btn perform-art2" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Perform your art
        <img class="height-icon"  src="<?php echo $bg_strip3; ?>" alt="" >
      </a>
       <a class="btn font-btn social-network3" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">social network
        <img class="height-icon"  src="<?php echo $bg_strip3; ?>" alt="" >
       </a>
        <a class="btn font-btn calendar4"  data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Calendar management
        <img class="height-icon"  src="<?php echo $bg_strip3; ?>" alt="" >
        </a>
         <a class="btn font-btn portable5"  data-toggle="collapse" data-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">Portable and easy
        <img class="height-icon"  src="<?php echo $bg_strip3; ?>" alt="" >
        </a>
          <a class="btn font-btn power6" data-toggle="collapse" data-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">Power
        <img class="height-icon"  src="<?php echo $bg_strip3; ?>" alt="" >
         </a>

      <button style="display:none" class="btn" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both</button>
    </p>

    <!---end Panel filter  with +-->


    <!---Panel filter  with icon-->

    <div id="visible-panel" class="visible-panel">
    <!-- Color and needles  1  --->
    <a class="btn panel-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
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
    </a>
        <!-- Perform your art  2  --->
    <a class="btn panel-block"  data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
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
        <!-- social network  3  --->
    <a class="btn panel-block"  data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
       <div class="col-12 ">
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
      </div>
    </a>
        <!-- Calendar management  4  --->
    <a class="btn panel-block"  data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
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
    <!-- Portable and easy  5  --->
     <a class="btn panel-block"  data-toggle="collapse" data-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
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
    <!-- Power 6  --->
      <a class="btn panel-block" data-toggle="collapse" data-target="#multiCollapseExample6" id="coll6" aria-expanded="false" aria-controls="multiCollapseExample6">
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
    <!---end Panel filter  with icon-->



    <!---if click -> panel open--->
    <div class="row">

<!--kat-->

<!--kat-->
<div>
  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">
    <div class="col-4 description-collapse1">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
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
                            <p class="description col-md-9"><?php the_sub_field(description_1,$FrontPage) ?></p>
                   </div>
               </div>
         <!--        </a>-->
         </div>
         <?php endwhile; else: endif; ?>

         </div>


      </div>
    </div>
    </div>
  </div>
    <div class="col-4 description-collapse2">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card2 card-body2 line2">
          <div class="row justify-content-md-center justify-content-center">
         <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
            <div class="">
         <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
         <div class="bg-grid-no">
             <div class="center cursor-pointer col-md-11 text-left">
                 <img class="strip3-img " src="<?php /// the_sub_field(image_cat2,$FrontPage) ?>">
                     <p class="text-grid"><?php /// the_sub_field(title_panel2,$FrontPage) ?></p>
                      <p class="description col-md-9"><?php the_sub_field(description_2,$FrontPage) ?></p>
             </div>
         </div>
         <!--        </a>-->
         </div>

         <?php endwhile; else: endif; ?>
         </div>
      </div>
    </div>
    </div>
    <div class="col-4 description-collapse3">
    <div class="collapse multi-collapse" id="multiCollapseExample3">
      <div class="card2 card-body2 line3">
          <div class="row justify-content-md-center justify-content-center">
         <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
            <div class="">
         <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
         <div class="bg-grid-no">
             <div class="center cursor-pointer col-md-11 text-left">
                 <img class="strip3-img " src="<?php /// the_sub_field(image_cat3,$FrontPage) ?>">
                     <p class="text-grid"><?php /// the_sub_field(title_panel3,$FrontPage) ?></p>
                      <p class="description col-md-9"><?php the_sub_field(description_3,$FrontPage) ?></p>
             </div>
         </div>
         <!--        </a>-->
         </div>

         <?php endwhile; else: endif; ?>
         </div>
      </div>
    </div>
    </div>
    <div class="col-4 description-collapse4">
    <div class="collapse multi-collapse" id="multiCollapseExample4">
      <div class="card2 card-body2 line4">
          <div class="row justify-content-md-center justify-content-center">
         <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
            <div class="">
         <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
         <div class="bg-grid-no">
           <div class="center cursor-pointer col-md-11 text-left">
               <img class="strip3-img " src="<?php // the_sub_field(image_cat4,$FrontPage) ?>">
                   <p class="text-grid"><?php /// the_sub_field(title_panel4,$FrontPage) ?></p>
                    <p class="description col-md-9"><?php the_sub_field(description_4,$FrontPage) ?></p>
           </div>
       </div>
         <!--</a>-->
         </div>
         <?php endwhile; else: endif; ?>
         </div>
      </div>
    </div>
    </div>

    <div class="col-4 description-collapse5">
    <div class="collapse multi-collapse" id="multiCollapseExample5">
      <div class="card2 card-body2 line5">
          <div class="row justify-content-md-center justify-content-center">
         <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
            <div class="">
         <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
         <div class="bg-grid-no">
            <div class="center cursor-pointer col-md-11 text-left">
                <img class="strip3-img " src="<?php // the_sub_field(image_cat5,$FrontPage) ?>">
                    <p class="text-grid"><?php /// the_sub_field(title_panel5,$FrontPage) ?></p>
                     <p class="description col-md-9"><?php the_sub_field(description_5,$FrontPage) ?></p>
            </div>
        </div>
         <!--        </a>-->
         </div>
         <?php endwhile; else: endif; ?>
         </div>
      </div>
    </div>
    </div>

    <div class="col-4 description-collapse6">
    <div class="collapse multi-collapse" id="multiCollapseExample6">
      <div class="card2 card-body2 line6">
          <div class="row justify-content-md-center justify-content-center">
        <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
            <div class="">
        <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
        <div class="bg-grid-no">
         <div class="center cursor-pointer col-md-11 text-left">
             <img class="strip3-img " src="<?php /// the_sub_field(image_cat6,$FrontPage) ?>">
                 <p class="text-grid"><?php /// the_sub_field(title_panel6,$FrontPage) ?></p>
                  <p class="description col-md-9"><?php the_sub_field(description_6,$FrontPage) ?></p>
         </div>
     </div>
      <!--        </a>-->
        </div>

        <?php endwhile; else: endif; ?>
        </div>
      </div>
    </div>
    </div>
    </div>



    <!---panel with description for mobile kat--->


        <div class="visible-panel2" style="display:none">
        <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card2 card-body2">
              <div class="row justify-content-md-center justify-content-center">
             <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
                <div class="">
             <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
                   <div class="bg-grid-no">
                       <div class="center cursor-pointer col-md-11 text-left">
                           <img class="strip3-img " src="<?php //the_sub_field(image_cat1,$FrontPage) ?>">
                               <p class="text-grid"><?php/// the_sub_field(title_panel1,$FrontPage) ?></p>
                                <p class="description col-md-9"><?php the_sub_field(description_1,$FrontPage) ?></p>
                       </div>
                   </div>
             <!--        </a>-->
             </div>

             <?php endwhile; else: endif; ?>
             </div>
          </div>
        </div>
        </div>
        <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card2 card-body2">
              <div class="row justify-content-md-center justify-content-center">
             <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
                <div class="">
             <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                 <div class="center cursor-pointer col-md-11 text-left">
                     <img class="strip3-img " src="<?php /// the_sub_field(image_cat2,$FrontPage) ?>">
                         <p class="text-grid"><?php /// the_sub_field(title_panel2,$FrontPage) ?></p>
                          <p class="description col-md-9"><?php the_sub_field(description_2,$FrontPage) ?></p>
                 </div>
             </div>
             <!--        </a>-->
             </div>

             <?php endwhile; else: endif; ?>
             </div>
          </div>
        </div>
        </div>
        <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card2 card-body2">
              <div class="row justify-content-md-center justify-content-center">
             <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
                <div class="">
             <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                 <div class="center cursor-pointer col-md-11 text-left">
                     <img class="strip3-img " src="<?php /// the_sub_field(image_cat3,$FrontPage) ?>">
                         <p class="text-grid"><?php /// the_sub_field(title_panel3,$FrontPage) ?></p>
                          <p class="description col-md-9"><?php the_sub_field(description_3,$FrontPage) ?></p>
                 </div>
             </div>
             <!--        </a>-->
             </div>

             <?php endwhile; else: endif; ?>
             </div>
          </div>
        </div>
        </div>
        <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card2 card-body2">
              <div class="row justify-content-md-center justify-content-center">
             <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
                <div class="">
             <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
               <div class="center cursor-pointer col-md-11 text-left">
                   <img class="strip3-img " src="<?php // the_sub_field(image_cat4,$FrontPage) ?>">
                       <p class="text-grid"><?php /// the_sub_field(title_panel4,$FrontPage) ?></p>
                        <p class="description col-md-9"><?php the_sub_field(description_4,$FrontPage) ?></p>
               </div>
           </div>
             <!--        </a>-->
             </div>

             <?php endwhile; else: endif; ?>
             </div>
          </div>
        </div>
        </div>

        <div class="col ">
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card2 card-body2">
              <div class="row justify-content-md-center justify-content-center">
             <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
                <div class="">
             <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
             <div class="bg-grid-no">
                <div class="center cursor-pointer col-md-11 text-left">
                    <img class="strip3-img " src="<?php // the_sub_field(image_cat5,$FrontPage) ?>">
                        <p class="text-grid"><?php /// the_sub_field(title_panel5,$FrontPage) ?></p>
                         <p class="description col-md-9"><?php the_sub_field(description_5,$FrontPage) ?></p>
                </div>
            </div>
             <!--        </a>-->
             </div>

             <?php endwhile; else: endif; ?>
             </div>
          </div>
        </div>
        </div>

        <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card2 card-body2">
              <div class="row justify-content-md-center justify-content-center">
            <?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
                <div class="">
            <!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
            <div class="bg-grid-no">
             <div class="center cursor-pointer col-md-11 text-left">
                 <img class="strip3-img " src="<?php /// the_sub_field(image_cat6,$FrontPage) ?>">
                     <p class="text-grid"><?php /// the_sub_field(title_panel6,$FrontPage) ?></p>
                      <p class="description col-md-9"><?php the_sub_field(description_6,$FrontPage) ?></p>
             </div>
         </div>
          <!--        </a>-->
            </div>

            <?php endwhile; else: endif; ?>
            </div>
          </div>
        </div>
        </div>
        </div>

<!--/ panel with descr for mobile-->

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
$("#coll6").hover(
  function() {
    $('#multiCollapseExample6').collapse('show');
  }, function() {
    $('#multiCollapseExample6').collapse('hide');
  }
);

</script>

    <!---Panel filter-->
    <div class="catalog-btn">
    <a class="btn-3d" href="/glow-10/" style="float:none">CATALOG</a>
    </div>



<!---new-->
<!--new-->
    </div>
    </section>



<style>
/*.visible-panel2 {    position: fixed;   z-index: 1001;   left: 30%;  top: -400px;    right: 0;    transition: .5s;   width: 50%;}*/
</style>




<!--new--->


<!--new-->


	</main>
