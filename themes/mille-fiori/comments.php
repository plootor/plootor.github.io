<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package understrap
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

//add_filter( 'get_comment_date', 'wpsites_change_comment_date_format' );
//function wpsites_change_comment_date_format( $d ) {
//  $d = date("m.d.y");
//  return $d;
//}

//function wpb_comment_reply_text( $link ) {
//  $link = str_replace( 'Leave a Reply', 'Post a comment', $link );
//  return $link;
//}
//add_filter( 'Leave a Reply', 'wpb_comment_reply_text' );
?>

<div class="comments-area" id="comments">
	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

		<h4 class="comments-title">

			<?php
			$comments_number = get_comments_number();
			if ( 1 === $comments_number ) {
				printf(
				/* translators: %s: post title */
					esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'mille-fiori' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
				/* translators: 1: number of comments, 2: post title */
					esc_html( _nx(
						'%1$s Comment',
						'%1$s Comments',
						$comments_number,
						'comments title',
						'mille-fiori'
					) ),
					number_format_i18n( $comments_number ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>

		</h4><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>

			<nav class="comment-navigation" id="comment-nav-above">

				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'mille-fiori' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
							'mille-fiori' ) ); ?></div>
				<?php }
				if ( get_next_comments_link() ) { ?>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
							'mille-fiori' ) ); ?></div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // check for comment navigation. ?>

		<ul class="comment-list">

			<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
			) );
			?>

		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>

			<nav class="comment-navigation" id="comment-nav-below">

				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'mille-fiori' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
							'mille-fiori' ) ); ?></div>
				<?php }
				if ( get_next_comments_link() ) { ?>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
							'mille-fiori' ) ); ?></div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->

		<?php endif; // check for comment navigation. ?>

	<?php endif; // endif have_comments(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mille-fiori' ); ?></p>

	<?php endif; ?>
	<?php comment_form(); // Render comments form. ?>
</div><!-- #comments -->
