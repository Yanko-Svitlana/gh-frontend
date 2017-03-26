<?php
/**
 * Template part for displaying sidebar content in page-contact.php
 *
 * @package Blog_Name
 */

?>

<div class="contact-info">
    <h2><?php echo get_theme_mod('second_word')?></h2>
    <div class="phone-number">
        <i class="fa fa-phone"></i>
        <?php echo get_theme_mod('phone_number');?>
    </div>
    <p class="small-exp">
        <?php echo get_theme_mod('small_exp')?>
    </p>
    <div class="email">
        <i class="fa fa-envelope"></i>
        <?php echo get_theme_mod('email')?>
    </div>
</div>
