<?php get_header() ?>

<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			if(is_page("recipes")) {
				//get_template_part("template-parts/banner");
			}
			?>
			<h1><?php //the_title(); ?></h1>
			<?php the_content(); ?>
			<?php
		}
	}
?>

<?php get_footer() ?>