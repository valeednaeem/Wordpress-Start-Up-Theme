<?php
        get_header();
?>

    <section class="py-0 bg-light">
        <div class="container p-5">
            <div class="row gx-5">
                <div class="col-xl-8">
                    <h2 class="fw-bolder fs-5 mb-4"><?php bloginfo(); ?></h2>
                    <?php
                        $wpPosts = new WP_Query(array(
                            'post_type'     => 'post',
                            'post_status'   => 'publish'
                        ));
                        while($wpPosts->have_posts()) {
                            $wpPosts->the_post();
                    ?>
                            <div class="mb-5">
                                <div class="small text-muted"><?php the_date('M d, Y'); ?></div>
                                <a class="link-dark" href="<?php the_permalink(the_post()); ?>"><h3><?php the_title(); ?></h3></a>
                            </div>
                    <?php } ?>
                    <div class="nav-previous alignright"><?php the_posts_pagination(); wp_link_pages(); ?></div>
                </div>
                <div class="col-xl-4 bg-white">
                    <?php dynamic_sidebar('rightsidebar'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part("templates/featuredStories"); ?>
<?php
        get_footer();
?>