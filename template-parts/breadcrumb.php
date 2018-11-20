<?php //BreadCrumb Navigation Box
  $image = get_theme_file_uri("/assets/images/education-cta.jpg");
?>

<div class="education-cta row">
  <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 img-cta" style="background-image: url(<?php echo $image ?>); background-size: cover;"></div><!-- col -->
  <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 content">
    <h1>Explore Training Opportunities</h1>
    <p>We offer different formats for different skill levels. Read more to select a course that fits your plan:</p>
    <ul>
      <?php
      $Programs = new WP_Query(array(
        'post_type' => 'program',
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ));
      // Pulls in the programs and lists them in the breadcrumb
      while($Programs->have_posts()) {
        $Programs->the_post();
        $title = str_replace(' ', '', get_the_title());

        if (get_the_ID() == 49) { ?>
       <?php } else { ?>
         <li><a class="<?php echo $title; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
       <?php }

      };
      ?>
    </ul>
  </div><!-- col -->
</div><!-- row -->
