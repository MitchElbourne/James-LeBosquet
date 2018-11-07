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
          <nav class="navbar navbar-expand-lg nav-primary" role="navigation">
          	<!-- Brand and toggle get grouped for better mobile display -->
            <a class="branding navbar-brand" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_file_uri("assets/images/jameslebosquet-logo.svg"); ?>" alt="James LeBosquet logo"></a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          		<span><img src="<?php echo get_theme_file_uri('assets/images/navbarIcon.svg'); ?>"/></span>
          	</button>
          		<?php
          		wp_nav_menu( array(
          			'theme_location'    => 'primary',
          			'depth'             => 2,
          			'container'         => 'div',
          			'container_class'   => 'collapse navbar-collapse',
          			'container_id'      => 'bs-example-navbar-collapse-1',
          			'menu_class'        => 'nav navbar-nav',
          			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          			'walker'            => new WP_Bootstrap_Navwalker(),
          		) );
          		?>
          </nav>
        </header><!-- header -->
