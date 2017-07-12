<?php
/**
 * Created by PhpStorm.
 * User: Sid
 * Date: 2017-05-19
 * Time: 12:37 PM
 */
get_header(); ?>
        <article>

            <?php get_template_part('template-parts/content', 'jumbotron') ?>
            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </article>
<?php
get_footer();
