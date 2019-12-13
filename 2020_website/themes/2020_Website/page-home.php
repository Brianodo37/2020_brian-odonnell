<?php
/**
 * Template Name: Page (Default)
 * Description: Page template
 *
 */

	get_header();
?>

<main data-router-wrapper>
	<div data-router-view="home" id="page" class="home">
		<div class="home__container">
			<div class="home__landing">
				<h1 data-aos="fade-up">Brian O'Donnell</h1>
				<h2 data-aos="fade-up" data-aos-delay="100">Front-End Web Developer</h2>
				<div data-aos="fade-up" data-aos-delay="200" class="button">
					<span class="button__background"></span>
					<span class="button__border open-form-js">Contact Me</span>
				</div>
				<div id="particles-js"></div>
			</div>
		</div>

		<div class="work-preview">
			<div class="container">
				<div class="row">
					<div data-aos="fade-up" class="work-preview__intro col-xs-12">
						<h2 class="tac">Most Recent Work</h2>
					</div>
					<div class="feature">
						<div class="feature__image">
							<img src="wp-content/themes/2020_Website/assets/images/devices/hanson-tablet.png" alt="Hanson Inc." data-aos="fade-up">
						</div>
						<div class="feature__snippet">
							<img src="wp-content/themes/2020_Website/assets/images/logos/hanson.png" alt="Hanson" class="feature__logo" data-aos="fade-up">
							<h2 data-aos="fade-up" data-aos-delay="100" class="feature__title">Website rebuild</h2>
							<p data-aos="fade-up" data-aos-delay="200" class="feature__copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum, urna id viverra tincidunt, nisi augue dignissim ligula, et rhoncus turpis lacus tempus neque. Nulla tristique mi ut euismod dapibus. Etiam nec consequat leo. Curabitur eget scelerisque leo. Integer at lacus non mi vulputate pretium id quis tellus. Curabitur faucibus velit nec lacinia dictum. Donec sed ligula nec nunc interdum mattis.</p>
							<div data-aos="fade-up" data-aos-delay="300" class="button button--blue">
								<span class="button__background"></span>
								<a href="#" alt="Hanson" class="button__border internal-link">More Info</a>
							</div>
						</div>
					</div>

					<div class="feature">
						<div class="feature__image">
							<img src="wp-content/themes/2020_Website/assets/images/devices/rti-tablet.png" alt="RTI" data-aos="fade-up">
						</div>
						<div class="feature__snippet">
							<img src="wp-content/themes/2020_Website/assets/images/logos/rti.png" alt="RTI" class="feature__logo" data-aos="fade-up">
							<h2 data-aos="fade-up" data-aos-delay="100"class="feature__title">Website rebuild and CMS integration</h2>
							<p data-aos="fade-up" data-aos-delay="200" class="feature__copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum, urna id viverra tincidunt, nisi augue dignissim ligula, et rhoncus turpis lacus tempus neque. Nulla tristique mi ut euismod dapibus. Etiam nec consequat leo. Curabitur eget scelerisque leo. Integer at lacus non mi vulputate pretium id quis tellus. Curabitur faucibus velit nec lacinia dictum. Donec sed ligula nec nunc interdum mattis.</p>
							<div data-aos="fade-up" data-aos-delay="300" class="button button--blue">
								<span class="button__background"></span>
								<a href="#" alt="Restorative Therapies" class="button__border internal-link">More Info</a>
							</div>
						</div>
					</div>

					<div class="feature">
						<div class="feature__image">
							<img src="wp-content/themes/2020_Website/assets/images/devices/ascend-tablet.png" alt="Ascend" data-aos="fade-up">
						</div>
						<div class="feature__snippet">
							<img src="wp-content/themes/2020_Website/assets/images/logos/alside.png" alt="Alside" class="feature__logo" data-aos="fade-up">
							<h2 data-aos="fade-up" data-aos-delay="100" class="feature__title">Website build</h2>
							<p data-aos="fade-up" data-aos-delay="200" class="feature__copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum, urna id viverra tincidunt, nisi augue dignissim ligula, et rhoncus turpis lacus tempus neque. Nulla tristique mi ut euismod dapibus. Etiam nec consequat leo. Curabitur eget scelerisque leo. Integer at lacus non mi vulputate pretium id quis tellus. Curabitur faucibus velit nec lacinia dictum. Donec sed ligula nec nunc interdum mattis.</p>
							<div data-aos="fade-up" data-aos-delay="300" class="button button--blue">
								<span class="button__background"></span>
								<a href="#" alt="Ascend" class="button__border internal-link">More Info</a>
							</div>
						</div>
					</div>

					<div data-aos="fade-up" class="work-preview__cta col-xs-12">
						<div class="button button--blue">
							<span class="button__background"></span>
							<span class="button__border open-form-js">See More</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
