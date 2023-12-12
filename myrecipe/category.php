<?php get_header() ?>

<h3>Περιγραφή: <?php echo category_description() ?></h3>
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			<h1><?php the_title(); ?></h1>
            <?php the_author() ?>
			<?php the_content(); ?>

			<hr>

			<?php
		}
	}
?>

<?php get_footer() ?>