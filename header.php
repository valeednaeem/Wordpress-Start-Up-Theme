<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Startup Theme for Developers with Woocommerce support." />
        <meta name="author" content="Wall-V - Valeed Naeem Minhas" />
        <title><?php bloginfo('title'); ?> - <?php if(is_front_page()){ bloginfo('description'); } else { the_title( '&lt;&lt;', '&gt;&gt;', true ); } ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?PHP bloginfo( 'template_directory' ); ?>/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php bloginfo( 'template_directory' ); ?>/css/styles.css" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_header_image(); ?>" class="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                        <?php wp_nav_menu(
                                array(
                                    'theme_location'    => 'main-menu',
                                    'menu_class'        => 'nav'
                                    )
                            ); ?>


                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <?php
            $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
        ?>
        <header class="bg-dark py-5" style="background-image: url('<?PHP echo $url[0]; ?>'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"><?php wp_title(); ?></h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-3">
            <div class="container px-4 px-lg-5 mt-5">