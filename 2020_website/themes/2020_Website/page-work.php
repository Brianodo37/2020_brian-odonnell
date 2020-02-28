<?php
/**
 * Template Name: Work
 * Description: Work page template
 *
 */

	get_header();
?>

<main data-router-wrapper>
	<div data-router-view="work" id="page" class="work">
		<div class="work__container">
			<div class="container">
				<div class="row">
					<div class="work__intro" data-aos="fade-up">
						<h1>Work</h1>
					</div>

					<div class="work__gallery">

						<?php
							$args = array(
								'post_type' => array('work'),
								'post_status' => array('publish'),
								'nopaging' => true,
								'order' => 'DESC',
								'orderby' => 'date'
							);
							$work = new WP_Query($args);
						?>

						<?php if ($work->have_posts()) {
							while ($work->have_posts()) {
								$work->the_post(); ?>

								<div class="work__item">
									<a href="<?php echo get_permalink(); ?>" alt="<?php the_field('client'); ?>" class="internal-link">
										<div class="work__image">
											<img src="<?php the_field('thumbnail'); ?>">
										</div>
										<div class="work__description">
											<img src="<?php the_field('client_logo'); ?>" alt="<?php the_field('client'); ?>" class="feature__logo">
											<h3 class="feature__title"><?php the_field('project_title'); ?></h3>
										</div>
									</a>
								</div>

							<?php }
						} ?>
						<?php wp_reset_query(); ?>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
								<h3 class="feature__title">Website rebuild</h3>
							</div>
						</div>

						<div class="work__item">
							<div class="work__image">
								<img src="https://picsum.photos/1920/1080">
							</div>
							<div class="work__description">
								<img src="/wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo">
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
