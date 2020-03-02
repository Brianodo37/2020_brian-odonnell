<?php get_header(); ?>

<?php $title = get_the_title(); ?>

<main data-router-wrapper>
	<div data-router-view="<?php echo $title ?>" id="page" class="<?php echo $title ?>">
		<div class="showcase__container">
			<div class="container">
				<div class="row">
					<div class="showcase__intro" data-aos="fade-up">
						<h1>Company Website Redesign</h1>
						<h3>Hanson Inc.</h3>
					</div>

					<div class="showcase__hero">
						<img src="https://picsum.photos/1920/1080">
					</div>
				</div>

				<div class="row">
					<div class="showcase__content">
						<div class="showcase__body">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet nec ullamcorper sit amet risus nullam eget felis eget. Eu non diam phasellus vestibulum lorem. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Eu volutpat odio facilisis mauris. Sit amet dictum sit amet justo. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Aliquet bibendum enim facilisis gravida neque. Pretium quam vulputate dignissim suspendisse in. Feugiat in ante metus dictum at tempor commodo. Adipiscing elit ut aliquam purus. Orci dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus et netus et. Viverra orci sagittis eu volutpat odio facilisis. Consectetur libero id faucibus nisl tincidunt eget nullam non nisi. Velit dignissim sodales ut eu sem integer. Risus in hendrerit gravida rutrum quisque. Orci a scelerisque purus semper eget duis at tellus. Sit amet risus nullam eget.</p>
							<p>Eu scelerisque felis imperdiet proin fermentum. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Eu facilisis sed odio morbi quis commodo odio. In fermentum et sollicitudin ac orci phasellus egestas. Feugiat in ante metus dictum at tempor commodo ullamcorper a. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Aliquam etiam erat velit scelerisque in dictum. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis. Posuere morbi leo urna molestie at elementum eu facilisis. At ultrices mi tempus imperdiet nulla malesuada pellentesque. Vitae tortor condimentum lacinia quis. A diam maecenas sed enim ut. Imperdiet dui accumsan sit amet nulla facilisi morbi. Libero volutpat sed cras ornare arcu dui vivamus arcu. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Faucibus nisl tincidunt eget nullam non nisi est.</p>
						</div>

						<div class="showcase__sidebar">
							<ul>
								<li>test</li>
								<li>test</li>
								<li>test</li>
								<li>test</li>
								<li>test</li>
								<li>test</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
