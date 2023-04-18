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
			$( '.site-title h3 ' ).html( newval );
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
	// Update welcome post heading...
	wp.customize( 'welcome_post_heading', function( value ) {
		value.bind( function( newval ) {
			$( '#welcome-heading' ).html( newval );
		} );
	} );
	// Update new releases heading...
	wp.customize( 'releases_post_heading', function( value ) {
		value.bind( function( newval ) {
			$( '#releases-heading' ).html( newval );
		} );
	} );
	// Update releases Post...
	wp.customize( 'releases_post', function( value ) {
		value.bind( function( newval ) {
			$( '.releases-post p' ).html( newval );
		} );
	} );
	// Upload one title...
	wp.customize( 'releases_upload1_title', function( value ) {
		value.bind( function( newval ) {
			$( '#upload1-title' ).html( newval );
		} );
	} );
	// Upload one subtitle...
	wp.customize( 'releases_upload1_subtitle', function( value ) {
		value.bind( function( newval ) {
			$( '#upload1-subtitle' ).html( newval );
		} );
	} );
	// Upload two title...
	wp.customize( 'releases_upload2_title', function( value ) {
		value.bind( function( newval ) {
			$( '#upload2-title' ).html( newval );
		} );
	} );
	// Upload two subtitle...
	wp.customize( 'releases_upload2_subtitle', function( value ) {
		value.bind( function( newval ) {
			$( '#upload2-subtitle' ).html( newval );
		} );
	} );
	// Upload three title...
	wp.customize( 'releases_upload3_title', function( value ) {
		value.bind( function( newval ) {
			$( '#upload3-title' ).html( newval );
		} );
	} );
	// Upload three subtitle...
	wp.customize( 'releases_upload3_subtitle', function( value ) {
		value.bind( function( newval ) {
			$( '#upload3-subtitle' ).html( newval );
		} );
	} );
	// Update latest news heading...
	wp.customize( 'latest_news_heading', function( value ) {
		value.bind( function( newval ) {
			$( '#news-heading' ).html( newval );
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
	 //Kode Topbar Background Color...
    wp.customize( 'kode_topbar_bg', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#009a3f'}
            $('.kode-topbar').css('background-color', newval);
        	$('.search-field').css('border-color', newval);
        } );
    } );
    //header wrapper background color
    wp.customize( 'header_wrapper_bg', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#f3f2d3'}
            $('.top-wrapper').css('background-color', newval);
        } );
    } );
     //WhyUs Section Background Color...
    wp.customize( 'whyus_bg_color', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#f1f1f1'}
            $('.why-choose').css('background-color', newval);
        } );
    } );

    //Update site color scheme...
    wp.customize( 'color_scheme', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#790908'}
            $('.services i').css('color', newval);
            $('.img-border').css('border-color', newval);
            $('.mast-cover').css('background-color', newval);
            $('.team-btn').css('background', newval);
        } );
    } );
      //Update footer hr color...
    wp.customize( 'hr_color', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#cc0402'}
            $('hr').css('border-color', newval);
        	$('.current-menu-item> a').css('color', newval);
        } );
    } );
     //Success Stories Background Color...
    wp.customize( 'success_storiesbg_color', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#351200'}
            $('.success-stories').css('background-color', newval);
        } );
    } );
    //News letter SignUp form foreground Color...
    wp.customize( 'newsletter_bg_color', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#c2c320'}
            $('#newsletter-form').css('background-color', newval);
        } );
    } );
    //Footer background Color...
    wp.customize( 'footer_wrapper_color', function( value ) {
        value.bind( function( newval ) {
        	if( ! newval ) { newval = '#002e00'}
            $('.footer-wrapper').css('background-color', newval);
        } );
    } );
    //Update site mail in real time...
	wp.customize( 'email', function( value ) {
		value.bind( function( newval ) {
			$( '#email a' ).html( newval );
		} );
	} );
} )( jQuery );