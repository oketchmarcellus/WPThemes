/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title a ' ).html( newval );
		} );
	} );
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );
	// Update header subtitle...
	wp.customize( 'header_subtitle', function( value ) {
		value.bind( function( newval ) {
			$( '.header-content-inner p' ).html( newval );
		} );
	} );
	// Update header Button Text...
	wp.customize( 'button_text', function( value ) {
		value.bind( function( newval ) {
			$( '.header-content-inner a' ).html( newval );
		} );
	} );
	// Update service section Title...
	wp.customize( 'service_section_heading', function( value ) {
		value.bind( function( newval ) {
			$( '#top-service-section' ).html( newval );
		} );
	} );
	// Update service1 subtitle...
	wp.customize( 'service_subtitle1', function( value ) {
		value.bind( function( newval ) {
			$( '#column1 h3' ).html( newval );
		} );
	} );
	// Update service2 subtitle...
	wp.customize( 'service_subtitle2', function( value ) {
		value.bind( function( newval ) {
			$( '#column2 h3' ).html( newval );
		} );
	} );
	// Update service3 subtitle...
	wp.customize( 'service_subtitle3', function( value ) {
		value.bind( function( newval ) {
			$( '#column3 h3' ).html( newval );
		} );
	} );
	// Update service4 subtitle...
	wp.customize( 'service_subtitle4', function( value ) {
		value.bind( function( newval ) {
			$( '#column4 h3' ).html( newval );
		} );
	} );
	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	//Update site link color in real time...
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.header-content-inner h1, .header-content-inner p' ).css({
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute'
				});
				// Add class for different logo styles if title and description are hidden.
				$( 'body' ).addClass( 'title-tagline-hidden' );
			} else {

				// Check if the text color has been removed and use default colors in theme stylesheet.
				if ( ! to.length ) {
					$( '#prodigi-custom-header-styles' ).remove();
				}
				$( '.header-content-inner h1, .header-content-inner p' ).css({
					clip: 'auto',
					position: 'relative'
				});
				$( '.header-content-inner h1, .header-content-inner p' ).css({
					color: to
				});
				// Add class for different logo styles if title and description are visible.
				$( 'body' ).removeClass( 'title-tagline-hidden' );
			}
		});
	});
    //Update site color scheme...
    wp.customize( 'color_scheme', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#113df0'}
            $('.btn-primary').css('background-color', newval);
            $('hr').css('border-color', newval);
            $('.bg-default').css('background-color', newval);
            $('.text-default').css('color', newval);
        } );
    } );
    //Announcement Section Color scheme...
    wp.customize( 'dark_bg', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#113df0'}
            $('.bg-dark-default').css('background-color', newval);
        } );
    } );
    //Update site mail in real time...
	wp.customize( 'email', function( value ) {
		value.bind( function( newval ) {
			$( '#email a' ).html( newval );
		} );
	} );
} )( jQuery );