<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HitMag
 */

?>
	</div><!-- .hm-container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="hm-container">
			<div class="footer-widget-area">
				<div class="footer-sidebar" role="complementary">
					<?php if ( ! dynamic_sidebar( 'footer-left' ) ) : ?>

					<?php endif; // end sidebar widget area ?>
				</div><!-- .footer-sidebar -->

				<div class="footer-sidebar" role="complementary">
					<?php if ( ! dynamic_sidebar( 'footer-mid' ) ) : ?>

					<?php endif; // end sidebar widget area ?>
				</div><!-- .footer-sidebar -->

				<div class="footer-sidebar" role="complementary">
					<?php if ( ! dynamic_sidebar( 'footer-right' ) ) : ?>

					<?php endif; // end sidebar widget area ?>
				</div><!-- .footer-sidebar -->
			</div><!-- .footer-widget-area -->
		</div><!-- .hm-container -->

		<div class="site-info">
			<div class="hm-container">
				<div class="site-info-owner">
					<?php
						$footer_copyright_text = get_theme_mod( 'footer_copyright_text', '' );

						if ( ! empty ( $footer_copyright_text ) ) {
							echo wp_kses_post( $footer_copyright_text );
						} else {
							printf( esc_html__( 'Copyright &#169; %1$s %2$s', 'alumni' ), date_i18n( 'Y' ), 'All Right Reserved' );
						}
					?>
				</div>
				<div class="site-info-designer">
					<a href="<?php echo esc_url( __( 'localhost/alumni', 'alumni' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'alumni' ), 'Alumni Sekolah Tinggi Teknologi Terpadu Nurul Fikri' ); ?></a>
					<!-- <span class="sep"> | </span> -->
					<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'hitmag' ), 'HitMag', '<a href="https://themezhut.com/themes/hitmag/" rel="designer">ThemezHut</a>' ); ?>
				</div>
			</div><!-- .hm-container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
</body>
</html>
