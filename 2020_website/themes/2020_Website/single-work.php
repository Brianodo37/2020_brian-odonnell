<?php get_header(); ?>

<?php $title = get_the_title(); ?>

<main data-router-wrapper>
	<div data-router-view="<?php echo $title ?>" id="page" class="<?php echo $title ?>">
		<div class="showcase__container">
			<div class="container">
				<div class="row">
					<div class="showcase__intro" data-aos="fade-up">
						<h1><?php the_field('project_title'); ?></h1>
						<h3><?php the_field('client'); ?></h3>
					</div>

					<div class="showcase__hero">
						<?php
							$rows = get_field('images');
							if($rows) {
								foreach($rows as $row) {
									echo '<img src="' . $row['image'] . '">';
								}
							}
						?>

						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php
								$rows = get_field('images');
								if($rows) {
									foreach($rows as $row) { ?>
										<div class="carousel-item active">
											<img src="<?php echo $row['image']; ?>">
										</div>
									<?php }
								} ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="showcase__content">
						<div class="showcase__body">
							<?php the_field('project_description'); ?>
						</div>

						<div class="showcase__sidebar">
							<?php
								$rows = get_field('details');
								if($rows) {
									echo '<ul>';
									foreach($rows as $row) {
										echo '<li><span class="sidebar__label">' . $row['label'] . ':</span> <span class="sidebar__detail">' . $row['detail'] . '</span></li>';
									}
									echo '</ul>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script>$('.carousel').carousel()</script>

<?php get_footer(); ?>
