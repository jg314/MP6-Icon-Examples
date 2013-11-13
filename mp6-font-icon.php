<?php

add_action( 'admin_head', 'set_custom_font_icon' );
function set_custom_font_icon() {
?>
	<style type="text/css">

		/* for top level menu pages replace `{menu-slug}` with the slug name passed to `add_menu_page()` */
		.mp6 #toplevel_page_{menu-slug} .wp-menu-image:before {
			font-family: FontAwesome !important;
			content: '\f07a';
		}

		/* for custom post types replace `{post_type}` with the slug name passed to `register_post_type()` */
		.mp6 #menu-posts-{post_type} .wp-menu-image:before {
			font-family: FontAwesome !important;
			content: '\f07a';
		}

	</style>
<?php
}

// enqueue custom icon font
add_action( 'admin_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css', false, null );
}
