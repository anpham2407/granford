<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="footer-wrapper" role="contentinfo">
		<div class="site-footer">
			<div class="site-info">
				<div class="footer-left-side">
					<div class="site-name">
						<?php if ( has_custom_logo() ) : ?>
							<div class="site-logo"><?php the_custom_logo(); ?></div>
						<?php else : ?>
							<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
								<?php if ( is_front_page() && ! is_paged() ) : ?>
									<?php bloginfo( 'name' ); ?>
								<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					</div><!-- .site-name -->
					<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
				</div>
				<div class="footer-right-side">
					<?php get_template_part( 'template-parts/footer/footer-widgets-rightside' ); ?>
				</div>

			</div><!-- .site-info -->
		</div>
		<!-- <div class="powered-by">
			<?php
			printf(
				/* translators: %s: WordPress. */
				esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
				'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
			);
			?>
		</div> -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
