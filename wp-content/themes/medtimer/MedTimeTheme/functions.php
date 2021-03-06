<?php

function medtimer_script_enqueue() {

    wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/medtimer.css', array(), '1.0.0', 'all');
    wp_enqueue_script ('customjs', get_template_directory_uri() . '/js/medtimer.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'medtimer_script_enqueue');

function medtimer_theme_setup() {
    add_theme_support('menus');
}

add_action('init', 'medtimer_theme_setup');