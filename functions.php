<?php 

function dl_enqueue_styles_child() { 
	//llama al style del theme padre. 
	wp_register_style('parent-theme', get_parent_theme_file_uri('style.css'),null, null, null); 
	wp_enqueue_style('style-red', get_theme_file_uri('assets/css/style2.css'), null, null, null);
	wp_enqueue_style('parent-theme'); 
	wp_enqueue_style('style-red');
} 

add_action('wp_enqueue_scripts', 'dl_enqueue_styles_child');

 ?>

 