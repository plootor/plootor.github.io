<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>
<!-- Footer -->
<?php if ( is_active_sidebar( 'customfooter' ) ) : ?>
  <?php get_sidebar( 'customfooter' ); ?>
<?php else : ?>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 my-auto">
          <img class="d-block img-fluid mx-auto" src="<?php echo theme_get_option( 'theme_footer_logo' ); ?>"
               alt="logo">
        </div>
        <div class="col-md-3">
          <h5 class="footer-title special-title">Contact us</h5>
          <div class="footer-separator"></div>
          <ul class="list-unstyled address">
            <li>
              <p><i class="fa fa-globe" aria-hidden="true"></i>
                <?php echo theme_get_option( 'theme_footer_address', 'Calle Esmeralda 32, Madrid, Spain' ); ?>
              </p>
            </li>
            <li>
              <p><i class="fa fa-phone" aria-hidden="true"></i>
                <?php echo theme_get_option( 'theme_footer_phone', '+475 4675 0987 1324' ); ?>
              </p>
            </li>
            <li>
              <p><i class="fa fa-envelope" aria-hidden="true"></i>
                <?php echo theme_get_option( 'theme_footer_email', 'alexander@alexander.com' ); ?>
              </p>
            </li>
          </ul>
        </div>
        <div class="col-md-2">
          <h5 class="footer-title special-title">Follow us</h5>
          <div class="footer-separator"></div>
          <ul class="social-buttons">
            <li class=""><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class=""><a href="#"><i class="fa fa-youtube"></i></a>
            </li>
            <li class=""><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class=""><a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li class=""><a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li class=""><a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="footer-title special-title">Subscribe</h5>
          <div class="footer-separator"></div>
          <div id="mc_embed_signup">
            <p>Subscribe for a weekly newsletter</p>
            <form action="#" method="post" id="subscribe-form" target="_blank" novalidate="">
              <div class="input-group input-group-lg form-group">
                <input type="email" name="email" class="form-control" placeholder="Email address..." required="" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
                <span class="input-group-btn white-hover">
                  <button type="submit" name="subscribe" class="btn btn-xl smaller common-button">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </button>
                </span>
              </div>
              <div id="subscribe2-success"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>