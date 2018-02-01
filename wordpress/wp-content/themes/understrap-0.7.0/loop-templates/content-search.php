<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
<div class="blog-cell"  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <h6 class="blog-date"><?php echo get_the_date(); ?></h6>
  <h2 class="blog-title special-title"><?php echo get_the_title(); ?></h2>
  <div>
    <h4 class="blog-by"><?php echo get_the_author(); ?></h4>
    <div class="blog-text"><?php the_excerpt(); ?></div>
  </div>
</div>


