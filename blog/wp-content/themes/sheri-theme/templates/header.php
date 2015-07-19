<header class="banner" role="banner">
  <div class = "wrapper">
    <?php if( is_home()) : ?>
      <div class = "hero-image" style="background-image:url('<?php echo get_theme_mod( 'header-img-upload', '' ); ?>');"></div>
      <div class = "hero-text">
        <div class = "title"><?php echo(get_bloginfo( 'name' ));?></div>
        <div class = "subtitle"><?php echo(get_bloginfo( 'description' ));?></div>
      </div>
    <?php elseif( is_single() ) : ?>
        <?php 
          $categories = get_the_category();
          $categories[0]->name
        ?>
        <div class = "hero-image" style="background-image:url('<?php echo get_theme_mod( 'cat-' . $categories[0]->name . '-img',  '/assets/images/default_hero.jpg' ); ?>');"></div>
        <div class = "hero-text">
        <div class = "title"><?php the_title(); ?></div>
        <div class = "subtitle">
          <?php 
            foreach ( $categories as $category ) { 
                echo $category->name; 
            }
          ?>
        </div>
      </div>
    <?php elseif( is_category() ) : ?>
        <?php 
          $categories = get_the_category();
          $categories[0]->name
        ?>
        <div class = "hero-image" style="background-image:url('<?php echo get_theme_mod( 'cat-' . $categories[0]->name . '-img',  '/assets/images/default_hero.jpg' ); ?>');"></div>
        <div class = "hero-text">
        <div class = "title">
          <?php 
            echo $categories[0]->name; 
          ?>
          </div>
        <div class = "subtitle">
          
        </div>
      </div>
    <?php elseif( is_tag() ) : ?>
        <?php 
          $categories = get_the_category();
          $categories[0]->name
        ?>
        <div class = "hero-image" style="background-image:url('<?php echo get_theme_mod( 'cat-' . $categories[0]->name . '-img',  '/assets/images/default_hero.jpg' ); ?>');"></div>
        <div class = "hero-text">
        <div class = "title">
          <?php 
            echo single_tag_title(); 
          ?>
          </div>
        <div class = "subtitle">
          
        </div>
      </div>
    <?php elseif( is_404()) : ?>
      <div class = "hero-image" style="background-image:url('<?php echo get_theme_mod( 'header-img-upload', '' ); ?>');"></div>
      <div class = "hero-text">
        <div class = "title">Error 404!</div>
        <div class = "subtitle">It seems this page doesn't exist.</div>
      </div>
    <?php endif; ?>
  <div class = "overlay"></div>
  </div>                      
</header>
