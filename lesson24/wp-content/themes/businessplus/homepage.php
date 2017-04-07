<?php
/**
 * Template Name: Homepage
 */

get_header();
    //section hero
    get_template_part( 'template-parts/homepage/content', 'hero' );
    //section about us
    get_template_part( 'template-parts/homepage/content', 'about' );
    //section services
    get_template_part( 'template-parts/homepage/content', 'services' );
    //section clients
    get_template_part( 'template-parts/homepage/content', 'testimonials' );
    //section news
    get_template_part( 'template-parts/homepage/content', 'news' );
    //section partners
    get_template_part( 'template-parts/homepage/content', 'partners' );
 get_footer();

