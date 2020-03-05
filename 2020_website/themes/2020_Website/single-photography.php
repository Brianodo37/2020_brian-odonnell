<?php get_header(); ?>

<?php $title = get_the_title(); ?>

<main data-router-wrapper>
	<div data-router-view="<?php echo $title ?>" id="page" class="<?php echo $title ?>">
		<div class="showcase__container">
			<div class="container">
				<div class="row">
					<div class="showcase__intro" data-aos="fade-up">
						<h1><?php the_field('title'); ?></h1>
					</div>

					<div class="showcase__hero">
						<?php
							$rows = get_field('images');
							if($rows) {
								echo '<div class="single-item">';
								foreach($rows as $row) {
									echo '<img src="' . $row['image'] . '">';
								}
								echo '</div>';
							}
						?>
					</div>
				</div>

				<div class="row">
					<div class="showcase__content">
						<div class="showcase__body">
							<?php the_field('description'); ?>
						</div>

						<div class="showcase__sidebar">
							<ul>
								<li><span class="sidebar__label">Date:</span> <span class="sidebar__detail"><?php the_field('date'); ?></span></li>
								<li><span class="sidebar__label">Time of Day:</span> <span class="sidebar__detail"><?php the_field('time_of_day'); ?></span></li>
								<li><span class="sidebar__label">Location:</span> <span class="sidebar__detail"><?php the_field('location'); ?></span></li>
								<li><span class="sidebar__label">Camera:</span> <span class="sidebar__detail"><?php the_field('camera'); ?></span></li>
								<li><span class="sidebar__label">Lenses:</span> <span class="sidebar__detail"><?php the_field('lenses'); ?></span></li>
								<?php if (get_field('details')) {
									$rows = get_field('details');
									if($rows) {
										foreach($rows as $row) {
											echo '<li><span class="sidebar__label">' . $row['label'] . ':</span> <span class="sidebar__detail">' . $row['detail'] . '</span></li>';
										}
									}
								} ?>
								<?php if (get_field('flickr_link')) { ?>
									<li><span class="sidebar__label">Full Gallery:</span> <a href="<?php the_field('flickr_link'); ?>" target="_blank">Flickr</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<?php get_footer(); ?>
