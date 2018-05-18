<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform" id="searchform" method="get" role="search">
	<div>
		<label for="s" class="screen-reader-text"><?php esc_html_e( 'Search for', 'topz' ) ?>:</label>
		<input type="text" id="s" name="s" value="<?php if (is_search()) { echo get_search_query(); } ?>" placeholder="<?php esc_attr_e( 'Search', 'topz' ) ?>">
		<input type="submit" value="<?php esc_attr_e( 'Search', 'topz' ) ?>" id="searchsubmit">
	</div>
</form>