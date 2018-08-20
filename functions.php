<?php
if(site_url()=="http://localhost/blog/"){
    define("VERSION",time());
}else{
    define("VERSION",wp_get_theme()->get("VERSION"));
}

define('ACF_EARLY_ACCESS', '5');
function philosophy_setup(){
   load_theme_textdomain( 'philosophy' );
   add_theme_support( 'post-thumbnails' );
   add_theme_support( 'title-tags' );
   add_theme_support( 'custom-logo' );
   add_theme_support( 'html5',array('search-form','comment-list') );
   add_theme_support( 'post-formats',array('image','gallery','video','audio','link','quote') );
   add_editor_style( '/assets/css/editor-style.css' );
   register_nav_menu('topmenu', __('Top Menu','philosophy') );
   add_image_size('philosophy-image',400,400,true);

   register_nav_menus(array(
	   'footer-left'	=>__("Footer Left","philosophy"),
	   'footer-middle'	=>__("Footer Middle","philosophy"),
	   'footer-right'	=>__("Footer Right","philosophy"),
   ));
}
add_action('after_setup_theme','philosophy_setup');

function philosophy_assets(){
    wp_enqueue_style('font-awesome',get_theme_file_uri( '/assets/css/font-awesome/css/font-awesome.css' ),null,'1.0');
    wp_enqueue_style('font-css',get_theme_file_uri( '/assets/css/font-awesome/css/fonts.css' ),null,'1.0');
    wp_enqueue_style('philosophy-base',get_theme_file_uri( '/assets/css/base.css' ),null,'1.0');
    wp_enqueue_style('philosophy-vendor',get_theme_file_uri( '/assets/css/vendor.css' ),null,'1.0');
    wp_enqueue_style('philosophy-main',get_theme_file_uri( '/assets/css/main.css' ),null,'1.0');
    wp_enqueue_style( 'philosophy-style', get_stylesheet_uri() );

    wp_enqueue_script( "philosophy-modernizr", get_theme_file_uri( '/assets/js/modernizr.js' ),null,'1.0' );
    wp_enqueue_script( "philosophy-pace", get_theme_file_uri( '/assets/js/pace.min.js' ),null,'1.0' );
    wp_enqueue_script( "philosophy-plugin", get_theme_file_uri( '/assets/js/plugins.js' ),array('jquery'),'1.0', true );
    wp_enqueue_script( "philosophy-main", get_theme_file_uri( '/assets/js/main.js' ),array('jquery'),'1.0', true );
    wp_enqueue_script( "philosophy-cust", get_theme_file_uri( '/assets/js/custom.js' ),array('jquery'),'1.0', true );
}
add_action('wp_enqueue_scripts','philosophy_assets');

require get_template_directory() . '/inc/tgm.php';
require get_template_directory() . '/inc/attachments.php';


function philosophy_pagination(){
    global $wp_query;
    $link =  paginate_links( array(
        'current'   =>max(1,get_query_var('paged')),
        'total'     =>$wp_query->max_num_pages,
        'type'      => 'list'
    ) );

    $link = str_replace("page-numbers","pgn__num",$link);
    $link = str_replace("<ul class='pgn__num'>",'<ul>',$link);
    $link = str_replace("next pgn__num",'pgn__next',$link);
    $link = str_replace("prev pgn__num",'pgn__prev',$link);
   

    echo $link;
}


remove_action( "term_description","wpautop" );

function philosophy_about(){
    register_sidebar(
		array(
			'name'          => __( 'About us', 'philosophy' ),
			'id'            => 'about-us',
			'description'   => __( 'Add widgets here to appear in your about us page.', 'philosophy' ),
			'before_widget' => '<div id="%1$s" class="col-block %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="quarter-top-margin">',
			'after_title'   => '</h3>',
		)
    );
    register_sidebar(
		array(
			'name'          => __( 'Contact google maps', 'philosophy' ),
			'id'            => 'contact-maps',
			'description'   => __( 'Add widgets here to appear in your contact page.', 'philosophy' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => ' ',
			'after_title'   => ' ',
		)
    );
    register_sidebar(
		array(
			'name'          => __( 'contact info', 'philosophy' ),
			'id'            => 'contact-info',
			'description'   => __( 'Add widgets here to appear in your contact info', 'philosophy' ),
			'before_widget' => '<div id="%1$s" class=" col-six tab-full %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => __( 'Footer top right text', 'philosophy' ),
			'id'            => 'footer-right',
			'description'   => __( 'Add widgets here to appear in your contact info', 'philosophy' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => __( 'Header social', 'philosophy' ),
			'id'            => 'header-social',
			'description'   => __( 'Add widgets here to appear in your header social', 'philosophy' ),
			'before_widget' => '<ul id="%1$s" class="header__social %2$s">',
			'after_widget'  => '</ul>',
			'before_title'  => ' ',
			'after_title'   => ' ',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Newslater area', 'philosophy' ),
			'id'            => 'footer-newslater',
			'description'   => __( 'Add widgets here to appear in your footer newslatter', 'philosophy' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Text', 'philosophy' ),
			'id'            => 'footer-text',
			'description'   => __( 'Add widgets here to appear in your footer text', 'philosophy' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => ' ',
			'after_title'   => ' ',
		)
	);


}
add_action("widgets_init","philosophy_about");

function philosophy_search_form($form){ 

	$home = home_url("/");
	$button = __("Search","philosophy");
	$lebel = __("Search for:","philosophy");
	$post_type = <<<PT
	<input type="hidden" name="post_type" value="post">
PT;

if(is_post_type_archive('book')){
	$post_type = <<<PT
	<input type="hidden" name="post_type" value="book">
PT;
};

	$newform = <<<FORM

	
	<form role="search" method="get" class="header__search-form" action="{$home}">
	<label>
		<span class="hide-content"><?php _e("{$lebel}","philosophy"); ?></span>
		<input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="{$lebel}" autocomplete="off">
	</label>
	{$post_type}
	<input type="submit" class="search-submit" value="{$button}">
</form>

FORM;

return $newform;



}
add_filter("get_search_form","philosophy_search_form");


