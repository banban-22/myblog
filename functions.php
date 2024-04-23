<?php
function myblog_files()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gayathri:wght@400;700&family=Zen+Maru+Gothic:wght@400;500;700&display=swap');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('myblog_main_styles', get_theme_file_uri('./build/style-index.css'));
    wp_enqueue_style('myblog_extra_styles', get_theme_file_uri('./build/index.css'));
}

add_action('wp_enqueue_scripts', 'myblog_files');

function myblog_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'myblog_features');