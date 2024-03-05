<?PHP
    get_header();
?>
    <div class="container-fluide p-5">
        <div class="row gx-5">
            <?php get_template_part("templates/featuredStories"); ?>
            <?php get_template_part("templates/testimonialSection"); ?>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <?php get_the_tag_list("<div>", "|", "</div>", "tags") ?>
                </div>
                <div class="continaer px-5 my-5">
                    <?php comment_form(); ?>
                </div>
                <div class="continaer px-5 my-5">
                    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
                    <?php wp_list_comments(); ?>
                    <?php paginate_comments_links(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>