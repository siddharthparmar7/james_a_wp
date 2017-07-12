<article>
    <section>
        <div class="blog-box-wrapper">
            <div class="post-details-wrapper">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h2 class=""><?php the_title(); ?></h2></a>
                <p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                <time><?php the_time('F jS, Y') ?></time>
            </div>
        </div>
    </section>
</article>

