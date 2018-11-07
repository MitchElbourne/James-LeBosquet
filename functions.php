<?php
//General site sheets (.js and .css)
function jamesLBRequirements() {
  // //Flex-box
  // wp_enqueue_style('flex-grid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css');
  //Bootstrap css
  wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
  //Bootstrap JS
  wp_register_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script('bootstrap-js');
  //Jquery UI
  wp_register_script('jquery-script-ui', home_url() . '/wp-content/themes/JamesLB-Theme/js/jquery-ui.js', array( 'jquery' ));
  wp_enqueue_script('jquery-script-ui');
  wp_enqueue_style('main_style', get_stylesheet_uri());
}

function website_features() {
  add_theme_support('post-thumbnails');
  add_image_size('Medium-small', 400, 400, true);
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'NavBar' ),
) );

add_action('after_setup_theme', 'website_features');

add_action('wp_enqueue_scripts', 'jamesLBRequirements');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>
