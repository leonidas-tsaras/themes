<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href = "<?php echo site_url('/'); ?>">
    <title>New Hotel - <?php the_title(); ?></title>
<!-- https://barbosa-fluid-demo.squarespace.com/ -->

<?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">
        <header>
            <div class = "logo">
                <a href="">
<?php 
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
    if(has_custom_logo()) {
        echo '<img src="'. esc_url($logo[0] ) .'">';
    } else {
        $src = get_template_directory_uri().'/assets/images/logo.jpg';
        echo "<img src= $src alt = 'logo image'>";
    }
?>

                </a>
            </div>

            <nav>
<!--                 <a href="">Αρχική</a>
                <a href="gallery">Gallery</a>
                <a href="amenities">Amenities</a>
                <a href="about">Ποιοί είμαστε</a>
                <a href="contact">Επικοινωνία</a> -->

<?php
$args = array(
  'container' => false,
  'echo' => false,
  'items_wrap' => '%3$s',
  'depth' => 0,
  'theme_location' => 'header-menu'
);

echo strip_tags(wp_nav_menu( $args ), '<a>' );
?>

            </nav>

            <div id = "burger">☰</div>

        </header>
