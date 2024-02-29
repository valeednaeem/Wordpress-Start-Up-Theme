<?php
        get_header();
?>

    <?php
      $cat = get_categories(array('taxonomy' => 'category'));
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
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0"><?php the_excerpt(); ?></p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Categories</h4>
          <ol class="list-unstyled mb-0">
            <?php foreach($cat as $key => $val) { ?>
            <li><a href="<?php echo esc_html(get_category_link($val->term_id)); ?>"><?php echo esc_html($val->name); ?></a>(<?php echo esc_html($val->count); ?>)</li>
            <?php } ?>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
<?php
        get_footer();
?>