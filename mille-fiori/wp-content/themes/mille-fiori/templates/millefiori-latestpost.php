<section id="latest_project" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name fade-animate">
          <?php echo theme_get_option( 'millefiori_latestpost_section_heading', 'Latest project' ); ?>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </h4>
      </div>
    </div>
    <div class="row pos-r">
      <div class="col-12 col-lg-6 image-cell">
        <div class="bg-image"
             style="background-image: url(<?php echo theme_get_option( 'millefiori_latestpost_image', '' ); ?>"></div>
      </div>
      <div class="col-12 col-lg-6">
        <div>
          <h1
            class="section-heading fade-animate"><?php echo theme_get_option( 'millefiori_latestpost_heading', 'the enchanted forest' ); ?></h1>
          <h4 class="section-sub-title"><?php echo theme_get_option( 'millefiori_latestpost_date', 'may 2017' ); ?></h4>
          <p class="latest-text">
            <?php echo theme_get_option( 'millefiori_latestpost_content', 'We launched' ); ?></p>
          <!--            <a href="-->
          <?php //echo get_permalink(wp_get_recent_posts()[0]['ID']); ?><!--" class="page-scroll btn btn-xl fade-animate ">Find more</a>-->

          <a href="<?php echo esc_url( theme_get_option( 'millefiori_latestpost_link', '#portfolioModal1' ) ); ?>"
             class="page-scroll btn btn-xl fade-animate ">Find more</a>
        </div>
      </div>
    </div>
  </div>
</section>