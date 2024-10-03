<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bakul
 */
$bakul_error_404 = get_theme_mod('bakul_error_404', __("404 ", 'bakul'));
$bakul_error_title = get_theme_mod('bakul_error_title', __("Sorry We Can't Find That Page! ", 'bakul'));
$bakul_error_text = get_theme_mod('bakul_error_text', __("Oops! The page you are looking for does not exist. It might have been moved or deleted. ", 'bakul'));
$bakul_error_link_text = get_theme_mod('bakul_error_link_text', __('Back To Home', 'bakul'));


get_header();
?>

<div class="tp-error__area pt-120 pb-120">
   <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="tp-error-content-box text-center">
                  <div class="tp-error-thumb-box pb-75">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error/thumb-1.png" alt="">
                  </div>
                  <div class="tp-error-content">
                     <h4 class="tp-error-title"><?php print esc_html($bakul_error_title);?></h4>
                     <a class="tp-btn-black red-bg-2" href="<?php print esc_url(home_url('/'));?>"><span><?php print esc_html($bakul_error_link_text);?></span></a>
                  </div>
               </div>
            </div>
         </div>
   </div>
</div>

<?php
get_footer();
