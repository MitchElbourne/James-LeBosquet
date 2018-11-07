<div class="nav-primary">
  <a class="branding" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_file_uri("assets/images/jameslebosquet-logo.svg"); ?>" alt="James LeBosquet logo"></a>
  <nav>
    <ul>
      <li><a href="<?php echo site_url('/private-hairstyling'); ?>" <?php if (is_page('private-hairstyling')) echo 'class="active"' ?>>Private Hairstyling</a></li>
      <li><a href="<?php echo site_url('/education'); ?>" <?php if (is_page('education')) echo 'class="active"' ?>>In Salon Education</a></li>
    </ul><!-- ul -->
    <ul>
      <li><a href="<?php echo site_url('/gallery'); ?>" <?php if (is_page('gallery')) echo 'class="active"' ?>>Gallery</a></li>
      <li><a href="<?php echo site_url('/about-jlb'); ?>" <?php if (is_page('about-jlb')) echo 'class="active"' ?>>About JLB</a></li>
      <li><a href="<?php echo site_url('/testimonials'); ?>" <?php if (is_page('testimonials')) echo 'class="active"' ?>>Testimonials</a></li>
      <li><a href="<?php echo site_url('/contact'); ?>" <?php if (is_page('contact')) echo 'class="active"' ?>>Contact</a></li>
    </ul><!-- ul -->
  </nav><!-- nav -->
</div><!-- nav-primary -->
