<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photographer_portfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="footer-info-container">
			<?php
			echo "<ul>";
				if(function_exists("get_field")) : 
					if(get_field("email", "option")) : ?>
				<li>
					<a href="mailto: <?php echo get_field('email','option'); ?>">E-mail</a>
				</li>
				<?php endif; ?>
				<?php endif; ?>				
			<?php	if(have_rows("social_media", "option")) : 
					while(have_rows("social_media", "option")) :
						the_row(); ?>
					<li>
						<a href="<?php echo the_sub_field('social_media_link','option'); ?>"> <?php echo the_sub_field("social_media_title"); ?></a>
					</li>
					<?php endwhile; ?>
				<?php endif; 
				echo "</ul>"; 
				?>	
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
