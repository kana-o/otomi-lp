<?php
/**
 * otomi-lp theme functions
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
});

add_action('wp_enqueue_scripts', function () {
    $theme_dir = get_stylesheet_directory_uri();
    $theme_path = get_stylesheet_directory();

    // テーマヘッダー用の style.css（メタ情報のみ）
    wp_enqueue_style('otomi-theme', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));

    // Google Fonts
    wp_enqueue_style(
        'otomi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Montserrat:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // コンパイル済み CSS
    $css_file = $theme_path . '/assets/css/style.css';
    if (file_exists($css_file)) {
        wp_enqueue_style(
            'otomi-style',
            $theme_dir . '/assets/css/style.css',
            ['otomi-theme', 'otomi-google-fonts'],
            filemtime($css_file)
        );
    }

    // メインJS
    $js_file = $theme_path . '/assets/js/main.js';
    if (file_exists($js_file)) {
        wp_enqueue_script(
            'otomi-main',
            $theme_dir . '/assets/js/main.js',
            [],
            filemtime($js_file),
            true
        );
    }
});
