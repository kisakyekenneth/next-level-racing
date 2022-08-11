<?php

function load_scripts()
{
    wp_enqueue_style('font-awesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('main_styles', get_theme_file_uri('/assets/css/style.css'));

    wp_enqueue_style('owl_carousel', get_theme_file_uri('/assets/css/owl.carousel.css'));
    wp_enqueue_style('owl_carousel', get_theme_file_uri('/assets/css/owl.theme.default.min.css'));

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('google-apis', '//fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    wp_enqueue_script('jquery-js', get_theme_file_uri('/assets/js/jquery-1.12.4.min.js'));

    wp_enqueue_script('countdown-js', get_theme_file_uri('/assets/js/jquery.countdown.min.js'));
    wp_enqueue_script('script-js', get_theme_file_uri('/assets/js/scripts.js'), ['jquery-js', 'owl-carousel-js'], '1.0', true);

    wp_enqueue_script('owl-carousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), ['jquery-js'], '1.0', true);
}

add_action('wp_enqueue_scripts', 'load_features');

function load_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'load_scripts');
