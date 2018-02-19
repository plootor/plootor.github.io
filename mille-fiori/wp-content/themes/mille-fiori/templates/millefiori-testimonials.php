<!--Testimonials Section-->
<section id="testimonials" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name fade-animate">
          <?php echo theme_get_option( 'millefiori_testimonial_main_heading', 'Testimonials' ); ?>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </h4>
      </div>
    </div>
    <div class="row">
      <div id="carousel-reviews" class="carousel slide" data-ride="carousel" data-interval="15000">
        <div class="carousel-inner">
          <div class="carousel-item item active">
            <div class="row justify-content-center">
              <div class="col-11 col-md-10 col-lg-5 testimonial-cell">
                <h5 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_1_name', 'Genevive Russo' ); ?>
                </h5>
                <h6 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_1_job', 'ceo at bloom' ); ?>
                </h6>
                <p class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_1_content', '"great"' ); ?>
                </p>
              </div>
              <div class="col-11 col-md-10 col-lg-5 testimonial-cell">
                <h5 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_2_name', 'Genevive Russo' ); ?>
                </h5>
                <h6 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_2_job', 'ceo at bloom' ); ?>
                </h6>
                <p class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_2_content', '"great"' ); ?>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item item">
            <div class="row justify-content-center">
              <div class="col-11 col-md-10 col-lg-5 testimonial-cell">
                <h5 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_3_name', 'Genevive Russo' ); ?>
                </h5>
                <h6 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_3_job', 'ceo at bloom' ); ?>
                </h6>
                <p class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_3_content', '"great"' ); ?>
                </p>
              </div>
              <div class="col-11 col-md-10 col-lg-5 testimonial-cell">
                <h5 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_4_name', 'Genevive Russo' ); ?>
                </h5>
                <h6 class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_4_job', 'ceo at bloom' ); ?>
                </h6>
                <p class="text-center">
                  <?php echo theme_get_option( 'millefiori_testimonial_4_content', '"great"' ); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <a role="button" data-slide="prev" href="#carousel-reviews" class="left carousel-control carousel-control-prev">
          <i class="fa fa-chevron-left"></i>
        </a>
        <a role="button" data-slide="next" href="#carousel-reviews"
           class="right carousel-control carousel-control-next">
          <i class="fa fa-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>