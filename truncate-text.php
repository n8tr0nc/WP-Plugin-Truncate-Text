<?php
/*
* Plugin Name: Truncate Text
* Plugin URI: https://NateChisley.com/wordpress-plugins/
* Description: A plugin that truncates text to a specified number of characters
* Version: 1.0.0
* Requires at lease: 5.0
* Requires PHP: 7.2
* Author: Nate Chisley (WebPro)
* Author URI: https://NateChisley.com/webpro/
* License: GPLv2 or later (or compatible)
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: truncate-text
* Domain Path: /languages
*/

/*
* TRUNCATE TEXT
*/
function truncate_text( $atts, $content = null ) {
    // Extract shortcode attributes
    extract( shortcode_atts( array(
    'limit' => 6,
    'encoding' => 'UTF-8'
    ), $atts ) );

    // Truncate content
    $content_length = mb_strlen($content, $encoding);
    if($content_length > ($limit * 2 + 3)) {
    $content = mb_substr($content, 0, $limit, $encoding) . '...' . mb_substr($content, $content_length - $limit, $content_length, $encoding);
    }

    // Return truncated content
    return $content;
}
add_shortcode( 'truncate-text', 'truncate_text' );

/*
* TRUNCATE SHORTCODE
*/
function truncate_text_shortcode( $atts, $content = null ) {
    // Extract shortcode attributes
    extract( shortcode_atts( array(
        'limit' => 6,
        'encoding' => 'UTF-8'
    ), $atts ) );

    // Process other shortcodes in content
    $content = do_shortcode($content);

    // Truncate content
    $content_length = mb_strlen($content, $encoding);
    if($content_length > ($limit * 2 + 3)) {
    $content = mb_substr($content, 0, $limit, $encoding) . '...' . mb_substr($content, $content_length - $limit, $content_length, $encoding);
    }

    // Return truncated content
    return $content;
}
add_shortcode( 'truncate-shortcode', 'truncate_text_shortcode' );
