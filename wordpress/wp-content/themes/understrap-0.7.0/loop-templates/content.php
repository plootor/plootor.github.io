<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
?>
<div class="blog-cell"  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <h6 class="blog-date"><?php echo get_the_date(); ?></h6>
  <h2 class="blog-title special-title"><?php echo get_the_title(); ?></h2>
  <div class="col blog-image-cell">
    <div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
  </div>
  <div>
    <h4 class="blog-by"><?php echo get_the_author(); ?></h4>
    <div class="blog-text"><?php the_excerpt(); ?></div>
  </div>
</div>