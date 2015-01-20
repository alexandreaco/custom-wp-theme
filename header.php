<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <?php wp_enqueue_script("jquery"); ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <nav class="navbar navbar-nomads" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url')?>">
            <?php bloginfo('name')?>
        </a>

      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        
        <?php 
        
        /* Use Navwalker to generate Primary Nav */
        
        wp_nav_menu( array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'depth' => 2,
          'container' => false,
          'container_class' => 'collapse navbar-collapse',
          'menu_class' => 'nav navbar-nav navbar-right',
          'fallback_cb' => 'wp_bootstrap_navbar::fallback',
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );

        ?>

      </div>
    </nav>
    
    <div class="container">
