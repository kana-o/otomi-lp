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
 * 詳細ページは作らず、front-page の一覧表示のみで使用する。
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
        'supports'            => ['title', 'thumbnail', 'page-attributes'],
    ]);
});

/**
 * ACF フィールドグループ（募集要項）
 * コード定義（ローカルフィールド）なので DB 不要・バージョン管理可。
 * ACF（無料）有効化後に自動でフィールドが表示される。
 * ラベルは固定（仕事内容／応募資格／給与／勤務時間／休日）。
 */
add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_job_detail',
        'title'  => '募集要項の内容',
        'fields' => [
            [
                'key'          => 'field_job_content',
                'label'        => '仕事内容',
                'name'         => 'job_content',
                'type'         => 'textarea',
                'new_lines'    => '', // 改行はテンプレート側で nl2br 処理
                'instructions' => 'カードの「仕事内容」に表示されます。',
            ],
            [
                'key'          => 'field_job_qualification',
                'label'        => '応募資格',
                'name'         => 'job_qualification',
                'type'         => 'textarea',
                'new_lines'    => '',
                'instructions' => 'カードの「応募資格」に表示されます。',
            ],
            [
                'key'          => 'field_job_salary',
                'label'        => '給与',
                'name'         => 'job_salary',
                'type'         => 'textarea',
                'new_lines'    => '',
                'instructions' => 'カードの「給与」に表示されます。改行可。',
            ],
            [
                'key'          => 'field_job_hours',
                'label'        => '勤務時間',
                'name'         => 'job_hours',
                'type'         => 'textarea',
                'new_lines'    => '',
                'instructions' => 'カードの「勤務時間」に表示されます。',
            ],
            [
                'key'          => 'field_job_holiday',
                'label'        => '休日',
                'name'         => 'job_holiday',
                'type'         => 'textarea',
                'new_lines'    => '',
                'instructions' => 'カードの「休日」に表示されます。',
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'job',
                ],
            ],
        ],
        'menu_order'      => 0,
        'position'        => 'normal',
        'style'           => 'default',
        'label_placement' => 'top',
    ]);
});
