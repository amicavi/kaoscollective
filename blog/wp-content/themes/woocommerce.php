<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

get_header(); ?>

<div class="container">
     <div class="row"> 
            <div class="content-wrapper woo-wrapper"  >
				<?php get_sidebar( 'left' ); ?>
                <div id="content" class="full" >
                
                <div  class="wp-title" >
                                <?php if ( get_post_type() == 'product' ) { ?>
                                    <?php if ( is_tax( 'product_cat' ) ) { ?>
                                      <h2 class="pagetitle" ><?php echo get_queried_object()->name; ?></h2> 
                                    <?php } elseif ( is_post_type_archive('product') ) { ?>
                                          <h2 class="pagetitle" ><?php _e('Shop', THEME_SLUG ); ?></h2>
                                    <?php } else { ?>
                                      <h2 class="pagetitle" ><?php _e('Shop', THEME_SLUG ); ?></h2>
                                   <?php } ?>
                                <?php } ?> 
                </div>
                    <div class="woocommerce">
                            <?php if(function_exists('woocommerce_content')) { woocommerce_content(); } ?>
                    </div>
    
                </div>  <!-- Content End -->

                <div class="sidebar col-md-4">
                    <?php
						global $hook;
                        if( !dynamic_sidebar( 'shop-widget-area'  )) {
                            $hook->hook('shop-widget-area');
                        }
                    ?>
                  </div>
  
            <div class="clear"></div>
		</div> <!-- Content Wrapper End -->
    </div>
</div>
<?php  get_footer(); ?>