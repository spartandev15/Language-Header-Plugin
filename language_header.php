<?php
/**
* Plugin Name: Language Header
* Plugin URI: https://spartanbots.com/
* Description: WordPress plugin that inserts a sticky header with language
* Version: 0.1
* Author: vivek
* Author URI: https://spartanbots.com/
**/

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'slider',   plugin_dir_url( __FILE__ ) . 'css/language.css', array(), '6.0', 'all');
    
    wp_enqueue_style( 'font-local',   plugin_dir_url( __FILE__ ) . 'fonts/stylesheet.css', array(), '0.1', 'all');

    wp_enqueue_script( 'script',  plugin_dir_url( __FILE__ ) . 'js/language.js', array ( 'jquery' ), 1.1, true);

    wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );

    wp_enqueue_style('Font_Awesome');

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//   function header_hook() {
//     get_header();
//   require plugin_dir_path(__FILE__) . 'language_list.php';

//  }
// add_action( 'wp_headers', 'header_hook');
//add_action('wp_body_open', 'hook_css');

// create shortcode 
function header_Languages() {
  require plugin_dir_path(__FILE__) . 'language_list.php';
 }

 add_shortcode('Language-Header', 'header_Languages'); 

//add menu 
function Admin_Menu(){
     add_menu_page(
            'Header Language',
            'Header Language',
            'manage_options',
            'header-language',
            'getMenupage');
    }

add_action("admin_menu", "Admin_Menu");

//callback function
function getMenupage(){
  require plugin_dir_path(__FILE__) . 'menu_page.php';
}