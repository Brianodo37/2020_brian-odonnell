<?php get_header(); ?>

<?php $title = get_the_title(); ?>

<main data-router-wrapper>
	<div data-router-view="<?php echo $title ?>" id="page" class="<?php echo $title ?>">
		<div class="showcase__container">
			<div class="container">
				<div class="row">
					<div class="showcase__breadcrumbs" data-aos="fade-up">
						<p>/  <a href="/photography">Photography</a>  /  <?php the_field('title'); ?></p>
					</div>

					<div class="showcase__intro" data-aos="fade-up">
						<h1><?php the_field('title'); ?></h1>
					</div>

					<div class="showcase__hero showcase__hero--photo" data-aos="fade-up">
						<?php
							$rows = get_field('images');
							$totalCount = count($rows);
							$count = 1;
						?>
						<?php if($rows) { ?>
							<div class="single-item">
								<?php foreach($rows as $row) {
									if ($row['vertical'] == 'yes') { ?>
										<div class="slick-slide--vertical">
											<div class="img-container">
												<div class="caption"><?php echo $count ?>/<?php echo $totalCount ?></div>
												<img src="<?php echo $row['image'] ?>">
											</div>
										</div>
									<?php } else { ?>
										<div class="slick-slide--horizontal">
											<div class="caption"><?php echo $count ?>/<?php echo $totalCount ?></div>
											<img src="<?php echo $row['image'] ?>">
										</div>
									<?php }
									$count++;
								} ?>
							</div>
						<?php } ?>
					</div>
				</div>

				<div class="row">
					<div class="showcase__content">
						<div class="showcase__body" data-aos="fade-up">
							<?php the_field('description'); ?>
						</div>

						<div class="showcase__sidebar" data-aos="fade-up">
							<ul>
								<?php if (get_field('date')): ?>
									<li><span class="sidebar__label">Last Touched:</span> <span class="sidebar__detail"><?php the_field('date'); ?><?php if (get_field('end_date')) {?> - <?php the_field('end_date'); } ?></span></li>
								<?php endif; ?>
								<?php if (get_field('location')): ?>
									<li><span class="sidebar__label">Location:</span> <span class="sidebar__detail"><?php the_field('location'); ?></span></li>
								<?php endif; ?>
								<?php if (get_field('time_of_day')): ?>
									<li><span class="sidebar__label">Time of Day:</span> <span class="sidebar__detail"><?php the_field('time_of_day'); ?></span></li>
								<?php endif; ?>
								<li><span class="sidebar__label">Camera:</span> <span class="sidebar__detail"><?php the_field('camera'); ?></span></li>
								<?php if (get_field('lenses')): ?>
									<li><span class="sidebar__label">Lenses:</span> <span class="sidebar__detail"><?php the_field('lenses'); ?></span></li>
								<?php endif; ?>
								<?php if (get_field('details')) {
									$rows = get_field('details');
									if($rows) {
										foreach($rows as $row) {
											if ($row['label']):
												echo '<li><span class="sidebar__label">' . $row['label'] . ':</span> <span class="sidebar__detail">' . $row['detail'] . '</span></li>';
											endif;
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
