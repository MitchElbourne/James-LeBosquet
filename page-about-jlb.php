<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
  <main class="about">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <?php get_template_part("template-parts/headertexthr"); ?>
      </div><!-- col -->
    </div><!-- row -->
    <div class="about-content">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="img-wrapper">
          <img class="jlb-profile-pic" src="<?php echo get_theme_file_uri('assets/images/jlb-profile-pic.png'); ?>" alt="JamesLB Circular Image" width="362" height="362">
        </div>
        <p class="intro">
          <?php the_content(); ?>
        </p>
      </div><!-- col -->
    </div><!-- about-content -->
  </main><!-- about -->
</div><!-- stage -->


<?php }
get_footer();
?>
