<?php get_header(); ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<section id="hero">
			<div class="entry-content row">
				<?php the_content(); ?>
			</div><!-- End Hero -->
		</section>
		<section id="fca_main">
			<div class="entry-content row">
				<?php the_field('fca_main'); ?>
			</div>
		</section><!-- End Main -->
		<section id="fca_secondary">
			<div class="entry-content row">
				<?php the_field('fca_secondary'); ?>
			</div>
		</section><!-- End Secondary -->
	<?php endwhile;?>
<?php get_footer(); ?>