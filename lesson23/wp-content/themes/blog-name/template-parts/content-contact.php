<?php
/**
 * Template part for displaying page content in page-contact.php
 *
 * @package Blog_Name
 */

?>

<div class="main-content">
    <div class="contact-description">
        <?php
        the_title( '<h2 class="entry-title">', '</h2>' );?>
        <h3 class="subtitle"><?php echo get_theme_mod('subtitle');?></h3>
        <p class="desc"><?php echo get_theme_mod('description');?></p>
    </div>

    <div class="contact-image">
        <img src="<?php echo esc_url( get_theme_mod('contact_image'));?>" alt="banner">
    </div>
</div>

<div class="contact-form">
    <h2 class="form-title"><?php __('Contact form','blog-name');?></h2>
    <?php dynamic_sidebar('contact_form');?>
</div>
