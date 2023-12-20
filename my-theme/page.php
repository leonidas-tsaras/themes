<?php get_header(); ?>

<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>

			<?php
				if(is_page("amenities"))
					the_title("<h1>", "</h1>");
			?>
<?php
if(has_post_thumbnail()) {
	the_post_thumbnail();
}
?>
			<?php the_content(); ?>

			<?php
		}
	}
?>

<?php get_footer(); ?>