<?php
	// If Blog landing, Single or Archive (Category, Tag, Author or a Date based page)
	if ( is_home() || is_single() || is_archive() ) : ?>
		</div><!-- /.col -->

			<?php get_sidebar(); ?>

		</div><!-- /.row -->

	<?php endif; ?>

	</main>

	<footer id="footer">
		<div class="container">
			<div class="row"> 
				
				<?php
				
				/*  
					See function register_nav_menus() in functions.php.
					Menu name taken from functions.php... register_nav_menu( 'footer-menu', 'Footer Menu' );
					NOTE: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php... Otherwise, the theme will not know which menu to use
				*/
				if ( has_nav_menu( 'footer-menu' ) ) :
					wp_nav_menu( array(
						'theme_location'  => 'footer-menu',
						'container'       => 'nav',
						'container_class' => 'col-12',
						'fallback_cb'     => '',
						'items_wrap'      => '<ul class="menu nav">%3$s</ul>'
					) );
				endif;
				 
				/*  
					Use the Footer Widget Area in WP to add items like copyright, column menu structure, social items, etc.
				*/
				if ( is_active_sidebar( 'footer_widget_area' ) ) : ?>
					<div class="col-12">
						<?php dynamic_sidebar( 'footer_widget_area' ); ?> 
					</div>
				<?php endif; ?>

			</div>
		</div>
	</footer>
	
</div><!-- /#wrapper -->

<?php wp_footer(); ?>

</body>
</html>