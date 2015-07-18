<article <?php post_class(); ?>>
  <header>
    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <ul class="tags project-info">
      <?php the_category('li'); ?>
      <li class = "post-date">
        <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
      </li>
    </ul>
    <ul class = "tags">
      
    </ul>
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
</article>
