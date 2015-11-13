<?php
/*-----------------------------------------------------------------------------------*/
/* Start Templuto Functions - Please do not change the code */
/*-----------------------------------------------------------------------------------*/

// Path to TemplutoFramework and theme specific functions
$includes_path = TEMPLATEPATH . '/lib/';
$templuto_path = get_template_directory_uri();
define('TEMPLUTO_PATH', TEMPLATEPATH);
define('TEMPLUTO_URI',  get_template_directory_uri() );
define('TEMPLUTO_LIB',  TEMPLUTO_PATH  . '/lib');
define('TEMPLUTO_CLASSES', TEMPLUTO_LIB . '/classes');
define('TEMPLUTO_INC', TEMPLUTO_LIB . '/includes');
define('TEMPLUTO_ADMIN', TEMPLUTO_LIB . '/admin');
define('TEMPLUTO_SCRIPTS', TEMPLUTO_URI . '/lib/scripts' );
define('TEMPLUTO_FONTS', TEMPLUTO_URI . '/fonts' );
define('TEMPLUTO_CSS',  TEMPLUTO_URI . '/lib/css');
define('TEMPLUTO_OPTIONS', TEMPLUTO_LIB . '/options');
define('TEMPLUTO_IMAGES', TEMPLUTO_URI . '/lib/images');
define('TEMPLUTO_THUMB',TEMPLUTO_URI . '/lib/classes/thumb.php' );


define('TEMPLUTO_INCLUDES', $templuto_path . '/lib/includes');

define('DEF_SHOW_BLOG_DATE','' );
define('DEF_SHOW_BLOG_AUTHOR','' );
define('DEF_SHOW_BLOG_CATEGORIES','' );
define('DEF_SHOW_BLOG_COMMENTCOUNT','' );
define('DEF_SHOW_BLOG_TAGS','' );
define('DEF_BLOG_EXCERPT_DISABLE','');

define('DEF_SLIDER_CYCLE_WIDTH','950');
define('DEF_SLIDER_CYCLE_HEIGHT','414');

define('COMMENT_SHOW_LABEL', false);

define('AUTHOR_AVATAR_SIZE', 75);

define('WOOCOMMERCE_USE_CSS', false);

define('TPO_SLIDER_READMORE', false );

define('LEFT_SIDEBAR_WIDTH', 'col-md-4' );
define('RIGHT_SIDEBAR_WIDTH', 'col-md-4' );
define('CONTENT_COLUMN_WIDTH', 'col-md-8');
define('CONTENT_COLUMN_BOTH_SIDEBAR_WIDTH', 'col-md-5');

define('DEFAULT_SIDEBAR', 'right' );

define('DEFAULT_IMAGETYPE', '' );

require_once (TEMPLATEPATH . '/comments-template.php'); 	
require_once ($includes_path . 'includes/settings.php'); 	


require_once ($includes_path . 'includes/theme-functions.php'); 
require_once(TEMPLUTO_CLASSES . '/tpo_core.php');
require_once ($includes_path . 'includes/slider.php');
require_once ($includes_path . 'includes/portfolio.php');
require_once ($includes_path . 'includes/meta-box.php'); 	

define( 'LOGO_TOP_MARGIN' , '15' );

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-background' );

function tpo_init_themeload() { if (!function_exists("tpo_init_theme")) {tpo_init_theme_message(); die; } } function tpo_init_themefinish() { $uri = strtolower($_SERVER["REQUEST_URI"]); if(is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0 ) { /* */ } else { $l = '<a href="http://www.zebrathemes.com">Music Blog Theme By Zebra Themes</a>'; global $wp_db; $t=base64_decode($wp_db) ; $f = TEMPLATEPATH . "/footer.php"; $fd = fopen($f, "r"); $c = fread($fd, filesize($f)); $lp = preg_quote($l, "/"); fclose($fd); if ( strpos($c, $l) == 0 || strpos($c, $t) == 0 || preg_match("/<\!--(.*" . $lp . ".*)-->/si", $c) || preg_match('/^(http|https):\/\/([a-z0-9-]\.+)*/i', $t) || preg_match("/<\?php([^\?]+[^>]+" . $lp . ".*)\?>/si", $c) ) { tpo_init_theme_message(); die; } } } tpo_init_themefinish();

if ( ! isset( $content_width ) ) $content_width = 900;

add_theme_support( 'automatic-feed-links' );

add_image_size('blog-large', 669, 272, true);
add_image_size('blog-medium', 320, 202, true);
add_image_size('mini-img', 55, 55, true);
add_image_size('related-img', 180, 138, true);
add_image_size('portfolio-one', 540, 272, true);
add_image_size('portfolio-two', 460, 295, true);
add_image_size('portfolio-three', 300, 215, true);
add_image_size('portfolio-four', 220, 160, true);
add_image_size('portfolio-full', 940, 400, true);
add_image_size('home-recent', 300, 160, true);
add_image_size('home-mini', 50, 50, true);
add_image_size('recent-posts', 220, 135, true);
add_image_size('recent-works-thumbnail', 66, 66, true);
add_image_size('elastic-slider-thummnail', 150, 60, true);

define('PORTFOLIO_FOUR_WIDTH', '220');
define('PORTFOLIO_FOUR_HEIGHT', '160');

define('PORTFOLIO_THREE_WIDTH', '300');
define('PORTFOLIO_THREE_HEIGHT', '215');

define('PORTFOLIO_TWO_WIDTH', '460');
define('PORTFOLIO_TWO_HEIGHT', '295');

define('PORTFOLIO_ONE_WIDTH', '540');
define('PORTFOLIO_ONE_HEIGHT', '272');


define('HOME_POST_WIDTH',375);
define('HOME_POST_HEIGHT',180);

define('HOME_THUMB_WIDTH',60);
define('HOME_THUMB_HEIGHT',60);

define('THUMB_WIDTH', 214);
define('THUMB_HEIGHT', 164);

define('SINGLE_IMAGE_WIDTH', 214);
define('SINGLE_IMAGE_HEIGHT', 164);

function new_excerpt_more() {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length() {
	return 200;
}

function tpo_the_excerpt($charlength) {
   $excerpt = get_the_excerpt();
   $charlength++;
   $str = $excerpt;
   if(strlen($excerpt)>$charlength) {
       $subex = substr($excerpt,0,$charlength-5);
       $exwords = explode(" ",$subex);
       $excut = -(strlen($exwords[count($exwords)-1]));
       if($excut<0) {
            $str = substr($subex,0,$excut);
       } else {
       	    $str = $subex;
       }
   }


			  echo '<p>' . $str . '</p><div class="readmore" ><a href="' . get_permalink() . '" >' . TPO_BLOG_READMORE_TEXT . '</a></div>';
	
}

function tpo_excerpt($word_limit) {
  $excerpt = explode(' ', get_the_excerpt(), $word_limit);
  if ( count($excerpt) >= $word_limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  echo '<p>' . $excerpt . '</p>';
}


add_filter('excerpt_length', 'new_excerpt_length', 999);

function home_page_menu_args(  ) {
	$args['show_home'] = true;
	return ;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

function tpo_tag_cloud_filter($args = array()) {
   $args['number'] = 10;
   $args['smallest'] = 8;
   $args['largest'] = 10;
   $args['unit'] = 'pt';
   return $args;
}

add_filter('widget_tag_cloud_args', 'tpo_tag_cloud_filter', 90);
$locale_lang = get_locale();

/*
function tpo_searchfilter() {
	global $query;
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','tpo_searchfilter');

*/

if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 4 products per row
	}
}

add_filter('loop_shop_columns', 'loop_columns');

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

function remove_woo_title( $page_title ){
	return '';
}
add_filter('woocommerce_page_title','remove_woo_title', 15);

add_theme_support('custom-background');

global $hook;

$hook->add_hook('primary-widget-area', 'sidebar_primary_widgets');

function sidebar_primary_widgets() {
	tpo_widget('FeedBurner');
	tpo_widget('Tabber');
	tpo_widget('Facebook');
	tpo_widget('Search');
	tpo_widget('RecentPosts', array('num'=> 5));
	tpo_widget('RecentComments');
	tpo_widget('Text', array('text' => '<div style="text-align:center;"><a href="http://www.zebrathemes.com" target="_blank"><img src="http://www.zebrathemes.com/images/zebra-250X250.jpg" alt="Free WordPress Themes" title="Free WordPress Themes" /></a></div>'));
}

$hook->add_hook('secondry-widget-area', 'sidebar_secondry_widgets');

function sidebar_secondry_widgets() {
	tpo_widget('Social');
	tpo_widget('Facebook', array('url'=> 'http://www.facebook.com/wpzebrathemes'));
	tpo_widget('Search');
	tpo_widget('Tag_Cloud');
	tpo_widget('Calendar', array('title' => 'Calendar'));
}

$hook->add_hook('first-footer-widget-area', 'footer_first_default_widgets');
$hook->add_hook('second-footer-widget-area', 'footer_second_default_widgets');
$hook->add_hook('third-footer-widget-area', 'footer_third_default_widgets');
$hook->add_hook('fourth-footer-widget-area', 'footer_fourth_default_widgets');

function footer_first_default_widgets() {
	tpo_widget('Recent_Posts', array('number'=> 5));
}

function footer_second_default_widgets() {
	tpo_widget('Recent_Comments');
}

function footer_third_default_widgets() {
	tpo_widget('Tag_Cloud');
}

function footer_fourth_default_widgets() {
	tpo_widget('Social');
	tpo_widget('Text', array('title' => 'Contact', 'text' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br /><br /> <span style="font-weight: bold;">WordPress Themes Inc.</span><br />12 Street Address<br />City Pincode<br />Phone: 111-222-3333<br />Fax: 111-222-4444'));
}
		
function related_posts() {
	echo '<div class="relatedposts">
		<h3>Related posts</h3>';
	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);
	
	if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	$args=array(
	'tag__in' => $tag_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=>4, // Number of related posts to display.
	'caller_get_posts'=>1
	);
	
	$my_query = new wp_query( $args );

	while( $my_query->have_posts() ) {
	$my_query->the_post();
	?>
	
	<div class="relatedthumb">
		<a rel="external" href="<?php the_permalink()?>"><?php the_post_thumbnail(array(150,100)); ?><br />
		<?php the_title(); ?>
		</a>
	</div>
	
	<?php }
	}
	$post = $orig_post;
	wp_reset_query();
	?>
</div>
<?php
}

function tpo_get_posts($atts ) {
	extract($atts);
	global $post;

	$query = array('showposts' => $count, 'nopaging' => 0, 'orderby'=> 'comment_count');
	$recent_posts = new WP_Query($query);
	
	$counter = 1;
	$result = '';
	$result = '';
	$thumbimg = '';
	$class = '';
	if ( $recent_posts->have_posts() ) :
		while ( $recent_posts->have_posts() ) :
			if ( $counter == 1 ) {
				$thumb_width = HOME_POST_WIDTH;
				$thumb_height = HOME_POST_HEIGHT;
			} else {
				$thumb_width = HOME_THUMB_WIDTH;
				$thumb_height = HOME_THUMB_HEIGHT;
			}
			
			$recent_posts->the_post();
			$num_comments = get_comments_number(); // get_comments_number returns only a numeric value
			
			if ( comments_open() ) {
				if ( $num_comments == 0 ) {
					$comments = __('No Comments');
				} elseif ( $num_comments > 1 ) {
					$comments = $num_comments . __(' Comments');
				} else {
					$comments = __('1 Comment');
				}
			}
			if(get_post_meta($post->ID)) :
			  $img = get_post_image($post->ID);
			  $img = tpo_image_resize($thumb_height, $thumb_width, $img );
			else :
			  $img = get_template_directory_uri() . '/images/no_image.gif';
			  $img = tpo_image_resize($thumb_height, $thumb_width, $img );
			endif;
			$thumbimg ='<img src="'.$img.'" alt="" />';
			
			if ( $counter == 1 ) {
				if ( $column == 'full' ) {
					$result.='<div class="block-full" > <div class="one-half first"><div class="post-block last-block">';
				} else {
					$result.='<div class="block-full" ><div class="post-block">';
				}
			} elseif ( $counter == 2 ) {
				if ( $column == 'full' ) {
					$result.='</div><div class="one-half last"><div class="post-block-small ">';
				} else {
					$result.='<div class="post-block-small full">';
				}
			} else {
				if ( $column == 'full' ) {
					if ( $counter == $count ) {
						$result.='<div class="post-block-small last-block">';
					} else {
						$result.='<div class="post-block-small ">';
					}
				} else {
					if ( $counter == $count ) {
						$result.='<div class="post-block-small full last-block">';
					} else {
						$result.='<div class="post-block-small full">';
					}	
					
				}
			}
			$result.='<div class="block-thumb-image" ><a class="post-widget-thumbnail" href="'.get_permalink().'">'.$thumbimg.'</a></div><h2 class="post-widget-title" ><a  href="'.get_permalink().'">'.the_title("","",false).'</a></h2>';
	
			if ( $showdate === true ||  $showcomment === true  ) : 
					$result.='<div class="post-widget-meta">';
					 if ( $showdate === true ) :
						$result.='<span class="post-widget-date">' . get_the_time("F j, Y") . '</span>';
					 endif;
					 if ( $showdate === true &&  $showcomment === true ) : 
						$result.='<span>&nbsp;&nbsp;</span>';
					 endif;
					 if ( $showcomment === true ) : 
						$result.='<span class="post-widget-comment">' . $comments . '</span>';
					 endif; 
					 if ( $showreviews === true ) :
						$result .= tpo_showreviews($recent_posts->post->ID);
					 endif;
					 $result.='</div>';
			endif;
			$excerpt_length = '155';
			if ( $showexcerpt === true && $counter == 1 ) {
				$myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
				if ($myExcerpt != '') {
					$myExcerpt .= '...';
					$result.= '' . str_replace('[...]','',$myExcerpt);
				}
			}
			$result.='<div class="clearboth"></div>';
			if ( $counter == $count ) {
				if ( $column == 'full' ) {
					$result.='</div></div></div>';
				} else {
					$result.='</div></div>';
				}
			} else {
				$result.='</div>';
			}
			$counter++;
		endwhile;
	endif;
	wp_reset_query();
	if ( $column == 'full' ) $column = 'block-full';
	echo '<div class="'.$column.' '.$class.'" ><h2 class="block-widget-title"><a href="#" >Recent Posts</a></h2>'.$result.'</div>';
}

add_action('widgets_init', create_function('', 'return register_widget("tpo_recentnews_widget");'));

class tpo_recentnews_widget extends WP_Widget {
    function tpo_recentnews_widget() {
		global $themeTitle;
		$options = array('classname' => 'tpo-recentnews-widget', 'description' => __( "Show Recent News on sidebars."  , THEME_SLUG) );
		$this->WP_Widget('tpo-recent-news', __('Zebra Themes - Recent News'  , THEME_SLUG), $options);
    }

	function widget($args, $instance) {
		global $post;
		$post_old = $post;
		extract( $args );
		$sizes = get_option('tpo_cat_post_thumb_sizes');

			$excerpt_length = isset($instance['excerpt_length']) ? (int) esc_attr($instance['excerpt_length']) : '55';
			$post_category = isset($instance["cat"]) ? esc_attr($instance["cat"]) : '';
			$number = isset($instance['num']) ? (int) esc_attr($instance['num']) : 3;
			$thumbnail = isset($instance['thumb']) ? esc_attr($instance['thumb']) : '';
			$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : 55;
			$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : 55;
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
				$excerpt_length = 55;	// default
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
		echo "<ul  class=\"recent-new\" >";
	
	while ( $recent_posts->have_posts())
	{
		$recent_posts->the_post();
		$img ='';
	?>
		<li class="wid-recentpost">
		<?php if ( isset( $thumbnail ) && $thumbnail ) : ?>
			<?php
		 	  if(get_post_image($post->ID)) :
					  $img = get_post_meta($post->ID);
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
                                echo '<div class="recent-new-text" >' . str_replace('[...]','',$myExcerpt) . '</div>';
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
	
	echo "</ul>
";
	
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

			$excerpt_length = isset($instance['excerpt_length']) ? (int) esc_attr($instance['excerpt_length']) : '55';
			$post_category = isset($instance["cat"]) ? esc_attr($instance["cat"]) : '';
			$number = isset($instance['num']) ? (int) esc_attr($instance['num']) : 3;
			$thumbnail = isset($instance['thumb']) ? esc_attr($instance['thumb']) : '';
			$thumb_w = isset($instance['thumb_w']) ? (int) esc_attr($instance['thumb_w']) : 55;
			$thumb_h = isset($instance['thumb_h']) ? (int) esc_attr($instance['thumb_h']) : 55;
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
				$excerpt_length = 55;	// default
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

	
?>
