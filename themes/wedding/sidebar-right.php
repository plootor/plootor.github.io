<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-4 col-lg-4 widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
	<div class="col-md-4 col-lg-4 widget-area" id="right-sidebar" role="complementary">
		<?php endif; ?>
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</div><!-- #secondary -->