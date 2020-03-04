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

					<?php if ($photography->have_posts()) {
						while ($photography->have_posts()) {
							$photography->the_post(); ?>

							<div class="photo__gallery">
								<div class="photo__item">
									<div class="photo__image">
										<img src="<?php the_field('thumbnail_bottom'); ?>" style="transform: rotate(-<?php echo (rand(1, 5)); ?>deg);">
										<img src="<?php the_field('thumbnail_middle'); ?>" style="transform: rotate(-<?php echo (rand(1, 5)); ?>deg);">
										<img src="<?php the_field('thumbnail_top'); ?>">
									</div>
									<div class="photo__description">
										<h3 class="feature__title">Website rebuild</h3>
									</div>
								</div>
							</div>

						<?php }
					} ?>
					<?php wp_reset_query(); ?>

					<div class="photo__gallery">
						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080" class="bottom">
								<img src="https://picsum.photos/id/2/1920/1080" class="middle">
								<img src="https://picsum.photos/id/3/1920/1080" class="top">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>
						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080" class="bottom">
								<img src="https://picsum.photos/id/2/1920/1080" class="middle">
								<img src="https://picsum.photos/id/3/1920/1080" class="top">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080" class="bottom">
								<img src="https://picsum.photos/id/2/1920/1080" class="middle">
								<img src="https://picsum.photos/id/3/1920/1080" class="top">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080" class="bottom">
								<img src="https://picsum.photos/id/2/1920/1080" class="middle">
								<img src="https://picsum.photos/id/3/1920/1080" class="top">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080" class="bottom">
								<img src="https://picsum.photos/id/2/1920/1080" class="middle">
								<img src="https://picsum.photos/id/3/1920/1080" class="top">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080">
								<img src="https://picsum.photos/id/2/1920/1080">
								<img src="https://picsum.photos/id/3/1920/1080">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080">
								<img src="https://picsum.photos/id/2/1920/1080">
								<img src="https://picsum.photos/id/3/1920/1080">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080">
								<img src="https://picsum.photos/id/2/1920/1080">
								<img src="https://picsum.photos/id/3/1920/1080">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="photo__item">
							<div class="photo__image">
								<img src="https://picsum.photos/id/1/1920/1080">
								<img src="https://picsum.photos/id/2/1920/1080">
								<img src="https://picsum.photos/id/3/1920/1080">
							</div>
							<div class="photo__description">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
