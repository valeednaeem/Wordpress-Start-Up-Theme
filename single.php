<?php
    get_header();
    the_post();
?>

  <div class="row g-5">
    <div class="col-md-4">
      <?php dynamic_sidebar('leftsidebar'); ?>
    </div>
    <div class="col-md-8">
      <article class="blog-post">
        <p><?php the_content(); ?></p>
        <hr>
        <p class="blog-post-meta align-right"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
        <!-- <div><?php // comment_list(); ?></div> -->
        <div><?php // comment_form(); ?></div>
        <div><?php comments_template(); ?></div> <!-- Deprecated: File Theme without comments.php is deprecated since version 3.0.0 with no alternative available. Please include a comments.php template in your theme. -->
      </article>
    </div>
  </div>

<?php
    get_footer();
?>