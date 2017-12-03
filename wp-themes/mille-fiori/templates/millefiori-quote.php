<!--Quote Section-->
<section id="quote"
         style="background-image: url('<?php echo theme_get_option( 'millefiori_quote_bg_image', '' ) ?>');">
  <div class="bg-filter"></div>
  <div class="container" data-type="content">
    <div class="row">
      <div class="col-12">
        <h5><?php echo theme_get_option( 'millefiori_quote_header', 'Inspiration of the day' ); ?></h5>
        <div class="quote-separator"></div>
        <blockquote><?php
          if ( ! empty( $template_args['option'] ) ) {
            echo $template_args['option'];
          } else {
            echo theme_get_option( 'millefiori_quote_content', '"If the sight"' );
          } ?>
          <footer
            class="quote-footer"><?php echo theme_get_option( 'millefiori_quote_footer', '' ); ?></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>