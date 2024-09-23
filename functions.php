<?php


 /*====================
       Menu Add
    =======================*/
    function software_Menu_add(){
        // Text Domain Add 
        load_theme_textdomain( 'CompaneyTextDomain', get_template_directory().'/languages' );

        // Menus Add
        register_nav_menus(array(
            'primary_menu' => __( 'Primary Menu', 'CompaneyTextDomain' ),
            'footer1_menu' => __( 'Footer 1 Menu', 'CompaneyTextDomain' ),
            'footer2_menu' => __( 'Footer 2 Menu', 'CompaneyTextDomain' ),
        ));

        //Theme Title add
        add_theme_support('title-tag');

       
        // thumbnails Add
        add_theme_support('post-thumbnails');

    }
    add_action('init','software_Menu_add');

    // nav class add 
    function add_link_atts($atts) {
        $atts['class'] = "nav-item nav-link";
        return $atts;
      }
    add_filter( 'nav_menu_link_attributes', 'add_link_atts');


    /*====================
        link add 
    =======================*/
function software_linkCalling(){

    // Google Web Fonts
    wp_enqueue_style( 'google-font','//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), '1.0.0', 'all' );

    // Icon Font Stylesheet
    wp_enqueue_style( 'font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-icons','//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.0.0', 'all' );

    // Libraries Stylesheet
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0.0', 'all' );

    // Customized Bootstrap Stylesheet
    wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    // Template Stylesheet
    wp_enqueue_style( 'styleCss', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    //Default Style
    wp_enqueue_style( 'startup-style', get_stylesheet_uri());



    // Load All Js 
    // wp_enqueue_script( 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'jqueryMin', get_template_directory_uri() . '/lib/jQuery/jquery-3.4.1.min.js', array('jquery'), '3.4.1', true );
    wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/lib/jQuery/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wowJs', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easingJs', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypointsJs', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterupJs', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owlcarouselJs', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    // Template Javascript
    wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );



}
add_action('wp_enqueue_scripts','software_linkCalling');


function software_cusomizer_regester($wp_customize){
    $wp_customize->add_section('theme_header_area',array(
        'title' => __('Logo Add','CompaneyTextDomain'),
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

// software_slider_section Add 
function software_slider_section() {
    // slider custom post 
    $args =  array(
            'name'                  => _x( 'Sliders', 'Post type general name', 'CompaneyTextDomain' ),
            'singular_name'         => _x( 'Slider', 'Post type singular name', 'CompaneyTextDomain' ),
            'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'CompaneyTextDomain' ),
            'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'CompaneyTextDomain' ),
            'add_new'               => __( 'Add New', 'CompaneyTextDomain' ),
            'add_new_item'          => __( 'Add New Sliders', 'CompaneyTextDomain' ),
            'new_item'              => __( 'New Slider', 'CompaneyTextDomain' ),
            'edit_item'             => __( 'Edit Slider', 'CompaneyTextDomain' ),
            'view_item'             => __( 'View Slider', 'CompaneyTextDomain' ),
            'all_items'             => __( 'All Sliders', 'CompaneyTextDomain' ),
            'search_items'          => __( 'Search Slider', 'CompaneyTextDomain' ),
            'parent_item_colon'     => __( 'Parent Slider:', 'CompaneyTextDomain' ),
            'not_found'             => __( 'No Sliders found.', 'CompaneyTextDomain' ),
            'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'CompaneyTextDomain' ),
            'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'CompaneyTextDomain' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'CompaneyTextDomain' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'CompaneyTextDomain' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'CompaneyTextDomain' ),
            'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'CompaneyTextDomain' ),
            'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'CompaneyTextDomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'CompaneyTextDomain' ),
            'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'CompaneyTextDomain' ),
            'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'CompaneyTextDomain' ),
            'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'CompaneyTextDomain' ),
       );
       $args = array(
            'labels'             => $args,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'sliderAdd' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
            'menu_icon'          => 'dashicons-products',
	);
    register_post_type( 'sliderAdd', $args );

    // Services Custom Post 
     $args =  array(
        'name'                  => _x( 'Services', 'Post type general name', 'CompaneyTextDomain' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'CompaneyTextDomain' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'CompaneyTextDomain' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'CompaneyTextDomain' ),
        'add_new'               => __( 'Add New', 'CompaneyTextDomain' ),
        'add_new_item'          => __( 'Add New Services', 'CompaneyTextDomain' ),
        'new_item'              => __( 'New Service', 'CompaneyTextDomain' ),
        'edit_item'             => __( 'Edit Service', 'CompaneyTextDomain' ),
        'view_item'             => __( 'View Service', 'CompaneyTextDomain' ),
        'all_items'             => __( 'All Service', 'CompaneyTextDomain' ),
        'search_items'          => __( 'Search Service', 'CompaneyTextDomain' ),
        'parent_item_colon'     => __( 'Parent Service:', 'CompaneyTextDomain' ),
        'not_found'             => __( 'No Service found.', 'CompaneyTextDomain' ),
        'not_found_in_trash'    => __( 'No Service found in Trash.', 'CompaneyTextDomain' ),
   );
   $args = array(
        'labels'             => $args,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
        'menu_icon'          => 'dashicons-shield',
);
register_post_type( 'Services', $args );

    // Prices Custom Post 
     $args =  array(
        'name'                  => _x( 'Prices List', 'Post type general name', 'CompaneyTextDomain' ),
        'singular_name'         => _x( 'Price', 'Post type singular name', 'CompaneyTextDomain' ),
        'menu_name'             => _x( 'Prices', 'Admin Menu text', 'CompaneyTextDomain' ),
        'name_admin_bar'        => _x( 'Price', 'Add New on Toolbar', 'CompaneyTextDomain' ),
        'add_new'               => __( 'Add New', 'CompaneyTextDomain' ),
        'add_new_item'          => __( 'Add New Prices', 'CompaneyTextDomain' ),
        'new_item'              => __( 'New Price', 'CompaneyTextDomain' ),
        'edit_item'             => __( 'Edit Price', 'CompaneyTextDomain' ),
        'view_item'             => __( 'View Price', 'CompaneyTextDomain' ),
        'all_items'             => __( 'All Price', 'CompaneyTextDomain' ),
        'search_items'          => __( 'Search Price', 'CompaneyTextDomain' ),
        'parent_item_colon'     => __( 'Parent Price:', 'CompaneyTextDomain' ),
        'not_found'             => __( 'No Price found.', 'CompaneyTextDomain' ),
        'not_found_in_trash'    => __( 'No Price found in Trash.', 'CompaneyTextDomain' ),
   );
   $args = array(
        'labels'             => $args,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Prices' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
        'menu_icon'          => 'dashicons-image-rotate-left',
);
register_post_type( 'Prices', $args );
    
    // Testimonial Custom Post 
    $args =  array(
        'name'                  => _x( 'Testimonial List', 'Post type general name', 'CompaneyTextDomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'CompaneyTextDomain' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'CompaneyTextDomain' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'CompaneyTextDomain' ),
        'add_new'               => __( 'Add New', 'CompaneyTextDomain' ),
        'add_new_item'          => __( 'Add New Prices', 'CompaneyTextDomain' ),
        'new_item'              => __( 'New Testimonial', 'CompaneyTextDomain' ),
        'edit_item'             => __( 'Edit Testimonial', 'CompaneyTextDomain' ),
        'view_item'             => __( 'View Testimonial', 'CompaneyTextDomain' ),
        'all_items'             => __( 'All Testimonial', 'CompaneyTextDomain' ),
        'search_items'          => __( 'Search Testimonial', 'CompaneyTextDomain' ),
        'parent_item_colon'     => __( 'Parent Testimonial:', 'CompaneyTextDomain' ),
        'not_found'             => __( 'No Testimonial found.', 'CompaneyTextDomain' ),
        'not_found_in_trash'    => __( 'No Testimonial found in Trash.', 'CompaneyTextDomain' ),
    );
    $args = array(
        'labels'             => $args,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title' ),
        'menu_icon'          => 'dashicons-testimonial',
    );
    register_post_type( 'Testimonial', $args );


    // Team Members Custom Post 
    $args =  array(
        'name'                  => _x( 'Team Members List', 'Post type general name', 'CompaneyTextDomain' ),
        'singular_name'         => _x( 'Team Member', 'Post type singular name', 'CompaneyTextDomain' ),
        'menu_name'             => _x( 'Team Members', 'Admin Menu text', 'CompaneyTextDomain' ),
        'name_admin_bar'        => _x( 'Team Member', 'Add New on Toolbar', 'CompaneyTextDomain' ),
        'add_new'               => __( 'Add New', 'CompaneyTextDomain' ),
        'add_new_item'          => __( 'Add New Team Members', 'CompaneyTextDomain' ),
        'new_item'              => __( 'New Team Member', 'CompaneyTextDomain' ),
        'edit_item'             => __( 'Edit Team Member', 'CompaneyTextDomain' ),
        'view_item'             => __( 'View Team Member', 'CompaneyTextDomain' ),
        'all_items'             => __( 'All Team Member', 'CompaneyTextDomain' ),
        'search_items'          => __( 'Search Team Member', 'CompaneyTextDomain' ),
        'parent_item_colon'     => __( 'Parent Team Member:', 'CompaneyTextDomain' ),
        'not_found'             => __( 'No Team Member found.', 'CompaneyTextDomain' ),
        'not_found_in_trash'    => __( 'No Team Member found in Trash.', 'CompaneyTextDomain' ),
    );
    $args = array(
        'labels'             => $args,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Team Members' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title' ),
        'menu_icon'          => 'dashicons-image-filter',
    );
    register_post_type( 'TeamMember', $args );

}
add_action( 'init', 'software_slider_section' );

// ACF json 

function software_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'software_acf_json_save_point' );



  
  /**
 * Add a sidebar.
 */
function software_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'CompaneyTextDomain' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'CompaneyTextDomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s mb-5 ">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'software_theme_slug_widgets_init' );

  /**
 * Add a Footer Widgets. section add
 */
function startup_footer_address_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Address', 'startup' ),
        'id'            => 'footer-address',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_footer_address_widget' );

// footer section 1 section add
function startup_footer_1_address_widget() {
    register_sidebar( array(
        'name'          => __( 'footer-1', 'startup' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_footer_1_address_widget' );

// footer section 2 section add
function startup_footer_2_address_widget() {
    register_sidebar( array(
        'name'          => __( 'footer-2', 'startup' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_footer_2_address_widget' );



// comment field bottom show

function software_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'software_move_comment_field' );






/**
 * Comment Form Placeholder Author, Email, URL
 */


 // change input text in wordpress comment form
 function software_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Your Name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Your Email"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'software_comment_form_fields' );

// change Comment text in wordpress comment form
function software_comment_textarea_placeholder( $args ) {
	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="Your Comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'software_comment_textarea_placeholder' );

// change submit button text in wordpress comment form
function software_change_submit_button_text( $defaults ) {
    $defaults['label_submit'] = 'Send';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'software_change_submit_button_text' );


// Theme Option with ACF 
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

//  serch widget
include_once get_template_directory().'/inc/widgets/serch-widget.php';


// tratup Category widget
include_once get_template_directory().'/inc/widgets/category-widget.php';

//  Recent Psot widget
include_once get_template_directory().'/inc/widgets/category-recentPsot.php';

// Psot Tag widget
include_once get_template_directory().'/inc/widgets/postTag-widget.php';

// Plan Text widget 
include_once get_template_directory().'/inc/widgets/plan-textWidget.php';
 
// Footer Address widget 
include_once get_template_directory().'/inc/widgets/footer-widgit.php';

// One click Demo Data Input
include_once get_template_directory().'/inc/one-click-demo-data.php';