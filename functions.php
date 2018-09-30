<?php
// function styles and scripts by yehia ali
function task_scripts() {
	// this part links style
	// bootstrap stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 'v4.0.0' );
	// font stylesheet.
	wp_enqueue_style( 'font', get_template_directory_uri() . '/css/all.min.css' );
	// Carousel stylesheet.
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style( 'transitions', get_template_directory_uri() . '/css/owl.transitions.css');
	// main-style stylesheet
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );


	// this part links SCRIPTs
	// jQuery first, then Popper.js, then Bootstrap JS
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.js', array(), '3.3.1', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(jquery), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(jquery), 'v4.0.0', true);
	// Carousel
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'task_scripts' );

/* this part menus*/
function task_menu() {
    register_nav_menus( array(
        'header-location' => 'header',
    ) );
}
add_action( 'init', 'task_menu' );

require_once ('class-wp-bootstrap-navwalker.php');
// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
));

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}


// this part title in head
add_theme_support('title-tag');

?>


