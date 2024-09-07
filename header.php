<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Propuestas_Ciudadanas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'propuestas-ciudadanas' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_page( 'propuestas-ciudadanas' )) {
				?>
				<a class="menu-pres" href="<?php echo home_url(); ?>">
						<img alt="Logo Propuestas Ciudadanas 2024-2030" src="/wp-content/uploads/2024/08/favicon.png">
					</a>
				<?php
			}
			else {
				?>
					<a href="<?php echo home_url(); ?>">
						<img alt="Logo Propuestas Ciudadanas 2024-2030" src="/wp-content/uploads/2024/08/logo_PC_extendido.webp">
					</a>
				<?php
			} ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
