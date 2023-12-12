<?php get_header() ?>

<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>

			<h1><?php the_title(); ?></h1>
			<?php
				if(has_post_thumbnail()) {
					?>
					<div class = "featured-image">
					<?php the_post_thumbnail(); ?>
					</div>
				<?php
				}
			?>

            <h2><?php the_author(); ?></h2>
			<?php the_content(); ?>
			<?php
		}
	}
?>

<?php get_footer() ?>