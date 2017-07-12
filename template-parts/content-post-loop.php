<?php ?>
<div class="search-result-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-lg-7">
                <section>
                    <div class="row">
                        <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
                        <!--  excluding testimonial post type from the search results  -->
                            <?php if("testimonial" != get_post_type()) {get_template_part('template-parts/content', 'post');} ?>
                        <?php endwhile; ?>
                        <?php else: ?>
                            <?php get_template_part('template-parts/content', 'none') ?>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
            <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="easy_testimonial_title">
                    <h2 class="text-uppercase text-left">What they say about James</h2>
                </div>
                <div class="testimonial-short-code">
                    <?php echo do_shortcode('[testimonials_cycle theme="clean_style" count="-1" order_by="date" order="ASC" show_title="1" use_excerpt="0" show_thumbs="0" show_date="0" show_other="1" hide_view_more="0" testimonials_per_slide="1" transition="fade" timer="5000" pause_on_hover="true" auto_height="calc" show_pager_icons="0" prev_next="0" display_pagers_above="0" paused="0"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
