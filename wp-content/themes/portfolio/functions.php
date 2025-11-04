<?php 

function portfolioTheme_theme_register(){

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo',array(
        'height' => 60,
        'width'=> 180,
    ));
     
    // add_image_size('custom-courses-image',370,278,true);
    // add_image_size('custom-blog-image',370,250,true);
    

    register_nav_menus(array(
    'portfolio_header_menu' => __('Portfolio Header Menu','portfolioTheme'),
    'portfolio_mobile_menu' => __('Portfolio Mobile Menu','portfolioTheme'),
    'portfolio_footer_menu' => __('Portfolio Footer Menu','portfolioTheme'),
    

    ));
}

add_action('after_setup_theme','portfolioTheme_theme_register');



function portfolioTheme_theme_enqueue_styles() {
    //Google Font
     wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,900;1,400&family=Sen:wght@400..800&display=swap', array(), null);
    // Slick CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);


  //Custom CSS  
  wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom-style.css', array(), time());

    //Main CSS
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // jQuery
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);


    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'portfolioTheme_theme_enqueue_styles');