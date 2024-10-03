<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package bakul
	*/

   $header_topbar_switch = get_theme_mod( 'header_topbar_switch', true );

   // Email id 
   $header_top_email = get_theme_mod( 'header_email', __( 'bakul@support.com', 'bakul' ) );

   // Phone Number
   $header_top_phone = get_theme_mod( 'header_phone', __( '+8801310-069824', 'bakul' ) );

   // Header Address Text
   $header_top_address_text = get_theme_mod( 'header_address', __( '76 San Fransisco Street. New York', 'bakul' ) );

   // Header charity Text
   $header_top_charity_text = get_theme_mod( 'header_top_charity_text', __( 'Connect with our charity', 'bakul' ) );

   // Header Address Link
   $header_top_address_link = get_theme_mod( 'header_address_link', __( '#', 'bakul' ) );


   // header right
   $bakul_header_right = get_theme_mod( 'header_right_switch', false );
   $bakul_header_menu_col = $bakul_header_right ? 'col-xl-8 d-none d-xl-block' : 'col-xl-10 d-none d-xl-block';
   $bakul_menu_position = $bakul_header_right ? 'text-xxl-start' : 'text-xxl-end menu-border-none';


   //side images    
   $bakul_side1 = get_template_directory_uri() .'/assets/img/sideimg/img1.png';
   $image1 = get_theme_mod( 'Sideimage1', $bakul_side1 );

   $bakul_side2 = get_template_directory_uri() .'/assets/img/sideimg/img2.png';
   $image2 = get_theme_mod( 'Sideimage2', $bakul_side1 );

   $bakul_side3 = get_template_directory_uri() .'/assets/img/sideimg/img3.png';
   $image3 = get_theme_mod( 'Sideimage3', $bakul_side1 );

   $bakul_side4 = get_template_directory_uri() .'/assets/img/sideimg/img4.png';
   $image4 = get_theme_mod( 'Sideimage4', $bakul_side1 );

   $bakul_side5 = get_template_directory_uri() .'/assets/img/sideimg/img5.png';
   $image5 = get_theme_mod( 'Sideimage5', $bakul_side1 );

   $bakul_side6 = get_template_directory_uri() .'/assets/img/sideimg/img6.png';
   $image6 = get_theme_mod( 'Sideimage6', $bakul_side1 );
   // header search btn 
   $header_search_switch = get_theme_mod( 'header_search_switch', true );
?>

<!-- header start here -->
<div class="header">
    <div class="header__top">
        <div class="container-xl container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-xl-2">
                    <div class="left">
                        <div class="header__logo">
                            <?php bakul_header_logo(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-9">
                    <div class="right">
                        <div class="bar d-xl-none d-block">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="header__nav target">
                            <!-- small device logo -->
                            <div class="mobilelogo d-xl-none d-block">
                                <?php bakul_header_logo();?>
                            </div>
                            <div class="mainactive activescroll">
                                <?php bakul_header_menu(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none">
                    <div class="header__sidebar">
                        <div class="bar f-right">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-menu-main d-xl-block d-none">
            <div class="sideheader">
                <div class="logo">
                    <?php bakul_header_logo(); ?>
                </div>
                <div class="icon">
                    <i class="fas fa-times crose"></i>
                </div>
            </div>
            <div class="side-info">
                <div class="contact-list">
                    <h6>Phone Number</h6>
                    <p>+01618848481</p>
                    <p>+01778848481</p>
                </div>
            </div>
            <div class="side-info">
                <div class="contact-list">
                    <h6>Gamil</h6>
                    <p>mdbakul51@gamil.com</p>
                </div>
            </div>
            <div class="allsocial-icon">
                <h6>Fellow Me</h6>
                <?php bakul_header_social_profiles() ?>
            </div>
            <div class="allphoto">
                <div class="row g-1">
                    <div class="col-xl-4">
                        <div class="item imghover">
                            <a href="<?php print esc_url( home_url( '/' ) );?>">
                                <img src="<?php echo esc_url($image1); ?>" alt="bakul">
                            </a>
                            <div class="inneritem go-up">
                                <div class="upitem search">
                                    <a href="<?php echo esc_url($image1); ?>" data-rel="lightcase:myCollections">
                                        <i class="fa-sharp fa-regular fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="item imghover">
                            <a href="<?php print esc_url( home_url( '/' ) );?>"><img
                                    src="<?php echo esc_url($image2); ?>" alt="bakul"></a>
                            <div class="inneritem go-up">
                                <div class="upitem search">
                                    <a href="<?php echo esc_url($image2); ?>" data-rel="lightcase:myCollections">
                                        <i class="fa-sharp fa-regular fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="item imghover">
                            <a href="<?php print esc_url( home_url( '/' ) );?>"><img
                                    src="<?php echo esc_url($image3); ?>" alt="bakul"></a>
                            <div class="inneritem go-up">
                                <div class="upitem search">
                                    <a href="<?php echo esc_url($image3); ?>" data-rel="lightcase:myCollections">
                                        <i class="fa-sharp fa-regular fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="item imghover">
                            <a href="<?php print esc_url( home_url( '/' ) );?>"><img
                                    src="<?php echo esc_url($image4); ?>" alt="bakul"></a>
                            <div class="inneritem go-up">
                                <div class="upitem search">
                                    <a href="<?php echo esc_url($image4); ?>" data-rel="lightcase:myCollections">
                                        <i class="fa-sharp fa-regular fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="item imghover">
                            <a href="<?php print esc_url( home_url( '/' ) );?>"><img
                                    src="<?php echo esc_url($image5); ?>" alt="bakul"></a>
                            <div class="inneritem go-up">
                                <div class="upitem search">
                                    <a href="<?php echo esc_url($image5); ?>" data-rel="lightcase:myCollections">
                                        <i class="fa-sharp fa-regular fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="item imghover">
                            <a href="<?php print esc_url( home_url( '/' ) );?>"><img
                                    src="<?php echo esc_url($image6); ?>" alt="bakul"></a>
                            <div class="inneritem go-up">
                                <div class="upitem search">
                                    <a href="<?php echo esc_url($image6); ?>" data-rel="lightcase:myCollections">
                                        <i class="fa-sharp fa-regular fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end here -->

<!-- header area end -->
<?php get_template_part( 'template-parts/header/header-side-info' ); ?>