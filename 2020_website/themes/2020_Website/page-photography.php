<?php
/**
 * Template Name: Photography
 * Description: Photography page template
 *
 */

	get_header();
?>

<main data-router-wrapper>
	<div data-router-view="photography" id="page" class="photo">
		<div class="photo__container">
			<div class="container">
				<div class="row">
					<div class="photo__intro" data-aos="fade-up">
						<h1>Photography</h1>
					</div>

					<?php
						$args = array(
							'post_type' => array('photography'),
							'post_status' => array('publish'),
							'nopaging' => true,
							'order' => 'DESC',
							'orderby' => 'date'
						);
						$photography = new WP_Query($args);
					?>

					<?php if ($photography->have_posts()) { ?>
						<div class="photo__gallery">
							<?php while ($photography->have_posts()) {
								$photography->the_post(); ?>

								<div class="photo__item">
									<a href="<?php echo get_permalink(); ?>" alt="" class="internal-link">
									<div class="photo__image">
										<img src="<?php the_field('thumbnail_bottom'); ?>" style="transform: rotate(-<?php echo (rand(1, 5)); ?>deg);">
										<img src="<?php the_field('thumbnail_middle'); ?>" style="transform: rotate(-<?php echo (rand(1, 5)); ?>deg);">
										<img src="<?php the_field('thumbnail_top'); ?>">
									</div>
									<div class="photo__description">
										<h3><?php the_field('title'); ?></h3>
									</div>
									</a>
								</div>

							<?php } ?>
						</div>
					<?php } ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
