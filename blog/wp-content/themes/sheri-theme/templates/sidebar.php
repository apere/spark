<div class = "sidebar">
  <a class = "logo" href = "<?= esc_url(home_url('/')); ?>"><img src= "<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png"></a>
  <div class = "nav-links">
    <a class = "blog" href = "http://www.sheripark.com/portfolio" id = "main-url">Portfolio</a>
    <a class = "blog" href = "<?= esc_url(home_url('/')); ?>">Blog</a>
    <a class = "blog" href = "http://www.sheripark.com/blog/category/reorient/">REORIENT</a>
  </div>
  <div class = "nav-section">
    <a class = "blog nav-title" href = "#">Projects</a>
    <ul class = "nav-projects">
      <?php wp_list_categories('hierarchical=0&title_li='); ?>
    </ul>
  </div>
  <div class = "nav-section tags-list">
    <a class = "blog nav-title" href = "#">Tags</a>
    <ul class = "nav-projects">
      <?php
        $posttags = get_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo '<li class = "post-tag"><a href ='. get_tag_link($tag->term_id). '>' . $tag->name . '</a></li>'; 
          }
        }
      ?>
    </ul>
  </div>

</div>

