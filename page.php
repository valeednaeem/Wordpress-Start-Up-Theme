<?PHP
    get_header();
?>
    <div <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <?php get_the_tag_list("<div>", "|", "</div>", "tags") ?>
    </div>
    <div>
        <?php comment_form(); ?>
    </div>
    <div>
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
        <?php wp_list_comments(); ?>
        <?php paginate_comments_links(); ?>
    </div>
<?php
    get_footer();
?>