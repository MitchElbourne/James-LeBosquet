<?php
// Sub navigation for the program post-type
?>

<nav class="sub-navigation">
  <ul class="nav">
    <?php
    $Programs = new WP_Query(array(
      'post_type' => 'program',
      'order' => 'ASC',
    ));


    while ($Programs->have_posts()) {
      $Programs->the_post();
      global $post;
      $post_slug = $post->post_name;
      $postSlug = str_replace(' ', '', $post_slug);
      ?>

      <li><a <?php if (is_single($postSlug)) echo 'class="active"' ;?> href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php }
    wp_reset_query();

    ?>
  </ul>
</nav>
