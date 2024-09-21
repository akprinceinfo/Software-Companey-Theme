
<html lang="<?php language_attributes();?>" class="no-js" >
<head>
    <meta charset="<?php language_attributes();?>"> 
    <meta charset="<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

<?php wp_head() ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
    
                   
                    
                <?php
                    
                    $header_infos = get_field('header_info', 'options');
                        foreach($header_infos as $info) {
                    ?>
                       <small class="me-3 text-light"><i class="<?php echo $info['header_icon'] ?>"> </i><?php echo $info['header_info'] ?></small>
                    <?php
                    }
                ?>

                    
                    <!-- <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small> -->
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                <?php
                    
                    $header_icon = get_field('header_social_icone', 'option');
                        foreach($header_icon as $socalIcon) {
                    ?>
                       <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="<?php echo $socalIcon['header_socal_icon_link']?>"><i class="<?php echo $socalIcon['header_socal_icon']?>"></i></a>
                    <?php
                    }
                ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0" id="hrader_logo">
                    <img src="<?php echo get_theme_mod('theme_logo'); ?>" alt="" srcset="">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- <div class="navbar-nav ms-auto py-0"> -->
                   
                   <?php          
                        wp_nav_menu(array(
                            'theme-location'=>'primary-menu',
                            'menu_class'	=> "navbar-nav ms-auto py-0", 
                            'container' => 'false',
                        ));
                    ?>
            </div>
        </nav>

      
    </div>
    <!-- Navbar & Carousel End -->