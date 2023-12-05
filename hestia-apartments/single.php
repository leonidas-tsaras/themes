<?php get_header(); ?>

<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>

<?php
if(has_post_thumbnail()) {
	the_post_thumbnail();
}
?>
			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			<?php
		}
	}
?>

<?php get_footer(); ?>