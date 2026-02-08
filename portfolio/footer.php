<footer class="default-padding bg-cover">
        <button class="scroll-top-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
</svg>

    </button>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="footer-items text-center">
                     <?php 
                     if ( has_custom_logo() ) {
                        the_custom_logo(); 
                        }
                        ?>
                    <ul class="foter-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'portfolio_footer_menu',
                            'fallback_cb' => false
                        ) );
                        ?>
                    </ul>
                    <p>
                        <?php echo esc_html__( 'Copyright', 'portfolio' ); ?>
                        &copy;
                        <?php echo date( 'Y' ); ?>
                        <?php bloginfo( 'name' ); ?>
                        <?php echo esc_html__( 'All rights reserved', 'portfolio' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
</main>
</body>

</html>