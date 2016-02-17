<?php

function medtime_script() {
    
    wp_enqueue_style('customestyle', get_template_uri() . '/css/atyle.css', array(), '1.0.0', 'all')
        
    
}

add_action( 'wp_enqueue_scripts', medime_script_enqueue)