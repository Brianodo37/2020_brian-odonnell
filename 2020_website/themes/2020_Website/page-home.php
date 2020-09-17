<?php
/**
 * Template Name: Page (Default)
 * Description: Page template
 *
 */

	get_header();
?>

<main data-router-wrapper>
	<div data-router-view="home" id="page" class="home">
		<div class="home__container">
			<div class="home__landing" style="background-image: url('<?php the_field("hero_image"); ?>');">

				<h1 data-aos="fade-up">Brian O'Donnell</h1>
				<h2 data-aos="fade-up" data-aos-delay="100">Front-End Web Developer</h2>
				<div data-aos="fade-up" data-aos-delay="200" class="button">
					<span class="button__background"></span>
					<span class="button__border open-form-js">Contact Me</span>
				</div>
			</div>
		</div>

		<div class="work-preview">
			<div class="container">
				<div class="row">
					<div data-aos="fade-up" class="work-preview__intro col-xs-12">
						<h2 class="tac">Most Recent Work</h2>
					</div>

						<?php $featured_posts = get_field('work'); ?>
						<?php if ($featured_posts): ?>
							<?php foreach($featured_posts as $post): ?>
							<?php setup_postdata($post); ?>
								<?php if (get_field('ipad_screen') && get_field('homepage_snippet')) { ?>
									<div class="feature">
										<div class="feature__image" data-aos="fade-up">
											<div class="feature__tablet">
												<img src="wp-content/themes/2020_Website/assets/images/devices/Tablet.png" alt="" class="feature__tablet-frame">
												<img src="<?php the_field('ipad_screen'); ?>" alt="" class="feature__tablet-screen">
											</div>
										</div>
										<div class="feature__snippet">
											<h6 data-aos="fade-up"><?php if (get_field('shortened_client')) { the_field('shortened_client'); } else { the_field('client'); } ?></h3>
											<h3 data-aos="fade-up" data-aos-delay="100" class="feature__title"><?php the_field('project_title'); ?></h3>
											<p data-aos="fade-up" data-aos-delay="200" class="feature__copy"><?php the_field('homepage_snippet'); ?></p>
											<div data-aos="fade-up" data-aos-delay="300" class="button button--blue">
												<span class="button__background"></span>
												<a href="<?php echo get_permalink(); ?>" alt="<?php the_field('client'); ?>" class="button__border internal-link">More Info</a>
											</div>
										</div>
									</div>
								<?php } ?>
							<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>

					<div data-aos="fade-up" class="work-preview__cta col-xs-12">
						<div class="button button--blue">
							<span class="button__background"></span>
							<span class="button__border open-form-js">See More</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
