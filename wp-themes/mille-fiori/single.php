<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
?>
<!-- Blog Post Section -->
<section id="blog-post" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="section-name">Blog post<i class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row pos-r">
      <div class="col-12 col-md-8 col-lg-9">
        <!-- Start the Loop. -->
        <?php if ( have_posts() ) : while ( have_posts() ) :
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="post_content single_post_content">
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'big-featured-image' );
            }
            wp_link_pages( array(
              'before' => '<div class="clear"></div><div class="page-link"><span>' . __( 'Pages:', 'one-page' ) . '</span>',
              'after'  => '</div>'
            ) );
            ?>
            <h5 class="blog-post-details"><?php echo get_the_time( 'F j, Y' ) ?> -
              <?php the_category( ', ' ); ?><!--Travel, Lifestyle--></h5>
            <h1 class="blog-post-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php understrap_post_nav(); ?>
            <div class="horisontal-sidebar">
              <?php get_sidebar( 'horizontal' ); ?>
            </div>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
            ?>
          </div>
          <!--End Post-->
          <?php
          endwhile;
          else:
            ?>
            <div class="blogs_page_container">
              <p>
                <?php _e( 'Sorry, no posts matched your criteria.', 'one-page' ); ?>
              </p>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- Do the right sidebar check -->
      <?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

        <?php get_sidebar( 'right' ); ?>

      <?php endif; ?>
    </div>
  </div>
</section>

<div class="clear"></div>
<?php get_footer(); ?>

<?php get_footer(); ?>
