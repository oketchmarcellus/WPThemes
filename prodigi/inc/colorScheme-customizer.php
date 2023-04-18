<?php
/*
=================================
    Color Scheme Customizer
=================================
*/
//Header text color
function prodigi_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style id="prodigi-custom-header-styles" type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
	?>
		.header-content-inner h1,
		.header-content-inner p {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.header-content-inner h1,
		.colors-custom .header-content-inner h1,
		body.has-header-image .header-content-inner h1,
		body.has-header-video .header-content-inner h1,
		body.has-header-image.colors-custom .header-content-inner h1,
		body.has-header-video.colors-custom .header-content-inner h1,
		.header-content-inner p,
		.colors-custom .header-content-inner p,
		body.has-header-image .header-content-inner p,
		body.has-header-video .header-content-inner p,
		body.has-header-image.colors-custom .header-content-inner p,
		body.has-header-video.colors-custom .header-content-inner p {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
<?php }
	add_action( 'wp_head', 'prodigi_header_style' );

	function prodigi_custom_colors_css(){
		?>
        <style>
				hr {
					border-color:<?php echo esc_html(get_theme_mod('color_scheme','#113df0')); ?>;
				}
				.text-default, #mainNav.navbar-shrink .navbar-brand {
					color:<?php echo esc_html(get_theme_mod('color_scheme','#113df0')); ?>;
				}
				.btn-primary{
					background-color:<?php echo esc_html(get_theme_mod('color_scheme','#113df0')); ?>;
				}
				.bg-default{
					background-color:<?php echo esc_html(get_theme_mod('color_scheme','#113df0')); ?>;
				}
				.dark_bg{
					background-color:<?php echo esc_html(get_theme_mod('dark_bg','#222222')); ?>;
				}
				
		</style>
	<?php }
add_action('wp_head','prodigi_custom_colors_css');
?>
