jQuery( document ).ready( function( $ ){
     
/* Add JS Code Here... */

/* Add Row */
$( 'body' ).on( 'click', '.service-add-row', function(e){ e.preventDefault();
     
/* Target the template. */
    var template = '.service-templates > .service-' + $( this ).attr( 'data-template' );
     
/* Clone the template and add it. */
$( template ).clone().appendTo( '.service-rows' );
/* Hide Empty Row Message */
$( '.service-rows-message' ).hide();
/* Update Order */
    service_UpdateOrder(); 
});
    /* Delete Row */
    $( 'body' ).on( 'click', '.service-remove', function(e){
        e.preventDefault();
     
        /* Delete Row */
        $( this ).parents( '.service-row' ).remove();
        
        /* Show Empty Message When Applicable. */
        if( ! $( '.service-rows > .service-row' ).length ){
            $( '.service-rows-message' ).show();
        }
        /* Update Order */
         service_UpdateOrder();
    });
        /* Make Row Sortable */
    $( '.service-rows' ).sortable({
        handle: '.service-handle',
        cursor: 'grabbing',
        stop: function( e, ui ) {
        service_UpdateOrder();
    },
    }); 
        /* Function: Update Order */
    function service_UpdateOrder(){
     
        /* In each of rows */
        $('.service-rows > .service-row').each( function(i){
     
            /* Increase index by 1 to avoid "0" as first number. */
            var num = i + 1;
     
            /* Update order number in row title */
            $( this ).find( '.service-order' ).text( num );
            /* In each input in the row */
        $( this ).find( '.service-row-input' ).each( function(i) {
 
            /* Get field id for this input */
            var field = $( this ).attr( 'data-field' );
 
            /* Update name attribute with order and field name.  */
            $( this ).attr( 'name', 'service[' + num + '][' + field + ']');
          });
        });
    }         
});