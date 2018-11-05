<?php
//General site sheets (.js and .css)
function jamesLBRequirements() {
  wp_enqueue_style('main_style', get_stylesheet_uri());
  //Flex-box
  wp_enqueue_style('flex-grid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css');
  //Font Awesome
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css');
  //Jquery UI
  wp_register_script('jquery-script-ui', home_url() . '/wp-content/themes/JamesLB-Theme/assets/js/jquery-ui.js', array( 'jquery' ));
  wp_enqueue_script('jquery-script-ui');
}

function website_features() {
  add_theme_support('post-thumbnails');
  add_image_size('Medium-small', 400, 400, true);
}


add_action('after_setup_theme', 'website_features');

add_action('wp_enqueue_scripts', 'jamesLBRequirements');
?>
