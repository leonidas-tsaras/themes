<?php get_header(); ?>
<h1>index.php</h1>
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			<?php the_title(); ?>
			<?php the_content(); ?>
			<?php
		}
	}
?>

<?php get_footer(); ?>