<div class="blog-carousel slick-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "dots": true,
			"responsive": [
				{
					"breakpoint": 800,
					"settings": {
						"slidesToShow": 2,
						"slidesToScroll": 2
					}
				},
				{
					"breakpoint": 500,
					"settings": {
						"slidesToShow": 1,
						"slidesToScroll": 1
					}
				}
			]
}'>

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
			<div class="item">
				<div class="blog-cell">
					<h6 class="blog-date"><?php echo get_the_date() ?></h6>
					<h4 class="blog-title"><?php the_title() ?></h4>
					<div class="col blog-image-cell">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="blog-content">
						<h5
							class="blog-by"><?php echo 'by ' . get_the_author_meta( 'first_name' ) . ' ' . get_the_author_meta( 'last_name' ) ?></h5>
						<?php the_excerpt() ?>
						<div class="blog-separator"></div>
						<div class="text-center">
							<a href="<?php the_permalink() ?>" class="page-scroll btn btn-xl">Read more</a>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
	endif; ?>
</div>