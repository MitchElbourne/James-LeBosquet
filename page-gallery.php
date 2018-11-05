<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
    <main class="gallery">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
          <?php get_template_part('template-parts/headertexthr');

          ?>
        </div><!-- col -->
      </div><!-- row -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
          <img src="<?php echo get_theme_file_uri("assets/images/icon-scissors.svg"); ?>" alt="Icon Scissors">
          <p>It's not quite ready yet, check back soon!</p>
        </div><!-- col -->
      </div><!-- row -->
    </main><!-- gallery -->
  </div><!-- stage -->

<?php }

get_footer();

?>
