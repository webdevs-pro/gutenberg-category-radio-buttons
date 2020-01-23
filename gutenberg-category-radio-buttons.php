<?php
/*
  Plugin Name: AI Gutenberg Category Radio Buttons
  Plugin URI: https://github.com/webdevs-pro/gutenberg-category-radio-buttons
  Description: This plgin replace default category select checkboxes to radio buttons in Gutenberg editor
  Author: Alex Ischenko
  Author URI: https://web-devs.pro
  Version: 1.0
 */


add_action( 'admin_enqueue_scripts', function(){
	if ( ! $screen = get_current_screen() ) {
		return;
	}

	$post_types = [ 'post', 'page' ];
	if ( in_array( $screen->id, $post_types ) ) {
		// Make certain `wp-editor` is added as a dependency.
		wp_enqueue_script( 'ai-radio-cat-selector', plugin_dir_url( __FILE__ ) . '/js/ai-radio-cat-selector.js', [ 'wp-editor' ] );
	}
} );
