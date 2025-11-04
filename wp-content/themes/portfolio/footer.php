    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="footer-items text-center">
                        <ul class="foter-menu">
                        <?php wp_nav_menu(array(
                        'theme_location' => 'portfolio_header_menu',
                        'fallback_cb' => false
                         )); ?>
                        </ul>
                        <p>Copyright &copy; 2024 Antux. All Rights Reserved</p>
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

