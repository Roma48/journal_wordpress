<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main role="main">
	<div id="intro-wrap" class="full-height">
		<div id="intro" class="preload darken more-button">
			<div class="intro-item" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
<!--				<div class="photocaption">-->
<!--					<h4>Photography by <a href="vk.com/awaylastdays">Vadim Bryklia</a></h4>-->
<!--				</div><!-- photocaption -->
			</div>
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
			<div id="post-nav">
				<ul class="clear-after reset plain">
					<li id="prev-items" class="post-nav"><?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i><span class="label hidden-mobile">Пред.</span>'); ?></li>
					<li id="all-items" class="post-nav"><a href="/"><i class="icon icon-images"></i></a></li>
					<li id="next-items" class="post-nav"><?php next_post_link('%link', '<span class="label hidden-mobile">След.</span><i class="fa fa-chevron-right"></i>'); ?></li>
				</ul>
			</div>

			<div class="post-area clear-after">
				<?php get_template_part('custom-content'); ?>

				<?php get_template_part('sidebar'); ?>

			</div><!-- post-area -->

			<div class="meta-social">
				<ul class="inline center">
					<li><a onclick="window.open('http://twitter.com/share?url=<?php the_permalink(); ?>', 'newwindow', 'width=600, height=600'); return false;" target="_blank" href="http://twitter.com/share?url=<?php the_permalink(); ?>" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>', 'newwindow', 'width=600, height=600'); return false;" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a onclick="window.open('http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>', 'newwindow', 'width=600, height=600'); return false;" target="_blank" href="http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>" class="vk-share border-box"><i class="fa fa-vk fa-lg"></i></a></li>
				</ul>
			</div>

			<div class="related clear-after">
				<h4>Последнии публикации</h4>
				<?php
				$args = array(
					'numberposts' => 3,
					'offset' => 0,
					'category' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'include' => '',
					'exclude' => '',
					'meta_key' => '',
					'meta_value' =>'',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

				foreach ($recent_posts as $post) :
				if ($post === end($recent_posts)) : ?>
					<div class="item last">
				<?php else : ?>
					<div class="item">
				<?php endif; ?>
						<figure><?php echo get_the_post_thumbnail($post['ID'], [296, 296]); ?></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-search"></i></div>
								<h2><?php echo apply_filters('the_title', get_post_field('post_title', $post['ID'])); ?></h2>
								<p><?php echo apply_filters('the_content', get_post_field('post_content', $post['ID'])); ?></p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</div>
				<?php endforeach; ?>
			</div>

		</div><!-- row-content -->
	</div><!-- row -->
</main><!-- main -->

<?php get_footer(); ?>
