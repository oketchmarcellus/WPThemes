/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {
	// Update deliver_announcement...
	wp.customize( 'delivery_announcement_title', function( value ) {
		value.bind( function( newval ) {
			$( '.announcement p' ).html( newval );
		} );
	} );
	// Update deliver_announcement...
	wp.customize( 'Phone_details', function( value ) {
		value.bind( function( newval ) {
			$( '.contact' ).html( newval );
		} );
	} );	
} )( jQuery );