<?php

/**
 * Add Theme Options page.
 */
function topz_theme_admin_page(){
	add_theme_page(
		esc_html__('Theme Options', 'topz'),
		esc_html__('Theme Options', 'topz'),
		'manage_options',
		'topz_theme_options',
		'topz_theme_admin_page_content'
	);
}
add_action('admin_menu', 'topz_theme_admin_page', 49);

function topz_theme_admin_page_content(){ ?>
	<div class="wrap">
		<h2><?php esc_html_e( 'Topz Advanced Options Page', 'topz' ); ?></h2>
		<?php do_action( 'topz_theme_admin_content' ); ?>
	</div>
<?php
}