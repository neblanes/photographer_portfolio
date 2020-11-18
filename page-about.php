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
	<main id="primary" class="site-main">
	<section class="about-container">
		<div>
			<?php
				if(function_exists("get_field")) {
					if(get_field("about_heading") || get_field("about_intro") || get_field("about_description") || get_field("about_cta")) {
						echo "<h1>";
							echo the_field("about_heading");
						echo "</h1>";
						echo "<div class='about-intro'>";
						echo the_field("about_intro");
						echo "</div>";
						$image = get_field("about_image");
					
		echo '<div data-aos="fade-up" data-aos-id="customEventName" data-aos-duration="3000">';
					echo wp_get_attachment_image( $image,'med', "", ["class" => "lazy-load"] ); 
		echo '</div>';
						echo "<div class='about-description'>";
						echo the_field("about_description");
						echo "</div>";
						echo "<h2>";
						echo "<a href= portfolio >";
						echo  the_field('about_cta');
						echo "</a>";
						echo "</h2>";
					}
				}
			
			?>
		</div>
	
	</section>

	</main><!-- #main -->

<?php
get_footer();
