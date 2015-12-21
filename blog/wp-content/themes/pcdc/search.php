<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="comp_widecopy_split">
		<div class="comp_widecopy_content_area">	
		<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php twentytwelve_content_nav( 'nav-above' ); ?>			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>
		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
					<h1><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>

					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
			</article><!-- #post-0 -->

		<?php endif; ?>
	 	</div>
	 	<div class="comp_widecopy_sidebar">
			<?php get_sidebar(); ?>
		</div>	 
	</div>
<?php get_footer(); ?>