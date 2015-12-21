<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="comp_widecopy_split">
		<div class="comp_widecopy_content_area">	
			<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
						<p><?php _e( 'Post navigation', 'twentytwelve' ); ?></p>
						<p><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?>
						<?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></p>
						<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="comp_widecopy_sidebar">
			<?php get_sidebar(); ?>
		</div>			
	</div>
<?php get_footer(); ?>