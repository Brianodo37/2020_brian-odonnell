<?php get_header(); ?>

<?php $title = get_the_title(); ?>

<main data-router-wrapper>
	<div data-router-view="<?php echo $title ?>" id="page" class="<?php echo $title ?>">
		<h1><?php the_field('client'); ?> Test</h1>
	</div>
</main>

<?php get_footer(); ?>
