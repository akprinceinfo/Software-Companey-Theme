<html lang="en">

<head>
    <meta charset="<?php language_attributes();?>">
    <meta charset="<?php bloginfo('charset') ?>">
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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
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
                <!-- <ul>
                    <li>
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                    </li>
                    <li>
                        <a href="about.html" class="nav-item nav-link">About</a>
                    </li>
                    <li>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                    </li>
                    
                    
                    
                    
                    <li>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    </li>
                    <ul>
                        <li><a href="blog.html" class="dropdown-item">Blog Grid</a></li>
                        <li><a href="detail.html" class="dropdown-item">Blog Detail</a></li>
                    </ul>
                       
                    <li>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>    
                    </li>
                    <ul>
                        <li> <a href="price.html" class="dropdown-item">Pricing Plan</a></li>
                        <li><a href="feature.html" class="dropdown-item">Our features</a></li>
                        <li><a href="team.html" class="dropdown-item">Team Members</a></li>
                        <li><a href="testimonial.html" class="dropdown-item">Testimonial</a></li>
                        <li> <a href="quote.html" class="dropdown-item">Free Quote</a></li>
                    </ul>
					<li>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </li>
                    
                </ul> -->

                <!-- </div> -->
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
            <!-- carousel active   -->
                <?php
                    $args = array(
                        'post_type' => 'sliderAdd',
                        'posts_per_page' => 3,
                    );

                    $query = new WP_Query($args);
                    $i = 0;
                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();
                            $i++;
                        
                        $slider_subtitle = get_field('slider_sub-title');
                        $slider_button_text = get_field('slider_button_1text');
                        $slider__button_1url = get_field('slider_button_1url');
                        $slider_button_2_text = get_field('slider_button_2_text');
                        $slider_slider_button_2url = get_field('slider_button_2url');
                    ?>

                        <div class="carousel-item  <?php if($i==1) echo 'active'; ?>">
                            <img class="w-100" src="<?php the_post_thumbnail_url();  ?>" alt="<?php the_title();?>">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo $slider_subtitle ;?></h5>
                                    <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php the_title(); ?></h1>
                                    <a href="<?php echo $slider__button_1url ;?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $slider_button_text ;?></a>
                                    <a href="<?php echo $slider_slider_button_2url ;?>" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $slider_button_2_text ; ?></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                    wp_reset_postdata();
                }
                ?>

                
                <!-- <div class="carousel-item">
                    <img class="w-100" src="<?php  echo get_template_directory_uri() ?>/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & 2</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->