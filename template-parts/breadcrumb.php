<?php //BreadCrumb Navigation Box
  $image = get_theme_file_uri("/assets/images/education-cta.jpg")

?>

<div class="education-cta row">
  <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 img-cta" style="background-image: url(<?php echo $image ?>); background-size: cover;"></div><!-- col -->
  <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 content">
    <p>We offer different formats for different skill levels. Read more to select a course that fits your plan:</p>
    <ul>
      <li><a href="<?php echo site_url('/education#50') ?>">Personal Coaching Workshop</a></li><!--
      --><li><a href="<?php echo site_url('/education#51') ?>">Private Group Training</a></li><!--
      --><li><a href="<?php echo site_url('/education#52') ?>">Single Day Salon Workshop</a></li><!--
      --><li><a href="<?php echo site_url('/education#53') ?>">Two Day Salon Workshop</a></li>
    </ul>
  </div><!-- col -->
</div><!-- row -->
