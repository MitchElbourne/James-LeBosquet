<?php
//General site sheets (.js and .css)
function jamesLBRequirements() {
  wp_enqueue_style('main_style', get_stylesheet_uri());
  //Flex-box
  wp_enqueue_style('flex-grid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css');
  // wp_register_script('jquery-script', home_url() . '/wp-content/themes/JamesLB-Theme/assets/js/jquery-3.3.1.js', array( 'jquery' ));
  // wp_enqueue_script('jquery-script');
  wp_register_script('jquery-script-ui', home_url() . '/wp-content/themes/JamesLB-Theme/assets/js/jquery-ui.js', array( 'jquery' ));
  wp_enqueue_script('jquery-script-ui');
}

add_action('wp_enqueue_scripts', 'jamesLBRequirements');
?>
