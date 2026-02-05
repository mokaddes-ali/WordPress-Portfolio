<?php
$services_posts = new WP_Query([
    'post_type' => 'services',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
]);

if ($services_posts->have_posts()):
    while ($services_posts->have_posts()):
        $services_posts->the_post();
        ?>

        <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp">
            <div class="service-style-one-item">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('custom-services-image', ['class' => 'courses-image-size', 'alt' => get_the_title()]);
                    } 
                    ?>
                    </a>

                <h4><?php echo esc_html(get_the_title()); ?></h4>

                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>

                <a href="<?php the_permalink(); ?>" class="btn-style-four">
                    <div class="icon">
                         <?php get_template_part('assets/svg/svg',  'seeMore'); ?>
                        
                    </div> 
                    Read More
                </a>

            </div>
        </div>

<?php
    endwhile;
    wp_reset_postdata();
else:
    echo '<p>No services post found</p>';
endif;
?>
