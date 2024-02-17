<?php
        get_header();
?>

  <div class="row g-5">
    <div class="col-md-8">
      From <h3 class="pb-4 mb-4 fst-italic border-bottom">
        <?php bloginfo(); ?>
      </h3>
<?php
        while(have_posts()) {
                the_post();
?>
      <article class="blog-post">
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
        <p><?php the_excerpt(); ?></p>
      </article>
<?php   } ?>

    <!-- Start the pagination functions before the loop. -->
    <!--<div class="nav-previous alignleft"><?php // next_posts_link( '&gt;' ); ?></div>-->
    <div class="nav-previous alignleft"><?php the_posts_pagination(); ?></div>
    <!--<div class="nav-next alignright"><?php // previous_posts_link( '&lt;' ); ?></div>-->
    <!-- End the pagination functions before the loop. -->

        </div>


    <div class="col-md-4">
      <?php dynamic_sidebar('rightsidebar'); ?>
    </div>
<?php
        get_footer();
?>