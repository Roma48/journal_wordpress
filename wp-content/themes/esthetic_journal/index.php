<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main" role="main">-->
<!---->
<!--		--><?php //if ( have_posts() ) : ?>
<!---->
<!--			--><?php //if ( is_home() && ! is_front_page() ) : ?>
<!--				<header>-->
<!--					<h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
<!--				</header>-->
<!--			--><?php //endif; ?>
<!---->
<!--			--><?php
//			// Start the loop.
//			while ( have_posts() ) : the_post();
//
//				/*
//				 * Include the Post-Format-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//				 */
//				get_template_part( 'content', get_post_format() );
//
//			// End the loop.
//			endwhile;
//
//			// Previous/next page navigation.
//			the_posts_pagination( array(
//				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
//				'next_text'          => __( 'Next page', 'twentyfifteen' ),
//				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
//			) );
//
//		// If no content, include the "No posts found" template.
//		else :
//			get_template_part( 'content', 'none' );
//
//		endif;
//		?>
<!---->
<!--		</main><!-- .site-main -->
<!--	</div>-->

<main role="main">
			<div id="intro-wrap">
				<div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">
					<div class="intro-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/767f6861-ffcd-4994-afdf-2a730a9be20f.jpg);">
						<div class="caption">
							<h2>Esthetic</h2>
							<p>Творчість у твоєму місті</p>
							<a class="button white transparent" href="content.html">Читати</a>
						</div><!-- caption -->
<div class="photocaption">
	<h4>Фото зробив: <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>
</div><!-- photocaption -->
</div>
<div class="intro-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vsco_071915.jpg);">
	<div class="caption">
		<h2>Esthetic</h2>
		<p>Мы индивидуальны</p>
		<a class="button white transparent" href="#">Читать</a>
	</div><!-- caption -->
	<div class="photocaption">
		<h4>A shot by <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>
	</div><!-- photocaption -->
</div>
<div class="intro-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/1922211_1113433452008380_836589375_n.jpg);">
	<div class="caption">
		<h2>Esthetic</h2>
		<p>Мы показываем город своими глазами</p>
		<a class="button white transparent" href="#">Читать</a>
	</div><!-- caption -->
	<div class="photocaption">
		<h4>A shot by <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>
	</div><!-- photocaption -->
</div>
<div class="intro-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vsco_080315.jpg);">
	<div class="caption">
		<h2>Esthetic</h2>
		<p>Мы креативные</p>
		<a class="button white transparent" href="#">Читать</a>
	</div><!-- caption -->
	<div class="photocaption">
		<h4>A shot by <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>
	</div><!-- photocaption -->
</div>
</div><!-- intro -->
</div><!-- intro-wrap -->

<div id="main">

	<section class="row section">
		<div class="row-content buffer even clear-after">
			<div class="section-title"><h3>Останні новини</h3></div>
			<div class="grid-items blog-section masonry-style preload">
				<article class="item column six">
					<a href="#">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/img/vsco_011715.jpg" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post">Люди</h5>
								<h2>Интервью с Вадимом Брыклей</h2>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->
					</a>
				</article>
				<article class="item column three">
					<a href="#">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/img/vsco_061215.jpg" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post">Идеи</h5>
								<h2>Как разширить круг мышления?</h2>
								<p></p>
							</div><!-- blog-excerpt-inner -->
						</div><!-- blog-excerpt -->
					</a>
				</article>
				<article class="item column three">
					<a href="#">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/img/vsco_042315.jpg" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post">Арт</h5>
								<h2>Esthetic Magazine</h2>
								<p>Новый журнал от Черкасской команды энтезиастов</p>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->
					</a>
				</article>
				<article class="item column three">
					<a href="#">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post">Спорт</h5>
								<h2>Скейтбординг в Черкассах</h2>
								<p></p>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->
					</a>
				</article>
				<article class="item column three">
					<a href="#">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/img/10860082_773893632692428_1522243183_n.jpg" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post">Технологии</h5>
								<h2>Время и данные</h2>
								<p>Задумывались ли вы о том, сколько времени можно хранить данные на носителях?</p>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->
					</a>
				</article>
				<article class="item column six">
					<a href="#">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/img/vsco_072215.jpg" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post">Фотографія, Відео</h5>
								<h2>Мобільна фотографія і все, що з нею пов'язано</h2>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->
					</a>
				</article>
				<div class="shuffle-sizer three"></div>
			</div><!-- grid-items -->
			<div class="more-btn"><a class="button transparent aqua" href="news.html">Читати всі новини</a></div>
		</div>
	</section>

	<section class="row section">
		<div class="map" data-maplat="49.445773" data-maplon="32.062016" data-mapzoom="17" data-color="" data-height="22.222" data-img="<?php echo get_template_directory_uri(); ?>/img/marker.png" data-info="Мы находимся в Черкассах"></div>
	</section>

</div><!-- id-main -->
</main><!-- main -->

<?php get_footer(); ?>
