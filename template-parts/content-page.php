<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Propuestas_Ciudadanas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title wrapper">', '</h1>' ); ?>
		<?php propuestas_ciudadanas_post_thumbnail(); ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<div class="wrapper">
			<?php
			the_content();	
			?>
			<section class="agendasList">
				<ul>
				
					<?php 
					$i = 1;
					while ($i <= 5){
						$link = get_field("link_agenda_{$i}");
						$nombre = get_field("nombre_agenda_{$i}");
						$promotor = get_field("promotor_agenda_{$i}"); 	
						if ($nombre == ''){break;}
						?>
						<li>
							<a href="<?php echo get_field("link_agenda_{$i}"); ?>">
								<h3><span><?php echo get_field("nombre_agenda_{$i}"); ?></span></h3>
								<h4><span><?php echo get_field("nombre_promotor_{$i}"); ?></span></h4>
							</a>
						</li>
					<?php
					$i++;
					}
					?>
									
			</section>

		</div>
	</div><!-- .entry-content -->

</article>
