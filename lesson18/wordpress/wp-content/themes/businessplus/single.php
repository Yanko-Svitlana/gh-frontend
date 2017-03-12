<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BusinessPlus
 */

get_header(); ?>

    <section class="blog-post-content section">
        <div class="container">
            <div class="section-heading">
                <h2>Blog Page</h2>
                <span class="short-description">Our featured Post</span>
            </div>
            <div class="post-item row" id="post-<?php the_ID();?>">
                <div class="col-xs-1 author-photo">
                    <img src="<?php echo get_template_directory_uri() ?>./img/admin-photo.png" alt="Author">
                </div>
                <div class="post-content col-xs-11">
                    <h3 class="post-heading"><?php the_title()?></h3>
                    <span class="posted">
                        Posted by:
                        <?php the_author(); ?>,
                        <?php the_time('F - j - Y'); ?>
                    </span>
                    <?php  the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="share">
                <p class="share-description">Share : </p>
                <ul class="share-icons">
                    <li class="share-item facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="share-item twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="share-item google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="author-about row">
                <img src="<?php echo get_template_directory_uri() ?>./img/big-photo.png" alt="Author" class="avatar col-xs-2">
                <div class="author-info col-xs-10">
                    <h3 class="author-name">Admin Name</h3>
                    <p class="author-intro">
                        Established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look
                        like readable English. Many desktop publishing packages.
                    </p>
                </div>
            </div>
            <div class="post-comments">
                <div class="section-heading">
                    <h2>Comments</h2>
                    <span class="short-description">Suggestions & feedback</span>
                </div>
                <div class="comment row">
                    <img src="<?php echo get_template_directory_uri() ?>./img/comment-1.png" alt="Photo" class="col-xs-1 comment-icon">
                    <div class="col-xs-11 comment-content">
                        <h3 class="comment-author">Name here</h3>
                        <span class="date-comment">October-11-2015</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            'Content here, content here', making.
                        </p>
                        <a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="comment row">
                    <img src="<?php echo get_template_directory_uri() ?>./img/comment-2.png" alt="Photo" class=" col-xs-1 comment-icon">
                    <div class="col-xs-11 comment-content">
                        <h3 class="comment-author">Name here</h3>
                        <span class="date-comment">October-11-2015</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            'Content here, content here', making.</p>
                        <a href="#"  class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="row subcomment">
                    <img src="<?php echo get_template_directory_uri() ?>./img/comment-3.png" alt="Photo" class="col-xs-1 col-xs-offset-1 comment-icon">
                    <div class="col-xs-10 comment-content">
                        <h3 class="comment-author">Name here</h3>
                        <span class="date-comment">October-12-2015</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                            using 'Content here, content here', making.</p>
                        <a  href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="leave-comment section">
            <div class="container">
                <div class="section-heading">
                    <h2>Leave your comment</h2>
                    <span class="short-description">Submit your comments now</span>
                </div>
                <form action="#" class="main-form">
                    <ul>
                        <li>
                            <input type="text" name="name" placeholder="Name *" required>
                        </li>
                        <li>
                            <input type="email" name="email" placeholder="Email address*"required>
                        </li>
                        <li>
                            <input type="number" name="phone" placeholder="Phone number *" required>
                        </li>
                        <li>
                            <textarea name="comment" placeholder="Comment *" required></textarea>
                        </li>
                        <li>
                            <input type="submit" class="btn" value="Submit now">
                        </li>
                    </ul>
                </form>
            </div>
        </section>
<!--	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

-->
	
<!--			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	<!--</div><!-- #primary -->

<?php
get_footer();
