<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photographer_portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="fp-container" id="particles-js">
		<div class="heading-title">
		<?php
			if(function_exists('get_field')) {
				if(get_field('heading')) {
					echo '<h1>';
					echo '<a href="portfolio">';
					echo the_field('heading');
					echo '</a>';
					echo '</h1>';
				}
			}
			if(function_exists('get_field')) {
				if(get_field('message')) {
					echo '<p>';
					echo the_field('message');
					echo '</p>';
				}
			}
		?>
		</di>
	</section>




		
	</main><!-- #main -->

<?php

get_footer();
