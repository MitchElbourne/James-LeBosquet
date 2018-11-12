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
              <a class="nav-link active" id="test-tab" data-toggle="tab" href="#<?php echo $title; ?>" role="tab" aria-controls="<?php echo $title; ?>" aria-selected="false"><?php the_title(); ?></a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" id="test-tab" data-toggle="tab" href="#<?php echo $title; ?>" role="tab" aria-controls="<?php echo $title; ?>" aria-selected="false"><?php the_title(); ?></a>
            </li>
        <?php }
        }
        ?>
      </ul>
    </nav>

    <div class="tab-content" >
      <?php
      while ($Programs->have_posts()) {
        $Programs->the_post();
        $title = str_replace(' ', '', get_the_title());
        if (get_the_ID() == 49) { ?>
          <div class="tab-pane fade show active" id="<?php echo $title; ?>" role="tabpanel" aria-labelledby="<?php echo $title; ?>-tab">
            <?php the_title(); ?>
          </div>
        <?php } else { ?>
          <div class="tab-pane fade" id="<?php echo $title; ?>" role="tabpanel" aria-labelledby="<?php echo $title; ?>-tab">
            <?php the_title(); ?>
          </div>
      <?php }
      }
      ?>
    </div>
  </main><!-- education -->
</div><!-- stage -->



<?php }

get_footer();

?>
