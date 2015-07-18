<header class="banner" role="banner">
  <div class = "wrapper">
    <div class = "hero-image"></div>
    <div class = "hero-text">
      <?php if( is_home()) : ?>
        <div class = "title">The Blog of Sheri Park</div>
        <div class = "subtitle">
          Join me on my travels as I collaborate with artists all over the globe.
        </div>
      <?php elseif( is_single() ) : ?>
        <div class = "title"><?php the_title(); ?></div>
        <div class = "subtitle">
          <?php 
            $categories = get_the_category();
            foreach ( $categories as $category ) { 
                echo $category->name; 
            }
          ?>
        </div>
      <?php endif; ?>
    </div>
    <div class = "overlay"></div>
  </div>                      
</header>
