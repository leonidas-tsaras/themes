<?php get_header(); ?>

<?php
if(!is_page('about')) {
	//get_template_part("template-parts/banner");
}

?>
<?php 
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>


<?php
if(has_post_thumbnail()) {
	//the_post_thumbnail();
	$attr = array(
        'class' => "featured-image"
    );
	the_post_thumbnail('full', $attr);
}
?>

<?php
if(!is_page('location')) {
	echo "<h1>" . get_the_title() . "</h1>";
}
?>

			<?php the_content(); ?>
			<?php
		}
	}
?>

<?php get_footer(); ?>