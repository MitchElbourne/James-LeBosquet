<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
  <main class="education">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <?php get_template_part('template-parts/headertexthr'); ?>
      </div><!-- col -->
    </div><!-- row -->
    <div id="tabs">
      <!-- Pulls in the Program titles and applies a link -->
      <nav class="sub-navigation">
        <ul>
          <?php
            $Programs = new WP_Query(array(
              'post_type' => 'program',
              'order' => 'ASC',
            ));

            while($Programs->have_posts()) {
              $Programs->the_post();

              if (get_the_title() == 'Landing') { ?>
               <li style="display: none"><a href="#<?php the_ID(); ?>"><?php echo the_title(); ?></a></li>
             <?php } else { ?>
               <li><a href="#<?php the_ID(); ?>"><?php echo the_title(); ?></a></li>
             <?php }
            };
          ?>
        </ul>
      </nav><!-- sub-navigation -->

      <div class="education-stage">
      <?php

      while ($Programs->have_posts()) {
        $Programs->the_post();

        if (get_the_title() == 'Landing') { ?>
          <div id="<?php the_ID(); ?>" class="education-landing">
            <?php
              if (have_rows('landing_box')) {
                while (have_rows('landing_box')) {
                  the_row();
                  ?>
                    <div class="row middle-sm">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 edu-img">
                        <div class="img-wrapper">
                          <img src="<?php the_sub_field('landing_image'); ?>">
                        </div>
                      </div><!-- col -->
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
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
                  <div class="row">
                    <div class="row start-sm">
                      <div class="img-wrapper col-8">
                        <img src="<?php the_sub_field('landing_bottom_image'); ?>" alt="In Salon Image - James Cutting">
                      </div>
                    </div><!-- row -->
                    <div class="row">
                      <div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-5 col-sm-10 col-sm-offset-1 col-xs-12">
                        <p class="intro"><?php the_sub_field('landing_bottom_title'); ?></p>
                        <?php the_sub_field('landing_bottom_text'); ?>
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- row -->
                  <?php
                }
              }
            ?>
          </div><!--education landing-->
        <?php } else { ?>
          <div id="<?php the_ID(); ?>" class="education-course">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <h1> <?php the_title(); ?></h1>
                <h3>Details</h3>
                <p class="intro"><?php the_field('course_title'); ?></p>
                <?php the_field('course_field'); ?>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- education course -->
        <?php }
      } ?>
      <?php get_template_part('template-parts/breadcrumb');
      wp_reset_query();
      ?>
  </main><!-- education -->


</div><!-- stage -->

  <script>
  jQuery( function() {
    jQuery( "#tabs" ).tabs();
  } );
  </script>

<?php }

get_footer();

?>
