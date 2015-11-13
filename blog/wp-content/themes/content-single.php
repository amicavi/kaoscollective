
	<div id="content" class="<?php echo tpo_widewidth() ?>" >
		<div class="container-post"  >
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php 
				if ( TPO_BLOG_HIDE_THUMBNAIL != true ) :
					$width = ''; $height = '';
					if (!$width) $width = SINGLE_IMAGE_WIDTH;
					if (!$height) $height = SINGLE_IMAGE_HEIGHT;
					$postimage = get_post_image($post->ID);
						if ($postimage) : 
							$postimg = tpo_image_resize( $height, $width, $postimage); ?>
								 <div class="feature-image" >
						<a class="load-blog-img" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
										<img src="<?php echo $postimg; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
									</a>
								</div>
						<?php 
						endif; 
				endif; ?>
   		<h2 class="post-title" ><?php the_title(); ?></h2>
		<div class="blog-meta">
		<?php if ( TPO_BLOG_HIDE_DATE != true ) : ?>
			<span class="blogmeta-datetime" datetime="<?php echo get_the_time('F j, Y') ?>" ><?php echo get_the_time('F j, Y') ?></span>
		<?php endif; ?>
					<?php if ( TPO_BLOG_HIDE_AUTHOR != true ) : ?>
													<span class="blogmeta-author" ><?php echo get_the_author() ?></span> 
										<?php endif; ?>
					<?php if ( TPO_BLOG_HIDE_COMMENTCOUNT != true ) : ?>		
										<span  class="blogmeta-comment" ><?php comments_popup_link(__('No Comments', THEME_SLUG), __('1 Comment', THEME_SLUG), __('% Comments', THEME_SLUG)); ?></span>
		<?php endif;   ?>
		</div>
				<?php the_content() ?>
	   			<?php if ( TPO_BLOG_HIDE_TAGS != true ) : ?>	               
					<?php $post_tags = wp_get_post_tags($post->ID);
					if(!empty($post_tags)) { ?>
						<div class="tag" ><?php the_tags( __('Tags', THEME_SLUG) . ': ', ', ', '<br />'); ?></div>
					<?php }  ?>
				<?php endif; ?>
   		</div> <!-- Post End -->
						<div class="container-author" >
							<?php if ( TPO_BLOG_HIDE_AUTHORBIO != true ) : ?>
								<div class="author-info-main">
									<h3><?php _e('About The Author', THEME_SLUG ); ?></h3>
									<?php tpo_author_info(); ?>
                               	</div>
							<?php endif; ?>
						</div>
					<?php comments_template(); ?>
					
			<?php endwhile; else : ?>
		
					<p><?php _e('Sorry, no posts matched your criteria.', THEME_SLUG ); ?></p>
		
			<?php endif; ?>
		</div>
	</div>  <!-- Content End -->
