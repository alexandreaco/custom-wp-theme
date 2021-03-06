<?php

/*	Author: Alex Defreitas 
 *  Date: Jan 2015
 *
 *	Wordpress theme Functions file. Defines a custom post type
 *  "Apartment" with Custom Fields. Also uses Bootstrap as a 
 *  front-end framework.
 *
 */

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

if ( ! function_exists( 'nomads_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 */
	function nomads_setup() {
		// This theme uses wp_nav_menu() in two locations.
			register_nav_menus( array(
				'primary' => __( 'Primary Menu',      'nomads' ),
				'social'  => __( 'Social Links Menu', 'nomads' ),
			) );
	}
endif; // nomads_setup
add_action( 'after_setup_theme', 'nomads_setup' );



/**
 * Register widget area.
 */
function nomads_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'nomads' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'nomads' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nomads_widgets_init' );

/**
 *	Create project post type
 */
function create_post_type() {
  register_post_type( 'apartment',
    array(
      'labels' => array(
        'name' => __( 'Apartments' ),
        'singular_name' => __( 'Apartment' )
      ),
    	'taxonomies' => array('category'),

      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );



/**
 * Enqueue scripts and styles.
 *
 */

 function my_bootstrap_theme_scripts() {

 	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );

	wp_register_style( 'nomads_style', get_template_directory_uri() . '/css/nomads_style.css' );

	wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ));

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'bootstrap-js' );

	wp_enqueue_style( 'bootstrap-css' );

	wp_enqueue_style( 'nomads_style');

	wp_enqueue_script( 'script' );

}
add_action( 'wp_enqueue_scripts', 'my_bootstrap_theme_scripts' );
remove_filter('the_content', 'wpautop');

/* Include Custom Post Type in Category Filters */
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','apartment'); // replace cpt to your custom post type
    $query->set('post_type',$post_type);
	return $query;
    }
}

?>