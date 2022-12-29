<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Event_Listing
 */
global $event_listing_theme_options;
$copyright = wp_kses_post($event_listing_theme_options['event-listing-water-sports-footer-copyright']);
$social = absint($event_listing_theme_options['event-listing-water-sports-footer-social']);
$column_no = absint($event_listing_theme_options['event-listing-water-sports-footer-row']);
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" <?php event_listing_do_microdata('footer'); ?>>

    <div class="wpem_water-sports_theme-footer">
        <div class="container">
            <div class="row align-middle" style="padding-bottom:50px; border-bottom:1px solid #CCCCCC;">
                <div class="column column-6">
                    <div class="wpem_water-sports_theme-footer-site-info">
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Water Sports" /></a>
                    </div>
                </div>
                <div class="column column-6">
                    <div class="wpem_water-sports_theme-footer-site-links">
                        <a href="#">Home </a>
                        <a href="#">About us</a>
                        <a href="#">Services</a>
                        <a href="#">Events</a>
                        <a href="#">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="row footer-address">
                <div class="column column-4">
                    <div class="wpem_water-sports_theme-footer-site-links">
                        <h4>Address</h4>
                        <p>785 15h Street, Office 478 Trieste, De 81566</p>
                    </div>
                </div>
                <div class="column column-8 flex-center">
                  <div class="footer-icon-box flex-middle">
                    <div class="icon-box-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone-icon.png" alt="call us" > 
                    </div>
                    <div class="icon-box-data">
                        <h2>Call Us</h2>
                        <p>+1 840 841 25 69</p>
                    </div>
                  </div>
                  <div class="footer-icon-box flex-middle">
                    <div class="icon-box-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/at-icon.png" alt="mail us" >
                    </div>
                    <div class="icon-box-data">
                        <h2>Email</h2>
                        <p>Info@watersports.com</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <?php
            if (has_nav_menu('social-menu') && $social == 1):
                ?>
                <div class="footer-social-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'social-menu',
                        'menu_id' => 'menu-social-1',
                        'container' => 'ul',
                        'menu_class' => 'event-social-menu'
                    ));
                    ?>
                </div> <!-- .column -->
            <?php
            endif;
            ?>
            <div class="copyright">
                <p>© 2022 Water Sports – WP Event Manager All Rights Reserved.</p>
            </div>
            <div class="footer-socials">
                <ul class="flex-middle">
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<a id="goTop" class="go-to-top" href="#" title="<?php esc_attr_e('Go to Top', 'event-listing'); ?>">
    <i class="fa fa-angle-double-up"></i>
</a>

<?php wp_footer(); ?>

</body>
</html>
