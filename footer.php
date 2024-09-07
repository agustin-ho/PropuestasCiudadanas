<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Propuestas_Ciudadanas
 */
 
?>

	<footer id="colophon" class="site-footer">
		<div class="footer_top wrapper">
			<a href="<?php echo home_url(); ?>">
				<img alt="Logo Propuestas Ciudadanas 2024-2030" src="/wp-content/uploads/2024/08/logoBlanco.webp">
			</a>
		</div>
		<hr class="footerHr">
		<div class="footer_bottom wrapper">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'after'=>'<li>|</li>'
				)
			);
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
