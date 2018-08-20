<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader <?php if(is_home()) echo "s-pageheader--home"; ?>">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                 <?php 
                 if(has_custom_logo( )){
                     the_custom_logo( );
                 }else{
                     echo "<h1><a href='".home_url( "/" )."'>".get_bloginfo('name')."</a></h1>";
                 }
                 
                 ?>
                </div> <!-- end header__logo -->

                <?php if(is_active_sidebar( 'header-social' )){
                    dynamic_sidebar( 'header-social' );
                }?>

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">
                    <?php echo get_search_form( ); ?>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span><?php _e("header__nav",'philosophy');?></span></a>

               <?php get_template_part('template-parts/common/navigation'); ?>
            </div> <!-- header-content -->
        </header> <!-- header -->


        <?php 
        if(is_home()){
            get_template_part('template-parts/blog-home/feature');
        }
        
        
        ?>

    </section> <!-- end s-pageheader -->