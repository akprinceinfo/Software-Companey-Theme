
  <!-- =======================================
          -----  Header Area -----
    ======================================== -->
    <?php 
        get_header();
    ?>

<body <?php body_class(); ?>>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
        <?php include_once('template-parts/TopbarStart.php'); ?>
    <!-- Topbar End -->
    
    <!-- Navbar & Carousel Start -->
    <?php include_once('template-parts/Navbar_Carousel.php') ;?>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <?php include_once('template-parts/fullScreenSearch.php') ;?>
    <!-- Full Screen Search End -->
    

    <!-- Facts Start -->
    <?php include_once('template-parts/factsStart.php'); ?>
    <!-- Facts Start -->


    <!-- About Start -->
    <?php include_once('template-parts/about.php'); ?>
    <!-- About End -->


    <!-- Features Start -->
    <?php include_once('template-parts/features.php'); ?>
    <!-- Features End -->


    <!-- Service Start -->
    <?php include_once('template-parts/service.php') ;?>
    <!-- Service End -->

    
    <!-- Pricing Plan Start -->
    <?php include_once('template-parts/pricingPlan.php'); ?>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <?php include_once('template-parts/quote.php'); ?>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <?php include_once('template-parts/testimonial.php'); ?>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <?php include_once('template-parts/team.php'); ?>
    <!-- Team End -->


    <!-- Blog Start -->
    <?php include_once('template-parts/blog.php'); ?>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <?php include_once('template-parts/Vendor.php'); ?>
    <!-- Vendor End -->
    
      <!-- =======================================
          -----  Footer Area -----
    ======================================== -->
    <?php get_footer() ?>