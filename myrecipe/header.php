<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/recipe/">
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <section>
            <div id = "logo">
                <a href="">
                    <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                    if(has_custom_logo()) {
                        echo '<img src="'. esc_url( $logo[0] ) .'">';
                    } else {
                        echo '<h1>'. get_bloginfo('name') .'</h1>';
                    }
                    ?>   
                </a>
            </div>
            <nav>
<?php
$args = array(
    'container' => false,
    'echo' => false,
    'items_wrap' => '%3$s',
    'depth' => 0,
);

echo strip_tags(wp_nav_menu( $args ), '<a>' );
?>
            </nav>
            <div id="burger-icon">☰</div>
        </section>
    </header>
    <div id="wrapper">