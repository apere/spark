<article <?php post_class(); ?>>
  <header>
    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <ul class="tags project-info">
      <li><?php the_category('li'); ?></li>
      <li class = "post-date">
        <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
      </li>
    </ul>
    <ul class = "tags">
      <li class="list-title">Tags: </li>
        <?php
          $posttags = get_the_tags();
          if ($posttags) {
            foreach($posttags as $tag) {
              echo '<li class = "post-tag"><a href ='. get_tag_link($tag->term_id). '>' . $tag->name . '</a></li>'; 
            }
          }
        ?>
    </ul>
  </header>
  <div class="post-content">
    <?php 
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'feature-image' );
      if( $image ) :
        echo("<img src='" . $image[0] . "' class = 'feature-image'>");
      endif;
      the_excerpt(); 
    ?>
    <div class="spacer" style="clear: both;"></div>
  </div>
</article>
