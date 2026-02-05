    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="footer-items text-center">
                        <ul class="foter-menu">
                        <?php wp_nav_menu(array(
                        'theme_location' => 'aliportfolio_footer_menu',
                        'fallback_cb' => false
                         )); ?>
                        </ul>
                        <p>
                            <?php echo esc_html__('Copyright', 'aliportfolio'); ?>
                             &copy; 
                             <?php echo date('Y');?> 
                             <?php bloginfo('name');?>
                              <?php echo esc_html__('All rights reserved', 'aliportfolio'); ?>
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

