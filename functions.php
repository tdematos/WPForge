<?php

    function wpforge_files() {
        wp_enqueue_style('wpforge_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'wpforge_files');