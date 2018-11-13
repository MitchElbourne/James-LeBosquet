<?php get_header();
while(have_posts()) {
  the_post();
?>
<div class="stage">
  <main class="education">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <header>
          <h2>Private Hairstyling</h2>
        </header>
      </div><!-- col -->
    </div><!-- row -->

    <nav class="sub-navigation">
      <ul class="nav">
      <?php
        $Programs = new WP_Query(array(
          'post_type' => 'program',
          'order' => 'ASC',
        ));

        while($Programs->have_posts()) {
          $Programs->the_post(); ?>

          <!-- Add button highlighting -->
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <?php }

        ?>
      </ul> <!-- nav tabs -->
      <div class="education-stage">
        <?php
        if($Programs->have_posts()) {
          $Programs->the_post();
          // print_r($Programs);
          if (the_title() == "Overview") {
            the_title();
            ?>


          <?php }
          if (get_the_title() != 'overview') {
            ?>
            <!-- <p>
            no  overview
            </p> -->

          <?php } ?>




        <?php }  ?>
      </div>
    </nav> <!-- sub-navigation -->
  </main><!-- education -->
</div><!-- stage -->


<?php
}
  get_footer();
?>
