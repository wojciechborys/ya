<?php
add_action( 'init', 'yafrica_init' );
function yafrica_init(){
    register_post_type('testimonial', array(
        'label'  => __('Testimonies','yafrica'),
        'labels' => array(
            'name'               => __('Testimonies','yafrica'),
            'singular_name'      => __('Testimonial','yafrica'),
            'add_new'            => __('Add testimonial','yafrica'),
            'add_new_item'       => __('Add testimonial','yafrica'),
            'edit_item'          => __('Edit testimonial','yafrica'),
            'new_item'           => __('New testimonial','yafrica'),
            'view_item'          => __('View testimonial','yafrica'),
            'search_items'       => __('Search testimonies','yafrica'),
            'not_found'          => __('Not found','yafrica'),
            'not_found_in_trash' => __('Not found','yafrica'),
            'parent_item_colon'  => '',
            'menu_name'          => __('Testimonies','yafrica'),
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => null,
        'rest_base'           => null,
        'menu_position'       => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail','post-formats'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));

    register_post_type('project', array(
        'label'  => __('Projects','yafrica'),
        'labels' => array(
            'name'               => __('Projects','yafrica'),
            'singular_name'      => __('Project','yafrica'),
            'add_new'            => __('Add project','yafrica'),
            'add_new_item'       => __('Add project','yafrica'),
            'edit_item'          => __('Edit project','yafrica'),
            'new_item'           => __('New project','yafrica'),
            'view_item'          => __('View project','yafrica'),
            'search_items'       => __('Search project','yafrica'),
            'not_found'          => __('Not found','yafrica'),
            'not_found_in_trash' => __('Not found','yafrica'),
            'parent_item_colon'  => '',
            'menu_name'          => __('Projects','yafrica'),
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => null,
        'rest_base'           => null,
        'menu_position'       => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','excerpt', 'thumbnail','post-formats'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));

    register_post_type('act', array(
        'label'  => __('Acts','yafrica'),
        'labels' => array(
            'name'               => __('Acts','yafrica'),
            'singular_name'      => __('Act','yafrica'),
            'add_new'            => __('Add act','yafrica'),
            'add_new_item'       => __('Add act','yafrica'),
            'edit_item'          => __('Edit act','yafrica'),
            'new_item'           => __('New act','yafrica'),
            'view_item'          => __('View act','yafrica'),
            'search_items'       => __('Search act','yafrica'),
            'not_found'          => __('Not found','yafrica'),
            'not_found_in_trash' => __('Not found','yafrica'),
            'parent_item_colon'  => '',
            'menu_name'          => __('Acts','yafrica'),
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => null,
        'rest_base'           => null,
        'menu_position'       => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail','excerpt','post-formats'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));
}
?>