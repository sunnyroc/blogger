<?php
/**
 * The sidebar containing the pages menu area
 *
 * Displays on posts and pages.
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

wp_nav_menu(
	array(
		'theme_location'  => 'primary',
		'container'       => 'nav',
		'container_id'    => 'menu-primary',
		'container_class' => 'menu',
		'menu_id'         => 'menu-primary-items',
		'menu_class'      => 'menu-items',
		'depth'           => 1,
		'fallback_cb'     => false,
	)); ?>
