<!--Testimonials Blog-->


<section id="blog" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name fade-animate">Blog<i class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row">
      <div id="carousel-blog" class="carousel slide" data-ride="carousel" data-interval="25000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-md-center">
              <?php
              $post_count   = 6;
              $recent_args  = [
                "posts_per_page" => $post_count,
                "orderby"        => "date",
                "order"          => "DESC"
              ];
              $recent_posts = new WP_Query( $recent_args );
              $index        = 1;
              if ( $recent_posts->have_posts() ) :
              while ( $recent_posts->have_posts() ) :
              $recent_posts->the_post(); ?>
              <div class="col-md-4">
                <div class="blog-cell">
                  <h6 class="blog-date"><?php echo get_the_date() ?></h6>
                  <h4 class="blog-title"><?php the_title() ?></h4>
                  <div class="col blog-image-cell">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div>
                    <h5
                      class="blog-by"><?php echo 'by ' . get_the_author_meta( 'first_name' ) . ' ' . get_the_author_meta( 'last_name' ) ?></h5>
                    <p class="blog-text"><?php echo substr( get_the_content(), 0, 135 ); ?></p>
                    <div class="blog-separator"></div>
                    <div class="text-center"><a href="<?php the_permalink() ?>" class="page-scroll btn btn-xl">Read
                        more</a></div>
                  </div>
                </div>
              </div>

              <?php if ( $index % 3 == 0 && $index != $post_count ) { ?>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-md-center">
              <?php }
              $index ++;
              endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel-blog" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-blog" data-slide-to="1" class=""></li>
        </ol>
      </div>
    </div>
  </div>
</section>