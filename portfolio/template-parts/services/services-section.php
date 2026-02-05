<?php
/**
 * 
 * Template Name: Services Section
 * 
 */
?>


    <!-- Start Services 
    ============================================= -->
    <div id="services" class="services-style-one-area default-padding bottom-less">
      <!-- Header -->
        <?php get_template_part('template-parts/services/services',  'header'); ?>
        
        <div class="container">
            <div class="row">

            <?php get_template_part('template-parts/services/services', 'card'); ?>

            </div>
        </div>
    </div>
    <!-- End Services -->