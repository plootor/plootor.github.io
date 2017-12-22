<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package void
 */
global $blog_style, $count;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
if ($count%2==0): ?>
<div class="row pos-r">
  <div class="col-md-12 col-lg-6 blog-image-cell">
    <div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
  </div>
  <div class="col-md-12 col-lg-6 blog-info-cell">
    <div>
      <h6 class="blog-date"><?php echo get_the_date() ?></h6>
      <h2 class="blog-title"><?php echo get_the_title(); ?></h2>
      <p class="blog-text"><?php echo substr( get_the_content(), 0, 235 ); ?></p>
      <div class="blog-separator"></div>
      <div class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>" class="page-scroll btn btn-xl">Read more</a>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
  <div class="row pos-r">
    <div class="col-md-12 col-lg-6 blog-info-cell">
      <div>
        <h6 class="blog-date"><?php echo get_the_date() ?></h6>
        <h2 class="blog-title"><?php echo get_the_title(); ?></h2>
        <p class="blog-text"><?php echo substr( get_the_content(), 0, 235 ); ?></p>

        <?php
        ?>
        <div class="blog-separator"></div>
        <div class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>" class="page-scroll btn btn-xl">Read more</a>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 blog-image-cell">
      <div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
    </div>
  </div>
<?php endif; ?>

<?php /*
	<header class="entry-header">
		<div class="post-img">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php

					if( has_post_thumbnail()) :
						the_post_thumbnail('big-featured-image',array(
								'class' => 'img-responsive',
								'alt'	=> get_the_title( get_post_thumbnail_id() )
								)
						);
					endif;

			 	?>
		 	</a>	
		</div>
		<div class="post-info"> 
			<?php		
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
				
				<?php
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">

						<?php						
							void_entry_header();
						?>

					</div><!-- .entry-meta -->
					<?php the_excerpt(); ?>
			<?php endif; ?>
		</div><!--.post-info-->			
	</header><!-- .entry-header -->
<div class="clearfix"></div> */ ?>

