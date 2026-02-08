  <!-- Start Banner 
    ============================================= -->
    <div class="banner-style-one-area bg-gray" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/heroline.png'); ?>');?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner-style-one-items">
                        <div class="info">
                            <h1>
                                <?php echo esc_html__( "Hey 👋 I'm", "portfolio"); ?>
                                <br> 
                                <span>
                                    <?php echo esc_html__( "Mokaddes Ali", "portfolio" ); ?>
                                </span>
                            </h1>

                            <h2><span class="title-typed"></span></h2>
                            <p>
                                Hi, my name is Mokaddes Ali and I began using WordPress when it first began. I’ve spent most of my waking hours for the last ten years designing, programming and operating WordPress sites.
                            </p>
                            <div class="flex-social mt-40">
                                <div class="button">
                                    <a class="btn-style-regular" href="#portfolio"><span>My Works </span>
                                     <?php get_template_part("assets/svg/right");?>
                                    </a>
                                </div>

                                 <div class="button">
                                    <a class="btn-style-regular" href="#contact"><span>Download CV</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="thumb">
                            <?php $hero_img = get_theme_mod('hero_section_img');
                            if($hero_img ) :
                            ?>
                           <img src="<?php echo esc_url( $hero_img ); ?>" alt="Image Not Found"> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->