<?php

    function wpforge_style_files() {
        wp_enqueue_style('wpforge_main_styles', get_stylesheet_uri());
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    }

    add_action('wp_enqueue_scripts', 'wpforge_style_files');

    