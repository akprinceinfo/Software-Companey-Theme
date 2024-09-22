
<?php 

$choose_us_header = get_field('choose_us_header','options');
$chochoose_us_header_sub_tittleose_us_header = get_field('choose_us_header_sub_tittle','options');

?>


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $choose_us_header ;?></h5>
                <h1 class="mb-0"><?php echo $chochoose_us_header_sub_tittleose_us_header ;?></h1>
            </div>
            <div class="row g-5">
                <?php 
 
                $choose_us_details = get_field('choose_us_details','options');
                foreach($choose_us_details as $choose_us_detail){
                                   
                ?>

                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="<?php echo $choose_us_detail['choose_us_icone'] ?> text-white"></i>
                            </div>
                            <h4><?php echo $choose_us_detail['choose_us_name'] ?></h4>
                            <p class="mb-0"><?php echo $choose_us_detail['choose_us_details'] ?></p>
                        </div>
                    </div>
                </div>

                <?php
                }

                ?>


                
                <!-- <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?php #echo get_template_directory_uri() ?>/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div> -->
                <!-- <div class="col-lg-4">
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
                </div> -->
            </div>
        </div>
    </div>
    <!-- Features Start -->