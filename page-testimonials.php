<?php get_header();
while(have_posts()) {
  the_post();
?>
<div id="root">

  <div class="app">
    <div class="stage">
      <main class="testimonials">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
            <?php get_template_part("template-parts/headertexthr"); ?>
          </div><!-- col -->
        </div><!-- row -->
        <?php
        $testimonials = new WP_Query(array(
          'post_type' => 'testimonial',
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ));
        while($testimonials->have_posts()) {
          $testimonials->the_post();
          $image = get_field('testimonial_image') ?>
            <div class="testimonial row">
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 content">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_field('testimonial_title'); ?></h3>
                <p><?php the_field('testimonial_business'); ?></p>
                <p class="quote"><?php the_field('testimonial_quote'); ?></p>
              </div><!--col-->
                  <?php
                  if ($image) { ?>
                    <div class="col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 imagecolumn">
                      <div class="img-wrapper">
                        <img alt="<?php the_title();  ?>" src="<?php the_field('testimonial_image'); ?>" width="360" height="360">
                      </div>
                    </div><!-- col -->
                  <?php }
                  ?>
            </div><!--row-->
          <?php
        }
        ?>
      </main><!-- hairstyling -->
      <?php get_template_part('template-parts/breadcrumb'); ?>
    </div><!--stage-->
  <?php }
    get_footer();
  ?>
  </div><!--container-->
</div>
