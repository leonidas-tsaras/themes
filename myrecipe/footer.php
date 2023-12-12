</div> <!-- end wrapper -->

<footer>
    <div id = "footer-wrapper">
        <div>
            <a href="index.html">
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
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div>
            <h2>Usefull links</h2>
            <nav>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact Us</a>
                <a href="#">WhatsApp: +30 1234567890</a>
                <a href="#">Email: info@example.com</a>
                <a href="#">Tel: +30 1234567890</a>
            </nav>
        </div>
        <div>
            <h2>Follow New Listings</h2>
            <p>Sign up with your email address to receive news and updates.</p>
            <form onsubmit="sendEmail(event)">
                <input type="email" placeholder="Email address" value = "">
                <input type="submit" value="Sign up">
            </form>
            <p id = "message"></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>