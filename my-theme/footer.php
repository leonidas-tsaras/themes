<footer>
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
            <div>
                <h3>About</h3>
                <nav>
<!--                     <a href="#">Our Story</a>
                    <a href="#">Reviews</a>
                    <a href="#">Careers</a>
                    <a href="#">Financing</a>
                    <a href="#">Patents</a>
                    <a href="#">Our Blog</a> -->
<?php
$args = array(
  'container' => false,
  'echo' => false,
  'items_wrap' => '%3$s',
  'depth' => 0,
  'theme_location' => 'footer-menu'
);

echo strip_tags(wp_nav_menu( $args ), '<a>' );
?>
                </nav>
            </div>
            <div>
                <h3>Resources</h3>
                <nav>
                    <a href="#">Our Story</a>
                    <a href="#">Reviews</a>
                    <a href="#">Careers</a>
                    <a href="#">Financing</a>
                    <a href="#">Patents</a>
                    <a href="#">Our Blog</a>
                </nav>                
            </div>
            <div>
                <h3>Contact Customer Experience</h3>
                <nav>
                    <a href="#">Our Story</a>
                    <a href="#">Reviews</a>
                    <a href="#">Careers</a>
                    <a href="#">Financing</a>
                    <a href="#">Patents</a>
                    <a href="#">Our Blog</a>
                </nav>   
            </div>
        </footer>
    </div> <!-- end wrapper -->
</body>
</html>