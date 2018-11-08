<?php get_header();
while(have_posts()) {
  the_post();
?>


<div class="stage">
  <main class="hairstyling">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <?php get_template_part("template-parts/headertexthr"); ?>
      </div><!-- col -->
    </div><!-- row -->
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 shoutout col">
        <p><?php the_content(); ?></p>
      </div><!-- col -->
      <div class="col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6 col-sm-12 col-xs-12 online-booking col">
        <h3>Online Booking</h3>
        <!-- Form -->
        <?php
          $form = `'`. get_field('online_booking_form') . `'`;
          echo do_shortcode($form);
        ?>
        <div class="buttons">
          <button id="btn-next" class="form1">Next</button>
        </div>
      </div><!-- col -->
    </div><!-- row -->
  </main><!-- hairstyling -->
</div><!-- stage -->


<?php }

get_footer();

?>
