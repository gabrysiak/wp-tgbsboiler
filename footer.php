<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage TGBSBOILER
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo" ng-controller="Main as main">

			<?php get_sidebar( 'footer' ); ?>
	
			<div class="site-info">
				<a href="#">{{ main.title }} {{ main.version }}</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	<!-- Manually Bootstrap Angular App -->
	<script>angular.bootstrap(document, ['tgbsboiler']);</script>
</body>
</html>