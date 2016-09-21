<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
?>

<?php
wp_enqueue_style('bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), 1.1, true);
wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), 1.1, true);
wp_enqueue_style('style', get_stylesheet_uri());

?>

<?php 
// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
?>



