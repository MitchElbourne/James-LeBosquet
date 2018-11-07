<!-- //The front page for the site is powered by this .php file -->

<?php get_header();
while(have_posts()){
  the_post();

?>
<div class="stage">
  <main class="home">
    <img class="home-bg-img" alt="Homepage Background Image" src="<?php echo get_theme_file_uri("assets/images/site-background-sabrina.jpg"); ?>" width="50%" height="50%">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col">
        <a class="cta" href="<?php echo site_url('/private-hairstyling'); ?>">
          <h1>NYC Private Hairstyling</h1>
          <h2>Book an Appointment</h2>
        </a>
        <a class="cta" href="<?php echo site_url('/education'); ?>">
          <h1>In Salon Education</h1>
          <h2>View Courses</h2>
        </a>
      </div><!-- col -->
    </div><!-- row -->
  </main><!-- home -->
</div><!-- stage -->

<?php }

get_footer();

?>
