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
						<h2>About Me</h2>
					</div>
				</div>

				<div class="row bio">
					<div class="bio__photo">
						<span data-aos="fade-up" data-aos-delay="50" class="bio__border" ></span>
						<img src="/wp-content/themes/2020_Website/assets/images/bio.jpg" data-aos="fade-up">
					</div>
					<div class="bio__summary">
						<div data-aos="fade-up"><?php the_field('bio'); ?></div>
						<div class="bio__stats">
							<?php $rows = get_field('fun_facts');
							if($rows) {
								foreach($rows as $row) { ?>
									<div data-aos="fade-up" data-aos-delay="100" class="stat">
										<i class="fas fa-<?php echo $row['fa_icon'] ?>"></i>
										<h4><?php echo $row['fact'] ?></h4>
									</div>
								<?php }
							} ?>
						</div>
					</div>
				</div>

				<div class="row job-history">
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
							<div class="job" data-toggle="modal" data-target="#exampleModalLong">
								<div class="job__container">
									<div class="job__details" data-aos="fade-up">
										<h4><?php the_field('title'); ?></h4>
										<p><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></p>
										<p><?php the_field('company'); ?></p>
									</div>
									<div class="job__marker"></div>
								</div>
								<div class="job__spacer"></div>
							</div>
						<?php }
					} ?>
					<?php wp_reset_query(); ?>
				</div>

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

				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle"><?php the_field('title'); ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php the_field('description'); ?>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
