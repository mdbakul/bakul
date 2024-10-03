<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bakul
 */

$bakul_blog_btn = get_theme_mod( 'bakul_blog_btn', __('Read More','bakul') );
$bakul_blog_btn_switch = get_theme_mod( 'bakul_blog_btn_switch', true );

?>
<?php if ( !empty( $bakul_blog_btn_switch ) ): ?>
<div class="blogbtn">
    <a class="allbtn" href="<?php the_permalink();?>"><span><?php print esc_html( $bakul_blog_btn );?></span></a>
</div>
<?php endif;?>