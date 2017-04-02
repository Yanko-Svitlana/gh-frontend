<?php
/**
 * BusinessPlus Theme Customizer
 *
 * @package BusinessPlus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/**
* Icons for Type:
* https://developer.wordpress.org/resource/dashicons/
*/

function create_post_types() {
    register_post_type( 'partners',
        array(
            'labels' => array(
                'name' => __('Partners','businessplus'),
                'singular_name' => __('partner','businessplus'),
                'add_new' => __('Add New','businessplus'),
                'add_new_item' => __('Add New Partner','businessplus'),
                'edit' => __('Edit','businessplus'),
                'edit_item' => __('Edit partner','businessplus'),
                'new_item' => __('New partner','businessplus'),
                'view' => __('View','businessplus'),
                'view_item' => __('View partner','businessplus'),
                'search_items' => __('Search','businessplus'),
                'not_found' => __('No found','businessplus'),
                'not_found_in_trash' => __('No in Trash','businessplus'),
                'parent' => __('Parent','businessplus')
                ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields','excerpt' ),
            'taxonomies' => array( '' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-format-gallery',
        )
        );

    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => __('Testimonials','businessplus'),
                'singular_name' => __('Testimonial','businessplus'),
                'add_new' => __('Add New','businessplus'),
                'add_new_item' => __('Add New Testimonal','businessplus'),
                'edit' => __('Edit','businessplus'),
                'edit_item' => __('Edit testimonial','businessplus'),
                'new_item' => __('New testimonial','businessplus'),
                'view' => __('View','businessplus'),
                'view_item' => __('View testimonial','businessplus'),
                'search_items' => __('Search','businessplus'),
                'not_found' => __('No found','businessplus'),
                'not_found_in_trash' => __('No in Trash','businessplus'),
                'parent' => __('Parent','businessplus')
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array( '' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-businessman',
        )
    );

    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __('Services','businessplus'),
                'singular_name' => __('Service','businessplus'),
                'add_new' => __('Add New','businessplus'),
                'add_new_item' => __('Add New Service','businessplus'),
                'edit' => __('Edit','businessplus'),
                'edit_item' => __('Edit Service','businessplus'),
                'new_item' => __('New Service','businessplus'),
                'view' => __('View','businessplus'),
                'view_item' => __('View Service','businessplus'),
                'search_items' => __('Search','businessplus'),
                'not_found' => __('No found','businessplus'),
                'not_found_in_trash' => __('No in Trash','businessplus'),
                'parent' => __('Parent','businessplus')
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'taxonomies' => array( '' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-admin-generic',
        )
    );

    register_post_type( 'slides',
        array(
            'labels' => array(
                'name' => __('Slide','businessplus'),
                'singular_name' => __('Slide','businessplus'),
                'add_new' => __('Add New','businessplus'),
                'add_new_item' => __('Add New Slide','businessplus'),
                'edit' => __('Edit','businessplus'),
                'edit_item' => __('Edit Slide','businessplus'),
                'new_item' => __('New Slide','businessplus'),
                'view' => __('View','businessplus'),
                'view_item' => __('View Slide','businessplus'),
                'search_items' => __('Search','businessplus'),
                'not_found' => __('No found','businessplus'),
                'not_found_in_trash' => __('No in Trash','businessplus'),
                'parent' => __('Parent','businessplus')
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'taxonomies' => array( '' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-images-alt2',
        )
    );
     //   flush_rewrite_rules();
    }
add_action( 'init', 'create_post_types' );



