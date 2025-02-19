<?php
/**
 * The template for displaying all course post type single entry.
 *
 * @package WPBBP
 */

get_header(); ?>

	<main id="main" class="site-main type-page" role="main">
		<?php get_template_part( 'template-parts/component', 'breadcrumbs' ); ?>

		<div id="main-content">
			<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single', array( 'context' => 'course' ) );
			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
