<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage TGBSBOILER
 */
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		/**
		 * Fires before the TGBSBOILER featured content.
		 *
		 * @since TGBSBOILER 1.0
		 */
		do_action( 'tgbsboiler_featured_posts_before' );

		$featured_posts = tgbsboiler_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );

			 // Include the featured content template.
			get_template_part( 'content', 'featured-post' );
		endforeach;

		/**
		 * Fires after the TGBSBOILER featured content.
		 *
		 * @since TGBSBOILER 1.0
		 */
		do_action( 'tgbsboiler_featured_posts_after' );

		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->
