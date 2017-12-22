<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package void
 */
global $count,$col_no,$col_width,$post_count;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
?>
<div class="blog-cell">
  <h6 class="blog-date"><?php echo get_the_date() ?></h6>
  <h2 class="blog-title"><?php echo get_the_title(); ?></h2>
  <div class="col blog-image-cell">
    <div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
  </div>
  <div>
    <h4 class="blog-by"><?php echo get_the_author() ?></h4>
    <p class="blog-text"><?php echo substr( get_the_content(), 0, 526 ); ?></p>
    <div class="blog-separator"></div>
    <div class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>" class="page-scroll btn btn-xl">Read more</a></div>
  </div>
</div>
