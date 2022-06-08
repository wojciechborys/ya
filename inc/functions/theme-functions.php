<?php
/**
 * Add class item menu
 */
if (!function_exists('yafrica_menu_items_class_li_a')) :

    function yafrica_menu_items_class_li_a($atts, $item, $args)
    {
        if (array_key_exists(7, $item->classes)) {
            $class = $item->classes[7];
        }
        else{
            $class=false;
        }
        if (strpos($class, 'current_page_item') !== false) {
            $atts['class'] = 'is-current';
        }
        return $atts;
    }

    add_filter('nav_menu_link_attributes', 'yafrica_menu_items_class_li_a', 10, 3);

endif;

function loadmore_ajax_handler()
{
    if (isset($_POST['query'])) {
        $args['category_name'] = $_POST['query']['category_name'];
    }
    $args['post_type'] = 'post';
    $args['numberposts'] = get_option('posts_per_page');
    $args['paged'] = $_POST['current_page'];
    query_posts($args);

    if (have_posts()) :
        while (have_posts()): the_post();
            get_template_part('tpl-parts/post/content', 'card');
        endwhile;
    endif;
    die;
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');

function custom_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);


add_filter('excerpt_more', function ($more) {
    return '...';
});

function add_class_names($classes)
{
    if (is_page('donation'))
        $classes[] = 'bg-grey';

    return $classes;
}

add_filter('body_class', 'add_class_names');