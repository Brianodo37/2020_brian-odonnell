<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable">Skip to main content</a>

<div id="wrapper">

	<header>
		<nav id="header" class="navbar navbar-light navbar-expand-md <?php if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">

				<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">					 
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-fpo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navbar" class="collapse navbar-collapse">

					<div class="main-nav-wrapper">
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'main-menu',
								'container'       => '',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker()
							) );
						?>					
						 
						<form class="form-inline search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="text" id="s" name="s" class="form-control mr-sm-2" placeholder="Search...">
							<button type="submit" id="searchsubmit" name="submit" class="btn btn-outline-secondary my-2 my-sm-0">Search</button>
						</form>
					</div>

					<div class="top-nav-wrapper">
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'top-menu',
								'container'       => '',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker()
							) );
						?>
					</div>
					 
				</div>
			</div>
		</nav>
	</header>
	
	<main id="main" class="container">
		
		<?php
			// Adjust the layout for pages showing the blog sidebar
			// If Blog Landing, Single or Archive (Category, Tag, Author or a Date based page)
			// Note is_home will only be true on the page which you set as the "Posts page"
			if ( is_home() || is_single() || is_archive() ) : ?>
				<div class="row">
					<div class="col-sm-12 col-md-8">
			<?php endif; ?>
