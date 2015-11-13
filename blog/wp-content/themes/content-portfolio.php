
	<div id="content" class="<?php echo tpo_widewidth() ?>" >

		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h2 class="post-title" ><?php the_title(); ?></h2>
				<?php 
					if (!$width) $width = SINGLE_IMAGE_WIDTH;
					if (!$height) $height = SINGLE_IMAGE_HEIGHT;
					$postimage = get_post_meta($post->ID, '_post_image', true);
						if ($postimage) : 
							$postimg = tpo_image_resize( $height, $width, $postimage); ?>
                               	<?php if ( get_post_meta($post->ID, '_post_featuretype', true) == 'video' ) { ?>
                               	 	<div class="feature-image" style="float:none" >
                                 		<div class="viewport" ><iframe width="<?php echo $width; ?>"  height="<?php echo $height; ?>"  src="<?php echo  get_post_meta($post->ID, '_post_video_link', true)  ?>" frameborder="0" allowfullscreen></iframe></div>
                                    </div>
                               <?php  } else { ?>
                                    <div class="feature-image" >
                                        <a class="lightbox" href="#" >
                                            <img src="<?php echo $postimg; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                        </a>
                                    </div>
                             	<?php } ?>

						<?php 
						endif; 
				 ?>
   			        <?php 
						if ( !get_post_meta($post->ID, '_extra_info', true) == true ) :
							$columnstyle = 'style="width:100%;"';
						endif;
					?>
                    <div class="portfolio-detail">
                    	<div class="portfolio-description" <?php echo $columnstyle; ?> >
                        	<h4><?php echo __('Project Description', THEME_SLUG ) ?></h4>
								<?php the_content() ?>
                        </div>
                    <?php if ( get_post_meta($post->ID, '_extra_info', true) == true ) : ?>
                        <div class="portfolio-info" >
                            	<?php if(get_the_term_list($post->ID, 'portfolio_category', '', '<br />', '')): ?>
                                <div class="portfolio-info-box">
                                    <h5><?php echo __('Categories', THEME_SLUG ) ?>:</h5>
									<div class="portfolio-terms" ><?php echo get_the_term_list($post->ID, 'portfolio_category', '', '<br />', ''); ?></div>
                                </div>
                            	<?php endif; ?>   
                            	<?php if(get_the_term_list($post->ID, 'portfolio_skill', '', '<br />', '')): ?>
                                <div class="portfolio-info-box">
                                    <h5><?php echo __('Skills', THEME_SLUG ) ?>:</h5>
									<div class="portfolio-terms" ><?php echo get_the_term_list($post->ID, 'portfolio_skill', '', '<br />', ''); ?></div>
                                </div>
                            	<?php endif; ?> 
								<?php if(get_post_meta($post->ID, '_project_url', true) && get_post_meta($post->ID, '_project_url_text', true)): ?>
                                <div class="portfolio-info-box">
                                    <h5><?php echo __('Project URL', THEME_SLUG) ?>:</h5>
                                    <span><a href="<?php echo get_post_meta($post->ID, '_project_url', true); ?>"><?php echo get_post_meta($post->ID, '_project_url_text', true); ?></a></span>
                                </div>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID, '_copyright_url', true) && get_post_meta($post->ID, '_copyright_url_text', true)): ?>
                                <div class="portfolio-info-box">
                                    <h5><?php echo __('Copyright', THEME_SLUG); ?>:</h5>
                                    <span><a href="<?php echo get_post_meta($post->ID, '_copyright_url', true); ?>"><?php echo get_post_meta($post->ID, '_copyright_url_text', true); ?></a></span>
                                </div>
                                <?php endif; ?>
                      	</div>
                    <?php endif; ?>
                    </div>
   		</div> <!-- Post End -->



					
		<?php endwhile; else : ?>
	
				<p><?php _e('Sorry, no posts matched your criteria.', THEME_SLUG ); ?></p>
	
		<?php endif; ?>
		
	</div>  <!-- Content End -->
