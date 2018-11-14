<?php
/*
  Template Name: Program Overview
  Template Post Type: program
*/
get_header();
?>

<div class="stage">
  <main class="education">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <header>
          <h2>In Salon Education</h2>
        </header>
      </div>
    </div>
    <?php get_template_part('template-parts/education-navigation'); ?>
    <div class="education-stage">
      <div class="education-landing">
      <?php
      if (have_rows('landing_box')) {
        while (have_rows('landing_box')) {
          the_row(); ?>
          <div class="row middle-sm">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 edu-img">
              <div class="img-wrapper">
                <img src="<?php the_sub_field('landing_image'); ?>">
              </div>
            </div><!-- col -->
            <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12 edu-content">
              <p class="intro"><?php the_sub_field('landing_title'); ?></p>
              <p><?php the_sub_field('landing_text'); ?></p>
            </div><!--col-->
          </div><!--row-->

        <?php }
      }
      if (have_rows('landing_bottom')) {
        while(have_rows('landing_bottom')) {
          the_row();
          ?>
          <div class="row landing-bottom">
            <div class="row start-sm bottom-image">
              <div class="img-wrapper col-8">
                <img src="<?php the_sub_field('landing_bottom_image'); ?>" alt="In Salon Image - James Cutting">
              </div>
            </div><!-- row -->
            <div class="row">
              <div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-5 col-sm-10 col-xs-12 bottom-content">
                <p class="intro"><?php the_sub_field('landing_bottom_title'); ?></p>
                <?php the_sub_field('landing_bottom_text'); ?>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- row -->
          <?php
        }
      }
      get_template_part('template-parts/breadcrumb');
      ?>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();
?>
