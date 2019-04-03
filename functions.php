<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style']);
}

/**
 * 以下、フック、ブロック、モデル、定数および関数の読み込み
 */

load_hook_files();

function load_hook_files()
{
    require_once('hook/admin.php');
}