<?php
// Add the .css and .js files to the website
function jamesLBRequirements() {
  wp_enqueue_style('main_style', get_stylesheet_uri());
}

function jamesLBBootstrap() {
  wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'jamesLBRequirements');
add_action('wp_enqueue_scripts', 'jamesLBBootstrap');
?>
