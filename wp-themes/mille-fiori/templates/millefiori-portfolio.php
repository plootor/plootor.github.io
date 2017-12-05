<!--Portfolio Section-->
<section id="portfolio" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name"><?php echo theme_get_option( 'millefiori_portfolio_main_heading', 'Portfolio' ) ?> <i
            class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="portfolio-nav">
          <a href="#" data-name="all"
             class="active"><?php echo theme_get_option( 'portfolio_filter_all_name', 'all' ) ?></a>
          <a href="#" data-name="first"><?php echo theme_get_option( 'portfolio_filter_first_name', 'first' ) ?></a>
          <a href="#" data-name="second"><?php echo theme_get_option( 'portfolio_filter_second_name', 'second' ) ?></a>
          <a href="#" data-name="third"><?php echo theme_get_option( 'portfolio_filter_third_name', 'third' ) ?></a>
        </div>
      </div>
    </div>
    <div class="grid">
      <div class="grid-sizer"></div>

      <?php
      $titles   = array();
      $contents = array();
      $images   = array();
      for ( $i = 1; $i <= 6; $i ++ ) {
        $page           = get_page_by_path( theme_get_option( 'portfolio_box' . $i . '_page_name' ) );
        $contents[ $i ] = apply_filters( 'the_content', $page->post_content );
        $titles[ $i ]   = apply_filters( 'the_title', $page->post_title );
        $images[ $i ]   = get_the_post_thumbnail_url( $page, 'big-featured-image' );

        if ( theme_get_option( 'portfolio_box' . $i . '_page_type' ) != 'off' ) {
          ?>

          <div class="grid-item item<?php echo $i; ?>">
            <a href="#portfolioModal<?php echo $i; ?>" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-item pos-r">
                <figure class="effect-layla">
                  <div class="portfolio-cell portfolio-cell<?php echo $i; ?>"
                       style="background-image: url('<?php echo $images[ $i ]; ?>')"></div>
                  <figcaption>
                    <h2><?php echo theme_get_option( 'portfolio_box' . $i . '_title', 'Serendipity' ) ?></h2>
                  </figcaption>
                </figure>
              </div>
            </a>
          </div>
        <?php } else { ?>
          <div class="grid-item item2">
            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-cell portfolio-cell2">
                <div class="portfolio-info">
                  <h6><?php echo theme_get_option( 'portfolio_box' . $i . '_title', 'Serendipity' ) ?></h6>
                  <h3><?php echo $titles[ $i ]; ?></h3>
                  <p><?php echo theme_get_option( 'portfolio_box' . $i . '_textbox_desc', 'Enjoy the process of choosing floral arrangemets for your big day by following a few simple tips &
                tricks.' ) ?></p>
                  <div class="portfolio-separator"></div>
                  <p><?php echo get_the_date(); ?></p>
                </div>
              </div>
            </a>
          </div>

        <?php }
      } ?>
    </div>
  </div>
</section>

<!-- Portfolio Modal 1 -->
<?php for ( $i = 1; $i <= 6; $i ++ ) { ?>
  <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i; ?>" tabindex="-1" role="dialog"
       aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <div class="col-md-12">
                  <div class="col-xs-5 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 modal-name">
                    <h3>Serendipity</h3>
                  </div>
                  <img class="img-responsive img-centered" src="<?php echo $images[ $i ]; ?>" alt="<?php echo $titles[ $i ]; ?>">
                </div>
                <h2><?php echo $titles[ $i ]; ?></h2>
                <div class="modal-separator"></div>
                <?php echo $contents[ $i ]; ?>

                <div class="col-md-12">
                  <div class="btn btn-xl close-button" data-dismiss="modal">Close</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }
$filtersFirst  = explode( ',', theme_get_option( 'portfolio_filter_first_elements' ) );
$filtersSecond = explode( ',', theme_get_option( 'portfolio_filter_second_elements' ) );
$filtersThird  = explode( ',', theme_get_option( 'portfolio_filter_third_elements' ) );
?>
<script>
  function runFunc(type) {
    switch (type) {
      case 'all':
      <?php for ( $i = 1; $i <= 6; $i ++ ) {
        echo "jQuery('.item" . $i . "').show();" . PHP_EOL;
      }?>
        break;
      case 'first':
      <?php for ( $i = 1; $i <= 6; $i ++ ) {
        if ( in_array( $i, $filtersFirst ) ) {
          echo "jQuery('.item" . $i . "').show();" . PHP_EOL;
        } else {
          echo "jQuery('.item" . $i . "').hide();" . PHP_EOL;
        }
      }?>
        break;
      case 'second':
      <?php for ( $i = 1; $i <= 6; $i ++ ) {
        if ( in_array( $i, $filtersSecond ) ) {
          echo "jQuery('.item" . $i . "').show();" . PHP_EOL;
        } else {
          echo "jQuery('.item" . $i . "').hide();" . PHP_EOL;
        }
      }?>
        break;
      case 'third':
      <?php for ( $i = 1; $i <= 6; $i ++ ) {
        if ( in_array( $i, $filtersThird ) ) {
          echo "jQuery('.item" . $i . "').show();" . PHP_EOL;
        } else {
          echo "jQuery('.item" . $i . "').hide();" . PHP_EOL;
        }
      }?>
        break;
    }
    jQuery('.grid').masonry();
  }
</script>
