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
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400;500;600&display=swap',
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

/**
 * カスタム投稿タイプ「募集要項（job）」
 * 詳細ページは作らず、採用LP（page-recruit）の一覧表示のみで使用する。
 * - public => false（フロントに単体ページURLを生やさない）
 * - show_ui => true（管理画面の編集UIは出す）
 * - page-attributes（menu_order）でドラッグ並べ替えに対応
 *   ※ 並べ替えUIは「Intuitive Custom Post Order」プラグインを使用
 */
add_action('init', function () {
    register_post_type('job', [
        'labels' => [
            'name'               => '募集要項',
            'singular_name'      => '募集要項',
            'add_new'            => '新規追加',
            'add_new_item'       => '募集要項を追加',
            'edit_item'          => '募集要項を編集',
            'new_item'           => '新しい募集要項',
            'view_item'          => '募集要項を表示',
            'search_items'       => '募集要項を検索',
            'not_found'          => '募集要項が見つかりません',
            'not_found_in_trash' => 'ゴミ箱に募集要項はありません',
            'menu_name'          => '募集要項',
        ],
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true, // ブロックエディタUIを使う
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-id',
        'has_archive'         => false,
        'publicly_queryable'  => false,
        'exclude_from_search' => true,
        'rewrite'             => false,
        'supports'            => ['title', 'page-attributes'],
    ]);
});

/**
 * ACF フィールドグループ（募集要項）は ACF Local JSON で管理。
 * 定義は acf-json/group_job_detail.json（GUIで編集すると自動でJSONに保存され、
 * Gitに乗るので環境間で同期できる）。
 * フィールド: 仕事内容／応募資格／給与／勤務時間／休日（ラベル固定）。
 * ACFは get_stylesheet_directory()/acf-json を既定で読み込むため追加設定は不要。
 */
