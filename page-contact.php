<?php get_header();
while(have_posts()) {
  the_post();
?>

<div class="stage">
    <main class="contact">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
          <?php get_template_part('template-parts/headertexthr'); ?>
        </div><!-- col -->
      </div><!-- row -->
      <div class="contact-form">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
            <div class="animation-wrapper">
              <h2>Have any questions or comments?<br>Give me a shout using the form below, and I'll be sure to be in touch soon.</h2>
              <p class="note">*Please fill in all the required fields.</p>
            </div>
            <form>
              <div class="formgroup row">
                <span><label for="name">Your name*</label></span>
                <input type="text" name="name">
              </div>
              <div class="formgroup row">
                <span><label for="email">Your email*</label></span>
                <input type="email" name="email">
              </div>
              <div class="formgroup row">
                <span><label for="tel">Your number</label></span>
                <input type="tel" name="tel">
              </div>
              <div class="formgroup row">
                <span><label for="subject">Subject</label></span>
                <input type="text" name="subject">
              </div>
              <div class="formgroup row">
                <span><label for="message">Your message*</label></span>
                <textarea></textarea>
              </div>
              <div class="contact-submit row"><input type="submit" value="Send Message"></div>
            </form><!-- form -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- contact-form -->
    </main><!-- contact -->
  </div><!-- stage -->


<?php }

get_footer();

?>
