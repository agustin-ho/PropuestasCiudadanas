<?php /*Template name: Temas */ ?>
<?php get_header(); ?>

<section class="entry-header">
	<?php the_title( '<h1 class="entry-title wrapper">', '</h1>' ); ?>
</section><!-- .entry-header -->
<section class="main">
	<div class="wrapper">
		<?php
			// the query.
		$args = array(
			'post_type' => 'page',
			'post_parent'=> 315,
			'order'=> 'ASC',
			'orderby'=>'name',
			'posts_per_page'=> -1
		);
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
			<!-- pagination here -->
			<div class="cardContainer">

			
			<!-- the loop --> 
			<?php
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
				<div class="cardBlock">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</a>
					<a class="cardTitle" href="<?php the_permalink(); ?>">
						<?php the_title( '<h2>', '</h2>' ); ?>
					</a>
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</div>
	</div>

</section>
<?php get_footer(); ?> 