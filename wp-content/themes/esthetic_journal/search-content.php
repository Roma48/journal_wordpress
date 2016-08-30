<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article <?php post_class('clear-after'); ?> id="<?php the_ID(); ?>">
	<div class="column three">
		<figure><?php the_post_thumbnail([157, 157]); ?></figure>
	</div><!-- column three -->
	<div class="column nine last">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<h5 class="meta-post"><?php the_category(); ?> - <time datetime="<?php the_date(); ?>"><?php setlocale(LC_TIME, "uk_UA.UTF-8"); echo strftime("%d %B, %Y", strtotime(get_the_date())); ?></time></h5>
		<p><?php the_content(); ?></p>
	</div><!-- column nine -->
</article>
