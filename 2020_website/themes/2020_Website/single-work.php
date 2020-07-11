<?php get_header(); ?>

<?php $title = get_the_title(); ?>

<main data-router-wrapper>
	<div data-router-view="<?php echo $title ?>" id="page" class="<?php echo $title ?>">
		<div class="showcase__container">
			<div class="container">
				<div class="row">
					<div class="showcase__breadcrumbs" data-aos="fade-up">
						<p>/  <a href="/work">Work</a>  /  <?php the_field('client'); ?></p>
					</div>

					<div class="showcase__intro" data-aos="fade-up">
						<h1><?php the_field('project_title'); ?></h1>
						<h3><?php the_field('client'); ?></h3>
					</div>

					<div class="showcase__hero <?php if (get_field('image_borders') == 'yes') { ?> showcase__hero--borders <?php } ?>" data-aos="fade-up">
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
					<div class="showcase__content" data-aos="fade-up">
						<div class="showcase__body">
							<?php the_field('project_description'); ?>
						</div>

						<div class="showcase__sidebar">
							<ul>
								<?php if (the_field('date')): ?>
									<li><span class="sidebar__label">Date:</span> <span class="sidebar__detail"><?php the_field('date'); ?></span></li>
								<?php endif; ?>
								<li><span class="sidebar__label">Client:</span> <span class="sidebar__detail"><?php the_field('client'); ?></span></li>
								<?php
									$rows = get_field('details');
									if($rows) {
										foreach($rows as $row) {
											echo '<li><span class="sidebar__label">' . $row['label'] . ':</span> <span class="sidebar__detail">' . $row['detail'] . '</span></li>';
										}
									}
								?>
								<?php if (get_field('link_url')) { ?>
									<li><span class="sidebar__label">Link:</span> <a href="<?php the_field('link_url'); ?>" target="_blank"><?php the_field('link_label'); ?></a></li>
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
