<?php
/**
 * Template for displaying search forms in agridrive
 *
 * @package WordPress
 * @subpackage agridrive
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'agridrive' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="float:right;"/>
	<input type="hidden" name="post_type[]" value="Team_members" />
</form>
