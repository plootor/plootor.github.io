<!-- Team Section -->
<section id="team" class="visible-over darker">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name fade-animate">
          <?php echo theme_get_option( 'millefiori_team_section_heading', 'Our team' ); ?>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <h1 class="team-heading section-heading fade-animate ">
          <?php echo theme_get_option( 'millefiori_team_title', 'meet the magicians' ); ?>
        </h1>
        <p class="team-text">
          <?php echo theme_get_option( 'millefiori_team_content', 'Lorem ipsum dolor sit amet' ); ?>
        </p>
      </div>
      <div class="col-12 col-lg-7 offset-lg-1 team-image-cell">
        <div class="row">
          <div class="col-6">
            <div class="team-cell team-cell1"
                 style="background-image: url('<?php echo theme_get_option( 'millefiori_team1_image', '' ) ?>');"></div>
            <h5><?php echo theme_get_option( 'millefiori_team1_name', 'Jane Doe' ); ?></h5>
            <h6><?php echo theme_get_option( 'millefiori_team1_job', 'Decorator' ); ?></h6>
          </div>
          <div class="col-6">
            <div class="team-cell team-cell2"
                 style="background-image: url('<?php echo theme_get_option( 'millefiori_team2_image', '' ) ?>');"></div>
            <h5><?php echo theme_get_option( 'millefiori_team2_name', 'Jane Doe' ); ?></h5>
            <h6><?php echo theme_get_option( 'millefiori_team2_job', 'Decorator' ); ?></h6>
          </div>
          <div class="col-6">
            <div class="team-cell team-cell3"
                 style="background-image: url('<?php echo theme_get_option( 'millefiori_team3_image', '' ) ?>');"></div>
            <h5><?php echo theme_get_option( 'millefiori_team3_name', 'Jane Doe' ); ?></h5>
            <h6><?php echo theme_get_option( 'millefiori_team3_job', 'Decorator' ); ?></h6>
          </div>
          <div class="col-6">
            <div class="team-cell team-cell4"
                 style="background-image: url('<?php echo theme_get_option( 'millefiori_team4_image', '' ) ?>');"></div>
            <h5><?php echo theme_get_option( 'millefiori_team4_name', 'Jane Doe' ); ?></h5>
            <h6><?php echo theme_get_option( 'millefiori_team4_job', 'Decorator' ); ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>