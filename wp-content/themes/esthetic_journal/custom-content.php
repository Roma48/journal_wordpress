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

<?php if (is_single()) : ?>
	<article role="main" class="column nine">
		<h5 class="meta-post"><a href="#">Раздел</a>, <a href="#">Подтема</a> - <time datetime="2013-11-09">Февраль 18, 2016</time></h5>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</article>
<?php else : ?>
	<?php	$i = 1;
	$class = '';
	$thumbnail = '';

	while ( have_posts() ) : the_post();
		if ($i == 1 || $i == 4 || $i == 9){
			$class = 'six';
		} else {
			$class = 'three';
		}
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('item column ' . $class . ''); ?>>
			<a href="<?php the_permalink(); ?>">
				<figure>
					<?php if ($class != 'six') {
						the_post_thumbnail([212, 212]);
					} else {
						the_post_thumbnail([462, 462]);
					} ?>
					<span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
				<div class="blog-excerpt">
					<div class="blog-excerpt-inner">
						<h5 class="meta-post">Люди</h5>
						<?php
						the_title( '<h2 class="entry-title">', '</h2>' );
						if ($class != 'six'){
							echo '<p>' . the_content() . '</p>';
						}
						?>
					</div><!-- blog-excerpt -->
				</div><!-- blog-excerpt-inner -->
			</a>
		</article>
		<?php $i++; endwhile; ?>
<?php endif; ?>
