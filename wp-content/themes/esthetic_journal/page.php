<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
			</div>
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
			<div class="post-area clear-after">
				<?php get_template_part('content-page'); ?>

				<?php get_template_part('sidebar'); ?>

			</div><!-- post-area -->
		</div><!-- row -->
</main><!-- main -->

<?php get_footer(); ?>
