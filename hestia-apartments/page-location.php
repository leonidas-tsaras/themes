<?php get_header(); ?>

<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();

            if(has_post_thumbnail()) {
                $attr = array(
                    'class' => "featured-image"
                );
                the_post_thumbnail('full', $attr);
            }
            
            the_content();
        }
    }
?>

<?php get_footer(); ?>