<?php 

$quote_tittle = get_field('quote_tittle','options');
$quote_sub_tittle = get_field('quote_sub_tittle','options');
$quote_features = get_field('quote_features','options');
$quote_description = get_field('quote_description','options');
$quote_info_icome = get_field('quote_info_icome','options');
$quote_info_subtittle = get_field('quote_info_subtittle','options');
$quote_info_tittle = get_field('quote_info_tittle','options');

// Quote Form Short Code 
$queote_form_shortcode = get_field('queote_form_shortcode','options');

?>

 
 
 
 <!-- Quote Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo $quote_tittle ;?></h5>
                        <h1 class="mb-0"><?php echo $quote_sub_tittle ;?></h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4"> <?php echo $quote_description ;?></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="<?php echo $quote_info_icome;?> text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo $quote_info_tittle ;?></h5>
                            <h4 class="text-primary mb-0"><?php echo $quote_info_subtittle ;?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                       
                            <?php echo do_shortcode(".$queote_form_shortcode.");?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->