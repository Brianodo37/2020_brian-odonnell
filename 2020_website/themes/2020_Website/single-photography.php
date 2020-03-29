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

					<div class="showcase__hero" data-aos="fade-up">
						<?php
							$rows = get_field('images');
							if($rows) {
								echo '<div class="single-item">';
								foreach($rows as $row) {
									if( $row['in_slider']) {
										echo '<img src="' . $row['image'] . '">';
									}
								}
								echo '</div>';
							}
						?>
					</div>
				</div>

				<div class="row">
					<div class="showcase__content">
						<div class="showcase__body" data-aos="fade-up">
							<?php the_field('description'); ?>
						</div>

						<div class="showcase__sidebar" data-aos="fade-up">
							<ul>
								<li><span class="sidebar__label">Date:</span> <span class="sidebar__detail"><?php the_field('date'); ?></span></li>
								<li><span class="sidebar__label">Location:</span> <span class="sidebar__detail"><?php the_field('location'); ?></span></li>
								<?php if (get_field('time_of_day')) { ?>
									<li><span class="sidebar__label">Time of Day:</span> <span class="sidebar__detail"><?php the_field('time_of_day'); ?></span></li>
								<?php } ?>
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

				<div class="row">
					<div class="showcase__gallery" data-toggle=”modal” data-target=”#exampleMo>
						<?php
							$rows = get_field('images');
							if($rows) {
								$count = 0;
								foreach($rows as $row) {
									$image = $row['image'];
									$url = str_replace('.jpg', '-500x333.jpg', $image);

									echo '<div class="gallery__image">';
										echo '<img src="' . $url . '" data-aos="fade-up" data-target=”#carouselExample” data-slide-to="' . $count . '">';
									echo '</div>';

									$count++;
								}
							}
						?>
					</div>
				</div>

				<?php
					$rows = get_field('images');
					if($rows) {
						$count = 0; ?>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div id="carouselExample" class="carousel slide" data-ride="carousel">
          									<div class="carousel-inner">
												<?php foreach($rows as $row) { ?>
													<div class="carousel-item">
														<img src="<?php echo $row['image']; ?>" class="d-block">
														<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button> -->
													</div>
												<?php $count++;
												} ?>
											</div>
											<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
            									<span class="sr-only">Previous</span>
          									</a>
          									<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
          									</a>
        								</div>
      								</div>
      								<div class="modal-footer">
        								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      								</div>
    							</div>
  							</div>
						</div>
					<?php }
				?>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<?php get_footer(); ?>
