 <!-- header  -->
 <?php 
    
    /*
        Template Name: Template Home
    */

    ?>

    <?php get_header(); ?>

    <!-- ========== Slider Start =========== -->
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
                                    <!-- Button Validation  1 -->
                                    <?php 
                                        if ($slider_button_text) {
                                    ?>
                                    <!-- esc_url : link chack because validation  -->
                                    <a href="<?php echo esc_url($slider__button_1url) ;?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $slider_button_text ;?></a>
                                    <?php
                                        }
                                    ?>
                                    <!-- Button Validation  2 -->
                                    <?php 
                                        if ($slider_button_2_text) {
                                    ?>
                                        <a href="<?php echo esc_url($slider_slider_button_2url) ;?>" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $slider_button_2_text ; ?></a>
                                    <?php
                                        }
                                    
                                    ?>
                                    
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
                <!-- esc_html : Html text show and textdomain -->
                <span class="visually-hidden"><?php echo esc_html__('Previous','CompaneyTextDomain'); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo esc_html__('Next','CompaneyTextDomain'); ?></span>
            </button>
        </div>
    <!-- ========== Slider End =========== -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                

                <?php 
                    $i = 0;
                    //general is id and options default
                    $counters = get_field('general', 'options');
                    foreach($counters as $counter){
                    $i++;
                ?>
                    <!-- esc_attr : Securety -->
                <div class="col-lg-4 wow <?php echo esc_attr($counter['counter_animation']);?>" data-wow-delay="<?php echo esc_attr($counter['counter_delay']);?>">
                    <div class="<?php if (($i % 2) == 0){echo "bg-light";}else echo "bg-primary"; ?> shadow d-flex align-items-center justify-content-center p-4 " style="height: 150px;">
                        <div class="<?php if (($i % 2) == 0){echo "bg-primary";}else echo"bg-white"; ?> d-flex align-items-center justify-content-center rounded mb-2 FactsIcon" style="width: 60px; height: 60px;">

                            <i class="<?php echo esc_attr($counter['counter_icone']);?> <?php if (($i % 2) == 0){echo "text-white";}else echo"text-primary"; ?>"></i>

                        </div>
                        <div class="ps-4">
                            <h5 class="<?php if (($i % 2) == 0){echo "text-primary";}else echo"text-white"; ?> mb-0"><?php echo $counter['counter_name'];?></h5>
                            <h1 class="<?php if (($i % 2) == 0){echo "";}else echo"text-white"; ?> mb-0" data-toggle="counter-up"><?php echo $counter['counter_number'];?></h1>
                        </div>
                    </div>
                </div>

                <?php
                    }
                
                ?>

            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <?php  get_template_part('template-parts/content','about'); ?>
    <!-- About End -->


    <!-- Features Start -->
    <?php  get_template_part('template-parts/content','features'); ?>
    <!-- Features Start -->


    <!-- Service Start -->
    <?php  get_template_part('template-parts/content','service'); ?>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <?php  get_template_part('template-parts/content','pricing'); ?>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <?php  get_template_part('template-parts/content','quote'); ?>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <?php  get_template_part('template-parts/content','testimonial'); ?>
    <!-- Testimonial End -->

    
    <!-- Team Start -->
    <?php  get_template_part('template-parts/content','team'); ?>
    <!-- Team End -->


    <!-- Blog Start -->
    <?php  get_template_part('template-parts/content','blog'); ?>
    <!-- Blog Start -->



    
    <!-- Footer Start -->
     <?php get_footer(); ?>