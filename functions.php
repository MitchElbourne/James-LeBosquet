<?php
//General site sheets (.js and .css)
function jamesLBRequirements() {
  //Bootstrap css
  wp_enqueue_style('bootstrap-css', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
  //Bootstrap JS
  wp_enqueue_script('bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array('jquery'), false, true);
  //Custom CSS
  wp_enqueue_style('main_style', get_stylesheet_uri());
  //Custom JS
  wp_enqueue_script('main_script', get_theme_file_uri('/js/scripts.js'), array('jquery'), microtime(), true);
}
add_filter( 'wpcf7_autop_or_not', '__return_false' );
//Enqueue scipts and stylesheets
add_action('wp_enqueue_scripts', 'jamesLBRequirements');
// Remove admin bar from page
add_filter('show_admin_bar', '__return_false');
//Custom Post-Types
function website_post_types() {
  //Education program Post-Type
  register_post_type('program', array(
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-media-spreadsheet'
  ));

  //Testimonials Post-Type
  register_post_type('testimonial', array(
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'supports' => array('title'),
    'rewrite' => array('slug' => 'testimonials'),
    'public' => true,
    'labels' => array(
      'name' => 'Testimonials',
      'add_new_item' => 'Add New Testimonial',
      'edit_item' => 'Edit Testimonial',
      'all_items' => 'All Testimonials',
      'singular_name' => 'Testimonial'
    ),
    'menu_icon' => 'dashicons-nametag'
  ));
}

//Initialise the custom Post-Types
add_action('init', 'website_post_types');

//Theme Supports
function website_features() {
  add_theme_support('post-thumbnails');
  add_image_size('Medium-small', 400, 400, true);
}
//Enqueue theme supports
add_action('after_setup_theme', 'website_features');

//WP Menus
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'NavBar' ),
));

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>
