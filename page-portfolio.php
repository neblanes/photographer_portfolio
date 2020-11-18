<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photographer_portfolio
 */

get_header();
?>

	<main id="primary " class="site-main">
		<section class="pp-container" >
			<h1>My Gallery</h1>
			<div class="gallery-container" >
			<?php
			echo do_shortcode('[rl_gallery id="112"]	');
			?>
			</div>
		</section>
		

	</main><!-- #main -->

<?php

get_footer();
