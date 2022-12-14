<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */

?>
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

				<div class="widget-area <?php echo esc_attr( dyad_2_widget_column_class( 'sidebar-1' ) ); ?>" role="complementary">
					<div class="grid-container">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- .grid-container -->
				</div><!-- #secondary -->

			<?php } ?>

		</footer><!-- #colophon -->

	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
