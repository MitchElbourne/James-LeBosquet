<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
  <main class="about">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
        <?php get_template_part("template-parts/headertexthr"); ?>
      </div><!-- col -->
    </div><!-- row -->
    <div class="about-content">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="img-wrapper">
          <img class="jlb-profile-pic" src="<?php echo get_theme_file_uri('assets/images/jlb-profile-pic.png');?>;" alt="JamesLB Circular Image" width="362" height="362">
        </div>
        <p class="intro">Recognized for his passion and ability to inspire, James LeBosquet is one of the most dynamic and skilled hairdressers of his generation.</p>
        <p>With over 20 years of experience James has established a reputation as a master educator. His career began in Essex England at the age of 16 as an apprentice to Max Menditta of Max Headroom where he learned the fundamentals of hairdressing.</p>
        <h2>Accomplishments</h2>
        <p>In 1994 James moved to the USA where he worked at a top salon in New Jersey. In 1996 James became an ambassador for the world renowned TONI&amp;GUY/TIGI.</p>
        <p>In 2000 James felt it was time to take his career to the next level and began working at the TONI&amp;GUY Hairdressing Academy in New York City where he swiftly progressed through the company’s legendary training schemes.</p>
        <p>In 2002 James was asked to join the TIGI International Creative Team where he traveled the world sharing the company’s philosophy while encouraging hairdressers to reach their full potential. James was also a featured artist on the Unity Collection and Classic Cuts DVD series, and 2002 Men’s Look Of The Year Winner at the TONI&amp;GUY Photographic Awards.</p>
        <p>In 2012 James LeBosquet decided to create his own company based on the following vision: <span>Deliver the world’s best hair education to hairdressers who want to hone their skills, master their craft and grow their careers</span></p>
        <p>Accomplishing this goal required a new approach to conventional hair academy format, because it was simply too expensive and inconvenient for many hairdressers to travel around the world.</p>
        <p>James LeBosquet’s innovative <a href="03_00-education.html">Hairdressing Education</a> programs provide hairdressers everywhere with convenient and affordable access to the world-class education.
        </p>
      </div><!-- col -->
    </div><!-- about-content -->
  </main><!-- about -->
</div><!-- stage -->


<?php }
get_footer();
?>
