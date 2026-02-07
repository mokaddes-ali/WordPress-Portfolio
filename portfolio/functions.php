<?php 

function portfolio_theme_setup(){

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo',array(
        'height' => 200,
        'width'=> 200,
    ));
     
    // add_image_size('custom-courses-image',370,278,true);
    // add_image_size('custom-blog-image',370,250,true);
    

    register_nav_menus(array(
    'portfolio_header_menu' => __('Portfolio Header Menu','mokaddesAli'),
    'portfolio_mobile_menu' => __('Portfolio Mobile Menu','mokaddesAli'),
    'portfolio_footer_menu' => __('Portfolio Footer Menu','mokaddesAli'),
    

    ));
}

add_action('after_setup_theme','portfolio_theme_setup');



function portfolio_enqueue_styles_register() {
    //Google Font
     wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,900;1,400&family=Sen:wght@400..800&display=swap', array(), null);
    // Slick CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    //animate css
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

  //Custom CSS  
  wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom-style.css', array(), time());

    //Main CSS
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // jQuery
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

    wp_enqueue_script(
    'typed-js',
    'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.min.js',
    array('jquery'),
    '2.1.0',
    true
);

 wp_enqueue_script(
    'waypoints-min-js',
    'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js',
    array('jquery'),
    '4.0.1',
    true
);

    wp_enqueue_script(
    'Counter-Up',
    'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js',
    array('jquery', 'waypoints-min-js'),
    '1.1.0',
    true
);
    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'waypoints-min-js'), time(), true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles_register');


get_template_part('inc/CPT/services');
get_template_part('inc/CPT/educations');

get_template_part('inc/customizer/top-skills');
