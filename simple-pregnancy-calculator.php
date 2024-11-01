<?php
/**
* Plugin Name: Simple Pregnancy Calculator
* Plugin URI:
* Description: Simple pregnancy calculator shortcode and widget
* Version: 1.0.1
* Author: Giannis Dallas
* Author URI:
* License: GPLv2 or later
*/

define( 'simple_pregnancy_calculator_MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include( simple_pregnancy_calculator_MY_PLUGIN_PATH . 'template/main.php');
include( simple_pregnancy_calculator_MY_PLUGIN_PATH . 'simple-pregnancy-calculator-widget.php');

/**
 * Proper way to enqueue scripts and styles.
 */


function pregnancy_scripts() {


    wp_enqueue_style( 'font-awesome-463', '//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script( 'sipc-js', plugins_url( 'js/pregnancy-custom-jquery.js', __FILE__ ),array(),true);
    wp_enqueue_script( 'moment', plugins_url( 'js/moment.js', __FILE__ ),array(),true);
    wp_enqueue_style('sipc-css1', plugins_url( 'css/pregnancy.css', __FILE__ ),array(),true);
    wp_enqueue_style( 'animate', 'https://cdn.jsdelivr.net/animatecss/3.5.1/animate.css');
}
add_action( 'wp_enqueue_scripts', 'pregnancy_scripts' ,11);


/**
 * Define shortcodes
 */

add_shortcode( 'simple_pregnancy_calculator', 'inc_sipc_calculator' );
add_shortcode( 'simple_pregnancy_widget_calculator', 'inc_sipc_widget_calculator' );



add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'sipc_action_links' );

function sipc_action_links ( $links ) {
 $mylinks = array(
 '<a href="https://www.paypal.me/IDallas" target="_blank" >Donate to support my effort</a>');
return array_merge( $links, $mylinks );
}
