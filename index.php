
    <!-- Header area and Nav Area  -->
    <?php get_header( ); ?>

    <!-- ===================== -->
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
    <!-- ===================== -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best IT Solution With 10 Years of Experience</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo get_template_directory_uri() ?>/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?php echo get_template_directory_uri() ?>/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <?php
                     $args = array(
                        'post_type' => 'Services',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);
                    $i = 0;
                    if($query->have_posts()) {
                        while($query->have_posts()){
                            $query->the_post();
                            $i++;

                            $Services_icon = get_field('services-icon');
                            $Services_url = get_field('services_url');
                ?>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="<?php echo $Services_icon;?> text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo the_title(); ?></h4>
                        <p class="m-0"><?php echo the_content(); ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $Services_url;?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <?php
                        }
                        wp_reset_postdata();
                    }
                    
                ?>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0">
                <?php 
                    $args = array(
                        'post_type' => 'Prices',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);
                    $i = 0;
                    $time = 0.6;
                    if($query->have_posts()) {
                        while($query->have_posts()){
                            $query->the_post();
                            $i++;
                            
                            $pricing_desc = get_field('description');
                            $prices_currency = get_field('prices_currency');
                            $price_deaeration = get_field('price_deaeration');
                            $price_features = get_field('price_feature');
                            $price_btn_text = get_field('price_btn_text');
                            $price_btn_url = get_field('price_btn_url');
                            $price_amount = get_field('price_amount');
                    
                ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="<?php  if ($i % 2 == 0) {
                        echo "bg-white shadow";
                    }else {
                        echo "bg-light";
                    } ?> rounded ">

                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo the_title(); ?></h4>
                            <small class="text-uppercase"><?php echo $pricing_desc;?></small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $prices_currency['value'];?></small><?php echo $price_amount; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"><?php echo $price_deaeration['label'];?></small>
                            </h1>
                            <?php 
                                foreach($price_features as $price_feature){
                            ?>
                                <div class="d-flex justify-content-between mb-3"><span><?php echo $price_feature['price_feature_title'] ?> </span><i class="<?php if($price_feature['price_feature_active']['value'] == 'hide'){echo 'fa fa-times text-danger pt-1';}else{ echo 'fa fa-check text-primary pt-1' ;}; ?>"></i></div>
                            <?php
                                }
                            
                            ?>
                            
                            <a href="<?php echo $price_btn_url; ?>" class="btn btn-primary py-2 px-4 mt-4"><?php echo $price_btn_text; ?></a>
                        </div>
                    </div>
                </div>

                <?php 
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <?php 
                    $args_check = array(
                        'post_type' => 'Testimonial',
                        'posts_per_page' => 4,
                    );
                    $query = new WP_Query($args_check);

                    if ($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();

                            $testimonial_Client_image= get_field('client_image');
                            $testimonial_Client_profession= get_field('profession');
                            $testimonial_client_description= get_field('client_description');
                    ?>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="<?php echo $testimonial_Client_image ?>" style="width: 60px; height: 60px;" >
                            <div class="ps-4">
                                <h4 class="text-primary mb-1"><?php echo the_title();?></h4>
                                <small class="text-uppercase"><?php echo $testimonial_Client_profession ;?></small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            <?php echo $testimonial_client_description ;?>
                        </div>
                    </div>

                    <?php
                        }
                        wp_reset_postdata();
                    }
                    
                    
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <?php 
                    $args_check = array(
                        'post_type' => 'TeamMember',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args_check);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                           $query->the_post();

                           $teamMembers_designation = get_field('designation');
                           $teamMembers_team_members_photo = get_field('team_members_photo');
                           $teamMembers_socil_icons = get_field('socal_icone_list');
                    ?>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo $teamMembers_team_members_photo; ?>" alt="<?php echo the_title(); ?>">
                            <div class="team-social">

                            <?php 
                                foreach($teamMembers_socil_icons as $teamMembers_socil_icon){
                            ?>

                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?php echo $teamMembers_socil_icon['team_socal_icon_link'];?>"><i class="<?php echo $teamMembers_socil_icon['team_socal_icon'] ;?>"></i></a>

                                <?php } ?>

                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary"><?php echo the_title(); ?></h4>
                            <p class="text-uppercase m-0"><?php echo $teamMembers_designation ;?></p>
                        </div>
                    </div>
                </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }  
                ?>
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                       
                        //user Name Show
                        $author_id = get_the_author_meta( 'ID' ); 
                        $author_name = get_the_author_meta( 'display_name', $author_id );

                        //Post Date
                        $post_date = get_the_date( 'F j, Y' );
                        //category add
                        $categories = get_the_category();

            ?>

                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $categories[0]->name ;?></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $author_name ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $post_date; ?></small>
                            </div>
                            <h4 class="mb-3"><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                            <a class="text-uppercase" href="<?php the_permalink(); ?>">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php
                    }
                    wp_reset_postdata();    
                }
                
                ?>
            </div>
        </div>
    </div>
    <!-- Blog Start -->



    
    <!-- Footer Start -->
     <?php get_footer(); ?>