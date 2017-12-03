<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">
    <h5 class="blog-post-details"><?php echo get_the_time( 'F j, Y' ) ?></h5>
    <?php the_title( '<h1 class="blog-post-title">', '</h1>' ); ?>

  </header><!-- .entry-header -->

  <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

  <div class="entry-content fullwidth-content">

    <?php the_content(); ?>

    <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
      'after'  => '</div>',
    ) );
    ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
