<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio-den
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			?>
				
				<article>
					<h1 class="portfolio__title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>

				<div class="nav-links">
					<p>Навигация по проектам</p>
					<?php echo get_previous_post_link(); ?>
					<?php echo get_next_post_link(); ?>
				</div>
			<?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
