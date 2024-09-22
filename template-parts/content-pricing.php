
<?php 

$pricing_plans_header = get_field('pricing_plans_header','options');
$pricing_plans_subtittle = get_field('pricing_plans_subtittle','options');

?>




<!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $pricing_plans_header ?></h5>
                <h1 class="mb-0"><?php echo $pricing_plans_subtittle ?></h1>
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