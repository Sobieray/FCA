<?php
/*
Template Name: Home
*/
get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<section id="hero">
			<div class="entry-content row">
				<?php the_content(); ?>
			</div>
		</section><!-- End Hero -->
		<section id="fca_main">
			<div class="entry-content row">
				<?php the_field('fca_main'); ?>
			</div>
		</section><!-- End Main -->
		<section id="fca_slider">
			<div class="entry-content row">
				<?php the_field('fca_slider'); ?>
			</div>
		</section><!-- End Slider -->
		<section id="fca_secondary">
			<div class="entry-content row">
				<?php the_field('fca_secondary'); ?>
			</div>
		</section><!-- End Secondary -->
		<section>
			<div class="entry-content row">
				<?php the_field('fca_francises'); ?>
			</div>
		</section>
	<?php endwhile;?>
<?php get_footer(); ?>