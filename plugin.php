<?php
/*
Plugin Name: Square Root Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/square-root-calculator/
Description: Square root calculator finds square roots of positive and negative numbers, identifies the principal root, and determines if the number is a perfect square.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_square_root_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Square Root Calculator by Calculator.iO";

function display_ci_square_root_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/square-root-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Square Root Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_square_root_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_square_root_calculator', 'display_ci_square_root_calculator' );