<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

get_header(); ?>


    	
            <div class="content-wrapper"  >
                <?php get_sidebar( 'left' ); ?>
                    <div id="content" class="<?php echo tpo_widewidth() ?>" >
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="post" id="post-<?php the_ID(); ?>">
						    <h2 class="post-title" ><?php the_title(); ?></h2>
                            <div class="entry">
                                <?php the_content(""); ?>
                
                                <?php wp_link_pages(array("before" => "<p><strong>Pages:</strong> ", "after" => "</p>", "next_or_number" => "number")); ?>
                
                            </div> <!-- Entry End -->
                        </div>  <!-- Post End -->
                        <?php endwhile; endif; ?>
                    
                    </div>  <!-- Content End -->
            <?php get_sidebar( 'right' ); ?>
        	<div class="clear"></div>
        </div> <!-- Content Wrapper End -->
	
<?php  get_footer(); ?>