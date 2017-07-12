<?php /*
Search Page
*/
get_header();
global $query_string;
$query_args = explode("&", $query_string);
if($query_string != "") {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
}
else{
	$search_query = "";
}
$search = new WP_Query($search_query);
?>
<?php
global $wp_query;
$results = $wp_query->found_posts;
?>
	
	<div class="search-header-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h1 class="text-center text-uppercase">Results</h1>
				</div>
			</div>
		</div>
	</div>
	<?php if ( $results > 0 ) :?>
	<section class="search-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Search Results For: <strong><?php the_search_query(); ?></strong></h2>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<?php get_template_part('template-parts/content', 'post-loop') ?>
	<?php get_footer(); ?>