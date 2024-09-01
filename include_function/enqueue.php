<?php

function software_css_js_calling(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'v5.0.0');
    wp_register_style('custom',get_template_directory_uri().'/css/custom.css',array(),'v1.0.0','all');
    wp_register_style('iconBootstrapCss',get_template_directory_uri().'icon/bootstrap-icons.css',array(),'v1.0.1','all');
    wp_register_style('fontawesomeCss',get_template_directory_uri().'icon/all.min.css',array(),'5.10.0','all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
    wp_enqueue_style('iconBootstrapCss');
    wp_enqueue_style('fontawesomeCss');

     // jQuery Add 
     wp_enqueue_script('jQuery');
     wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),'v5.0.2','true');
     wp_enqueue_script('main_js',get_template_directory_uri().'/js/main.js',array(),'1.0.0','true');
}
add_action("wp_enqueue_scripts","software_css_js_calling");