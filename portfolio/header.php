<!DOCTYPE html>
<html style="scroll-behavior: smooth;" <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-0 p-0">
    <header>
        <!-- Show scroll progress -->
        <div id="progress-top">
        </div>
        <!-- Show follows link in sidebar -->
        <div class="sidebar-follow-link">
            <div class="vertical-social-line">
                <div class="vs-item">
                    <a href="#" class="vs-icon fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <span class="vs-dot"></span>

                <div class="vs-item">
                    <a href="#" class="vs-icon tw">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>

                <span class="vs-dot"></span>

                <div class="vs-item">
                    <a href="#" class="vs-icon ig">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <span class="vs-dot"></span>

                <div class="vs-item">
                    <a href="#" class="vs-icon yt">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="header-wrapper">
                <!----- logo ----->
                <div class="logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>

                <!----- main-menu and button ----->
                <div class="menu-button-wrapper">
                    <nav class="main-menu">
                        <ul class="foter-menu">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'portfolio_header_menu',
                                'fallback_cb' => false
                            ) );
                            ?>
                            </ul>
                    </nav>
                    <!----- sign-up-btn ----->
                    <div class="button btn-black">
                        <a href="#contact">
                            Let's Talk <svg class="talk-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>
                        </a>
                    </div>

                    <!----- phone menu ----->
                    <div class="menu-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                </div>

                <!----- menu item for phone ----->
                <div id="navPhone" class="menu-item-phone">

                    <!----- logo ----->
                    <div class="logo-div">
                        <div class="logo">
                            <?php if (has_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png"
                                        alt="<?php echo esc_attr(get_bloginfo('name')) ?>" />
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="x-icon menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <line x1="18" y1="6" x2="6" y2="18" stroke-linecap="round" />
                                <line x1="6" y1="6" x2="18" y2="18" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="menu-div">
                        <nav class="main-menu-phone">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'mobile_menu',
                                'fallback_cb'    => false,
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>