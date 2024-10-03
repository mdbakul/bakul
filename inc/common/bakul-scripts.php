<?php

/**
 * bakul_scripts description
 * @return [type] [description]
 */
function bakul_scripts() {

    /**
     * all css files
    */ 

    wp_enqueue_style( 'bakul-fonts', bakul_fonts_url(), array(), '1.0.0' );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', BAKUL_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', BAKUL_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'fontawasome.css', BAKUL_THEME_CSS_DIR . 'fontawasome.css', [] );
    wp_enqueue_style( 'lightcase.css', BAKUL_THEME_CSS_DIR . 'lightcase.css', [] );
    wp_enqueue_style( 'swiper-bundle', BAKUL_THEME_CSS_DIR . 'swiper-bundle.min.css', [] );
    wp_enqueue_style( 'bakul-core', BAKUL_THEME_CSS_DIR . 'bakul-core.css', [], time() );
    wp_enqueue_style( 'bakul-style', get_stylesheet_uri() ); 
    
    // all js
    wp_enqueue_script( 'bootstrap-bundle', BAKUL_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'isotope.pkgd', BAKUL_THEME_JS_DIR . 'isotope.pkgd.min.js', [ 'jquery' ], '', true );    
    wp_enqueue_script( 'lightcase', BAKUL_THEME_JS_DIR . 'lightcase.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', BAKUL_THEME_JS_DIR . 'swiper-bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery.syotimer', BAKUL_THEME_JS_DIR . 'jquery.syotimer.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'slick', BAKUL_THEME_JS_DIR . 'viewport.jquery', [ 'jquery' ], '', true ); 
    wp_enqueue_script( 'function', BAKUL_THEME_JS_DIR . 'function.js', [ 'jquery' ], '', true ); 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bakul_scripts' );


/*
Register Fonts
 */
function bakul_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bakul' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap';
    }
    return $font_url;
}