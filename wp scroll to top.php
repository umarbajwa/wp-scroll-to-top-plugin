<?php
/*  
Plugin Name:Wp Scroll To Top
Description: Scrolls the page to top. 
Version: 1.0 
Author: Umar Bajwa.
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/



function  html_structure(){
	echo "<div id='scr_wrapper'>
     <div class='scr_container'>
     
     <a href='#top'><span class='scr_icon'>^</span></a>
     </div>
     
	</div>";
}

add_action('wp_footer','html_structure');

//Adding scripts
add_action( 'init', 'register_plugin_styles' );
function register_plugin_styles() {
	wp_register_style( 'scroller-plugin', plugins_url('wp-scroller/scr_style.css'));
	wp_enqueue_style( 'scroller-plugin' );
}
add_action( 'wp_enqueue_script', 'load_jquery' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

 function my_script() {
	wp_enqueue_script( 'scroller-js', plugins_url('wp-scroller/scr_js.js'));
}
wp_enqueue_script("jquery");
add_action( 'init', 'my_script' );

//Done adding scripts;


?>

