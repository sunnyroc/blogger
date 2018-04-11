<?php
/**
 * The template for displaying the form for searching content
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="text" class="search-text" name="s"
		   value="<?php echo get_search_query(); ?>"
		   placeholder="<?php esc_attr_e( 'Search &hellip;', 'espresso-programmer' ); ?>" />
	<input type="submit" class="search-submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'espresso-programmer' ); ?>" />
</form>
