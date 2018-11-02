<!-- //The header for the site is controlled by this.php file  -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>James LeBosquet</title>
  </head>

  <body>
    <div id="root">
      <div class="app container-fluid">

        <header class="main">
          <div class="nav-primary">
            <a class="branding" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_file_uri("assets/images/jameslebosquet-logo.svg"); ?>" alt="James LeBosquet logo"></a>
            <nav>
              <ul>
                <li><a href="<?php echo site_url('/private-hairstyling'); ?>">Private Hairstyling</a></li>
                <li><a href="<?php echo site_url('/education'); ?>">In Salon Education</a></li>
              </ul><!-- ul -->
              <ul>
                <li><a href="<?php echo site_url('/gallery'); ?>">Gallery</a></li>
                <li><a href="<?php echo site_url('/about-jlb'); ?>">About JLB</a></li>
                <li><a href="<?php echo site_url('/testimonials'); ?>">Testimonials</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
              </ul><!-- ul -->
            </nav><!-- nav -->
          </div><!-- nav-primary -->
        </header><!-- header -->
