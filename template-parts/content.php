<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foe_james_a
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="post-header-wrapper" <?php if(has_post_thumbnail()) : ?> style="background: url('<?= the_post_thumbnail_url() ?>')" <?php else : ?> style="background: black" <?php endif ?>>

		<?php
		if ( is_single() || is_archive() ) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1 class="text-center"> <?= the_title(); ?> </h1>
						<h4 class="text-center"> <?= get_the_date(); ?> </h4>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="post-content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7">
					<div class="text-left">
						<h1 class="text-uppercase"><?= the_title(); ?></h1>
					</div>
					<?php the_content(); ?>
				</div>
				<div class="col-md-offset-1 col-sm-offset-1 col-md-4 col-sm-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="posts-testimonial-title">
                    <h2 class="text-uppercase text-left">What they say about James</h2>
                </div>
                <div class="posts-testimonial-short-code">
                    <?php echo do_shortcode('[testimonials_cycle theme="clean_style" count="-1" order_by="date" order="ASC" show_title="1" use_excerpt="0" show_thumbs="0" show_date="0" show_other="1" hide_view_more="0" testimonials_per_slide="1" transition="fade" timer="5000" pause_on_hover="true" auto_height="auto" show_pager_icons="0" prev_next="0" display_pagers_above="0" paused="0"]'); ?>
                </div>
            </div>
        </div>
		</div>
		
	</div><!-- .entry-content -->
</article>
