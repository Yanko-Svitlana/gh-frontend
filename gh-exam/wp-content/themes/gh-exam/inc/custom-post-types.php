<?php
/**
 * gh-exam Custom Post Types
 *
 * @package gh-exam
 */

function create_post_type() {
    $arr_post = array( 'slides', 'features' );
    for ( $i=0; $i<count( $arr_post ); $i++ ) {
        register_post_type( $arr_post[$i],
            array(
                'labels' => array(
                    'name' => esc_html__( $arr_post[$i], 'gh-exam' ),
                    'singular_name' => esc_html__( 'Post', 'gh-exam' ),
                    'add_new' => esc_html__( 'New post', 'gh-exam' )
                ),
                'public' => true,
                'menu position'=> 5,
                'has_archive' => false,
                'show_ui' => true,
                'taxonomies' => array( 'category', 'post_tag' ),
                'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
            )
        );
    }
}
add_action( 'init', 'create_post_type' );
