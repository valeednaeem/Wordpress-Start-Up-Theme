<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php language_attributes(); ?>" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Startup Theme for Developers with Woocommerce support." />
        <meta name="author" content="Wall-V - Valeed Naeem Minhas" />
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <?php echo get_custom_logo(); ?>
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
                    <!--<form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>-->
                </div>
            </div>
        </nav>
        <!-- Header-->
        <?php
            $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
        ?>
        <?php
            wp_reset_query( '' );
            if(is_page('blog')) {
                get_template_part('templates/featuredBlog');
            }
            elseif( is_front_page() ) {
                get_template_part("templates/banner");
            }
            else
            {
                get_template_part("templates/pageTitle");
            }
        ?>
        <!-- Section-->
        <section class="p-0">
            <div class="container-fluide p-0 p-lg-0 mt-0">