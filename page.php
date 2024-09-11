<?php get_header(); ?>

        <section class="page-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-content pt-5">
                            <?php 

                                while (have_posts()) {
                                    the_post();
                                
                            ?>
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>