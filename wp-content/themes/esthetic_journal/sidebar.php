<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside role="complementary" class="sidebar column three last">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php endif; ?>
	</aside>
<?php endif; ?>
