<?php 
/**
 * Template Name: Top Skills
 * 
 * @package aliportfolio
 */
?>

    <div class="fun-factor-area default-padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">
                        <?php echo esc_html( get_theme_mod('top_skills_heading', 'Top Skills') ); ?>
                        </h4>
                        <h2 class="title split-text">
                            <?php echo esc_html( get_theme_mod('top_skills_heading_two', 'See my expertise') ); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="fun-fact-style-two-items text-center">

            <?php

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
            
             for( $i = 1; $i<=6; $i++):
                $skill_image   = get_theme_mod('top_skills_image_' . $i, $default_image[$i]);
                $skill_counter = get_theme_mod('top_skills_number_counter_' . $i, $default_number_counter[$i]);
                $skill_title   = get_theme_mod('top_skills_title_' . $i, $default_skills_title[$i]);

                // var_dump($skill_image, $skill_counter, $skill_title); // << debug
             ?>
                <!-- Single item -->
                <div class="funfact-style-two-item wow fadeInUp">
                    <div class="icon">
                       <img src="<?php echo esc_url($skill_image); ?>" alt="<?php echo esc_attr($skill_title); ?>">
                    </div>
                    <div class="fun-fact">
                        <div class="counter">
                          <div class="timer" data-to="<?php echo esc_attr($skill_counter); ?>" data-speed="2000">
                    <?php echo esc_html($skill_counter); ?>
                </div>
                            <div class="operator">%</div>
                        </div>
                        <span class="medium">
                                        <?php echo esc_html($skill_title); ?>
                        </span>
                    </div>
                </div>
                <?php endfor; ?>
                <!-- End Single item -->
           </div>
        </div>
    </div>
    <!-- End Fun Factor -->