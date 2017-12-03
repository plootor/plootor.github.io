<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <?php echo get_the_post_thumbnail( $post->ID, 'big-featured-image' ); ?>

  <h5 class="blog-post-details"><?php echo get_the_time( 'F j, Y' ) ?> -
    <?php the_category( ', ' ); ?><!--Travel, Lifestyle--></h5>
  <h1 class="blog-post-title"><?php the_title(); ?></h1>

  <div class="entry-content">

    <?php
    the_excerpt();
    ?>

    <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
      'after'  => '</div>',
    ) );
    ?>

  </div><!-- .entry-content -->

</article><!-- #post-## -->
