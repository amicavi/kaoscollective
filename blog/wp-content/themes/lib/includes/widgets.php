<?php

	$tabwidgets = array( 'Archives', 'Calendar', 'Categories', 'Links', 'Meta', 'Pages', 'RecentComments', 'RecentPosts','PopularPosts', 'Tag_Cloud');

    function tpo_widget($widget,  $instance = false, $args = array('before_widget' => '<div class="sidebar-widget">','after_widget' => '</div>', 'before_title' => '<h2 class="widget-title">','after_title' => '</h2>')) 
    {
		global $tpowidgetopt;
        $widget_name = $widget;
        $custom_widgets = array('Banners', 'RecentPosts', 'PopularPosts','RecentComments', 'Contact','ContactInfo','Flickr', 'Social', 'Twitter', 'Facebook', 'FeedBurner' , 'GravatarComment' );
        $wp_widgets = array('Archives', 'Calendar', 'Categories', 'Links', 'Meta', 'Pages', 'Recent_Comments', 'Recent_Posts', 'RSS', 'Search', 'Tag_Cloud', 'Text');
        
        if (in_array($widget, $custom_widgets)) {
            $widget_name = 'tpo_' . strtolower($widget_name) . '_widget';
            if(!$instance) {
                $instance = $tpowidgetopt->options[ strtolower($widget) . '_widget_defaults'];
            } else {
                $instance = array_merge( $tpowidgetopt->options[ strtolower($widget) . '_widget_defaults'] , $instance);
            }
            
        } elseif (in_array($widget, $wp_widgets)) {
            $widget_name = 'WP_Widget_' . $widget_name;
        }
        the_widget($widget_name , $instance, $args);
    }
    
class tpo_widgetOptions{
	
	var $options = array();
	
	function tpo_widgetOptions(){
      
		$this->options['facebook_widget_defaults'] = array(
			'title' => __('Facebook', THEME_SLUG ),
			'fb_url' => 'http://www.facebook.com/platform',
			'width' => '255',
			'height' => '255',
			'color_scheme' => 'light',
			'show_faces' => 'true',
			'data_stream' => 'false',
			'show_header' => 'false',
			'border_color' => '#fff'
		);
		
		$this->options['recentposts_widget_defaults'] = array(
			'title' => __('Recent Posts' , THEME_SLUG ),
			'num' => 3,
			'thumb' => 'true',
			'thumb_h' => 55,
			'thumb_w' => 55,
			'cat' => '',
			'date' => 'true',
			'comments' => 'true',
			'excerpt_length' => ''
		);

		$this->options['recentnews_widget_defaults'] = array(
			'title' => __('Recent News' , THEME_SLUG ),
			'num' => 3,
			'thumb' => 'true',
			'thumb_h' => 55,
			'thumb_w' => 55,
			'cat' => '',
			'date' => 'true',
			'comments' => 'true',
			'excerpt_length' => ''
		);

		$this->options['popularposts_widget_defaults'] = array(
			'title' => __('Popular Posts' , THEME_SLUG ),
			'num' => 3,
			'thumb' => 'true',
			'thumb_h' => 55,
			'thumb_w' => 55,
			'cat' => '',
			'date' => 'true',
			'comments' => 'true',
			'excerpt_length' => ''
		);

		$this->options['recentcomments_widget_defaults'] = array(
			'title' => __('Recent Comments' , THEME_SLUG ),
			'count' => 5,
			'gravatar' => '48',
			'alternative' => ''
		);

			
    	$this->options['social_widget_defaults'] = array(
			'title' => __('Social Profiles' , THEME_SLUG ),
			'facebook' => 'https://www.facebook.com/zebrathemes',
			'twitter' => 'https://www.twitter.com/wpzebrathemes',
			'rss' => 'http://www.zebrathemes.com/feed/'
        );

    	$this->options['feedburner_widget_defaults'] = array(
			'title' => __('Newsletter Signup' , THEME_SLUG ),
			'header_text' => __('Subscribe to our email newsletter for latest tips.' , THEME_SLUG ),
			'feedburderid' => 'contact@zebrathemes.com',
			'button_text' => __('Sign Up Now' , THEME_SLUG ),
			'footer_text' => ''
        );


		$instance['title'] 			= isset ( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['header_text'] 	= isset ( $new_instance['header_text'] ) ? strip_tags( $new_instance['header_text'] ) : '';
		$instance['feedburderid'] 	= isset ( $new_instance['feedburderid'] ) ? strip_tags( $new_instance['feedburderid'] ) : '';
		$instance['button_text']	= isset ( $new_instance['button_text'] ) ? strip_tags( $new_instance['button_text'] ) : '';
		$instance['footer_text']	= isset ( $new_instance['footer_text'] ) ? strip_tags( $new_instance['footer_text'] ) : '';

    	$this->options['twitter_widget_defaults'] = array(
			'title' => __('Recent Tweets' , THEME_SLUG ),
			'id' => 'wpzebrathemes',
			'number' => 5
        );
 
    	$this->options['flickr_widget_defaults'] = array(
			'title' => __('Flickr' , THEME_SLUG ),
			'id' => 'zebrathemes',
			'number' => 5
        );
		
    	$this->options['contact_widget_defaults'] = array(
			'title' => __('Contact Us' , THEME_SLUG ),
			'E-mail' => 'mail@email.com',
        );

		
    	$this->options['contactinfo_widget_defaults'] = array(
			'title' => __('Contact Us' , THEME_SLUG ),
			'color' => 'color',
			'text' => 'text',
			'phone' => 'phone',
			'cellphone' => 'cellphone',
			'email' => 'email',
			'address' => 'address',
			'city' => 'city',
			'state' => 'state',
			'zip' => 'zip',
			'name' => 'name',
        );

	}
}
$tpowidgetopt = new tpo_widgetOptions();

add_action('widgets_init', create_function('', 'return register_widget("tpo_popularposts_widget");'));

class tpo_popularposts_widget extends WP_Widget {
    function tpo_popularposts_widget() {
		global $themeTitle;
		$options = array('classname' => 'tpo-popularpost-widget', 'description' => __( "Show popular posts on sidebars." , THEME_SLUG) );
		$this->WP_Widget('tpo-popular-posts', __('Zebra Themes - Popular Posts'  , THEME_SLUG ), $options);
    }

	function widget($args, $instance) {
		global $post;
		$post_old = $post;
		extract( $args );
		$sizes = get_option('tpo_cat_post_thumb_sizes');

			$excerpt_length = isset($instance['excerpt_length']) ? (int) esc_attr($instance['excerpt_length']) : '';
			$post_category = isset($instance["cat"]) ? esc_attr($instance["cat"]) : '';
			$number = isset($instance['num']) ? (int) esc_attr($instance['num']) : '';
			$thumbnail = isset($instance['thumb']) ? esc_attr($instance['thumb']) : '';
			$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : '';
			$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : '';
			$post_date = isset($instance['date']) ? esc_attr($instance['date']) : '';
			$post_comments = isset($instance['comments']) ? esc_attr($instance['comments']) : '';
			$title = isset($instance["title"]) ? esc_attr($instance["title"]) : '';


			// numbernumberof posts to show
			if ( !$number ) {
				$number = 3;	// default
			}else if ( $number < 1 ) {
				$number = 1;	// minimum
			}else if ( $number > 15 ) {	
				$number = 15;	// maximum
			}
				
			// length of excerpt
			if ( !$excerpt_length  ) {
				$excerpt_length = '';	// default
			} else if ( $excerpt_length < 0 ) {
				$excerpt_length = 0;	// minimum
			} else if ( $excerpt_length > 150 ) {
				$excerpt_length = 150;	// maximum
			}
			
			// thumbnail width
			if ( !$thumb_w ) {
				$thumb_w = 55;	// default
			}else if ( $thumb_w <= 16 ) {
				$thumb_w = 16;	// minimum
			}else if ( $thumb_w > 450 ) {
				$thumb_w = 450;	// maximum
			}

			// thumbnail height
			if ( !$thumb_h ) {
				$thumb_h = 55;	// default
			}else if ( $thumb_h <= 16 ) {
				$thumb_h = 16;	// minimum
			}else if ( $thumb_h > 300 ) {
				$thumb_h = 300;	// maximum
			}

		if($post_category && $post_category > 0 ) :
			$recent_posts = new WP_Query("showposts=" . $instance["num"] . "&cat=" . $post_category . "&orderby=comment_count");
		else :
			$recent_posts = new WP_Query("showposts=" . $instance["num"] . "&orderby=comment_count");
		endif;
		echo $before_widget;
		echo $before_title;
		echo $title;
		echo $after_title;
		echo "<ul  class=\"recent-post\" >\n";
	
	while ( $recent_posts->have_posts())
	{
		$recent_posts->the_post();
		$img ='';
	?>
		<li class="wid-recentpost">
		<?php if( $thumbnail ) : ?>
			<?php
			 	  if(get_post_meta($post->ID, "_post_image")) :
					  $img = get_post_meta($post->ID, "_post_image",true);
					  $img = tpo_image_resize($thumb_h, $thumb_w,$img );
				?>
             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo  $img; ?>" alt="<?php the_permalink(); ?>" /></a>
				<?php
				  endif;

			 ?>

 
            <?php endif; ?>
  			<?php if( $thumbnail ) : ?>
                <a style="width:<?php echo (280 - $thumb_w); ?>px" class="recentpost-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
            <?php else : ?>
                <a style="width:300px" class="recentpost-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
            <?php endif; ?>
			<?php if ( $post_date ||  $post_comments  ) : ?>
				 <div class="recentpost-meta">
                 <?php if ( $post_date) : ?>
					<span class="recentpost-date"><?php the_time("F j, Y"); ?></span>
                 <?php endif; ?>
                 <?php if ( $post_date &&  $post_comments  ) : ?>
                	<span>&nbsp;-</span>
                 <?php endif; ?>
				 <?php if ( $post_comments ) : ?>
                    <span class="comment-num"><?php comments_number(); ?></span>
                 <?php endif; ?>
   				 </div>
         	<?php endif; ?>
            <?php if( $thumbnail ) : ?>
                        <?php if ( $excerpt_length ) :
                            $myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
                            if ($myExcerpt != '') {
                                $myExcerpt .= '...';
                                echo str_replace('[...]','',$myExcerpt);
                            }
                         endif; ?>
			<?php else : ?>
                        <?php if ( $excerpt_length ) :
                            $myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
                            if ($myExcerpt != '') {
                                $myExcerpt .= '...';
                                echo '<div class="recent-post-text" >' . str_replace('[...]','',$myExcerpt) . '</div>';
                            }
                         endif; ?>
            <?php endif; ?>
        <div class="clearboth" ></div>
		</li>
	<?php
	}
	echo "</ul>\n";
	echo $after_widget;
	$post = $post_old; 
}

function update($new_instance, $old_instance) {
	if ( function_exists('the_post_thumbnail') )
	{
		$sizes = get_option('tpo_cat_post_thumb_sizes');
		if ( !$sizes ) $sizes = array();
		$sizes[$this->id] = array($new_instance['thumb_w'], $new_instance['thumb_h']);
		update_option('tpo_cat_post_thumb_sizes', $sizes);
	}
	
	return $new_instance;
}

function form($instance) {

			$excerpt_length = isset($instance['excerpt_length']) ? (int) esc_attr($instance['excerpt_length']) : '';
			$post_category = isset($instance["cat"]) ? esc_attr($instance["cat"]) : '';
			$number = isset($instance['num']) ? (int) esc_attr($instance['num']) : '';
			$thumbnail = isset($instance['thumb']) ? esc_attr($instance['thumb']) : '';
			$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : '';
			$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : '';
			$post_date = isset($instance['date']) ? esc_attr($instance['date']) : '';
			$post_comments = isset($instance['comments']) ? esc_attr($instance['comments']) : '';
			$title = isset($instance["title"]) ? esc_attr($instance["title"]) : '';



			// numbernumberof posts to show
			if ( !$number ) {
				$number = 3;	// default
			}else if ( $number < 1 ) {
				$number = 1;	// minimum
			}else if ( $number > 15 ) {	
				$number = 15;	// maximum
			}
				
			// length of excerpt
			if ( !$excerpt_length  ) {
				$excerpt_length = '';	// default
			} else if ( $excerpt_length < 0 ) {
				$excerpt_length = 0;	// minimum
			} else if ( $excerpt_length > 150 ) {
				$excerpt_length = 150;	// maximum
			}
			
			// thumbnail width
			if ( !$thumb_w ) {
				$thumb_w = 55;	// default
			}else if ( $thumb_w <= 16 ) {
				$thumb_w = 16;	// minimum
			}else if ( $thumb_w > 450 ) {
				$thumb_w = 450;	// maximum
			}

			// thumbnail height
			if ( !$thumb_h ) {
				$thumb_h = 55;	// default
			}else if ( $thumb_h <= 16 ) {
				$thumb_h = 16;	// minimum
			}else if ( $thumb_h > 300 ) {
				$thumb_h = 300;	// maximum
			}
			
?>
		<p>
			<label for="<?php echo $this->get_field_id("title"); ?>">
				<?php echo __('Title',THEME_SLUG); ?>:
				<input class="widefat" id="<?php echo $this->get_field_id("title"); ?>" name="<?php echo $this->get_field_name("title"); ?>" type="text" value="<?php echo $title; ?>" />
			</label>
		</p>
		
		<p>
			<label>
				<?php echo  __('Category',THEME_SLUG); ?>:
				<?php
					wp_dropdown_categories('name='.$this->get_field_name("cat").'&selected='.$post_category.'&show_option_none=Select category&show_count=1&orderby=name');
				?>
            </label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id("num"); ?>">
				<?php  echo __('Number of posts to show',THEME_SLUG); ?>:
				<input style="text-align: center;" id="<?php echo $this->get_field_id("num"); ?>" name="<?php echo $this->get_field_name("num"); ?>" type="text" value="<?php echo absint($number); ?>" size='2' />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id("excerpt"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("excerpt"); ?>" name="<?php echo $this->get_field_name("excerpt"); ?>"<?php checked( (bool) $excerpt_length, true ); ?> />
				<?php  echo __('Show post excerpt',THEME_SLUG); ?>
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('excerpt_length'); ?>"><?php echo __('Length of post excerpt:',THEME_SLUG); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('excerpt_length'); ?>" name="<?php echo $this->get_field_name('excerpt_length'); ?>" type="text" value="<?php echo $excerpt_length; ?>"  maxlength="3"  style="width:20%;" />
           </label>
		</p>
        
		<p>
			<label for="<?php echo $this->get_field_id("date"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("date"); ?>" name="<?php echo $this->get_field_name("date"); ?>"<?php checked( (bool) $post_date, true ); ?> />
				<?php echo __('Show post date',THEME_SLUG); ?>
			</label>
		</p>
		
 		<p>
			<label for="<?php echo $this->get_field_id("comments"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("comments"); ?>" name="<?php echo $this->get_field_name("comments"); ?>"<?php checked( (bool) $post_comments, true ); ?> />
				<?php echo __('Show comments count',THEME_SLUG); ?>
			</label>
		</p>
        
		<?php if ( function_exists('the_post_thumbnail') && current_theme_supports("post-thumbnails") ) : ?>
		<p>
			<label for="<?php echo $this->get_field_id("thumb"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("thumb"); ?>" name="<?php echo $this->get_field_name("thumb"); ?>"<?php checked( (bool) $thumbnail, true ); ?> />
				<?php echo __('Show post thumbnail',THEME_SLUG); ?>
			</label>
		</p>
		<p>
			<label>
				<?php echo __('Thumbnail dimensions',THEME_SLUG); ?>:<br />
				<label for="<?php echo $this->get_field_id("thumb_w"); ?>">
					W: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_w"); ?>" name="<?php echo $this->get_field_name("thumb_w"); ?>" value="<?php echo $thumb_w; ?>" />
				</label>
				
				<label for="<?php echo $this->get_field_id("thumb_h"); ?>">
					H: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_h"); ?>" name="<?php echo $this->get_field_name("thumb_h"); ?>" value="<?php echo $thumb_h; ?>" />
				</label>
			</label>
		</p>
		<?php endif; ?>

	<?php

	}

}

add_action('widgets_init', create_function('', 'return register_widget("tpo_recentposts_widget");'));

class tpo_recentposts_widget extends WP_Widget {
    function tpo_recentposts_widget() {
		global $themeTitle;
		$options = array('classname' => 'tpo-recentposts-widget', 'description' => __( "Show recent posts on sidebars."  , THEME_SLUG) );
		$this->WP_Widget('tpo-recent-posts', __('Zebra Themes - Recent Posts'  , THEME_SLUG), $options);
    }

	function widget($args, $instance) {
		global $post;
		$post_old = $post;
		extract( $args );
		$sizes = get_option('tpo_cat_post_thumb_sizes');

			$excerpt_length = isset($instance['excerpt_length']) ? (int) esc_attr($instance['excerpt_length']) : '';
			$post_category = isset($instance["cat"]) ? esc_attr($instance["cat"]) : '';
			$number = isset($instance['num']) ? (int) esc_attr($instance['num']) : '';
			$thumbnail = isset($instance['thumb']) ? esc_attr($instance['thumb']) : '';
			$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : '';
			$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : '';
			$post_date = isset($instance['date']) ? esc_attr($instance['date']) : '';
			$post_comments = isset($instance['comments']) ? esc_attr($instance['comments']) : '';
			$title = isset($instance["title"]) ? esc_attr($instance["title"]) : '';

			// numbernumberof posts to show
			if ( !$number ) {
				$number = 3;	// default
			}else if ( $number < 1 ) {
				$number = 1;	// minimum
			}else if ( $number > 15 ) {	
				$number = 15;	// maximum
			}
				
			// length of excerpt
			if ( !$excerpt_length  ) {
				$excerpt_length = '';	// default
			} else if ( $excerpt_length < 0 ) {
				$excerpt_length = 0;	// minimum
			} else if ( $excerpt_length > 150 ) {
				$excerpt_length = 150;	// maximum
			}
			
			// thumbnail width
			if ( !$thumb_w ) {
				$thumb_w = 55;	// default
			}else if ( $thumb_w <= 16 ) {
				$thumb_w = 16;	// minimum
			}else if ( $thumb_w > 450 ) {
				$thumb_w = 450;	// maximum
			}

			// thumbnail height
			if ( !$thumb_h ) {
				$thumb_h = 55;	// default
			}else if ( $thumb_h <= 16 ) {
				$thumb_h = 16;	// minimum
			}else if ( $thumb_h > 300 ) {
				$thumb_h = 300;	// maximum
			}

		if( isset($post_category) && $post_category && $post_category > 0 ) :
			$recent_posts = new WP_Query("showposts=" . $number . "&cat=" . $post_category . "&orderby=date");
		else :
			$recent_posts = new WP_Query("showposts=" . $number . "&orderby=date");
		endif;
		echo $before_widget;
		echo $before_title;
		echo $title;
		echo $after_title;
		echo "<ul  class=\"recent-post\" >\n";
	
	while ( $recent_posts->have_posts())
	{
		$recent_posts->the_post();
		$img ='';
	?>
		<li class="wid-recentpost">
		<?php if ( isset( $thumbnail ) && $thumbnail ) : ?>
			<?php
		 	  if(get_post_meta($post->ID, "_post_image")) :
					  $img = get_post_meta($post->ID, "_post_image",true);
					  $img = tpo_image_resize($height=$thumb_h, $width=$thumb_w,$img );
				?>
             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo  $img; ?>" alt="<?php the_permalink(); ?>" /></a>
				<?php
			 endif;
			 ?>
            <?php endif; ?>
  			<?php if ( isset( $thumbnail ) ) : ?>
                <a style="width:<?php echo (280 - $thumb_w); ?>px" class="recentpost-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
            <?php else : ?>
                <a style="width:300px" class="recentpost-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
            <?php endif; ?>
			<?php if ( $post_date ||  $post_comments  ) : ?>
				 <div class="recentpost-meta">
                 <?php if ( $post_date) : ?>
					<span class="recentpost-date"><?php the_time("F j, Y"); ?></span>
                 <?php endif; ?>
                 <?php if ( $post_date &&  $post_comments  ) : ?>
                	<span>&nbsp;-</span>
                 <?php endif; ?>
				 <?php if ( $post_comments ) : ?>
                    <span class="comment-num"><?php comments_number(); ?></span>
                 <?php endif; ?>
   				 </div>
         	<?php endif; ?>
            <?php if( $thumbnail ) : ?>
                        <?php if ( $excerpt_length ) :
                            $myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
                            if ($myExcerpt != '') {
                                $myExcerpt .= '...';
                                echo '<div class="recent-post-text" >' . str_replace('[...]','',$myExcerpt) . '</div>';
                            }
                         endif; ?>
			<?php else : ?>
                        <?php if ( $excerpt_length ) :
                            $myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
                            if ($myExcerpt != '') {
                                $myExcerpt .= '...';
                                echo str_replace('[...]','',$myExcerpt);
                            }
                         endif; ?>
            <?php endif; ?>
        <div class="clearboth" ></div>
		</li>
	<?php
	}
	
	echo "</ul>\n";
	
	echo $after_widget;
	
	$post = $post_old; 
}

function update($new_instance, $old_instance) {
	if ( function_exists('the_post_thumbnail') )
	{
		$sizes = get_option('tpo_cat_post_thumb_sizes');
		if ( !$sizes ) $sizes = array();
		$sizes[$this->id] = array($new_instance['thumb_w'], $new_instance['thumb_h']);
		update_option('tpo_cat_post_thumb_sizes', $sizes);
	}
	return $new_instance;
}

function form($instance) {
			// number of posts to show

			$excerpt_length = isset($instance['excerpt_length']) ? (int) esc_attr($instance['excerpt_length']) : '';
			$post_category = isset($instance["cat"]) ? esc_attr($instance["cat"]) : '';
			$number = isset($instance['num']) ? (int) esc_attr($instance['num']) : '';
			$thumbnail = isset($instance['thumb']) ? esc_attr($instance['thumb']) : '';
			$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : '';
			$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : '';
			$post_date = isset($instance['date']) ? esc_attr($instance['date']) : '';
			$post_comments = isset($instance['comments']) ? esc_attr($instance['comments']) : '';
			$title = isset($instance["title"]) ? esc_attr($instance["title"]) : '';

			// numbernumberof posts to show
			if ( !$number ) {
				$number = 3;	// default
			}else if ( $number < 1 ) {
				$number = 1;	// minimum
			}else if ( $number > 15 ) {	
				$number = 15;	// maximum
			}
				
			// length of excerpt
			if ( !$excerpt_length  ) {
				$excerpt_length = '';	// default
			} else if ( $excerpt_length < 0 ) {
				$excerpt_length = 0;	// minimum
			} else if ( $excerpt_length > 150 ) {
				$excerpt_length = 150;	// maximum
			}
			
			// thumbnail width
			if ( !$thumb_w ) {
				$thumb_w = 55;	// default
			}else if ( $thumb_w <= 16 ) {
				$thumb_w = 16;	// minimum
			}else if ( $thumb_w > 450 ) {
				$thumb_w = 450;	// maximum
			}

			// thumbnail height
			if ( !$thumb_h ) {
				$thumb_h = 55;	// default
			}else if ( $thumb_h <= 16 ) {
				$thumb_h = 16;	// minimum
			}else if ( $thumb_h > 300 ) {
				$thumb_h = 300;	// maximum
			}
?>
	<p>
			<label for="<?php echo $this->get_field_id("title"); ?>">
				<?php echo __('Title',THEME_SLUG); ?>:
				<input class="widefat" id="<?php echo $this->get_field_id("title"); ?>" name="<?php echo $this->get_field_name("title"); ?>" type="text" value="<?php echo $title; ?>" />
			</label>
		</p>


		<p>
			<label>
				<?php echo  __('Category',THEME_SLUG); ?>:
				<?php
					wp_dropdown_categories('name='.$this->get_field_name("cat").'&selected='.$post_category.'&show_option_none=Select category&show_count=1&orderby=name');
				?>
            </label>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id("num"); ?>">
				<?php  echo __('Number of posts to show',THEME_SLUG); ?>:
				<input style="text-align: center;" id="<?php echo $this->get_field_id("num"); ?>" name="<?php echo $this->get_field_name("num"); ?>" type="text" value="<?php echo absint($number); ?>" size='2' />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id("excerpt"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("excerpt"); ?>" name="<?php echo $this->get_field_name("excerpt"); ?>"<?php checked( (bool) $excerpt_length, true ); ?> />
				<?php  echo __('Show post excerpt',THEME_SLUG); ?>
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('excerpt_length'); ?>"><?php echo __('Length of post excerpt:',THEME_SLUG); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('excerpt_length'); ?>" name="<?php echo $this->get_field_name('excerpt_length'); ?>" type="text" value="<?php echo $excerpt_length; ?>"  maxlength="3"  style="width:20%;" />
           </label>
		</p>
        
		<p>
			<label for="<?php echo $this->get_field_id("date"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("date"); ?>" name="<?php echo $this->get_field_name("date"); ?>"<?php checked( (bool) $post_date, true ); ?> />
				<?php echo __('Show post date',THEME_SLUG); ?>
			</label>
		</p>

 		<p>
			<label for="<?php echo $this->get_field_id("comments"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("comments"); ?>" name="<?php echo $this->get_field_name("comments"); ?>"<?php checked( (bool) $post_comments, true ); ?> />
				<?php echo __('Show comments count',THEME_SLUG); ?>
			</label>
		</p>
        
		<?php if ( function_exists('the_post_thumbnail') && current_theme_supports("post-thumbnails") ) : ?>
		<p>
			<label for="<?php echo $this->get_field_id("thumb"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("thumb"); ?>" name="<?php echo $this->get_field_name("thumb"); ?>"<?php checked( (bool) $thumbnail, true ); ?> />
				<?php echo __('Show post thumbnail',THEME_SLUG); ?>
			</label>
		</p>
		<p>
			<label>
				<?php echo __('Thumbnail dimensions',THEME_SLUG); ?>:<br />
				<label for="<?php echo $this->get_field_id("thumb_w"); ?>">
					W: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_w"); ?>" name="<?php echo $this->get_field_name("thumb_w"); ?>" value="<?php echo $thumb_w; ?>" />
				</label>
				
				<label for="<?php echo $this->get_field_id("thumb_h"); ?>">
					H: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_h"); ?>" name="<?php echo $this->get_field_name("thumb_h"); ?>" value="<?php echo $thumb_h; ?>" />
				</label>
			</label>
		</p>
		<?php endif; ?>

<?php
}
}



/*================================= Flickr Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_flickr_widget");'));

class tpo_flickr_widget extends WP_Widget {
    function tpo_flickr_widget() {
		global $themeTitle;
		$options = array('classname' => 'tpo_flickr_widget', 'description' => __( "Show images from a Flickr."  , THEME_SLUG ) );
		$controls = array('width' => 400, 'height' => 200);
		$this->WP_Widget('tpo_flickr', __('Zebra Themes - Flickr'  , THEME_SLUG), $options, $controls);
    }

    function widget($args, $instance) {	
        extract( $args );
		$subtitle = '';
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Photos on flickr'  , THEME_SLUG ) : $instance['title'], $instance, $this->id_base);
		$id = $instance['id'];
		if ( !$number = (int) $instance['number'] ) {
			$number = 3;
		}else if ( $number < 1 ) {
			$number = 1;
		}else if ( $number > 15 ) {
			$number = 15;
		}
		$hr = isset($instance['hr']) ? '1' : '0';

        ?>

			<?php echo $before_widget; ?>
				<?php echo $before_title . $title . $subtitle . $after_title; ?>
				<div class="flickrFeed">
					<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script> 
					<div class="clear"></div>
				</div>
				<?php if ( $hr ) : ?><div class="hr"></div><?php endif; ?>

			<?php echo $after_widget; ?>

        <?php
    }

    function update($new_instance, $old_instance) {				
        $instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['id'] = strip_tags($new_instance['id']);
		$instance['number'] = (int) $new_instance['number'];
		return $instance;
    }

    function form($instance) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$subtitle = isset($instance['subtitle']) ? esc_attr($instance['subtitle']) : '';
		$id = isset($instance['id']) ? esc_attr($instance['id']) : '';
		if ( !isset($instance['number']) || !$number = (int) $instance['number'] ) {
			$number = 3;
		}
       ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php __('Title:'  , THEME_SLUG ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('id'); ?>">Flickr ID (<a href="http://www.idgettr.com" target="_blank">idGettr</a>):</label>
			<input class="widefat" id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" type="text" value="<?php echo $id; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('number'); ?>">Number of photos:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" />
		</p>
        <?php 
    }

}

/*================================= Banner Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_banner_widget");'));

class tpo_banner_widget extends WP_Widget {
    function tpo_banner_widget() {
		global $themeTitle;
		$options = array('classname' => 'tpo_banner_widget', 'description' => __( "Banner widgets."  , THEME_SLUG ) );
		$controls = array('width' => 400, 'height' => 200);
		$this->WP_Widget('tpo_banners', __('Zebra Themes - Banners 125X125'  , THEME_SLUG ), $options, $controls);
    }

    function widget($args, $instance) {	
        extract( $args );
				
		$banners = isset($instance['banners']) ? $instance['banners'] : '' ;
		
        ?>

			<?php echo $before_widget; ?>
				<div class="banners">
				<?php
					$counter = 1;
					if ( is_array( $banners )) {
						foreach( $banners as $banner ) {
                			if( $banner ) {
								if ( $counter % 2 == 0 ) {
                   				 	echo  '<div class="ad-125" style="margin-right:0;" >' . stripslashes( $banner ) . '</div>';
								} else {
									echo  '<div class="ad-125" >' . stripslashes( $banner ) . '</div>';
								}
								 $counter++;
                			}
						}
					}
				?>
					<div class="clearboth"></div>
				</div>
			<?php echo $after_widget; ?>

        <?php
    }

    function update($new_instance, $old_instance) {				
    	$instance = $old_instance;
        $instance['banners'] = $new_instance['banners'];
        return $instance;
    }

    function form($instance) { 
		$bannerid =  str_replace('-','_',$this->get_field_id('add'));
	?>

        <script>
			function add_new_banner<?php echo $bannerid; ?>(con) {
					var id = con.getAttribute("rel");
					var bannerid = 'Banner ' + ( parseInt(id) + 1 ) + ' - Code'; 
					con.setAttribute('rel',  parseInt(id) + 1);
					var con = jQuery('.widget-banner-2-widget');
					var new_banner_id = 10000+Math.floor(Math.random()*100000);
					var fieldid = "<?php echo $this->get_field_id('" + parseInt(id) + "'); ?>";
					var banner = '<div style="padding-top:20px;" class="tpo_banner" ><p style="border-bottom: 1px solid #DFDFDF;"><strong>' + bannerid + '</strong></p><div><div style="margin-right:10px;" ><textarea class="banner_text" style="height: 150px;" id="' + fieldid + '" name="<?php echo $this->get_field_name('banners'); ?>[]"></textarea></div></div></div>';
					jQuery('#<?php echo $this->get_field_id('tpo_banner'); ?>').append(banner);
			}
			function tpo_banner_delete(id) {
					jQuery('#' + id).remove();
			}
		</script>
                 <div id="<?php echo $this->get_field_id('tpo_banner'); ?>">
				<?php
                $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
                $banners = $instance['banners'];
				
				if(is_array($banners)) { ?>
                    <div style="padding-bottom:10px" >
                        <a rel ="<?php echo count($banners) ?>" class="button banner_add_new" onclick="add_new_banner<?php echo $bannerid;  ?>(this)"  >Add New Banner</a>
                    </div>
                <?php
					$counter = 1;
					foreach($banners as $b_id=>$bcode) { ?>
                         <div id="container_<?php echo $this->get_field_id('ban'); ?>_<?php echo $counter ?>" style="padding-top:20px;" class="tpo_banner" >
                               <p style="border-bottom: 1px solid #DFDFDF;"><strong><?php echo __('Banner ' . $counter .' - Code', THEME_SLUG); ?></strong></p>
                               <div>
                                    <div style="margin-right:10px;" >
                                        <textarea class="banner_text" style="height: 150px;" id="<?php echo $this->get_field_id($b_id); ?>" name="<?php echo $this->get_field_name('banners'); ?>[]"><?php echo $bcode; ?></textarea>
                                    </div>
                                    <a class="button button-red" onclick="if (confirm('Do you really want to delete the banner?')) { tpo_banner_delete('container_<?php echo $this->get_field_id('ban'); ?>_<?php echo $counter ?>'); } return false;">Delete</a>
                              </div>
                        </div>
                <?php $counter++ ; 
					}
				} else { ?>
                    <div style="padding-bottom:10px" >
                        <a rel ="0" class="button banner_add_new" onclick="add_new_banner<?php echo str_replace('-','_',$this->get_field_id('add')); ?>(this)"  >Add New Banner</a>
                    </div>
                <?php } ?>
            </div><input id="bancnn" name="bancnn" type="hidden" value="3" />
            <div style="border-bottom: 1px solid #DFDFDF; float:left;margin:8px 0; height:2px;width:100%"></div>
           <?php  

            }

}

/*================================= Banner Single Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_banner_single");'));

class tpo_banner_single extends WP_Widget {
	function tpo_banner_single() {
		$options = array('classname' => 'tpo_banner_single', 'description' => __( 'Banner Single widget.', THEME_SLUG) );
		$this->WP_Widget('banner-single', __('Zebra Themes - Banner Single',THEME_SLUG), $options);
	}
	
		function widget( $args, $instance ) {
			extract( $args );
			$tpo_single_ad = isset( $instance['tpo_single_ad'] ) ? $instance['tpo_single_ad'] : '' ;
			echo $before_widget;

				echo  '<div class="ad-single" >' . stripslashes( $tpo_single_ad ) . '</div>';

			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['tpo_single_ad'] = $new_instance['tpo_single_ad'];
			return $instance;
		}

		function form( $instance ) {
			$tpo_single_ad = isset($instance['tpo_single_ad']) ? esc_attr($instance['tpo_single_ad']) : '';
			?>
			<p><label for="<?php echo $this->get_field_id('tpo_single_ad'); ?>"><?php echo __('Ad\'s html code:', THEME_SLUG); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('tpo_single_ad'); ?>" name="<?php echo $this->get_field_name('tpo_single_ad'); ?>" type="text" cols="25" rows="5" ><?php echo $tpo_single_ad; ?></textarea></p>
	<?php
		}
}



/*================================= Social Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_social_widget");'));

class tpo_social_widget extends WP_Widget {
    function tpo_social_widget() {
		global $themeTitle;
		$options = array('classname' => 'tpo_social_widget', 'description' => __( "Social widgets."  , THEME_SLUG ) );
		$controls = array('width' => 400, 'height' => 200);
		$this->WP_Widget('tpo_social', __('Zebra Themes - Social Icons'  , THEME_SLUG ), $options, $controls);
    }

    function widget($args, $instance) {	
        extract( $args );
		$title = $instance['title'];
		$facebook = isset($instance['facebook']) ?  esc_attr($instance['facebook']) : '';
		$twitter = isset($instance['twitter']) ?  esc_attr($instance['twitter']) : '';
		$rss = isset($instance['rss']) ?  esc_attr($instance['rss']) : '';
		$youtube = isset($instance['youtube']) ?  esc_attr($instance['youtube']) : '';
		$linkedin = isset($instance['linkedin']) ?  esc_attr($instance['linkedin']) : '';
		$flickr = isset($instance['flickr']) ?  esc_attr($instance['flickr']) : '';
		$googleplus = isset($instance['googleplus']) ? esc_attr($instance['googleplus']) : '';
		$vimeo = isset($instance['vimeo']) ?  esc_attr($instance['vimeo']) : '';
		$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : '';
		$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : '';
		if ( !$thumb_w ) {
			$thumb_w = 30;	// default
		}else if ( $thumb_w <= 16 ) {
			$thumb_w = 16;	// minimum
		}else if ( $thumb_w > 90 ) {
			$thumb_w = 90;	// maximum
		}
		$instance['thumb_w'] = $thumb_w;

		if ( !$thumb_h ) {
			$thumb_h = 30;	// default
		}else if ( $thumb_h <= 16 ) {
			$thumb_h = 16;	// minimum
		}else if ( $thumb_h > 90 ) {
			$thumb_h = 90;	// maximum
		}
		$instance['thumb_h'] = $thumb_h;
        ?>

			<?php echo $before_widget; ?>
				<?php if ( $title ) echo $before_title . $title .  $after_title; ?>
				<div class="socialicons">
				<?php
						if($facebook) echo '<a target="_blank" href="'.$facebook.'"><img src="' . get_template_directory_uri() . '/images/icons/facebook.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;				
						if ($twitter) echo '<a target="_blank" href="'.$twitter.'"><img src="' . get_template_directory_uri() . '/images/icons/twitter.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
						if ($rss) echo '<a target="_blank" href="'.$rss.'"><img src="' . get_template_directory_uri() . '/images/icons/rss.png"  height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
						if ($googleplus) echo '<a target="_blank" href="'.$googleplus.'"><img src="' . get_template_directory_uri() . '/images/icons/googleplus.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
						if ($youtube) echo '<a target="_blank" href="'.$youtube.'"><img src="' . get_template_directory_uri() . '/images/icons/youtube.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
						if ($linkedin) echo '<a target="_blank" href="'.$linkedin.'"><img src="' . get_template_directory_uri() . '/images/icons/linkedin.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
						if ($flickr) echo '<a target="_blank" href="'.$flickr.'"><img src="' . get_template_directory_uri() . '/images/icons/flickr.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
						if ($vimeo) echo '<a target="_blank" href="'.$vimeo.'"><img src="' . get_template_directory_uri() . '/images/icons/vimeo.png" height="'.$thumb_h.'" width="'.$thumb_w.'" alt="" /></a>' ;
				?>
					<div class="clear"></div>
				</div>
			<?php echo $after_widget; ?>

        <?php
    }

    function update($new_instance, $old_instance) {				
        $instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['facebook'] = strip_tags($new_instance['facebook']);
		$instance['twitter'] = strip_tags($new_instance['twitter']);
		$instance['rss'] = strip_tags($new_instance['rss']);
		$instance['youtube'] = strip_tags($new_instance['youtube']);
		$instance['linkedin'] = strip_tags($new_instance['linkedin']);
		$instance['flickr'] = strip_tags($new_instance['flickr']);
		$instance['googleplus'] = strip_tags($new_instance['googleplus']);
		$instance['vimeo'] = strip_tags($new_instance['vimeo']);
		$instance['thumb_w'] = strip_tags($new_instance['thumb_w']);
		$instance['thumb_h'] = strip_tags($new_instance['thumb_h']);
		return $instance;
    }

    function form($instance) {
		if ( !$thumb_w = (int) $instance['thumb_w'] ) {
			$thumb_w = 30;	// default
		}else if ( $thumb_w <= 16 ) {
			$thumb_w = 16;	// minimum
		}else if ( $thumb_w > 90 ) {
			$thumb_w = 90;	// maximum
		}
		$instance['thumb_w'] = $thumb_w;

		if ( !$thumb_h = (int) $instance['thumb_h'] ) {
			$thumb_h = 30;	// default
		}else if ( $thumb_h <= 16 ) {
			$thumb_h = 16;	// minimum
		}else if ( $thumb_h > 90 ) {
			$thumb_h = 90;	// maximum
		}
		$instance['thumb_h'] = $thumb_h;
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$facebook = isset($instance['facebook']) ? esc_attr($instance['facebook']) : '';
		$twitter = isset($instance['twitter']) ? esc_attr($instance['twitter']) : '';
		$rss = isset($instance['rss']) ? esc_attr($instance['rss']) : '';
		$youtube = isset($instance['youtube']) ? esc_attr($instance['youtube']) : '';
		$linkedin = isset($instance['linkedin']) ? esc_attr($instance['linkedin']) : '';
		$flickr = isset($instance['flickr']) ? esc_attr($instance['flickr']) : '';
		$googleplus = isset($instance['googleplus']) ? esc_attr($instance['googleplus']) : '';
		$vimeo = isset($instance['vimeo']) ? esc_attr($instance['vimeo']) : '';
       ?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php __('Title:', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label>
				<?php echo __('Thumbnail dimensions',THEME_SLUG); ?>:<br />
				<label for="<?php echo $this->get_field_id("thumb_w"); ?>">
					W: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_w"); ?>" name="<?php echo $this->get_field_name("thumb_w"); ?>" value="<?php echo $thumb_w; ?>" />
				</label>
				
				<label for="<?php echo $this->get_field_id("thumb_h"); ?>">
					H: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_h"); ?>" name="<?php echo $this->get_field_name("thumb_h"); ?>" value="<?php echo $thumb_h; ?>" />
				</label>
			</label>
		</p>
		<p style="border-bottom: 1px solid #DFDFDF;"><strong><?php echo __('Profiles:', THEME_SLUG); ?></strong></p>
		<p>
			<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php echo __('Facebook', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php echo __('Twitter', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('rss'); ?>"><?php echo __('RSS', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo $rss; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('youtube'); ?>"><?php echo __('Youtube', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php echo __('Linkedin', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('flickr'); ?>"><?php echo __('Flickr', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo $flickr; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('googleplus'); ?>">GooglePlus</label>
			<input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php echo $googleplus; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('vimeo'); ?>">Vimeo</label>
			<input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo $vimeo; ?>" />
		</p>
        <?php 
    }

}


/*================================= FaceBook Widget========================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_facebook_widget");'));

class tpo_facebook_widget extends WP_Widget {

    function tpo_facebook_widget() {
		$options = array('classname' => 'tpo_facebook_widget', 'description' => __( "Facebook Like social widget."  , THEME_SLUG ) );
		$controls = array('width' => 400, 'height' => 300);
		$this->WP_Widget('tpo_facebook', __('Zebra Themes - Facebook'  , THEME_SLUG ), $options, $controls);
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {
    	
    	global $app_id;
        extract( $args );
        
		$title	        =    apply_filters('widget_title', empty($instance['title']) ? __('Facebook'  , THEME_SLUG ) : $instance['title'], $instance, $this->id_base);

		$fb_url 		=	$instance['fb_url'];
		$show_faces 	=	isset($instance['show_faces']) ? $instance['show_faces'] : 'false';
		$data_stream	=	isset($instance['data_stream']) ? $instance['data_stream'] : 'false';
		$show_header	=	isset($instance['show_header']) ? $instance['show_header'] : 'false';
		$width			=	$instance['width'];
		$height			=	$instance['height'];
		$color_scheme	=	$instance['color_scheme'];
		$border_color	=	isset($instance['border_color']) ? $instance['border_color'] : '#fff';
		if ( !$show_faces )  $show_faces = 'false';
		if ( !$data_stream )  $data_stream = 'false';
		if ( !$show_header )  $show_header = 'false';
        ?>
 			<?php echo $before_widget; ?>
				<?php echo $before_title . $title . $after_title; ?>
                    
          <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like-box" data-href="<?php echo $fb_url; ?>" data-width="<?php echo $width; ?>" data-height="<?php echo $height; ?>" data-colorscheme="<?php echo $color_scheme; ?>" data-show-faces="<?php echo $show_faces; ?>" data-stream="<?php echo $data_stream; ?>" data-header="<?php echo $show_header; ?>" data-border-color="<?php echo $border_color; ?>"></div>

       <?php echo $after_widget; ?>
     <?php
    }


    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {
		
    	$instance	=	$old_instance;
		$instance	=	array('show_faces' => 0,'data_stream' => 0,'show_header' => 0);
		foreach ( $instance as $field => $val ) {
			if ( isset($new_instance[$field]) )
				$instance[$field] = 1;
		}
		$instance['title']			=	strip_tags($new_instance['title']);
		$instance['fb_url'] 		=	strip_tags($new_instance['fb_url']);

		$instance['width'] 			=	strip_tags($new_instance['width']);
		$instance['height'] 		=	strip_tags($new_instance['height']);
		$instance['show_faces']     =	strip_tags($new_instance['show_faces']);
		$instance['data_stream'] 	=	strip_tags($new_instance['data_stream']);
		$instance['show_header'] 	=	strip_tags($new_instance['show_header']);
		$instance['color_scheme']	=	strip_tags($new_instance['color_scheme']);
		$instance['border_color']	=	strip_tags($new_instance['border_color']);
        return $instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {	

    	/**
    	 * Set Default Value for widget form
    	 */
    	
    	$default_value	=	array("fb_url" => "http://www.facebook.com/platform" , "width" => "255", "height" => "255", "show_faces" => 1, "show_header" => 1,"border_color" => "#fff");
    	$instance		=	wp_parse_args((array)$instance,$default_value);
        $title			=	isset($instance['title']) ? esc_attr($instance['title']) : '' ;
		$fb_url			=	isset($instance['fb_url']) ? esc_attr($instance['fb_url']) : '' ;
		$width			=	isset($instance['width']) ? esc_attr($instance['width']) : '' ;
		$height			=	isset($instance['height']) ? esc_attr($instance['height']) : '' ;
		$show_faces		=	isset($instance['show_faces']) ? esc_attr($instance['show_faces']) : '' ;
		$data_stream	=	isset($instance['data_stream']) ? esc_attr($instance['data_stream']) : '' ;
		$show_header	=	isset($instance['show_header']) ? esc_attr($instance['show_header']) : '' ;
		$color_scheme	=	isset($instance['color_scheme']) ? esc_attr($instance['color_scheme']) : '' ;
		$border_color	=	isset($instance['border_color']) ? esc_attr($instance['border_color']) : '' ;
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:' , THEME_SLUG ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        
        <p>
          	<label for="<?php echo $this->get_field_id('fb_url'); ?>"><?php _e('Facebook Page Url:' , THEME_SLUG ); ?></label>
          	<input class="widefat" id="<?php echo $this->get_field_id('fb_url'); ?>" name="<?php echo $this->get_field_name('fb_url'); ?>" type="text" value="<?php echo $fb_url; ?>" />
            <p>Ex : http://www.facebook.com/zebrathemes</p>
          	<small>
          		<?php _e('Works with only' , THEME_SLUG ); ?>
          		<a href="http://www.facebook.com/help/?faq=174987089221178" target="_blank">
          			<?php _e('Valid Facebook Pages'  , THEME_SLUG  ); ?>
          		</a>
          	</small>
        </p>
        
        <p>
			<label for="<?php echo $this->get_field_id("show_faces"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("show_faces"); ?>" name="<?php echo $this->get_field_name("show_faces"); ?>"<?php checked( (bool) $instance["show_faces"], true ); ?> />
				<?php  _e('Show faces',THEME_SLUG); ?>
			</label>
        </p>
        
        <p>
 			<label for="<?php echo $this->get_field_id("data_stream"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("data_stream"); ?>" name="<?php echo $this->get_field_name("data_stream"); ?>"<?php checked( (bool) $data_stream , true ); ?> />
				<?php  _e('Show Data Stream',THEME_SLUG); ?>
			</label>
        </p> 
        
        <p>
  			<label for="<?php echo $this->get_field_id("show_header"); ?>">
				<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("show_header"); ?>" name="<?php echo $this->get_field_name("show_header"); ?>"<?php checked( (bool) $show_header, true ); ?> />
				<?php  _e('Show Header',THEME_SLUG); ?>
			</label>
        </p>
        
        <p>
        	<label for="<?php echo $this->get_field_id('width'); ?>"><?php _e('Set Width:',THEME_SLUG); ?></label>
        	<input size="5" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="text" value="<?php echo $width; ?>" />
        </p>
        
        <p>
        	<label for="<?php echo $this->get_field_id('height'); ?>"><?php _e('Set Height:',THEME_SLUG); ?></label>
        	<input size="5" id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" type="text" value="<?php echo $height; ?>" />

        </p>
        
        <p>
        	<label for="<?php echo $this->get_field_id('color_scheme'); ?>"><?php _e('Color Scheme:' ,THEME_SLUG); ?></label>
    		<select name="<?php echo $this->get_field_name('color_scheme'); ?>" id="<?php echo $this->get_field_id('color_scheme' , THEME_SLUG ); ?>">
    			<option value="light"<?php selected( $color_scheme, 'light' ); ?>><?php _e('Light' , THEME_SLUG ); ?></option>
    			<option value="dark"<?php selected( $color_scheme, 'dark' ); ?>><?php _e('Dark' , THEME_SLUG ); ?></option>
        	</select>
        </p>

        <p>
        	<label for="<?php echo $this->get_field_id('border_color'); ?>"><?php _e('Border Color:',THEME_SLUG); ?></label>
        	<input size="5" id="<?php echo $this->get_field_id('border_color'); ?>" name="<?php echo $this->get_field_name('border_color'); ?>" type="text" value="<?php echo $border_color; ?>" />
        </p>
        
        <?php
    }
}

/*================================= Contact Form Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_contact_widget");'));

class tpo_contact_widget extends WP_Widget {
	function tpo_contact_widget() {
		$options = array('classname' => 'tpo_contact_widget', 'description' => __( 'Contact form widget.', THEME_SLUG) );
		$this->WP_Widget('contact', __('Zebra Themes - Contact Form',THEME_SLUG), $options);
	}
	
		function widget( $args, $instance ) {
			extract( $args );
			$title = apply_filters('widget_title', empty($instance['title']) ? __('Contact Us', THEME_SLUG) : $instance['title'], $instance, $this->id_base);
			$email= $instance['email'];
			echo $before_widget;
			if ( $title)
				echo $before_title . $title . $after_title;
			?>
			<form name="contact_form" class="wid-contact-form" action="<?php echo TEMPLUTO_INC ?>/sendmail.php" method="post">
				<input type="text" required="required" id="wid-contactname" name="wid_contactname" class="text-input" value="" size="22" placeholder="<?php echo __('Name*', THEME_SLUG); ?>"  />
				
				<input type="email" required="required" id="wid_contactemail" name="wid_contactemail" class="text-input" value="" size="22" placeholder="<?php echo __('Email*', THEME_SLUG); ?>"  />
				
				<textarea required="required" name="wid_contactmessage" class="textarea" cols="25" rows="5" placeholder="<?php echo __('Message', THEME_SLUG); ?>" ></textarea>
				
				<button type="submit" class="button white"><span>Submit</span></button>
				<input type="hidden" value="<?php echo $email;?>" name="wid_adminemail"/>
			</form>
			<?php
			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['email'] = strip_tags($new_instance['email']);
			return $instance;
		}

		function form( $instance ) {
			$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
			$email = isset($instance['email']) ? esc_attr($instance['email']) :get_bloginfo('admin_email');
			?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __('Title:', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

			<p><label for="<?php echo $this->get_field_id('email'); ?>"><?php echo __('Your Email:', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" /></p>
	<?php
		}
}

/*================================= Contact Information Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_contactinfo_widget");'));

class tpo_contactinfo_widget extends WP_Widget {

	function tpo_contactinfo_widget() {
		$options = array('classname' => 'widget_contact_info', 'description' => __( 'Displays a list of contact info.', THEME_SLUG) );
		$this->WP_Widget('contact_details', __('Zebra Themes - Contact Information',THEME_SLUG), $options);
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Contact Us', THEME_SLUG) : $instance['title'], $instance, $this->id_base);
		$color = $instance['color'];
		$text = $instance['text'];
		$phone = $instance['phone'];
		$cellphone = $instance['cellphone'];
		$email= $instance['email'];
		$address = $instance['address'];
		$city = $instance['city'];
		$state = $instance['state'];
		$zip = $instance['zip'];
		$name = $instance['name'];
		
		if(!empty($city) && !empty($state)){
			$city = $city.',&nbsp;'.$state;
		}elseif(!empty($state)){
			$city = $state;
		}
		
		
		echo $before_widget;
		if ( $title)
			echo $before_title . $title . $after_title;
		
		?>
			<div class="contact_info_wrap">
			<?php if(!empty($text)):?><p><?php echo $text;?></p><?php endif;?>
			
			<?php if(!empty($phone)):?><p><span class="icon_text icon_telephone <?php echo $color;?>"><?php echo $phone;?></span></p><?php endif;?>
			<?php if(!empty($cellphone)):?><p><span class="icon_text icon_cellphone <?php echo $color;?>"><?php echo $cellphone;?></span></p><?php endif;?>
			<?php if(!empty($email)):?><p><a href="mailto:<?php echo $email;?>" class="icon_text icon_email <?php echo $color;?>"><?php echo $email;?></a></p><?php endif;?>
			<?php if(!empty($address)):?><p><span class="icon_text icon_home <?php echo $color;?>"><?php echo $address;?></span></p><?php endif;?>
			<?php if(!empty($city)||!empty($zip)):?><p class="icon_text .icon_address{
	background-position: 200px 200px;
}">
				<?php if(!empty($city)):?><span><?php echo $city;?></span><?php endif;?>
				<?php if(!empty($zip)):?><span class="contact_zip"><?php echo $zip;?></span><?php endif;?>
			</p><?php endif;?>
			<?php if(!empty($name)):?><p><span class="icon_text icon_id <?php echo $color;?>"><?php echo $name;?></span></p><?php endif;?>
			</div>
		<?php
		echo $after_widget;

	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['text'] = strip_tags($new_instance['text']);
		$instance['color'] = strip_tags($new_instance['color']);
		$instance['phone'] = strip_tags($new_instance['phone']);
		$instance['cellphone'] = strip_tags($new_instance['cellphone']);
		$instance['email'] = strip_tags($new_instance['email']);
		$instance['address'] = strip_tags($new_instance['address']);
		$instance['city'] = strip_tags($new_instance['city']);
		$instance['state'] = strip_tags($new_instance['state']);
		$instance['zip'] = strip_tags($new_instance['zip']);
		$instance['name'] = strip_tags($new_instance['name']);
		return $instance;
	}

	function form( $instance ) {
		//Defaults
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$color = isset($instance['color']) ? esc_attr($instance['color']) : '';
		$text = isset($instance['text']) ? esc_attr($instance['text']) : '';
		$phone = isset($instance['phone']) ? esc_attr($instance['phone']) : '';
		$cellphone = isset($instance['cellphone']) ? esc_attr($instance['cellphone']) : '';
		$email = isset($instance['email']) ? esc_attr($instance['email']) : '';
		$address = isset($instance['address']) ? esc_attr($instance['address']) : '';
		$city = isset($instance['city']) ? esc_attr($instance['city']) : '';
		$state = isset($instance['state']) ? esc_attr($instance['state']) : '';
		$zip = isset($instance['zip']) ? esc_attr($instance['zip']) : '';
		$name = isset($instance['name']) ? esc_attr($instance['name']) : '';
	?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Introduce text:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('cellphone'); ?>"><?php _e('Cell phone:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('cellphone'); ?>" name="<?php echo $this->get_field_name('cellphone'); ?>" type="text" value="<?php echo $cellphone; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('state'); ?>"><?php _e('State:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('state'); ?>" name="<?php echo $this->get_field_name('state'); ?>" type="text" value="<?php echo $state; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('zip'); ?>"><?php _e('Zip:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('zip'); ?>" name="<?php echo $this->get_field_name('zip'); ?>" type="text" value="<?php echo $zip; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $name; ?>" /></p>
		
<?php
	}

}

/*================================= Sub Navigation Widget ===================================*/


add_action('widgets_init', create_function('', 'return register_widget("tpo_widget_subnav");'));

class tpo_widget_subnav extends WP_Widget {

	function tpo_widget_subnav() {
		$options = array('classname' => 'wid_subnav', 'description' => __( 'Displays a list of SubPages', THEME_SLUG) );
		$this->WP_Widget('subnav', __('Zebra Themes - Sub Navigation',THEME_SLUG), $options );
	}

	function widget( $args, $instance ) {
		global $post;
		$children=wp_list_pages( 'echo=0&child_of=' . $post->ID . '&title_li=' );
		if ($children) {
			$parent = $post->ID;
		}else{
			$parent = $post->post_parent;
			if(!$parent){
				$parent = $post->ID;
			}
		}
		$parent_title = get_the_title($parent);
		
		extract( $args );
		$title = apply_filters('widget_title', empty($instance['title']) ? $parent_title : $instance['title'], $instance, $this->id_base);
		$sortby = empty( $instance['sortby'] ) ? 'menu_order' : $instance['sortby'];
		$output = wp_list_pages( array('title_li' => '', 'echo' => 0, 'child_of' =>$parent, 'sort_column' => $sortby,  'depth' => 1) );

		if ( !empty( $output ) ) {
			echo $before_widget;
			if ( $title)
				echo $before_title . $title . $after_title;
		?>
		<ul>
			<?php echo $output; ?>
		</ul>
		<?php
			echo $after_widget;
		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		if ( in_array( $new_instance['sortby'], array( 'post_title', 'menu_order', 'ID' ) ) ) {
			$instance['sortby'] = $new_instance['sortby'];
		} else {
			$instance['sortby'] = 'menu_order';
		}

		$instance['exclude'] = strip_tags( $new_instance['exclude'] );

		return $instance;
	}

	function form( $instance ) {
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 'sortby' => 'menu_order', 'title' => '', 'exclude' => '') );
		$title = esc_attr( $instance['title'] );
		$exclude = esc_attr( $instance['exclude'] );
	?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', THEME_SLUG); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
		<p>
			<label for="<?php echo $this->get_field_id('sortby'); ?>"><?php _e( 'Sort by:', THEME_SLUG); ?></label>
			<select name="<?php echo $this->get_field_name('sortby'); ?>" id="<?php echo $this->get_field_id('sortby'); ?>" class="widefat">
				<option value="menu_order"<?php selected( $instance['sortby'], 'menu_order' ); ?>><?php _e('Page order', THEME_SLUG); ?></option>
				<option value="post_title"<?php selected( $instance['sortby'], 'post_title' ); ?>><?php _e('Page title', THEME_SLUG); ?></option>
				<option value="ID"<?php selected( $instance['sortby'], 'ID' ); ?>><?php _e( 'Page ID', THEME_SLUG ); ?></option>
			</select>
		</p>
<?php
	}

}

/*================================= Twitter Widget ===================================*/

	class tpo_widget_recent_tweets extends WP_Widget {
		
			function tpo_widget_recent_tweets() {
				global $themeTitle;
				$options = array('classname' => 'tpo_twitter_widget', 'description' => __( "Show recent Tweets from Twitter.", THEME_SLUG) );
				$controls = array('width' => 250, 'height' => 300);
				$this->WP_Widget('tpo_twitter', __('Zebra Themes - Recent Tweets' , THEME_SLUG), $options, $controls);
			}	
			
		//widget output
				function widget($args, $instance)
				{
					extract($args);
					$title = apply_filters('widget_title', $instance['title']);
					$consumer_key = $instance['consumer_key'];
					$consumer_secret = $instance['consumer_secret'];
					$access_token = $instance['access_token'];
					$access_token_secret = $instance['access_token_secret'];
					$twitter_id = $instance['twitter_id'];
					$count = (int) $instance['count'];
			
					echo $before_widget;
					
					if($title) {
						echo $before_title.$title.$after_title;
					}
			
					if($twitter_id && $consumer_key && $consumer_secret && $access_token && $access_token_secret && $count) { 
					$transName = 'list_tweets_'.$args['widget_id'];
					$cacheTime = 10;
					if(false === ($twitterData = get_transient($transName))) {
						 // require the twitter auth class
						 @require_once 'twitteroauth/twitteroauth.php';
						 $twitterConnection = new TwitterOAuth(
										$consumer_key,	// Consumer Key
										$consumer_secret,   	// Consumer secret
										$access_token,       // Access token
										$access_token_secret    	// Access token secret
										);
						$twitterData = $twitterConnection->get(
										  'statuses/user_timeline',
										  array(
											'screen_name'     => $twitter_id,
											'count'           => $count,
											'exclude_replies' => false,
											'include_rts' => true
										  )
										);
						 if($twitterConnection->http_code != 200)
						 {
							  $twitterData = get_transient($transName);
						 }
			
						 // Save our new transient.
						 set_transient($transName, $twitterData, 60 * $cacheTime);
					};
					$twitter = get_transient($transName);
					if($twitter && is_array($twitter)) {
						//var_dump($twitter);
					?>
					<div class="twitter-box">
						<div class="twitter-holder">
							<div class="b">
								<div class="tweets-container" id="tweets_<?php echo $args['widget_id']; ?>">
									<ul id="jtwt">
										<?php foreach($twitter as $tweet): ?>
										<li class="jtwt_tweet">
											<p class="jtwt_tweet_text">
											<?php
											$latestTweet = $tweet->text;
											$latestTweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="http://$1" target="_blank">http://$1</a>&nbsp;', $latestTweet);
											$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="http://twitter.com/$1" target="_blank">@$1</a>&nbsp;', $latestTweet);
											echo $latestTweet;
											?>
											</p>
											<?php
											$twitterTime = strtotime($tweet->created_at);
											$timeAgo = $this->ago($twitterTime);
											?>
											<a href="http://twitter.com/<?php echo $tweet->user->screen_name; ?>/statuses/<?php echo $tweet->id_str; ?>" class="jtwt_date"><?php echo $timeAgo; ?></a>
										</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
						<span class="arrow"></span>
					</div>
					<?php }}
					
					echo $after_widget;
				}
	
				function ago($time)
				{
				   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
				   $lengths = array("60","60","24","7","4.35","12","10");
			
				   $now = time();
			
					   $difference     = $now - $time;
					   $tense         = "ago";
			
				   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
					   $difference /= $lengths[$j];
				   }
			
				   $difference = round($difference);
			
				   if($difference != 1) {
					   $periods[$j].= "s";
				   }
			
				   return "$difference $periods[$j] ago ";
				}

		//save widget settings 
			function update($new_instance, $old_instance) {
				$instance = $old_instance;
		
				$instance['title'] = strip_tags($new_instance['title']);
				$instance['consumer_key'] = $new_instance['consumer_key'];
				$instance['consumer_secret'] = $new_instance['consumer_secret'];
				$instance['access_token'] = $new_instance['access_token'];
				$instance['access_token_secret'] = $new_instance['access_token_secret'];
				$instance['twitter_id'] = $new_instance['twitter_id'];
				$instance['count'] = $new_instance['count'];
		
				return $instance;
			}

			
		//widget settings form	
			function form($instance) {
				$defaults = array('title' => 'Recent Tweets', 'twitter_id' => '', 'count' => 3);
				$instance = wp_parse_args((array) $instance, $defaults); ?>
				
				<p><a href="http://dev.twitter.com/apps">Find or Create your Twitter App</a></p>
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
				</p>
		
				<p>
					<label for="<?php echo $this->get_field_id('consumer_key'); ?>">Consumer Key:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('consumer_key'); ?>" name="<?php echo $this->get_field_name('consumer_key'); ?>" value="<?php echo $instance['consumer_key']; ?>" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id('consumer_secret'); ?>">Consumer Secret:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('consumer_secret'); ?>" name="<?php echo $this->get_field_name('consumer_secret'); ?>" value="<?php echo $instance['consumer_secret']; ?>" />
				</p>
		
				<p>
					<label for="<?php echo $this->get_field_id('access_token'); ?>">Access Token:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('access_token'); ?>" name="<?php echo $this->get_field_name('access_token'); ?>" value="<?php echo $instance['access_token']; ?>" />
				</p>
		
				<p>
					<label for="<?php echo $this->get_field_id('access_token_secret'); ?>">Access Token Secret:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('access_token_secret'); ?>" name="<?php echo $this->get_field_name('access_token_secret'); ?>" value="<?php echo $instance['access_token_secret']; ?>" />
				</p>
				
				<p>
					<label for="<?php echo $this->get_field_id('twitter_id'); ?>">Twitter ID:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo $instance['twitter_id']; ?>" />
				</p>
		
					<label for="<?php echo $this->get_field_id('count'); ?>">Number of Tweets:</label>
					<input type="text" class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo $instance['count']; ?>" />
				</p>
		
			<?php
			}
	}
add_action('widgets_init', create_function('', 'return register_widget("tpo_widget_recent_tweets");'));

	
/*================================= Gravatar Comments Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_recentcomments_widget");'));

class tpo_recentcomments_widget extends WP_Widget {
	function tpo_recentcomments_widget() {
		$widget_ops  = array( 'classname' => 'tpo_recentcomments_widget', 'description' => __( 'Comments with Gravatar Widget', THEME_SLUG ) );
		$control_ops = array( 'width' => 300, 'height' => 300 );
		
		$this->WP_Widget( 'tpo-recentcomments-widget', __( 'Zebra Themes - Comments with Gravatar', THEME_SLUG ), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract($args);
                $title = empty($instance['title']) ? 'Recent Comments' : apply_filters('widget_title', $instance['title']);
                $gravatar = !empty($instance['gravatar']) ? $instance['gravatar'] : 48;
                $count = !empty($instance['count']) ? $instance['count'] : 5;
                $alternative = !empty($instance['alternative']) ? $instance['alternative'] : '';
                
                echo $before_widget;
                    if ( $title )
                        echo $before_title . $title . $after_title;
                            global $wpdb;
                            $total_comments = $wpdb->get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb->comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );

                            $comment_total = count($total_comments);

                            echo '<ul>';

                            for ( $comments = 0; $comments < $count; $comments++ ) {

                                if( $alternative == "on" ) {
                                    $right_grav = $comments % 2 ? 'style="float:right"' : '' ;
                                    $left_readmore = $comments % 2 ? 'style="float:left"' : '' ;
                                } else {
                                    $right_grav = '';
                                    $left_readmore = '';
                                }

                                echo '<li>';
                                    echo "<div class='comment-container clearfix'>";

                                        echo "<div class='author-vcard' $right_grav title='".$total_comments[$comments]->comment_author."'>";
                                            echo get_avatar($total_comments[$comments]->comment_author_email, $gravatar, $default='<path_to_url>' );
                                        echo "</div>";

                                        echo "<div class='comment-section'>";

                                            echo "<div class='author-comment'>";
                                                $str = wp_html_excerpt ( $total_comments[$comments]->comment_content,65 );
                                                if( strlen( $str ) >= 65 ) {
                                                     echo '"' . $str . '"';
                                                } else {
                                                    echo '"' . $str . '"';
                                                }
												
                                                echo '<a title="Reply" href="'. get_permalink($total_comments[$comments]->comment_post_ID) . '#comment-' . $total_comments[$comments]->comment_ID . '">-&nbsp;'.$total_comments[$comments]->comment_author;
                                                echo '&nbsp;&rarr;';
                                                echo '</a>';
												
                                            echo "</div>";

                                        echo '</div>'; //end of .comment-section

                                    echo '</div>'; //end of .comment-container
                                echo '</li>';
                            }
                            echo '</ul>';

                 echo $after_widget;
        } // end of function widget()

        function form($instance) {
            $title = isset($instance['title']) ? ($instance['title']) : '';
            $gravatar = !empty($instance['gravatar']) ? $instance['gravatar'] : 64;
            $count = !empty($instance['count']) ? $instance['count'] : 3;
            $alternative = !empty($instance['alternative']) ? $instance['alternative'] : '';

            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('gravatar'); ?>">Gravatar Size: </label>
                <select id="<?php echo $this->get_field_id('gravatar'); ?>" name="<?php echo $this->get_field_name('gravatar'); ?>" style="float: right;width: 100px;">
                    <option value="32" <?php selected( '32', $gravatar ); ?>>32x32</option>
                    <option value="40" <?php selected( '40', $gravatar ); ?>>40x40</option>
                    <option value="48" <?php selected( '48', $gravatar ); ?>>48x48</option>
                    <option value="56" <?php selected( '56', $gravatar ); ?>>56x56</option>
                    <option value="64" <?php selected( '64', $gravatar ); ?>>64x64</option>
                    <option value="72" <?php selected( '72', $gravatar ); ?>>72x72</option>
                </select>
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('count'); ?>">Show Comments: </label>
                <input class="widefat show-comments" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" />
            </p>
            <?php
                global $wpdb;
                $total_comments = $wpdb->get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb->comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );
                $comment_total = count($total_comments);
                echo "<div style='color: #444444;font-size: 11px;padding: 0 0 12px;'>You have total '".$comment_total."' comments to display</div>";
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('alternative'); ?>">Show Alternate Comments: </label>
                <input name="<?php echo $this->get_field_name('alternative'); ?>" type="hidden" value="off" />
                <input class="alternate" id="<?php echo $this->get_field_id('alternative'); ?>" value="on" name="<?php echo $this->get_field_name('alternative'); ?>" type="checkbox" <?php echo checked('on', $alternative ); ?> />
            </p>

            <script type="text/javascript">
                jQuery('.show-comments').keyup(function () {
                    this.value = this.value.replace(/[^0-9\.]/g,'');
                });
            </script>
            <?php
        } // end of function form()
		
		
        function update($new_instance, $old_instance) {
            global $wpdb;
            $total_comments = $wpdb->get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb->comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );
            $comment_total = count($total_comments);
            $instance = $old_instance;
            $instance['title'] = strip_tags($new_instance['title']);
            $instance['gravatar'] = strip_tags($new_instance['gravatar']);
            $instance['count'] = strip_tags($new_instance['count']) > $comment_total ? $comment_total : strip_tags($new_instance['count']);
            $instance['alternative'] = strip_tags($new_instance['alternative']);
            return $instance;
        } // end of function update()
}



/*================================= Google Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_google_widget");'));

class tpo_google_widget extends WP_Widget {
    function tpo_google_widget() {
		$options = array('classname' => 'tpo-google-widget', 'description' => __( "Google widget." , THEME_SLUG) );
		$controls = array('width' => 400, 'height' => 200);
		$this->WP_Widget('tpo_google', __('Zebra Themes - Google' , THEME_SLUG), $options, $controls);
    }

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );
		$page_url = $instance['page_url'];

		echo $before_widget;
		if ( $title )
			echo $before_title;
			echo $title ; ?>
		<?php echo $after_title; ?>
			<div class="google-box">
				<!-- Google +1 script -->
				<script type="text/javascript">
				  (function() {
					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
				<!-- Link blog to Google+ page -->
				<a style='display: block; height: 0;' href="<?php echo $page_url ?>" rel="publisher">&nbsp;</a>
				<!-- Google +1 Page badge -->
				<g:plus href="<?php echo $page_url ?>" height="131" width="280" theme="light"></g:plus>

			</div>
	<?php 
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['page_url'] = strip_tags( $new_instance['page_url'] );
		return $instance;
	}

	function form( $instance ) {
		$defaults = array( 'title' =>__( 'Follow us on Google+' , THEME_SLUG) );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title : </label>
			<input class="widefat"  id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('page_url'); ?>">Page Url : </label>
			<input class="widefat" id="<?php echo $this->get_field_id('page_url'); ?>" name="<?php echo $this->get_field_name( 'page_url' ); ?>" value="<?php echo $instance['page_url']; ?>"  type="text" />
		</p>


	<?php
	}
}


/*================================= Feedburner Widget ===================================*/


add_action('widgets_init', create_function('', 'return register_widget("tpo_feedburner_widget");'));

class tpo_feedburner_widget extends WP_Widget {
    function tpo_feedburner_widget() {
		$options = array('classname' => 'tpo-feedburner-widget', 'description' => __( "Feedburner widget." , THEME_SLUG) );
		$controls = array('width' => 400, 'height' => 200);
		$this->WP_Widget('tpo_feedburner', __('Zebra Themes - Feedburner' , THEME_SLUG), $options, $controls);
    }

	function widget( $args, $instance ) {
		extract( $args );
		
		echo $before_widget;
		
		if ( !empty( $instance['title'] ) )
			echo $before_title . apply_filters( 'widget_title',  $instance['title'], $instance, $this->id_base ) . $after_title;

			echo '<div class="'. $this->id . '-feedburner-widget feedburner-widget" >';
		
		if ( !empty( $instance['header_text'] ) )
			echo '<p class="'. $this->id . '-header-text feedburder-header-text" >' . do_shortcode( $instance['header_text'] ) . '</p>';		

		$feedburnerid = isset( $instance['feedburnerid'] ) ? $instance['feedburnerid'] : '';

		?>
		<form class="feedburner-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $feedburnerid; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<input class="feedburner-email" type="text" name="email" value="<?php _e( 'Enter your e-mail address' , THEME_SLUG ) ; ?>" onfocus="if (this.value == '<?php _e( 'Enter your e-mail address' , THEME_SLUG ) ; ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'Enter your e-mail address' , THEME_SLUG ) ; ?>';}">
			<input type="hidden" value="<?php echo $feedburnerid ; ?>" name="uri">
			<input type="hidden" name="loc" value="en_US">			
			<input class="feedburner-button" type="submit" name="submit" value="<?php echo $instance['button_text']; ?>"> 
		</form>
        <?php
		if ( !empty( $instance['footer_text'] ) )
			echo '<p class="'. $this->id . '-footer-text feedburder-footer-text">' . $instance['footer_text'] . '</p>';
        ?>
        <div class="clear" ></div>
		</div>	
        <?php	
		echo $after_widget;
	}

	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['header_text'] 	= strip_tags( $new_instance['header_text'] );
		$instance['feedburderid'] 	= strip_tags( $new_instance['feedburderid'] );
		$instance['button_text']	= strip_tags( $new_instance['button_text'] );
		$instance['footer_text']	= strip_tags( $new_instance['footer_text'] );
		
		return $instance;
	}	

	function form( $instance ) {
		$defaults = array( 'title' =>__( 'FeedBurner Widget' , THEME_SLUG) , 'button_text' => __( 'Go' , THEME_SLUG) , 'header_text' => __( 'Subscribe to our email newsletter for latest tips.' , THEME_SLUG) );
		
		$instance = wp_parse_args( (array) $instance, $defaults );  
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$header_text = isset($instance['header_text']) ? esc_attr($instance['header_text']) : '';
		$feedburderid = isset($instance['feedburderid']) ? esc_attr($instance['feedburderid']) : '';
		$button_text = isset($instance['button_text']) ? esc_attr($instance['button_text']) : '';
		$footer_text = isset($instance['footer_text']) ? esc_attr($instance['footer_text']) : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
  		<p>
			<label for="<?php echo $this->get_field_id('header_text'); ?>"><?php _e('Header Text:', THEME_SLUG); ?><small>( support : Html & Shortcodes )</small></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('header_text'); ?>" name="<?php echo $this->get_field_name('header_text'); ?>"  ><?php echo $header_text; ?></textarea>
		</p>
 		<p>
			<label for="<?php echo $this->get_field_id('feedburderid'); ?>"><?php _e('Feedburder Username:', THEME_SLUG); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('feedburderid'); ?>" name="<?php echo $this->get_field_name('feedburderid'); ?>" type="text" value="<?php echo $feedburderid; ?>" />
		</p>
   		<p>
			<label for="<?php echo $this->get_field_id('button_text'); ?>"><?php _e('Button Text:', THEME_SLUG ); ?></label>
			<input class="widefat" class="widefat" id="<?php echo $this->get_field_id('button_text'); ?>" name="<?php echo $this->get_field_name('button_text'); ?>" type="text" value="<?php echo $button_text; ?>" />
		</p>  
  		<p>
			<label for="<?php echo $this->get_field_id('footer_text'); ?>"><?php _e('Footer Text:', THEME_SLUG); ?><small>( support : Html & Shortcodes )</small></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('footer_text'); ?>" name="<?php echo $this->get_field_name('footer_text'); ?>" ><?php echo $footer_text; ?></textarea>
		</p>  

		<?php
	}
}
/*================================= Googpe Map Widget ===================================*/

add_action('widgets_init', create_function('', 'return register_widget("tpo_widget_gmap");'));

class tpo_widget_gmap extends WP_Widget {
	function tpo_widget_gmap() {
		$options = array('classname' => 'tpo_gap_widget', 'description' => __( 'Google Map Widget.', THEME_SLUG) );
		$this->WP_Widget('gmap-widget', __('Zebra Themes - Google Map' , THEME_SLUG), $options );
	} 
	function widget( $args, $instance3 ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance3['title'] );
		$gmap_address = $instance3['gmap_address'];  
		$gmap_width = $instance3['gmap_width']; 
		$gmap_height = $instance3['gmap_height'];
		$gmap_zoom = $instance3['gmap_zoom'];  
		echo $before_widget;
		echo $before_title . $title . $after_title; 
		if ( isset($video_url) )
			printf('<li class="widget_gmap">'); 
			printf('<iframe width="'.$gmap_width.'" height="'.$gmap_height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='.$gmap_address.'&amp;ie=UTF8&amp;hq=&amp;hnear='.$gmap_address.'&amp;z='.$gmap_zoom.'&amp;output=embed&amp;iwloc=near"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q='.$gmap_address.'&amp;ie=UTF8&amp;hq=&amp;hnear='.$gmap_address.'&amp;z='.$gmap_zoom.'&amp;iwloc=near" style="color:#0000FF;text-align:left">Enlarge</a></small>');  
			printf('</li><br />');  
			echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['gmap_address'] = strip_tags($new_instance['gmap_address']);
		$instance['gmap_width'] = strip_tags( $new_instance['gmap_width'] );
		$instance['gmap_height'] = strip_tags( $new_instance['gmap_height'] );
		$instance['gmap_zoom'] = strip_tags( $new_instance['gmap_zoom'] );
		return $instance;
	}
	function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$gmap_address = isset($instance['gmap_address']) ? esc_attr($instance['gmap_address']) : '';
		$gmap_width = isset($instance['gmap_width']) ? esc_attr($instance['gmap_width']) : '';
		$gmap_height = isset($instance['gmap_height']) ? esc_attr($instance['gmap_height']) : '';
		$gmap_zoom = isset($instance['gmap_zoom']) ? esc_attr($instance['gmap_zoom']) : '';
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('gmap_address'); ?>"><?php _e('Address:', THEME_SLUG); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('gmap_address'); ?>" name="<?php echo $this->get_field_name('gmap_address'); ?>" type="text" value="<?php echo $gmap_address; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id("gmap_width"); ?>"><?php _e('Width:', THEME_SLUG); ?></label>
		<input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("gmap_width"); ?>" name="<?php echo $this->get_field_name("gmap_width"); ?>" value="<?php echo $gmap_width; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id("gmap_height"); ?>"><?php _e('Height:', THEME_SLUG); ?></label>
		<input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("gmap_height"); ?>" name="<?php echo $this->get_field_name("gmap_height"); ?>" value="<?php echo $gmap_height; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id("gmap_zoom"); ?>"><?php _e('Zoom:', THEME_SLUG); ?></label>
		<input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("gmap_zoom"); ?>" name="<?php echo $this->get_field_name("gmap_zoom"); ?>" value="<?php echo $gmap_zoom; ?>" /></p>
		<?php
	}
}
?>