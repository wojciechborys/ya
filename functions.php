<?php
/**
 * Store the theme's directory path and uri in constants
 */
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

require_once THEME_DIR_PATH . '/inc/functions/functions-after-setup-theme.php';
require_once THEME_DIR_PATH . '/inc/functions/functions-init.php';
require_once THEME_DIR_PATH . '/inc/functions/theme-functions.php';

/**
 * Add scripts & css
 */

if (!function_exists('yafrica_theme_scripts')) :

    function yafrica_theme_scripts() {

        // Load css
        wp_enqueue_style('_style-css', get_stylesheet_uri());
        wp_enqueue_style('_libs_st', THEME_DIR_URI . '/dist/css/libs.css', false, '1.0.0');
        wp_enqueue_style('_style_st', THEME_DIR_URI . '/dist/css/style.css', false, '1.0.0');
        wp_enqueue_style('_corretions', THEME_DIR_URI . '/app/css/corrections.css', false, '1.0.0');
        wp_enqueue_style('_corretions-feedback', THEME_DIR_URI . '/app/css/feedback_corrections.css', false, '1.0.0');


        // Load js
        wp_enqueue_script('_libs-js', THEME_DIR_URI . '/dist/js/libs.min.js', array(), null, true);
        wp_enqueue_script('_common-js', THEME_DIR_URI . '/dist/js/common.js', array(), null, true);

    }

    add_action('wp_enqueue_scripts', 'yafrica_theme_scripts');

endif;

/**
 * Add ACF Options Page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function paytium_custom_update_metadata_setting() {
    return TRUE;
}
add_filter('paytium_add_mollie_metadata', 'paytium_custom_update_metadata_setting');

/*function filter_site_upload_size_limit( $size ) {
    // 128 MB.
    $size = 128 * 1024 * 1024;
    return $size;
}
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );*/

function wpse_edit_post_show_excerpt( $user_login, $user ) {
    $unchecked = get_user_meta( $user->ID, 'metaboxhidden_post', true );
    $key = array_search( 'postexcerpt', $unchecked );
    if ( FALSE !== $key ) {
        array_splice( $unchecked, $key, 1 );
        update_user_meta( $user->ID, 'metaboxhidden_post', $unchecked );
    }
}
add_action( 'wp_login', 'wpse_edit_post_show_excerpt', 10, 2 );