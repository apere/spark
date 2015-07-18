<div class = "main-container">
  <div class = "main-content">
    
    <?php if (have_posts()) : ?>
      <?php $post = $posts[0]; $c=0;?>
      <?php while (have_posts()) : the_post(); ?>

        <?php $c++;
        if( !$paged && $c == 1) :?>
          <?php  get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

        <?php else :?>
          <?php  get_template_part('templates/content-compact', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endif;?>
    
        <?php if( $c != count($posts)) :?>
          <hr>
        <?php endif; ?>

      <?php endwhile; ?>

    <?php else : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</div>


<!--<?php the_posts_navigation(); ?>-->
