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

<body <?php body_class(); ?>>
	<header role="banner" class="transparent light">
		<div class="row">
			<div class="nav-inner row-content buffer-left buffer-right even clear-after">
				<div id="brand">
					<h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="index.html">Esthetic Journal</a></h1>
				</div><!-- brand -->
				<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
				<nav>
					<ul class="reset" role="navigation">
						<li class="menu-item">
							<a href="index.html">Головна</a>
							<ul class="sub-menu">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</li>
						<li class="menu-item">
							<a href="news.html">Новини</a>
							<ul class="sub-menu">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
							</ul>
						</li>
						<li class="menu-item">
							<a href="#">Відео</a>
							<ul class="sub-menu">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="#">Про нас</a></li>
						<li class="menu-item"><a href="#">Пошук</a></li>
						<li class="menu-item"><a href="#">Контакти</a></li>
					</ul>
				</nav>
			</div><!-- row-content -->
		</div><!-- row -->
	</header>
<!--<div id="page" class="hfeed site">-->
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //_e( 'Skip to content', 'twentyfifteen' ); ?><!--</a>-->
<!---->
<!--	<div id="sidebar" class="sidebar">-->
<!--		<header id="masthead" class="site-header" role="banner">-->
<!--			<div class="site-branding">-->
<!--				--><?php
//					twentyfifteen_the_custom_logo();
//
//					if ( is_front_page() && is_home() ) : ?>
<!--						<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--					--><?php //else : ?>
<!--						<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--					--><?php //endif;
//
//					$description = get_bloginfo( 'description', 'display' );
//					if ( $description || is_customize_preview() ) : ?>
<!--						<p class="site-description">--><?php //echo $description; ?><!--</p>-->
<!--					--><?php //endif;
//				?>
<!--				<button class="secondary-toggle">--><?php //_e( 'Menu and widgets', 'twentyfifteen' ); ?><!--</button>-->
<!--			</div><!-- .site-branding -->
<!--		</header><!-- .site-header -->
<!---->
<!--		--><?php //get_sidebar(); ?>
<!--	</div><!-- .sidebar -->
<!---->
<!--	<div id="content" class="site-content">-->
