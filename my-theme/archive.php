<?php get_header(); ?>

<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>

			<h1><?php the_title(); ?></h1>
            <?php the_author(); ?>
            <hr>
			<?php the_content(); ?>

			<?php
		}
	}
?>

<?php get_footer(); ?>