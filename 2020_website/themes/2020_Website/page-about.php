<?php
/**
 * Template Name: About
 * Description: About page template
 *
 */

	get_header();
?>

<main data-router-wrapper>
	<div data-router-view="about" id="page" class="about">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div data-aos="fade-up" class="page-intro">
						<h1>About Me</h1>
					</div>
				</div>

				<div class="row bio">
					<div class="bio__summary">
						<div data-aos="fade-up">
							<img src="<?php the_field('bio_photo'); ?>" class="bio__image">
							<?php the_field('bio'); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="container--gray" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="stats">
							<?php $rows = get_field('fun_facts');
							if($rows) {
								foreach($rows as $row) { ?>
									<div class="stats__item">
										<i class="fas fa-<?php echo $row['fa_icon'] ?>"></i>
										<h4><?php echo $row['fact'] ?></h4>
									</div>
								<?php }
							} ?>
							<div class="stats__item stats__item--book">
								<i class="fas fa-book" aria-hidden="true"></i>
								<h4><i class="fa fa-spinner spinner" aria-hidden="true"></i><span id="bookNumber" class="bookNumber">10</span> books read in <?php echo date("Y"); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row job-history">
					<?php
						$args = array(
							'post_type' => array('jobs'),
							'post_status' => array('publish'),
							'nopaging' => true,
							'meta_key' => 'sort_order',
							'order' => 'DEC',
							'orderby' => 'meta_value'
						);
						$jobs = new WP_Query($args);
					?>

					<?php if ($jobs->have_posts()) {
						while ($jobs->have_posts()) {
							$jobs->the_post(); ?>
							<div class="job" data-aos="fade-up">
								<div class="job__container">
									<div class="job__details" data-toggle="modal" data-target="#<?php the_field('identifier'); ?>">
										<h6><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></h6>
										<h3><?php the_field('title'); ?></h3>
										<h5><?php the_field('company'); ?></h5>
										<div class="icon">
											<span class="icon__copy">More Info</span>
											<i class="fas fa-arrow-right"></i>
										</div>
									</div>
									<div class="job__marker"></div>
								</div>
								<div class="job__spacer"></div>
							</div>
						<?php }
					} ?>
					<?php wp_reset_query(); ?>
				</div>

				<?php if(get_field('resume')) { ?>
					<div class="row resume">
						<div data-aos="fade-up" class="button button--blue">
							<span class="button__background"></span>
							<a href="<?php the_field('resume'); ?>" target="_blank" class="button__border">Full Resume</a>
						</div>
					</div>
				<?php } ?>

				<div class="row skills">
					<?php $rows = get_field('skills');
					if($rows) {
						foreach($rows as $row) { ?>
							<div class="skill" data-aos="fade-up">
								<i class="fas fa-<?php echo $row['fa_icon'] ?>"></i>
								<h4><?php echo $row['title'] ?></h4>
								<p><?php echo $row['snippet'] ?></p>
							</div>
						<?php }
					} ?>
				</div>
			</div>
		</div>

		<?php
			$args = array(
				'post_type' => array('jobs'),
				'post_status' => array('publish'),
				'nopaging' => true,
				'meta_key' => 'sort_order',
				'order' => 'ASC',
				'orderby' => 'meta_value'
			);
			$jobs = new WP_Query($args);
		?>

		<?php if ($jobs->have_posts()) {
			while ($jobs->have_posts()) {
				$jobs->the_post(); ?>

				<div class="modal fade" id="<?php the_field('identifier'); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<div class="modal__header">
									<h3><?php the_field('title'); ?></h3>
									<h5><?php the_field('company'); ?></h5>
								</div>
								<div class="modal__close" data-dismiss="modal" aria-label="Close">
									<span class="circle"></span>
									<span class="line-1"></span>
									<span class="line-2"></span>
								</div>
							</div>
							<div class="modal-body">
								<p class="modal-body__label">Details:</p>
								<?php the_field('description'); ?>
								<p class="modal-body__label">Primary Tasks:</p>
								<ul>
									<?php if (have_rows('tasks')):
										while (have_rows('tasks')): the_row(); ?>
											<li><?php the_sub_field('task_item'); ?></li>
										<?php endwhile;
									endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<?php }
			} ?>
		<?php wp_reset_query(); ?>
	</div>
</main>

<?php get_footer(); ?>
