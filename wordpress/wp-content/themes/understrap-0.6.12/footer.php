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
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="intro-heading text-center">Alexander</h3>
        <h6 class="intro-subheading text-center">Madrid</h6>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <h5 class="footer-title">Contact us</h5>
        <div class="footer-separator"></div>
        <ul class="list-unstyled address">
          <li>
            <p><i class="fa fa-globe" aria-hidden="true"></i>Calle Esmeralda 32, Madrid, Spain</p>
          </li>
          <li>
            <p><i class="fa fa-phone" aria-hidden="true"></i>+475 4675 0987 1324</p>
          </li>
          <li>
            <p><i class="fa fa-envelope" aria-hidden="true"></i>alexander@alexander.com</p>
          </li>
        </ul>
      </div>
      <div class="col-md-2">
        <h5 class="footer-title">Follow us</h5>
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
        <h5 class="footer-title">Subscribe</h5>
        <div class="footer-separator"></div>
        <div id="mc_embed_signup">
          <p>Subscribe for a weekly newsletter</p>
          <form action="#" method="post" id="subscribe-form" target="_blank" novalidate="">
            <div class="input-group input-group-lg form-group">
              <input type="email" name="email" class="form-control" placeholder="Email address..." required="" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
              <span class="input-group-btn">
                                    <button type="submit" name="subscribe" class="btn btn-xl">
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
<?php wp_footer(); ?>
</body>
</html>