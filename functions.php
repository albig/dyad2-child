<?PHP

/**
 * Skip usage of Google Fonts via API
 */
function my_load_web_fonts() {
	wp_register_style('dyad-2-fonts', '');
	wp_enqueue_style('dyad-2-fonts');
}

add_action('wp_enqueue_scripts', 'my_load_web_fonts');

?>
