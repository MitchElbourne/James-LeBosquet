<?php
/*
  Template Name: Program Single
  Template Post Type: program
*/
get_header();
?>
<!-- Get the sub nav -->


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
      <div id="<?php the_ID(); ?>" class="education-course tab-content">
        <div class="row tab-pane active">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 container">
              <h1> <?php the_title(); ?></h1>
              <h3>Details</h3>
              <p class="intro"><?php the_field('course_title'); ?></p>
              <?php the_field('course_field'); ?>
            </div><!-- col -->
          </div><!-- row -->
          <div class="education-form">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 container">
                <h2>Let's get started!</h2>
                <p class="intro">Contact me to kick things off. This will be more fun than you think!</p>
                <p class="note">*Please fill in all the required fields.</p>
                <?php
                $form = `'`. get_field('course_form'). `'`;
                echo do_shortcode($form);
                ?>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- form -->
      </div><!-- education course -->
    </div>
  </main>
</div>

<?php
get_footer();
?>
