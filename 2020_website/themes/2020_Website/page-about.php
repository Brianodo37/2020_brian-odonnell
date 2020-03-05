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
						<p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis neque volutpat, accumsan magna ac, commodo metus. Suspendisse potenti. Fusce posuere dolor sed dolor ultrices egestas. Proin non dui sit amet neque ultrices pellentesque vitae vel odio. Nullam sem nibh, consequat ut imperdiet in, blandit id magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas viverra aliquet diam, et aliquam leo condimentum nec.</p>
						<div class="bio__stats">
							<div data-aos="fade-up" data-aos-delay="100" class="stat">
								<i class="fas fa-globe-americas"></i>
								<h3>Toledo, OH</h3>
							</div>
							<div data-aos="fade-up" data-aos-delay="200" class="stat">
								<i class="fas fa-building"></i>
								<h3><a href="https://www.hansoninc.com" target="_blank" class="subtle underline">Hanson Inc.</a></h3>
							</div>
							<div data-aos="fade-up" data-aos-delay="300" class="stat">
								<i class="fas fa-list"></i>
								<h3>3+ years Experience</h3>
							</div>
							<div data-aos="fade-up" data-aos-delay="400" class="stat">
								<i class="fas fa-trophy"></i>
								<h3>1 Fantasy Football Championship</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="row job-history">
					<div class="job">
						<div class="job__container">
							<div class="job__details">
								<h4>Front-End Developer</h4>
								<p>August 2016 - March 2020</p>
								<p>Hanson Inc.</p>
							</div>
							<div class="job__marker"></div>
						</div>
						<div class="job__spacer"></div>
					</div>

					<div class="job">
						<div class="job__container">
							<div class="job__details">
								<h4>Front-End Developer</h4>
								<p>August 2016 - March 2020</p>
								<p>Hanson Inc.</p>
							</div>
						</div>
						<div class="job__spacer"></div>
						<div class="job__marker"></div>
					</div>
				<div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
