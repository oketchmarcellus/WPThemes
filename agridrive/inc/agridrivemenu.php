<?php
function caret_dropdown_in_menus( $item_output, $item, $depth, $args ) {
	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$caret_icon = 0 == $depth ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-right"></i>';
		$item_output = str_replace( '</a>', $caret_icon . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'caret_dropdown_in_menus', 10, 4 );
?>