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
    <div id="wrapper">
        <header>
            <div id='logo'>
<!--                 <a href=""><img src="wp-content/themes/hestia-apartments/assets/images/hestia-logo.svg" alt=""></a> -->

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
<!--             <nav id = "main-menu">
                <a href="">Home</a>
                <a href="apartments">Apartments</a>
                <a href="about">About</a>
                <a href="location">Location</a>
                <a href="faq">FAQ</a>
                <a href="contact">Contact</a>
            </nav> -->

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
        <div id = "athens-temp">Temperature in Athens: <span></span> <sup>0</sup>C</div>



        <?php
            //$args = array('theme_location' => 'header-menu');
            //wp_nav_menu($args);
        ?>


<?php
/* $defaults = array(
'theme_location'  => 'header-menu',
'container'       => 'nav', 
'container_class' => 'menu', 
'echo'            => false,
'fallback_cb'     => false,
'items_wrap'      => '%3$s',
'depth'           => 0
);
echo strip_tags(wp_nav_menu( $defaults ), '<nav><a>'); */
?>

<?php

/*     $defaults = array(
		'menu'                 => '',
		'container'            => false,
		'container_class'      => '',
		'container_id'         => '',
		'container_aria_label' => '',
		'menu_class'           => '',
		'menu_id'              => '',
		'echo'                 => true,
		'fallback_cb'          => 'wp_page_menu',
		'before'               => '',
		'after'                => '',
		'link_before'          => '',
		'link_after'           => '',
		'items_wrap'           => '%3$s',
		'item_spacing'         => '',
		'depth'                => 0,
		'walker'               => '',
		'theme_location'       => 'header-menu',
	);
    wp_nav_menu($defaults); */

 //echo strip_tags(wp_nav_menu( $args ), '<ul><li><a>' );
?>

