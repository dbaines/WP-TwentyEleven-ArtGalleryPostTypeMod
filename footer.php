<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/jquery.colorbox-min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/jquery.sudoSlider.min.js"></script>
<script>
$(function() {
	// Colorboxing our gallery thumbnails
	$(".thumbnail-container a").colorbox({
		opacity: 0.92,
		scalePhotos: true,
		maxHeight: "90%",
		maxWidth: "90%"
	});
	// Homepage SudoSliding
	$(".homepageSliderWrapper").sudoSlider({
		controlsFade: false,
		numeric: true,
		continuous: false,
		autowidth: false,
		numericAttr: 'class="sliderControls"',
		updateBefore: true,
		insertAfter: true,
		speed: 400
	});
	// Portfolio script to run Colorbox on load (link directly to popups)
	if( $("#primary").hasClass("cboxTrigger") ) {
		var id = $("#primary").attr("data-id");
		$("a#post"+id).click();
	}
	});
</script>

</body>
</html>