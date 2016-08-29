<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main role="main">
	<div id="intro-wrap" data-height="27.778">
		<div id="intro" class="preload darken">
			<div class="intro-item" style="background-image: url(img/vsco_031315.jpg);">
				<div class="caption">
					<h2><?php echo get_the_category(get_the_ID())[0]->name; ?></h2>
					<p><?php the_archive_description(); ?></p>
				</div><!-- caption -->
				<div class="photocaption">
					<h4>A shot by <a href="http://vk.com/awaylastdays" target="blank" alt="Vadim Bruklia">Vadim Bruklia</a></h4>
				</div><!-- photocaption -->
			</div><!-- intro -->
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main" class="row">
		<div class="row-content buffer clear-after">
			<div class="grid-items preload">
				<?php
				// Start the loop.
				/*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
				get_template_part('custom-content', get_post_format());
				// End the loop.
				?>
				<div class="shuffle-sizer three"></div>
			</div><!-- grid-items -->
			<div id="pagination">
				<ul class="clear-after reset plain">
					<li id="older" class="pagination-nav"><a href="#" class="button transparent aqua"><i class="fa fa-chevron-left"></i><span class="label">Пред</span></a></li>
					<li id="newer" class="pagination-nav"><a href="#" class="button transparent aqua"><span class="label">След</span><i class="fa fa-chevron-right"></i></a></li>
				</ul>
			</div>
		</div><!-- row-content -->
	</div><!-- row -->
</main><!-- main -->

<?php get_footer(); ?>
