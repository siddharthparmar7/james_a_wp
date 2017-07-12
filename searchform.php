<form role="search" method="get" id="searchform" class="search-form form-horizontal" action="<?php echo home_url( '/' ); ?>">
	<input type="search" value="<?php get_search_query(); ?>" name="s" id="s" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Type & Hit Enter To Search', 'placeholder' ) ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"/>
</form>