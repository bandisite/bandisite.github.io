<?php 

function theme_name_scripts() {

wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/libs/jquery.js');
wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js');
wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/libs/owl.carousel.min.js');
wp_enqueue_script( 'jquery.mixitup.min.js', get_template_directory_uri() . '/libs/jquery.mixitup.min.js');
wp_enqueue_style( 'font.css', get_template_directory_uri() . '/css/fonts.css');
wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri() . '/css/font-awesome.min.css');
wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/css/owl.carousel.css');
wp_enqueue_style( 'owl.theme.css', get_template_directory_uri() . '/css/owl.theme.css');
wp_enqueue_style( 'owl.theme.css', get_template_directory_uri() . '/css/owl.theme.css');
wp_enqueue_style( 'media.css', get_template_directory_uri() . '/css/media.css');
wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css');
	
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// img
add_theme_support('post-thumbnails');
show_admin_bar(false);

 //wp_deregister_style( 'amethyst-dashicons-style' );
add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    { 
   wp_deregister_style( 'dashicons' ); 
}

?>