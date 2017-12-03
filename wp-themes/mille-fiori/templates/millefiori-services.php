<!-- Services Section -->
<section id="services" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name fade-animate">
          <?php echo theme_get_option( 'millefiori_service_section_heading', 'Services' ); ?>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </h4>
      </div>
    </div>
    <div class="row">
      <div class=" col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0">
        <div class="service-image-container">
          <div class="service-image1"
               style="background-image: url('<?php echo theme_get_option( 'millefiori_service_image1', '' ) ?>');"></div>
          <div class="service-image2"
               style="background-image: url('<?php echo theme_get_option( 'millefiori_service_image2', '' ) ?>');"></div>
        </div>
      </div>
      <div class="col-12 col-lg-6 right">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-12 service-info">
            <i
              class="fa <?php echo theme_get_option( 'service_element1_image', 'fa-camera-retro' ); ?> fa-3x pull-left service-icon"
              aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate">
                <?php echo theme_get_option( 'service_element1_header', 'Event floral arrangements' ); ?>
              </h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate">
                <?php echo theme_get_option( 'service_element1_content', 'Weddings' ); ?>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-12 service-info">
            <i
              class="fa <?php echo theme_get_option( 'service_element2_image', 'fa-globe' ); ?> fa-3x pull-left service-icon"
              aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate">
                <?php echo theme_get_option( 'service_element2_header', 'Flower deliveries' ); ?>
              </h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate">
                <?php echo theme_get_option( 'service_element2_content', 'You can have' ); ?>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-12 service-info">
            <i
              class="fa <?php echo theme_get_option( 'service_element3_image', 'fa-gift' ); ?> fa-3x pull-left service-icon"
              aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate">
                <?php echo theme_get_option( 'service_element3_header', 'Special occasion bouquets' ); ?>
              </h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate">
                <?php echo theme_get_option( 'service_element3_content', 'We will help you' ); ?>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-12 service-info">
            <i
              class="fa <?php echo theme_get_option( 'service_element4_image', 'fa-pagelines' ); ?> fa-3x pull-left service-icon"
              aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate">
                <?php echo theme_get_option( 'service_element4_header', 'Fresh flowers' ); ?>
              </h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate">
                <?php echo theme_get_option( 'service_element4_content', 'We partnered with the best' ); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
