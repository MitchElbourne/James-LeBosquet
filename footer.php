<!-- //The footer for the site is powered by this .php file -->
<?php
$links = new WP_Query(array(
  'post_type' => 'post',
  'title' => 'Social Media Links'
));
$links->the_post();

?>

</div>

<footer id="footer" class="main">
  <div class="row bottom-md">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 connect-reallife">
      <span class="site-title">James LeBosquet</span>
      <span class="contact">Call 614 XXX-XXXX</span>
      <span class="address">420 5th Ave, New York, NY 10037</span>
    </div><!-- row -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 connect-digital">
      <a class="contact-email" href="mailto:james@jameslebosquet.com">james@jameslebosquet.com</a>
      <div class="social">
           <a href="<?php echo get_field('facebook'); ?>">
          <img src="<?php echo get_theme_file_uri("assets/images/social-facebook.svg"); ?>" alt="Icon Facebook">
        </a><!--
        --><a href="<?php echo get_field('instagram'); ?>">
          <img src="<?php echo get_theme_file_uri("assets/images/social-instagram.svg"); ?>" alt="Icon Instagram">
        </a><!--
        --><a href="<?php echo get_field('linked_in'); ?>">
          <img src="<?php echo get_theme_file_uri("assets/images/social-linkedin.svg"); ?>" alt="Icon LinkedIn">
        </a><!--
        --><a href="<?php echo get_field('youtube'); ?>">
          <img src="<?php echo get_theme_file_uri("assets/images/social-youtube.svg"); ?>" alt="Icon YouTube">
        </a>

      </div>
    </div><!-- col -->
  </div><!-- row -->
  <div class="copyright-credit row">
    <div class="">© 2017 James LeBosquet. All rights reserved unless otherwise credited.</div>
    <div class=""></div>
  </div><!-- row -->
</footer><!-- footer -->

</div><!-- app -->

</div><!-- root -->


<?php wp_footer(); ?>
</body>
</html>
