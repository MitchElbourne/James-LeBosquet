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
            <a class="branding" href="01_00-home.html"><img src="<?php echo get_theme_file_uri("assets/images/jameslebosquet-logo.svg"); ?>" alt="James LeBosquet logo"></a>
            <nav>
              <ul>
                <li><a href="02_00-hairstyling.html">Private Hairstyling</a></li>
                <li><a href="03_00-education.html">In Salon Education</a></li>
              </ul><!-- ul -->
              <ul>
                <li><a href="04_00-gallery.html">Gallery</a></li>
                <li><a href="05_00-about.html">About JLB</a></li>
                <li><a href="06_00-testimonials.html">Testimonials</a></li>
                <li><a href="07_00-contact.html">Contact</a></li>
              </ul><!-- ul -->
            </nav><!-- nav -->
          </div><!-- nav-primary -->
        </header><!-- header -->
