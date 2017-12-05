<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

/* ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">

    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
      '</a></h2>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>

      <div class="entry-meta">

        <?php understrap_posted_on(); ?>

      </div><!-- .entry-meta -->

    <?php endif; ?>

  </header><!-- .entry-header -->

  <div class="entry-summary">

    <?php the_excerpt(); ?>

  </div><!-- .entry-summary -->

  <footer class="entry-footer">

    <?php understrap_entry_footer(); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
*/ ?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <h5 class="blog-post-details"><?php echo get_the_time( 'F j, Y' ) ?> -
    <?php the_category( ', ' ); ?><!--Travel, Lifestyle--></h5>
  <h1 class="blog-post-title"><?php the_title(); ?></h1>

  <div class="entry-content">

    <?php
    the_excerpt();
    ?>

    <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'mille-fiori' ),
      'after'  => '</div>',
    ) );
    ?>

  </div><!-- .entry-content -->

  <!--	<footer class="entry-footer">-->
  <!---->
  <!--		--><?php ////understrap_entry_footer(); ?>
  <!---->
  <!--	</footer><!-- .entry-footer -->

</article>

