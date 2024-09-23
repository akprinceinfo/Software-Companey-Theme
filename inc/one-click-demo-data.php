<?php
// demo data input 
function software_ocdi_import_files() {
    return [
      [
        'import_file_name'           => 'Demo Import',
        'categories'                 => 'Category',
        'import_file_url'            => trailingslashit(get_template_directory().'demo-data/demo-data.xml'),
        'import_widget_file_url'     => trailingslashit(get_template_directory().'demo-data/widgets.wie'),
        'import_customizer_file_url' => 'http://www.your_domain.com/ocdi/customizer.dat',
      
        'import_preview_image_url'   => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
        'preview_url'                => 'http://www.your_domain.com/my-demo-1',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'software_ocdi_import_files' );


// Menu add 

  function software_ocdi_after_import_setup() {
    // Assign menus to their locations.
    $primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $footer1_menu = get_term_by( 'name', 'Footer 1 Menu', 'nav_menu' );
    $footer2_menu = get_term_by( 'name', 'Footer 2 Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary_menu' => $primary_menu->term_id, 
            'footer1_menu' => $footer1_menu->term_id,
            'footer2_menu' => $footer2_menu->term_id,
            // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'software_ocdi_after_import_setup' );


          