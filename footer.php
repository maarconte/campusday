<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="site-info container">
			<div class="content has-text-centered">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'medusa' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'medusa' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'medusa' ), 'medusa', '<a href="https://thatmuch.fr/" rel="designer">ThatMuch</a>' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
