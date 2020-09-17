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

					<div class="showcase__hero showcase__hero--work" data-aos="fade-up">
						<?php
							$rows = get_field('images');
						?>
						<?php if($rows) { ?>
							<div class="single-item">
								<?php foreach($rows as $row) {
									if ($row['vertical'] == 'yes') { ?>
										<div class="slick-slide--vertical">
											<div class="img-container">
												<?php if ($row['caption']) { ?>
													<div class="caption"><?php echo $row['caption'] ?></div>
												<?php } ?>
												<img src="<?php echo $row['image'] ?>">
											</div>
										</div>
									<?php } else { ?>
										<div class="slick-slide--horizontal">
											<?php if ($row['caption']) { ?>
												<div class="caption"><?php echo $row['caption'] ?></div>
											<?php } ?>
											<img src="<?php echo $row['image'] ?>">
										</div>
									<?php }
								} ?>
							</div>
						<?php } ?>
					</div>
				</div>

				<div class="row">
					<div class="showcase__content" data-aos="fade-up">
						<div class="showcase__body">
							<?php the_field('project_description'); ?>
						</div>

						<div class="showcase__sidebar">
							<ul>
								<?php if (get_field('date')): ?>
									<li><span class="sidebar__label">Date:</span> <span class="sidebar__detail"><?php the_field('date'); ?></span></li>
								<?php endif; ?>
								<li><span class="sidebar__label">Client:</span> <span class="sidebar__detail"><?php the_field('client'); ?></span></li>
								<?php if( get_field('status_available') == 'yes' ) { ?>
									<li><span class="sidebar__label">Status:</span> <span class="sidebar__detail"><?php the_field('status'); ?></span></li>
								<?php } ?>
								<?php if (get_field('cms')): ?>
									<li><span class="sidebar__label">CMS:</span> <span class="sidebar__detail"><?php the_field('cms'); ?></span></li>
								<?php endif; ?>
								<?php if (get_field('plugins')): ?>
									<li><span class="sidebar__label">Plugins:</span> <span class="sidebar__detail"><?php the_field('plugins'); ?></span></li>
								<?php endif; ?>
								<?php if (get_field('role')): ?>
									<li><span class="sidebar__label">My Role:</span> <span class="sidebar__detail"><?php the_field('role'); ?></span></li>
								<?php endif; ?>
								<?php
									$rows = get_field('details');
									if($rows) {
										foreach($rows as $row) {
											if ($row['label']):
												echo '<li><span class="sidebar__label">' . $row['label'] . ':</span> <span class="sidebar__detail">' . $row['detail'] . '</span></li>';
											endif;
										}
									}
								?>
								<?php if (get_field('link')) { ?>
									<li><span class="sidebar__label">Link:</span> <a href="<?php the_field('link'); ?>" target="_blank"><?php the_field('link'); ?></a></li>
								<?php } ?>
							</ul>
							<?php if (get_field('link')): ?>
								<p class="disclaimer">Disclaimer: State of live site has posibly changed since I last worked on it or when we handed it off to the client.</p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<?php get_footer(); ?>
