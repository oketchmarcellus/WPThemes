<?php
/*
=================================
    Footer Customizer
=================================
*/
 
function agridrive_footer_customize_register( $wp_customize ) {
// Footer Components Section
	$wp_customize->add_section('footer_section',array(
		'title' =>__('Agridrive Footer Contents','production'),
	     'description' =>sprintf(__('Options for Agridrive Footer','production')),
	     'priority' =>400,));
}
add_action('customize_register','agridrive_footer_customize_register');
?>