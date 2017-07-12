<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foe_james_a
 */

get_header();
get_template_part('template-parts/content', 'archive-header');
?>

<div class="archive-title-wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="text-uppercase text-left">news letters</h1>
        </div>
    </div>
</div>
</div>
<?php
get_template_part( 'template-parts/content', 'post-loop' );
get_footer();
