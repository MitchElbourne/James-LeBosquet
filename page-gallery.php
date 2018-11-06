<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
    <main class="gallery">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
          <?php get_template_part('template-parts/headertexthr'); ?>
        </div><!-- col -->
      </div><!-- row -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
          <?php the_content(); ?>
        </div><!-- col -->
      </div><!-- row -->
    </main><!-- gallery -->
  </div><!-- stage -->

<?php }

get_footer();

?>
