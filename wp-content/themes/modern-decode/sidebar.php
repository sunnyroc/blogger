<?php
/**
 *    The sidebar containing the main widget areas.
 *
 * @package    Decode
 * @subpackage modern-decode
 */
?>

<div id="sidebar" class="sidebar <?php echo esc_attr( get_theme_mod( 'sidebar_position', 'left' ) ); ?>">
	<div id="sidebar-top" class="sidebar-top SidebarTop clearfix">
		<button id="sidebar-close" class="sidebar-close SidebarClose" title="<?php esc_attr_e( 'Hide sidebar', 'modern-decode' ) ?>">
			<i class="fa fa-times"></i>
		</button>
	</div>
	<div class="sidebar-content">
		<?php if ( has_nav_menu( 'sidebar-menu' ) ) { ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'sidebar-menu',
				'container'      => false,
				'menu_class'     => 'menu vertical-menu sidebar-menu',
				'menu_id'        => 'sidebar-menu',
				'fallback_cb'    => false,
				'items_wrap'     => '<nav id="%1$s" class="%2$s" role="navigation"><h2 class="menu-title">' . __( 'Navigation', 'modern-decode' ) . '</h2><ul>%3$s</ul></nav><!-- #sidebar-menu -->',
			) );
		} ?>
		<?php tha_sidebars_before(); ?>
		<div class="widget-area" role="complementary">
			<?php tha_sidebar_top(); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>
				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php esc_html_e( 'Archives', 'modern-decode' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>
			<?php endif; // end sidebar widget area ?>
			<?php tha_sidebar_bottom(); ?>
		</div><!-- .widget-area -->
		<?php tha_sidebars_after(); ?>
	</div>
</div>