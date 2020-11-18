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

	<main id="primary " class="site-main ">
		<section class="cp-container" id="particles-js">
			<?php
				echo "<div class='contact-wrapper'>";
				if(function_exists("get_field")) {
					if(get_field("contact_page_title")) {
						echo "<h1>";
							echo the_field("contact_page_title");
						echo "</h1>";
					}
					if(get_field("company_name")) {
						echo "<h2>";
							echo the_field("company_name");
						echo "</h2>";
					}
					if(get_field("company_address")) {
						echo "<p>";
							echo the_field("company_address");
						echo "</p>";
					}

					echo "<div class='contact-social'>";

					echo "<li>";
					if(get_field("email", "option")) : ?>
					<a href="mailto: <?php echo get_field('email','option'); ?>"><i class="far fa-envelope"></i></a>
					<?php endif; ?>
					</li>



					

					<li>
					<?php if(get_field("company_social_media ") || get_field("social_media_icon")) : ?>

					<?php $link = get_field('company_social_media');

						if( $link ) : ?>
						<a href="<?php echo esc_url( $link ) ?>"> 
						<?php echo the_field("social_media_icon"); ?></a>
						<?php endif; ?>

					<?php endif; ?>
						</li>
					<!-- endo of contact social -->
					</div>

					<?php 
				}
				?>
				</div>
		</section>
	</main><!-- #main -->

<?php

get_footer();
