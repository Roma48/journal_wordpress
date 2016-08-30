<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main role="main">

	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
			<div class="column nine">
				<?php if ( have_posts() ) : ?>
					<div class="search-results">
						<h4><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h4>
					</div>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>

						<?php
						/*
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
						get_template_part( 'search-content', 'search' );

						// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'search-content', 'none' );

				endif;
				?>
			</div><!-- column nine -->

			<?php get_template_part('sidebar'); ?>

		</div><!-- row-content -->
	</div><!-- row -->
</main><!-- main -->

<?php get_footer(); ?>
