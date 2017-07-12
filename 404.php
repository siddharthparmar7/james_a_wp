<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foe_james_a
 */

get_header(); ?>

	
	<div class="container">
		<div class="row">
			<h1 class="text-center">
				<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'foe_james_a' ); ?>
			</h1>
		</div>
	</div><!-- .page-header -->

	<div class="error-page-content">
		<div class="container">
			<div class="row">	
				<div class="col-md-7 col-sm-7"		
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'foe_james_a' ); ?></p>
				</div>
				<div class="col-md-4 col-sm-4"		
					<?php get_sidebar(); ?>	
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
