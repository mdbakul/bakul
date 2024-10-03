 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bakul
 */
$categories = get_the_terms( $post->ID, 'category' );
$bakul_blog_cat = get_theme_mod( 'bakul_blog_cat', false );
$bakul_social_share_switch = get_theme_mod( 'bakul_social_share_switch', false );
  
$tag_col_number= $bakul_social_share_switch ? "col-xl-7 col-lg-6 col-md-6" : "col-12";

if ( is_single() ) : ?>

 <article id="post-<?php the_ID();?>">
     <?php if ( has_post_thumbnail() ): ?>
     <div class="thum imghover">
         <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
     </div>
     <?php endif; ?>
     <div class="blogsingle__content">
         <div class="heading">
             <h4><?php the_title(); ?></h4>
             <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
             <?php the_content(); ?>
         </div>
         <div class="postbox__text">
             <?php if(has_tag()) : ?>
             <div class="postbox__details-share-wrapper">
                 <div class="row">
                     <div class="<?php echo esc_attr($tag_col_number); ?>">
                         <div class="postbox__details-tag tagcloud">
                             <span><?php echo esc_html__('Tag:','bakul'); ?></span>
                             <?php
                         $tags = get_the_tags(); // Assuming you are within the loop
                         if ($tags) {
                             
                             foreach ($tags as $tag) {
                                 echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                            }
                        }
                     ?>
                         </div>
                     </div>
                     <?php if(function_exists('bakul_blog_social_share') && !empty($bakul_social_share_switch)) : ?>
                     <div class="col-xl-5 col-lg-6 col-md-6">
                         <div class="postbox__details-share text-lg-end">
                             <?php bakul_blog_social_share(); ?>
                         </div>
                     </div>
                     <?php endif; ?>
                 </div>
             </div>
             <?php endif; ?>
         </div>
 </article>

 <?php else: ?>

 <div class="col-md-6">
     <div class="blog__item">
         <div class="blog__inner">
             <?php if ( has_post_thumbnail() ): ?>
             <div class="thumb">
                 <a href="<?php the_permalink();?>">
                     <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                 </a>
             </div>
             <?php endif; ?>
             <div class="content">
                 <div class="text">
                     <h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                     <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
                     <?php the_content(); ?>
                 </div>
                 <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
             </div>
         </div>
     </div>
 </div>

 <?php endif;?>