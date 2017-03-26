<?php
/**
 * The template for displaying contact page
 *
 * @package Blog_Name
 */

get_header(); ?>
    <div class="container">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
                    get_template_part( 'template-parts/content', 'contact' );

                ?>

            </main><!-- #main -->
            <aside class="widget-area">
                <?php
                    get_template_part( 'template-parts/content', 'contact-sidebar' );

                ?>
            </aside>
         </div><!-- #primary -->
    </div>


<?php
get_footer();