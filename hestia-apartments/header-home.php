<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo home_url( '/' ); ?>">

    <?php wp_head(); ?>
</head>
<body>
    <div id = "front-page">
    <header>
            <div id='logo'>
                <a href="">
                <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                    if(has_custom_logo()) {
                        echo '<img src = "' . esc_url($logo[0]) . '">';
                    } else {
                    $src = get_template_directory_uri().'/assets/images/hestia-logo.svg';
                    echo "<img src= $src alt = 'logo image'>";
                    }
                ?>
                </a>
            </div>

            <?php
                $args = array(
                    'theme_location'  => 'header-menu',
                    'container' => false,
                    'echo' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 0,
                );
                echo '<nav id = "main-menu">';
                echo strip_tags(wp_nav_menu( $args ), '<a>' );
                echo '</nav>';
            ?>

            <!-- <span id = "burger-icon">☰</span> -->
            <nav class="icon-container">
                <div></div>
                <div></div>
                <div></div>
            </nav>

            <nav id = "burger-menu" class = "hidden">
            <?php
                $args = array(
                    'theme_location'  => 'header-menu',
                    'container' => false,
                    'echo' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 0,
                );
                echo '<nav id = "main-menu">';
                echo strip_tags(wp_nav_menu( $args ), '<a>' );
                echo '</nav>';
            ?>
            </nav>
        </header>

        <h1>Luxury apartments <br> for rent or sale <br>in Athens Greece</h1>
    </div>
    <div id="wrapper">