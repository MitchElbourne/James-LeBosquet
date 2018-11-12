<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
  <main class="education">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <?php echo get_template_part('template-parts/headertexthr'); ?>
      </div><!-- col -->
    </div><!-- row -->

    <nav class="sub-navigation">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php
        $Programs = new WP_Query(array(
          'post_type' => 'program',
          'order' => 'ASC',
        ));

        while($Programs->have_posts()) {
          $Programs->the_post();
          $title = str_replace(' ', '', get_the_title());

          if (get_the_ID() == 49) { ?>
            <li class="nav-item">
              <a class="nav-link active" id="<?php echo $title ?>-tab" data-toggle="tab" href="#<?php echo $title; ?>" role="tab" aria-controls="<?php echo $title; ?>" aria-selected="false"><?php the_title(); ?></a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" id="<?php echo $title ?>-tab" data-toggle="tab" href="#<?php echo $title; ?>" role="tab" aria-controls="<?php echo $title; ?>" aria-selected="false"><?php the_title(); ?></a>
            </li>
        <?php }
        }
        ?>
      </ul> <!-- nav tabs -->
    </nav> <!-- sub-navigation -->

    <div class="tab-content education-stage">
      <?php
      while ($Programs->have_posts()) {
        $Programs->the_post();
        $title = str_replace(' ', '', get_the_title());
        if (get_the_ID() == 49) { ?>
          <div class="tab-pane fade show active education-landing" id="<?php echo $title; ?>" role="tabpanel" aria-labelledby="<?php echo $title; ?>-tab">
            <?php if (have_rows('landing_box')) {
              while (have_rows('landing_box')) {
                the_row();
                ?>
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
                <?php
                $count++;
              }
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
            } ?>
            <?php get_template_part('template-parts/breadcrumb'); ?>
          </div>
        <?php } else { ?>
          <div class="tab-pane fade education-course" id="<?php echo $title; ?>" role="tabpanel" aria-labelledby="<?php echo $title; ?>-tab">
            <div class="row tab-pane">
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
          </div>
      <?php }
      }
      wp_reset_query();
      ?>
    </div>
  </main><!-- education -->
</div><!-- stage -->



<?php }

get_footer();

?>
