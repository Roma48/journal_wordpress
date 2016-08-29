<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Proxi:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
</head>
<?php if (is_archive()) : ?>
<body <?php body_class('blog masonry-style'); ?>>
<?php else : ?>
<body <?php body_class(); ?>>
<?php endif; ?>
	<header role="banner" class="transparent light">
		<div class="row">
			<div class="nav-inner row-content buffer-left buffer-right even clear-after">
				<div id="brand">
					<h1 class="reset"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- brand -->
				<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'reset',
						'theme_location' => 'primary',
						'container'		 => 'nav'
					) );
					?>
			</div><!-- row-content -->
		</div><!-- row -->
	</header>
