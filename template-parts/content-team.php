 
 
<?php 

    $team_members_tittle = get_field('team_members_tittle','options');
    $team_members_sub_tittle = get_field('team_members_sub_tittle','options');

?>
 
 
 
 <!-- Team Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $team_members_tittle ;?></h5>
                <h1 class="mb-0"><?php echo $team_members_sub_tittle; ?></h1>
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
                            <!-- icon  -->
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