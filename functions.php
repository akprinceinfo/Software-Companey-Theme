<?php

// function software_css_js_calling(){
//     wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'v5.0.0');
//     wp_register_style('custom',get_template_directory_uri().'/css/custom.css',array(),'v1.0.0','all');
//     wp_register_style('iconBootstrapCss',get_template_directory_uri().'icon/bootstrap-icons.css',array(),'v1.0.1','all');
//     wp_register_style('fontawesomeCss',get_template_directory_uri().'/https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap',array(),'5.10.0','all');
//     wp_register_style('owlCaroselCss',get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css',array(),'5.10.0','all');
//     wp_register_style('animateCss',get_template_directory_uri().'/lib/animate/animate.min.css',array(),'5.10.0','all');
//     wp_enqueue_style('bootstrap');
//     wp_enqueue_style('custom');
//     wp_enqueue_style('iconBootstrapCss');
//     wp_enqueue_style('fontawesomeCss');
//     wp_enqueue_style('owlCaroselCss');
//     wp_enqueue_style('animateCss');

     // jQuery Add 
//      wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),'v5.0.2','true');
//      wp_enqueue_script('jQuery',get_template_directory_uri().'/js/jquery-3.4.1.min.js',array(),'3.4.1','true');
//      wp_enqueue_script('wowJs',get_template_directory_uri().'/lib/wow/wow.min.js',array(),'1.0.0','true');
//      wp_enqueue_script('easingJs',get_template_directory_uri().'/lib/easing/easing.min.js',array(),'1.0.0','true');
//      wp_enqueue_script('waypointsJs',get_template_directory_uri().'/lib/waypoints/waypoints.min.js',array(),'1.0.0','true');
//      wp_enqueue_script('counterupJs',get_template_directory_uri().'/lib/counterup/counterup.min.js',array(),'1.0.0','true');
//      wp_enqueue_script('owlcarouselJs',get_template_directory_uri().'/lib/owlcarousel/owl.carousel.min.js',array(),'1.0.0','true');
//      wp_enqueue_script('mainJs',get_template_directory_uri().'js/main.js',array(),'1.0.0','true');
// }
// add_action("wp_enqueue_scripts","software_css_js_calling");


function software_cusomizer_regester($wp_customize){
    $wp_customize->add_section('theme_header_area',array(
        'title' => __('Header Area','themeTextDomain'),
        'description'=> 'If you interested to update your header area, You can do it hear'
    ));
    $wp_customize->add_setting('theme_logo',array(
        'default' => get_bloginfo('template_directory').'img/logo.jpg',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'theme_logo',array(
        'lable'=> 'Logo Upload',
        'setting' => 'theme_logo',
        'section' => 'theme_header_area',
    )));

}
add_action('customize_register','software_cusomizer_regester');


// Menu Register

function software_register_nav_menu(){
    register_nav_menu('main-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');

    load_theme_textdomain('CompaneyTextDomain');

    // register_nav_menu(array(
    //     'main-menu' => __('Main Menu','CompaneyTextDomain'),
    //     // 'footer-menu'=> __('footer Menu','CompaneyTextDomain'),
    // ));
    
}  

add_action('after_setup_theme','software_register_nav_menu');   


// Register Sidbar Widgets

function software_sidebar(){
    register_sidebar(array(
        'name' => __('Main Sidebar','CompaneyTextDomain'),
        'id' => 'sidebar-1',
        'discription' => __('Our Main About Us','CompaneyTextDomain'),
        'before_widget' => '<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="fw-bold text-primary text-uppercase">',
        'after_title' => '</h5>',

    ));
}
add_action('widgets_init','software_sidebar');