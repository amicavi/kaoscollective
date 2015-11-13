
		   		<div id="content" class="<?php echo tpo_indexwidewidth() ?>" >
				   <?php if ( is_search() ) { ?>
					<h2 class="pagetitle" ><?php _e('Search Results', THEME_SLUG ); ?></h2>
				   <?php } ?>
					<?php if (is_category()) {  /* If this is a category archive */ ?>
						<h2 class="pagetitle" ><?php  single_cat_title(); ?></h2>
					<?php } elseif( is_tag() ) {  /* If this is a tag archive */ ?>
						<h2 class="pagetitle" ><?php single_tag_title(); ?></h2>
					<?php } elseif (is_day()) {  /* If this is a daily archive */ ?>
						<h2 class="pagetitle" ><?php _e('Daily Archives:', THEME_SLUG); ?> | <?php the_time('F jS, Y'); ?></h2>
					<?php } elseif (is_month()) {  /* If this is a monthly archive */ ?>
						<h2 class="pagetitle" ><?php _e('Monthly Archives:', THEME_SLUG); ?> | <?php the_time('F, Y'); ?></h2>
					<?php } elseif (is_year()) {  /* If this is a yearly archive */ ?>
						<h2 class="pagetitle" ><?php _e('Yearly Archives:', THEME_SLUG); ?> | <?php the_time('Y'); ?></h2>
					<?php } elseif (is_author()) { /* If this is an author archive */ ?>
						<h2 class="pagetitle" ><?php _e('Posted By:', THEME_SLUG); ?> | <?php get_the_author_meta('display_name'); ?></h2>
					<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { /* If this is a paged archive */ ?>
						<h2 class="pagetitle" ><?php _e('Blog Archives', THEME_SLUG ) ?></h2>
					<?php } ?>
				
				
				
				<?php 
				/* The loop: the_post retrieves the content */
				if ( have_posts() ) : 
				?>
					<?php $post = $posts[0]; // Hack. Set  so that the_date() works. ?>
	
				<?php 
					while ( have_posts() ) : the_post();
				?>
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php 
				if ( TPO_BLOG_HIDE_THUMBNAIL != true ) :
					$width = THUMB_WIDTH;
					$height = THUMB_HEIGHT;
					$postimage = get_post_image($post->ID);
						if ($postimage) : 
							$postimg = tpo_image_resize( $height, $width, $postimage); ?>
								 <div class="home-feature-image" >
						<a class="load-blog-img" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
										<img src="<?php echo $postimg; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
									</a>
								</div>
						<?php 
						endif; 
				endif; ?>
   		<h2 class="home-post-title" ><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="home-blogmeta">
		<?php if ( TPO_BLOG_HIDE_DATE != true ) : ?>
			<span class="home-blogmeta-datetime" datetime="<?php echo get_the_time('F j, Y') ?>" ><?php echo get_the_time('F j, Y') ?></span>
		<?php endif; ?>
					<?php if ( TPO_BLOG_HIDE_AUTHOR != true ) : ?>
													<span class="home-blogmeta-author" ><?php echo get_the_author() ?></span> 
										<?php endif; ?>
					<?php if ( TPO_BLOG_HIDE_COMMENTCOUNT != true ) : ?>		
										<span  class="home-blogmeta-comment" ><?php comments_popup_link(__('No Comments', THEME_SLUG), __('1 Comment', THEME_SLUG), __('% Comments', THEME_SLUG)); ?></span>
		<?php endif;   ?>
		</div>
				<div class="post-content" >
		    	<?php tpo_the_excerpt(350); ?>
				</div>
	  		</div> <!-- Post End -->	  		<?php endwhile; ?>
	

			<div class="navigation">
				<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="alignleft"><?php next_posts_link(__('« Older Entries', THEME_SLUG )) ?></div>
					<div class="alignright"><?php previous_posts_link(__('Newer Entries »', THEME_SLUG )) ?></div>
				<?php } ?>
			</div>
		
		<?php else : ?>
	
			<h2 class="center"><?php __('Not Found', THEME_SLUG ) ?></h2>
			<p class="center"><?php __('Sorry, but you are looking for something that is not here.', THEME_SLUG ) ?></p>
			<?php get_search_form(); ?>
	
		<?php endif; ?>
		
	</div>  <!-- Content End -->
