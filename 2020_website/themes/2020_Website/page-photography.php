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
							'meta_key' => 'date',
							'orderby' => 'meta_value'
						);
						$photography = new WP_Query($args);
					?>

					<?php if ($photography->have_posts()) { ?>
						<div class="photo__gallery">
							<?php while ($photography->have_posts()) {
								$photography->the_post(); ?>

								<div class="photo__item" data-aos="fade-up">
									<a href="<?php echo get_permalink(); ?>" alt="" class="internal-link">
									<div class="photo__image">
										<?php
											$rows = get_field('images');
											$count = 1;
											if($rows) {
												foreach($rows as $row) {
													if ($count == 1) {
														$image1 = $row['image'];
														$count++;
													} else if ($count == 2) {
														$image2 = $row['image'];
														$count++;
													} else if($count == 3) {
														$image3 = $row['image'];
														break;
													}
												}
											}
										?>
										<?php
											// $image1 = get_field('thumbnail_top');
											$top = str_replace('.jpg', '-500x333.jpg', $image1);

											// $image2 = get_field('thumbnail_middle');
											$middle = str_replace('.jpg', '-500x333.jpg', $image2);

											// $image3 = get_field('thumbnail_bottom');
											$bottom = str_replace('.jpg', '-500x333.jpg', $image3);
										?>
										<img src="<?php echo $bottom ?>" class="photo__bottom photo__bottom--<?php echo (rand(1, 5)); ?>">
										<img src="<?php echo $middle ?>" class="photo__middle photo__middle--<?php echo (rand(1, 5)); ?>">
										<img src="<?php echo $top ?>" class="photo__top">
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
