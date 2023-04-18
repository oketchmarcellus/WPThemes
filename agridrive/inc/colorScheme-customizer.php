<?php
/*
=================================
    Color Scheme Customizer
=================================
*/
//Header text color
function production_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style id="production-custom-header-styles" type="text/css">
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
	add_action( 'wp_head', 'production_header_style' );

	function production_custom_colors_css(){
		?>
        <style>
				hr {
					border-color:<?php echo esc_html(get_theme_mod('hr_color','#cc0402')); ?>;
				}
				.heading {
					color:<?php echo esc_html(get_theme_mod('heading_color','#790908')); ?>;
				}
				.footer-content, .header-text, .mast-cover {
					background-color:<?php echo esc_html(get_theme_mod('color_scheme','#790908')); ?>;
				}
				.navbar-default .navbar-nav > .current-menu-item > a {
					color:<?php echo esc_html(get_theme_mod('hr_color','#cc0402')); ?>;
				}
				
		</style>
	<?php }
add_action('wp_head','production_custom_colors_css');
?>
