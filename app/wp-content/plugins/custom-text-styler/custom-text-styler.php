<?php
/**
 * Plugin Name: Custom Text Styler
 * Description: A simple plugin to customize text styling.
 * Version: 0.0.2.
 * Author: Dmitriy Kolpakov
 */

// Code

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Plugin activation hook
function custom_text_plugin_activate() {
    // Add any activation tasks here
}
register_activation_hook(__FILE__, 'custom_text_plugin_activate');

// Plugin deactivation hook
function custom_text_plugin_deactivate() {
    // Add any deactivation tasks here
}
register_deactivation_hook(__FILE__, 'custom_text_plugin_deactivate');


// Enqueue styles and scripts
function custom_text_styler_enqueue() {
    wp_enqueue_style('custom-text-styler-style', plugins_url('style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'custom_text_styler_enqueue');


// Enqueue styles and scripts for admin
function custom_text_styler_admin_enqueue() {
    wp_enqueue_style('custom-text-styler-admin-style', plugins_url('admin-style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'custom_text_styler_admin_enqueue');

// Add admin menu
function custom_text_styler_menu() {
    add_menu_page(
        'Custom Text Styler',
        'Custom Text Styler',
        'manage_options',
        'custom-text-styler',
        'custom_text_styler_page'
    );
}
add_action('admin_menu', 'custom_text_styler_menu');

// HTML for admin page
function custom_text_styler_page() {

    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $size = intval($_POST['size']);
        $font = sanitize_text_field($_POST['font']);
        $color = sanitize_text_field($_POST['color']);
        $font_style = sanitize_text_field($_POST['font_style']);
        $decoration = sanitize_text_field($_POST['decoration']);
        $opacity = sanitize_text_field($_POST['opacity']);
        $background_color = sanitize_hex_color($_POST['background_color']);
        $fontWeight = sanitize_text_field($_POST['font-weight']);

        $textShadowH = intval($_POST['text-shadow-h']);
        $textShadowV = intval($_POST['text-shadow-v']);
        $textShadowBlur = intval($_POST['text-shadow-blur']);
        $textShadowColor = sanitize_text_field($_POST['text-shadow-color']);

        $css = "

            <style>
                .custom-text {
                    font-size: {$size}px;
                    font-family: {$font}, sans-serif;
                    font-style: {$font_style};
                    font-weight: {$fontWeight};
                    text-decoration: {$decoration};
                    opacity: {$opacity};
                    text-shadow: {$textShadowH}px {$textShadowV}px {$textShadowBlur}px {$textShadowColor};
                    color: {$color};
                    background-color: {$background_color};
                }
            </style>
        ";

        $shortcode = "[custom_text size='$size' font='$font' font_style='$font_style' font-weight='$fontWeight' decoration='$decoration' opacity='$opacity' text_shadow='{$textShadowH}px {$textShadowV}px {$textShadowBlur}px {$textShadowColor}' color='$color' background_color='$background_color']{$text}[/custom_text]";

        echo "<h2>Text:</h2>";
        echo "<pre class='text-block'>$text</pre>";
        echo "<h2>Generated CSS:</h2>";
        echo "<pre class='css-block'>" . esc_html($css) . "</pre>";
        echo "<h2>Generated Shortcode:</h2>";
        echo "<pre class='shortcode-block'>$shortcode</pre>";
    }

    include_once('admin-template.php');
}

// Shortcode handler
function custom_text_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'size' => '20',
            'font' => 'Arial',
            'font_style' => 'normal',
            'font-weight' => 'normal',
            'decoration' => 'none',
            'opacity'=>'0,5',
            'text_shadow' => 'none',
            'background_color' => 'transparent',
            'color' => '#000000'
        ),
        $atts
    );

    $style = "style='";
    $style .= " font-size: {$atts['size']}px;";
    $style .= " font-family: {$atts['font']}, sans-serif;";
    $style .= " font-style: {$atts['font_style']};";
    $style .= " font-weight: {$atts['font-weight']};";
    $style .= " color: {$atts['color']};";
    $style .= " text-decoration: {$atts['decoration']};";
    $style .= " opacity: {$atts['opacity']};";
    $style .= " text-shadow: {$atts['text_shadow']};";
    $style .= " background-color: {$atts['background_color']};";
    $style .= "'";

    return "<div class='custom-text' $style>" . do_shortcode($content) . "</div>";
}
add_shortcode('custom_text', 'custom_text_shortcode');

