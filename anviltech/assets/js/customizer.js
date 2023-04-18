( function( $ ) {
	
  		wp.customize( 'service_section_heading', function( value ) {
    		value.bind( function(to) {
      			$( '#testhead h2' ).text(to);
    		} );
  		});
		wp.customize('service_section_heading',function(value){
			value.bind(function(newval){
				$('#testhead h2').html(newval);
			} );
		});
})( jQuery );