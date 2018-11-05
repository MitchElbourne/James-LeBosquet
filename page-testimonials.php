<?php get_header();
while(have_posts()) {
  the_post();
?>
  <div class="stage">
    <div class="testimonials">
      <?php get_template_part('template-parts/headertexthr'); ?>
    </div>
  </div>
<?php }

get_footer();

?>
