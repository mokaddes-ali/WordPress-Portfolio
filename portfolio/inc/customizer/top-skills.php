<?php 
/**
 * 
 * Top Skills Customizer
 * 
 * @package  aliportfolio
 */


function aliportfolio_top_skills_customizer( $wp_customizer){
    $wp_customizer->add_section( 'top_skills_section', array(
        'title' => 'Top Skills Section',
        'priority' => 130,
    ));
    
    $wp_customizer->add_setting( 'top_skills_heading',array(
         'default' => 'Top Skills',
    ));
   $wp_customizer->add_control( 'top_skills_heading', array(
         'label'  => __('Top Skills Heading', 'aliportfolio'),
         'section' => 'top_skills_section',
         'type' => 'text',
   ));

   $wp_customizer->add_setting( 'top_skills_heading_two', array(
    'default' => 'See my expertise',
   ));

    $wp_customizer->add_control( 'top_skills_heading_two', array(
            'label' => __('Top Skills Heading Two', 'aliportfolio'),
            'type' => 'textarea',
            'section' => 'top_skills_section'
    ));

    //? Default Image
    $default_image = array(
         1=>get_template_directory_uri() . '/assets/images/wordpress.png',
         2=>get_template_directory_uri() . '/assets/images/figma.png',
         3=>get_template_directory_uri() . '/assets/images/wordpress.png',
         4=>get_template_directory_uri() . '/assets/images/wordpress.png',
         5=>get_template_directory_uri() . '/assets/images/wordpress.png',
         6=>get_template_directory_uri() . '/assets/images/wordpress.png',
    );

    //? Default Number Counter
    $default_number_counter = [
         1=> 80,
         2=> 90,
         3=> 80,
         4=> 70,
         5=> 60,
         6=> 90,
    ];

    //? Default Top Skills Title
    $default_skills_title = [
         1=> 'Shopify',
         2 => 'Figma',
         3 => 'WordPress',
         4 => 'React',
         5 => 'Laravel',
         6 => 'jQuery'
            ];

for($i=1; $i<=6; $i++ ){

    //! Top Skills Image

     $wp_customizer->add_setting( 'top_skills_image_' . $i, array(
        'default' => $default_image[$i],
    ));

     $wp_customizer->add_control(new WP_Customize_Image_Control( $wp_customizer, 'top_skills_image_' . $i, array(
            'label' => __('Top Skills Image' . $i, 'aliportfolio'),
            'section' => 'top_skills_section'
     )));

     //!Top Skills Number Counter

      $wp_customizer->add_setting( 'top_skills_number_counter_' . $i, array(
        'default' => $default_number_counter[$i],
    ));

     $wp_customizer->add_control('top_skills_number_counter_' . $i, array(
            'label' => __('Top Skills Number Counter ' . $i, 'aliportfolio'),
            'type' => 'number',
            'section' => 'top_skills_section'
     ));

     //!Top Skills Title

       $wp_customizer->add_setting( 'top_skills_title_' . $i, array(
        'default' => $default_skills_title[$i],
    ));

     $wp_customizer->add_control('top_skills_title_' . $i, array(
            'label' => __('Top Skills Title ' . $i, 'aliportfolio'),
            'section' => 'top_skills_section'
     ));



}

}
add_action('customize_register', 'aliportfolio_top_skills_customizer');


