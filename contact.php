<?php
/*
* Template Name: Contact us
 */
the_post();
get_header(); ?>



    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
                
            </div> <!-- end s-content__header -->
            <div class="s-content__media col-full">
                <div id="map-wrap">
                <?php 
               if(is_active_sidebar("contact-maps")){
                dynamic_sidebar("contact-maps");
               }
               ?>
                </div> 
            </div> <!-- end s-content__media -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                  <?php the_post_thumbnail("large"); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

               <?php echo get_the_content(  );  ?>
           

                
               
               <div class="row">
               <?php 
               if(is_active_sidebar("contact-info")){
                dynamic_sidebar("contact-info");
               }
               ?>
                </div> <!-- end row -->


                <h3><?php _e("Say Hello."); ?></h3>


            <?php 
            if(get_field("contact_form_shortcode")){
               echo do_shortcode(get_field("contact_form_shortcode"));
            }
            ?>

            </div> <!-- end s-content__main -->
       
              

        </article>


        <!-- comments
        ================================================== -->
      
    </section> <!-- s-content -->


   <?php get_footer(); ?>