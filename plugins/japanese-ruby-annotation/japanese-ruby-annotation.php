<?php
/**
 * Plugin Name: Japanese Ruby Annotation
 * Description: A plugin to add ruby annotations for Japanese kanji with furigana using [ruby rt="..." rb="..."] shortcode.
 * Version: 1.0
 * Author: VJLink 2025
 */

// Đăng ký shortcode `[ruby]`
function ruby_shortcode_handler($atts) {
    $atts = shortcode_atts(array(
        'rt' => '', // Phiên âm
        'rb' => ''  // Chữ Hán
    ), $atts, 'ruby');
    $rb = esc_html($atts['rb']);
    $rt = esc_html($atts['rt']);

    return  "<ruby><rb>{$rb}</rb><rt>{$rt}</rt></ruby>";
}
add_shortcode('ruby', 'ruby_shortcode_handler');

// Tải file CSS
function ruby_annotation_enqueue_styles() {
    wp_enqueue_style('ruby-annotation-styles', plugin_dir_url(__FILE__) . 'ruby-styles.css');
}
add_action('wp_enqueue_scripts', 'ruby_annotation_enqueue_styles');

// Áp dụng shortcode trên toàn nội dung
function apply_ruby_shortcode_to_content($content) {
    return do_shortcode($content);
}
add_filter('the_content', 'apply_ruby_shortcode_to_content');
