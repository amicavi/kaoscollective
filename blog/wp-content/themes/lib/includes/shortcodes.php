<?php

add_filter('widget_text', 'do_shortcode');



// Code (internall only)
//...............................................
function shortcode_code( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',
    ), $atts));

	return '<pre class="code '.$class.'">'. $content .'</pre>';
}
add_shortcode('code', 'shortcode_code');

/*====================== One Sixth ===========================*/

function tpo_one_sixth($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="one-sixth last">' . do_shortcode($content) . '</div>';
		} else {
			return '<div class="one-sixth">'  .do_shortcode($content) . '</div>';
		}
}
add_shortcode("one_sixth", "tpo_one_sixth");

/*====================== Five Sixth ===========================*/

function tpo_five_sixth($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="five-sixth last">' . do_shortcode($content) . '</div>';
		} else {
			return '<div class="five-sixth">'  .do_shortcode($content) . '</div>';
		}
}
add_shortcode("five_sixth", "tpo_five_sixth");


/*====================== One Fifth ===========================*/

function tpo_one_fifth($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="one-fifth last">' . do_shortcode($content) . '</div>';
		} else {
			return '<div class="one-fifth">'  .do_shortcode($content) . '</div>';
		}
}
add_shortcode("one_fifth", "tpo_one_fifth");

/*====================== Four Fifth ===========================*/

function tpo_four_fifth($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="four-fifth last">' . do_shortcode($content) . '</div>';
		} else {
			return '<div class="four-fifth">'  .do_shortcode($content) . '</div>';
		}
}
add_shortcode('four_fifth', 'tpo_four_fifth');


/*====================== One Fourth ===========================*/

function tpo_one_fourth($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="one-fourth last">' . do_shortcode($content) . '</div>';
		} else {
			return '<div class="one-fourth">'  .do_shortcode($content) . '</div>';
		}
}
add_shortcode("one_fourth", "tpo_one_fourth");


/*====================== Three Fourth ===========================*/

function tpo_three_fourth($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="three-fourth last">' . do_shortcode($content) . '</div>';
		} else {
			return '<div class="three-fourth">'  .do_shortcode($content) . '</div>';
		}
}

add_shortcode('three_fourth', 'tpo_three_fourth');

/*====================== One Third ===========================*/

function tpo_one_third($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="one-third last">' .do_shortcode($content). '</div>';
		} else {
			return '<div class="one-third">' .do_shortcode($content). '</div>';
		}
}

add_shortcode("one_third", "tpo_one_third");


/*====================== Two Third ===========================*/

function tpo_two_third( $atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="two-third last">' .do_shortcode($content). '</div>';
		} else {
			return '<div class="two-third">' .do_shortcode($content). '</div>';
		}
}
add_shortcode('two_third', 'tpo_two_third');

/*====================== Full COlumn ===========================*/

function tpo_full($atts, $content = null ) {
		return '<div class="full last">' .do_shortcode($content). '</div>';
}
add_shortcode('full', 'tpo_full');

/*====================== One Half ===========================*/

function tpo_one_half($atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'last' => 'no',
		), $atts);
		
		if($atts['last'] == 'yes') {
			return '<div class="one-half last">' .do_shortcode($content). '</div>';
		} else {
			return '<div class="one-half">' .do_shortcode($content). '</div>';
		}
    
}
add_shortcode('one_half', 'tpo_one_half');


/*====================== Title ===========================*/

function tpo_title($atts, $content = null ) {
	extract(shortcode_atts(array(
		'tag'		=> '',
	), $atts));
	if ($tag == '')  $tag = 'h1' ;
    return '<div class="title" ><'.$tag.'>' . do_shortcode($content) . '</'.$tag.'></div>';
}

add_shortcode("title", "tpo_title");



function tpo_box($atts, $content = null ) {
extract( shortcode_atts( array(
      'type' => '1'
      ), $atts ) );
      return '<div class="description type-' .$type. '">' . do_shortcode($content) . '</div>';
}

add_shortcode("box", "tpo_box");

/*====================== Testimonial ===========================*/

function tpo_testimonial( $atts, $content = null) {
extract( shortcode_atts( array(
      'author' => '',
	  'type' => 'male',
	  'companyname' => ''
      ), $atts ) );
      return '<div class="testimonial '.$type.'" ><blockquote><q>' . do_shortcode($content) . '</q><div><span class="company-name"><strong>'.$companyname.'</strong><span>, '.$author.'</span></span></div></blockquote></div>';
}

add_shortcode('testimonial', 'tpo_testimonial');

/*====================== Basic List ===========================*/

function tpo_basic_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="basic_list">', do_shortcode($content));
	return $content;
}

add_shortcode('basic_list', 'basic_list');

/*====================== Check List ===========================*/

function tpo_check_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="check_list">', do_shortcode($content));
	return $content; 
}

add_shortcode('check_list', 'tpo_check_list');


/*====================== Gap between section ===========================*/


function tpo_gap($atts, $content = null ) {
	extract(shortcode_atts(array(
		'height' => '10',
    ), $atts));
	
	if( $height != '' )  $style = 'style="height: '.$height.'px;"' ;
	
    return '<div class="gap" ' . $style . ' ></div>';
}

add_shortcode("gap", "tpo_gap");

/*====================== Divider ===========================*/


function tpo_divider($atts, $content = null ) {
    return '<div class="divider">&nbsp;' . do_shortcode($content) . '</div>';
}

add_shortcode("divider", "tpo_divider");


function tpo_divider_top() {
	return '<div class="divider top"><a href="#">'.__('Top',THEME_SLUG).'</a></div>';
}

add_shortcode('divider_top', 'tpo_divider_top');

/*====================== Image ===========================*/

function tpo_image($atts, $content = null ) {
	extract(shortcode_atts(array(
		'title' => '',
		'align' => '',
		'lightbox' => '',
		'width' => '',
		'height' => '',
		'href' => '',
    ), $atts));
	$img = $content;
                    
		$cont = '<div class="viewport" ><a title="'.$title.'" href="'.$href.'"><img width="'.$width.'" height="'.$height.'" alt="'.$title.'" src="' . $img . '"><span class="image_overlay" style="visibility: visible; opacity: 1; "></span></a></div>';
	
    return '[raw]'.$cont.'[/raw]';
}
add_shortcode("image", "tpo_image");

/*====================== Heading ===========================*/

function tpo_heading($atts, $content = null ) {
	extract(shortcode_atts(array(
		'type' => '',
		'color' => '',
		'font_size' => '',
		'font_bold' => ''
    ), $atts));
	$colorstyle = '';
	$fontstyle = '';
	if (!$type)  $type = '1';
	if ($color)  $colorstyle = 'color:'.$color.';';
	if ($font_size)  $fontstyle = 'font-size:'.$font_size.'px;';
	if ($font_bold)  $fontstyle .= 'font-weight:bold;';
	if ($colorstyle || $fontstyle || $fontstyle){
		return '<h'.$type.' style="'.$colorstyle.$fontstyle.'">' . $content . '</h'.$type.'>';
	} else {
		return '<h'.$type.'>' . $content . '</h'.$type.'>';
	}
}
add_shortcode("heading", "tpo_heading");

/*====================== Dropcaps ===========================*/

function tpo_dropcaps($atts, $content = null, $shortcodename = "" )
{	
	
	// add divs to the content
	$return = '<span class="'.$shortcodename.' ie6fix">';
	$return .= do_shortcode($content);
	$return .= '</span>';	
	return $return;
}

add_shortcode('dropcap1', 'tpo_dropcaps');
add_shortcode('dropcap2', 'tpo_dropcaps');
add_shortcode('dropcap3', 'tpo_dropcaps');

/*====================== Pull Quotes ===========================*/

function  tpo_pullquote( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'align' => '',
		'type' => '',
    ), $atts));
	if (trim($type) == '') $class = "1"; 
	$content = str_replace("<p></p>","",$content);
   return '<blockquote class="pullquote type' . $type .' align' . $align . ' ">' . $content . '</blockquote>';
}
add_shortcode('pullquote', 'tpo_pullquote');

/*====================== Quotes ===========================*/

function tpo_quotes($atts, $content=null, $shortcodename ="")
{	
	$align = 'left';
	if (isset($atts[0]) && trim($atts[0]) == 'right')  $align = 'right';

	$remove = array('<p>','</p>');
	if(strpos($content, $remove[1]) === 0)
	{
		$content = ltrim($content,$remove[1]);
		$content = rtrim($content,$remove[0]);
	}
    extract(shortcode_atts(array(
        'align' => '',
		'cite' => '',
    ), $atts));
	$output .= '<blockquote class="pullquote '.$shortcodename.'_'.$align.'">';
	$output .= wpautop($content);
	$output .= '<cite>-'.$cite.'</cite>';
	$output .= '</blockquote>';
	return $output;
}

add_shortcode('quote', 'tpo_quotes');

/*====================== Blockquote ===========================*/

function tpo_blockquote($atts, $content=null, $shortcodename ="")
{	
	$align = 'left';
	if (isset($atts[0]) && trim($atts[0]) == 'right')  $align = 'right';
    extract(shortcode_atts(array(
        'align' => '',
		'cite' => '',
    ), $atts));
	$remove = array('<p>','</p>');
	if(strpos($content, $remove[1]) === 0)
	{
		$content = ltrim($content,$remove[1]);
		$content = rtrim($content,$remove[0]);
	}
	$output = '<blockquote class="blockquote '.$shortcodename.'_'.$align.'">';
	$output .= $content;
	$output .= '<cite>-'.$cite.'</cite>';
	$output .= '</blockquote>';
	return $output;
} 

add_shortcode('blockquote', 'tpo_blockquote');

/*====================== Google Map ===========================*/

function googlemap_shortcode( $atts ) {
    extract(shortcode_atts(array(
        'width' => '500px',
        'height' => '300px',
        'apikey' => 'REPLACEME',
        'marker' => '',
        'center' => '',
        'zoom' => '13'
    ), $atts));
 
    if ($center) $setCenter = 'map.setCenter(new GLatLng('.$center.'), '.$zoom.');';
    if ($marker) $setMarker = 'map.addOverlay(new GMarker(new GLatLng('.$marker.')));';
 
    $rand = rand(1,100) * rand(1,100);
 
    return '
    	<script src="http://maps.google.com/maps?file=api&v=2.x&sensor=false&key='.$apikey.'" type="text/javascript"></script>
 
	    <script type="text/javascript">
		    function initialize() {
		      if (GBrowserIsCompatible()) {
		        var map = new GMap2(document.getElementById("map_canvas_'.$rand.'"));
		        '.$setCenter.'
		        '.$setMarker.'
		        map.setUIToDefault();
		      }
		    }
		    initialize();
	    </script>
    ';
 
}
add_shortcode('googlemap', 'googlemap_shortcode');

/*====================== Display Posts ===========================*/

function displayposts($atts, $content = null, $code ){ 
	global $wp_filter;
	$the_content_filter_backup = $wp_filter['the_content'];
	extract(shortcode_atts(array(
		'count' => 5,
		'cat' => '',
		'posts' => '',
		'image' => 'true',
		'meta' => 'true',
		'full' => 'false',
		'nopaging' => 'true',
		'imagestyle' => 'full',
	), $atts));

	$query_string = array(
		'posts_per_page' => (int)$count,
		'post_type'=>'post',
	);
	if($cat){
		$query_string['cat'] = $cat;
	}
	if($posts){
		$query_string['post__in'] = explode(',',$posts);
	}
	if ($nopaging == 'false') {
		$paged =(get_query_var('paged')) ? get_query_var('paged') : 1;
		$query_string['paged'] = $paged;
	} else {
		$query_string['showposts'] = $count;
	}

	global $tpo_blog_image_left;
	if ($imagestyle == 'full') {
		$tpo_blog_image_left = 'false';
	} elseif ($imagestyle == 'thumbnail') {
		$tpo_blog_image_left = 'true';
	} else {
		$tpo_blog_image_left = 'false';
	}
	ob_start();
	echo '<div id="postmain">';
	query_posts($query_string);
	$columnwidth=630;
	$imagewidth = $columnwidth-(TPO_BLOG_IMAGE_MARGIN*2); 
		if (have_posts()) :  
			while (have_posts()) : the_post();
				if ($image == 'true'){
					$postimage = get_post_meta(get_the_ID(), '_post_image', true);  
				}
				echo '<div id="post-'.get_the_ID().'" class="blog-post">';
				if($meta=='true' && TPO_BLOG_SHOW_METAPOSITION == 'Top') displaymeta(); 
					if(TPO_BLOG_SHOW_TITLEPOSITION == 'Top') :  
						?>
						<h1 class="post-heading" ><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to the_title_attribute"><?php the_title()  ?></a></h1>
						<?php
						if($meta=='true' &&  TPO_BLOG_SHOW_METAPOSITION == 'After title') displaymeta();
					endif; 
				if($tpo_blog_image_left != 'true' && $postimage  && TPO_BLOG_SHOW_THUMBNAIL == 'true') :
					 $postimage = tpo_image_resize(TPO_BLOG_IMAGE_FULLHEIGHT, $width=$imagewidth, $postimage);
					 echo '<div class="blog_image" style="width:'.$imagewidth.'px">';
					 echo '<a href="#" title="'.the_title("","",false).'">';
					 echo '<img class="post_image" src="'.$postimage.'" alt="'.the_title("","",false).'">';
					 echo '</a>';
					 echo '</div>';
					 echo '<img src="'.get_template_directory_uri().'/images/image_shadow.png" class="image_shadow" style="width:'.$imagewidth.'px">';
				endif;
				echo '<div class="post_entry">';
				if($meta=='true' && TPO_BLOG_SHOW_METAPOSITION == 'After image') displaymeta(); 
					if(TPO_BLOG_SHOW_TITLEPOSITION == 'After image') : 
						echo '<h1 class="post-heading" ><a href="'.get_permalink().'" rel="bookmark" title="Permanent Link to '.get_permalink().'">'.the_title("","",false).'</a></h1>';
						if($meta=='true' && TPO_BLOG_SHOW_METAPOSITION == 'After title') displaymeta(); 
					endif;
					echo '<div class="entry">';
				if($tpo_blog_image_left == 'true' && $postimage && TPO_BLOG_SHOW_THUMBNAIL == 'true') : 
				    $thumbimagewidth = TPO_BLOG_IMAGE_THUMBWIDTH-15;
				    $thumbimageheight = TPO_BLOG_IMAGE_THUMBHEIGHT-60;
					$postimage = tpo_image_resize($height=$thumbimageheight, $width=$thumbimagewidth, $postimage); 
					echo '<div class="blog_image" style="width:'.TPO_BLOG_IMAGE_THUMBWIDTH.'px; margin:10px 20px 0px 0px; float: left; overflow: hidden;">';
					echo '<a href="#" title="'.the_title("","",false).'">';
					echo '<img class="post_image"  src="'.$postimage.'" alt="'.the_title("","",false).'">';
					echo '</a>';
					echo '<img src="'.get_template_directory_uri().'/images/image_shadow.png" class="image_shadow" style="width:'. $thumbimagewidth  .'px">';
					echo '</div>';

					 
				endif; 
				if(TPO_BLOG_EXCERPT_DISABLE == 'true') : 
					the_content();
				else :
					$myExcerpt = rtrim(substr(get_the_excerpt(),0,300));
					if ($myExcerpt != '') {
						$myExcerpt .= '...';
						echo '<p>'.str_replace('[...]','',$myExcerpt).'</p>';
					}
				endif;
				 echo '<a class="button_link" style="font-size:'.TPO_BLOG_READMORE_FONTSIZE.'px;color:'.TPO_BLOG_READMORE_FONTCOLOR.'" href="'.get_permalink($post->ID).'"><span>'.TPO_BLOG_READMORE_TEXT.'</span></a>';
				echo '</div>';
				if($meta=='true' && TPO_BLOG_SHOW_METAPOSITION == 'After content') displaymeta(); 
				echo '</div>';
 
				echo '</div>';
			endwhile; 
				echo '<div class="navigation">';
				if (function_exists('wp_pagenavi')) { 
					if($nopaging!='true') wp_pagenavi(); 
				} else {  
					echo '<div class="alignleft">';
					echo	get_next_posts_link('&laquo; Older Entries');
					echo '</div>';
					echo '<div class="alignright">';
						get_previous_posts_link('Newer Entries &raquo;');
					echo '</div>';
                  } 
				echo '</div>';
	    else :  
			echo '<h2 class="center">Not Found</h2>';
			 echo '<p class="center">Sorry, but you are looking for something that isn\'t here.</p>';
			 get_search_form(); 
		endif; 
		echo '</div>';
		$output = ob_get_contents();
		ob_end_clean();
		wp_reset_postdata();
	    wp_reset_query(); 
		$wp_filter['the_content'] = $the_content_filter_backup;
		return '[raw]'.$output.'[/raw]';
}
add_shortcode("blog", "displayposts");



function tpo_post_list($atts, $content = null, $code ){
	//  $column, $imagesize, $query  ) {
	global $wp_filter;
	$the_content_filter_backup = $wp_filter['the_content'];
	extract(shortcode_atts(array(
		'count'      => '4',
       	'title' => 'Latest Posts',
       	'categories' => 'all'
	), $atts));


	global $post;
	
 	$tmp_post = $post;
	$args = $query;
	$myposts = get_posts( array ( 'numberposts' => $count ) );
	
	ob_start();
	$counter = 1 ;

	foreach( $myposts as $post ) : setup_postdata($post); 
	
		?>
        
		<div class="latest-post-list">
       		<div class="latest-post-list-date"><?php the_time('d') ?><span><?php the_time('M') ?></span></div>
       		<div class="latest-post-list-description">
 	 			<h4><a href="<?php the_permalink() ?>'" title="' . get_the_title() . '" ><?php the_title() ?></a></h4>
            	<span><?php comments_popup_link( __( 'Leave a Comment' , THEME_SLUG ),  __( '1 Comment', THEME_SLUG ) , __( '% Comments', THEME_SLUG ) ); ?></span>
 					<div class="latest-post-list-excerpt"><?php echo limit_words( get_the_excerpt(), 20 ) ?>... <a href="<?php the_permalink() ?>">Read More &rarr;</a></div>
            </div>

		<?php /*
		$excerpt_length = '100';
		$myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
		if ($myExcerpt != '') {
			$myExcerpt .= '...';
			echo  str_replace('[...]','',$myExcerpt);
		} */
		?>
		</div><div class="clearboth"></div> 
        <?php
		$counter++;
	endforeach; 
		$output = ob_get_contents();
		ob_end_clean();
  	$post = $tmp_post;
		$wp_filter['the_content'] = $the_content_filter_backup;
		return '[raw]'.$output.'[/raw]';
}

add_shortcode("post_list", "tpo_post_list");

function show_recent_posts($atts, $content = null, $code ){
	//  $column, $imagesize, $query  ) {
	global $wp_filter;
	$the_content_filter_backup = $wp_filter['the_content'];
	extract(shortcode_atts(array(
		'count' => 4,
		'cat' => '',
		'column' => '',
		'imagesize' => 'true',
		'meta' => 'true',
		'full' => 'false',
		'nopaging' => 'true',
		'imagestyle' => 'full',
	), $atts));

	$args = array ( 'numberposts' => '4' );
	
	if ( !$column ) {
		$column = "one-fourth";	
	}
	global $post;
 	$tmp_post = $post;
	$args = $query;
	$myposts = get_posts( array ( 'numberposts' => $count ) );
	
	ob_start();
	$counter = 1 ;

	foreach( $myposts as $post ) : setup_postdata($post); 
	
		$lastclass = '' ;
		if ( $column == 'full-page' ) {
				$lastclass = "last";
		}
		if ( $column == 'one-half' ) {
			if ( $counter % 2 == 0 ) {
				$lastclass = "last";
			}
		}
		if ( $column == 'one-third' ) {
			if ( $counter % 3 == 0 ) {
				$lastclass = "last";
			}
		}
		if ( $column == 'one-fourth' ) {
			if ( $counter % 4 == 0 ) {
				$lastclass = "last";
			}
		}
		
		if( has_post_thumbnail() ) : 
			$thumbimg =  get_the_post_thumbnail(  $post->ID,  $imagesize ) . '<span class="overlay-icon"></span>';
		else :
			$thumbimg = '<img width="220" height="135" src="no-image.jpg" class="attachment-recent-posts wp-post-image" alt="post1">';
		endif;

		?>
        
		<div class="<?php echo $column ?> column <?php echo $lastclass; ?>">
			<div class="recent-post-info"><div class="post-thumbnail" ><a class="recent-post-thumbnail" href="<?php the_permalink() ?>"><?php echo $thumbimg ?></a></div><h2 class="recent-post-title" ><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <div class="recent-post-meta">
            	<span class="recent-post-date"><?php the_time("F j, Y"); ?></span><span class="recent-comment-num"><?php comments_popup_link( __( 'Leave a Comment' , THEME_SLUG ),  __( '1 Comment', THEME_SLUG ) , __( '% Comments', THEME_SLUG ) ); ?></span>
            </div>
		<?php
		$excerpt_length = '100';
		$myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
		if ($myExcerpt != '') {
			$myExcerpt .= '...';
			echo  str_replace('[...]','',$myExcerpt);
		}
		?>
		</div><div class="clearboth"></div></div>
        <?php
		$counter++;
	endforeach; 
		$output = ob_get_contents();
		ob_end_clean();
  	$post = $tmp_post;
		$wp_filter['the_content'] = $the_content_filter_backup;
		return '[raw]'.$output.'[/raw]';
}

add_shortcode("show_recentposts", "show_recent_posts");

function show_recent_posts_slider($atts, $content = null, $code ){
	//  $column, $imagesize, $query  ) {
	global $wp_filter;
	$the_content_filter_backup = $wp_filter['the_content'];
	extract(shortcode_atts(array(
		'column' => 'one-fourth',
		'count' => 4,
		'cat' => '',
		'column' => '',
		'class' => 'post-slider',
		'imagesize' => 'recent-posts',
		'meta' => 'true',
		'full' => 'false',
		'nopaging' => 'true',
		'imagestyle' => 'full',
	), $atts));

	
	if ( !$column ) {
		$column = "one-fourth";	
		$columncount = 4;
	}

		if ( $column == 'full-page' ) {
			$columncount = 1;
		}
		if ( $column == 'one-half' ) {
			$columncount = 2;
		}
		if ( $column == 'one-third' ) {
			$columncount = 3;
		}
		if ( $column == 'one-fourth' ) {
			$columncount = 4;
		}
		
	global $post;
 	$tmp_post = $post;
	$args = $query;
	$myposts = get_posts( array ( 'numberposts' => $count ) );
	
	ob_start();
	$counter = 1 ;
	?>
	  <script language="javascript"> 
			jQuery(document).ready(function(){
				jQuery('.<?php echo $class; ?>').bxSlider({
					pager: false,
					slideWidth: 220,
					minSlides: 2,
					maxSlides: <?php echo $columncount ?>,
					slideMargin: 20
			  });
			});
		</script>
        	 <div class="post_slider_title" "><h3>Recent Works</h3></div>     
      	<div class="<?php echo $class; ?>">        	

    <?php
	foreach( $myposts as $post ) : setup_postdata($post); 
	
		$lastclass = '' ;

		
		if( has_post_thumbnail() ) : 
			$thumbimg =  get_the_post_thumbnail(  $post->ID,  $imagesize ) . '<span class="overlay-icon"></span>';
		else :
			$thumbimg = '<img width="220" height="135" src="no-image.jpg" class="attachment-recent-posts wp-post-image" alt="post1">';
		endif;

		?>
        
		<div class="<?php echo $column ?> column <?php echo $lastclass; ?>">

			<div class="recent-post-info"><div class="post-thumbnail" ><a class="recent-post-thumbnail" href="<?php the_permalink() ?>"><?php echo $thumbimg ?></a></div><h2 class="recent-post-title" ><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <div class="recent-post-meta">
            	<span class="recent-post-date"><?php the_time("F j, Y"); ?></span>
            	<span class="recent-comment-num"><?php comments_popup_link( __( 'Leave a Comment' , THEME_SLUG ),  __( '1 Comment', THEME_SLUG ) , __( '% Comments', THEME_SLUG ) ); ?></span>
            </div>
		<?php
		$excerpt_length = '100';
		$myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
		if ($myExcerpt != '') {
			$myExcerpt .= '...';
			echo  str_replace('[...]','',$myExcerpt);
		}
		?>
		</div><div class="clearboth"></div></div>
        <?php
		$counter++;
	endforeach; ?>
    </div>
    <?php
		$output = ob_get_contents();
		ob_end_clean();
  	$post = $tmp_post;
		$wp_filter['the_content'] = $the_content_filter_backup;
		return '[raw]'.$output.'[/raw]';
}


add_shortcode("show_recentposts_slider", "show_recent_posts_slider");

/*============================ Teaser ==============================*/

function tpo_teaser( $atts, $content = null) {
extract( shortcode_atts( array(
      'image' => ''
      ), $atts ) );
      
      if( $image ) {
    	$str_image = "<div class='teaser-img'><img src='".$img."' /></div>";
      }
      
      return '<div class="teaser">' .$str_image. '' . do_shortcode($content) . '</div>';
}

add_shortcode("teaser", "tpo_teaser");

/*=========================== Teaser Box ============================*/

function tpo_teaserbox( $atts, $content = null) {
extract( shortcode_atts( array(
      'title' => '',
      'button' => '',
      'buttonsize' => 'normal',
      'buttoncolor' => 'alternative-1',
      'link' => '',
      'target'  => '_self'
      ), $atts ) );
      return '<div class="teaserbox"><div class="border"><h2 class="highlight">' .$title. '</h2>' . do_shortcode($content) . '<br /><a class="button ' .$buttonsize. ' ' .$buttoncolor. '" href="' .$link. '" target="' .$target. '">' .$button. '</a></div></div>';
}

add_shortcode("teaserbox", "tpo_teaserbox");

/*====================== Vimeo Shortcode ===========================*/

function tpo_vimeo($atts) {
		$atts = shortcode_atts(
			array(
				'id' => '',
				'width' => 600,
				'height' => 360
			), $atts);
		
			return '<div class="video-shortcode"><iframe src="http://player.vimeo.com/video/' . $atts['id'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" frameborder="0"></iframe></div>';
	}

add_shortcode("vimeo", "tpo_vimeo");

/*====================== Youtube Shortcode ===========================*/

function tpo_youtube($atts, $content=null) {
		$atts = shortcode_atts(
			array(
				'id' => '',
				'width' => 600,
				'height' => 360
			), $atts);
		
			return '<div class="video-shortcode"><iframe title="YouTube video player" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://www.youtube.com/embed/' . $atts['id'] . '" frameborder="0" allowfullscreen></iframe></div>';
}
add_shortcode("youtube", "tpo_youtube");

/*====================== Sound Cloud Shortcode ===========================*/

function tpo_soundcloud($atts) {
		$atts = shortcode_atts(
			array(
				'url' => '',
				'width' => '100%',
				'height' => 81,
				'comments' => 'true',
				'auto_play' => 'true',
				'color' => 'ff7700',
			), $atts);
		
			return '<object height="' . $atts['height'] . '" width="' . $atts['width'] . '"><param name="movie" value="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" height="' . $atts['height'] . '" src="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '" type="application/x-shockwave-flash" width="' . $atts['width'] . '"></embed></object>';
	}
	
add_shortcode('soundcloud', 'tpo_soundcloud');

/*====================== Flash Video Shortcode ===========================*/

function tpo_flashvideo($atts) {
	extract(shortcode_atts(array(
		'src' 	=> '',
		'width' 	=> false,
		'height' 	=> false,
		'play'			=> 'false',
		'flashvars' => '',
	), $atts));
	
	if ($height && !$width) $width = intval($height * 16 / 9);
	if (!$height && $width) $height = intval($width * 9 / 16);
	if (!$height && !$width){
		$width = TPO_FLASH_WIDTH;
		$height = TPO_FLASH_HEIGHT;
	}

	$uri = THEME_URI;
	if (!empty($src)){
		return "
<div class=\"video_frame\">
<object width=\"{$width}\" height=\"{$height}\" type=\"application/x-shockwave-flash\" data=\"{$src}\">
	<param name=\"movie\" value=\"{$src}\" />
	<param name=\"allowFullScreen\" value=\"true\" />
	<param name=\"allowscriptaccess\" value=\"always\" />
	<param name=\"expressInstaller\" value=\"{$uri}/swf/expressInstall.swf\"/>
	<param name=\"play\" value=\"{$play}\"/>
	<param name=\"wmode\" value=\"opaque\" />
	<embed src=\"$src\" type=\"application/x-shockwave-flash\" wmode=\"opaque\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"{$width}\" height=\"{$height}\" />
</object>
</div>";
	}
}

add_shortcode("flashvideo", "tpo_flashvideo");

/*====================== HTML% Video Shortcode ===========================*/

function tpo_video_html5($atts){
	extract(shortcode_atts(array(
		'mp4' => '',
		'webm' => '',
		'ogg' => '',
		'poster' => '',
		'width' => false,
		'height' => false,
		'preload' => false,
		'autoplay' => false,
	), $atts));

	if ($height && !$width) $width = intval($height * 16 / 9);
	if (!$height && $width) $height = intval($width * 9 / 16);
	if (!$height && !$width){
		$height = TPO_HTML5_HEIGHT;
		$width = TPO_HTML5_WIDTH;
	}

	// MP4 Source Supplied
	if ($mp4) {
		$mp4_source = '<source src="'.$mp4.'" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'>';
		$mp4_link = '<a href="'.$mp4.'">MP4</a>';
	}

	// WebM Source Supplied
	if ($webm) {
		$webm_source = '<source src="'.$webm.'" type=\'video/webm; codecs="vp8, vorbis"\'>';
		$webm_link = '<a href="'.$webm.'">WebM</a>';
	}

	// Ogg source supplied
	if ($ogg) {
		$ogg_source = '<source src="'.$ogg.'" type=\'video/ogg; codecs="theora, vorbis"\'>';
		$ogg_link = '<a href="'.$ogg.'">Ogg</a>';
	}

	if ($poster) {
		$poster_attribute = 'poster="'.$poster.'"';
		$image_fallback ="<img src=\"$poster\" width=\"$width\" height=\"$height\" alt=\"Poster Image\" title=\"No video playback capabilities.\" />";
	}

	if ($preload) {
		$preload_attribute = 'preload="auto"';
		$flow_player_preload = ',"autoBuffering":true';
	} else {
		$preload_attribute = 'preload="none"';
		$flow_player_preload = ',"autoBuffering":false';
	}

	if ($autoplay) {
		$autoplay_attribute = "autoplay";
		$flow_player_autoplay = ',"autoPlay":true';
	} else {
		$autoplay_attribute = "";
		$flow_player_autoplay = ',"autoPlay":false';
	}

	$uri = get_template_directory_uri();

	$output = "
<div class=\"video_frame video-js-box\">
	<video class=\"video-js\" width=\"{$width}\" height=\"{$height}\" {$poster_attribute} controls {$preload_attribute} {$autoplay_attribute}>
		{$mp4_source}
		{$webm_source}
		{$ogg_source}
		<object class=\"vjs-flash-fallback\" width=\"{$width}\" height=\"{$height}\" type=\"application/x-shockwave-flash\"
			data=\"{$uri}/swf/flowplayer-3.2.7.swf\">
			<param name=\"movie\" value=\"{$uri}/swf/flowplayer-3.2.7.swf\" />
			<param name=\"allowfullscreen\" value=\"true\" />
			<param name=\"flashvars\" value='config={\"clip\":{\"url\":\"$mp4\" $flow_player_autoplay $flow_player_preload }}' />
			{$image_fallback}
		</object>
	</video>
</div>";

	return '[raw]'.$output.'[/raw]';

}
add_shortcode('html5', 'tpo_video_html5');



 function tpo_page_slider($atts , $content = null) {
	extract(shortcode_atts(array(		
		'width' => '600',
		'hight' => '200',
	), $atts));
	return '<div class="page_slidershow" style="width:'.$width.'px"><div class="page_slider"  style="width:'.$width.'px;height:'.$hight.'px;">'.do_shortcode($content).'</div></div><div style="padding:17px;">&nbsp;</div>';
}
add_shortcode('slider', 'tpo_page_slider');

function image_func($atts , $content = null) {
	extract(shortcode_atts(array(		
		'width' => '600',
		'height' => '200',
		'link' => '',
		'alt_text' => '',
		'title' => '',
	), $atts));
	if($link){
		$link1='<a href="'.$link.'">';
		$link2='</a>';
	}
	$newchar = array("\r\n", "\n", "\r");
	$content = str_replace($newchar, "",$content);
		$slide.=$link1.'<img src="'.get_template_directory_uri().'/timthumb.php?src='.$content.'&amp;w='.$width.'&amp;h='.$height.'&amp;zc=1" width="'.$width.'" height="'.$height.'" alt="'.$alt_text.'" />'.$link2;
	return '[raw]'.$slide.'[/raw]';
}
add_shortcode('slide', 'image_func'); 

	function twitter_feed($usernames, $limit) {
		
		include_once(ABSPATH . WPINC . '/rss.php');
		global $shortname;
		$tweetcount = get_option("widget_twitterwidget");
		$count = ($tweetcount) ? $tweetcount : '5';
		
		$tweets = fetch_rss('http://twitter.com/statuses/user_timeline/'.$usernames.'.rss');
		
		if ($usernames == '') {
			$output .= '<p>Twitter username not set.</p>';
		} else {
				if ( empty($tweets->items) ) {
					$output .= '<p>No Twitter messages found.</p>';
				} else {
				$i = 0;
				$output .= '<ul class="twitter">';
				foreach ( $tweets->items as $tweet ) {
					$msg = substr(strstr($tweet['description'],': '), 2, strlen($tweet['description']))." ";
					if($encode_utf8) $msg = utf8_encode($msg);
					$link = $tweet['link'];
					
					$time = $tweet['pubdate'];
						$output .= '<li><a class="target_blank" href="' .$link. '" title="' .tweetTime(strtotime($time)). '">' .$msg. '</a></li>';
					$i++;
					if ( $i >= $limit ) break;
				}
				$output .= '</ul>';
				}
			}
			
		return $output;
	}

	function tweetTime( $original, $do_more = 0 ) {
			// array of time period chunks
			$chunks = array(
					array(60 * 60 * 24 * 365 , 'year'),
					array(60 * 60 * 24 * 30 , 'month'),
					array(60 * 60 * 24 * 7, 'week'),
					array(60 * 60 * 24 , 'day'),
					array(60 * 60 , 'hour'),
					array(60 , 'minute'),
			);
	
			$today = time();
			$since = $today - $original;
	
			for ($i = 0, $j = count($chunks); $i < $j; $i++) {
					$seconds = $chunks[$i][0];
					$name = $chunks[$i][1];
	
					if (($count = floor($since / $seconds)) != 0)
							break;
			}
	
			$print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	
			if ($i + 1 < $j) {
					$seconds2 = $chunks[$i + 1][0];
					$name2 = $chunks[$i + 1][1];
	
					// add second item if it's greater than 0
					if ( (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0) && $do_more )
							$print .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
			}
			return $print;
	}



	function hyperlinks($text) {
			$text = preg_replace('/\b([a-zA-Z]+:\/\/[\w_.\-]+\.[a-zA-Z]{2,6}[\/\w\-~.?=&%#+$*!]*)\b/i',"<a href=\"$1\" class=\"twitter-link\">$1</a>", $text);
			$text = preg_replace('/\b(?<!:\/\/)(www\.[\w_.\-]+\.[a-zA-Z]{2,6}[\/\w\-~.?=&%#+$*!]*)\b/i',"<a href=\"http://$1\" class=\"twitter-link\">$1</a>", $text); 
			$text = preg_replace("/\b([a-zA-Z][a-zA-Z0-9\_\.\-]*[a-zA-Z]*\@[a-zA-Z][a-zA-Z0-9\_\.\-]*[a-zA-Z]{2,6})\b/i","<a href=\"mailto://$1\" class=\"twitter-link\">$1</a>", $text);
			$text = preg_replace('/([\.|\,|\:|\>|\{|\(]?)#{1}(\w*)([\.|\,|\:|\!|\?|\>|\}|\)]?)\s/i', "$1<a href=\"http://twitter.com/#search?q=$2\" class=\"twitter-link\">#$2</a>$3 ", $text);
			return $text;
		}
		
	function twitter_users($text) {
				   $text = preg_replace('/([\.|\,|\:|\>|\{|\(]?)@{1}(\w*)([\.|\,|\:|\!|\?|\>|\}|\)]?)\s/i', "$1<a href=\"http://twitter.com/$2\" class=\"twitter-user\">@$2</a>$3 ", $text);
				   return $text;
		}  



function tpo_twitter($atts, $content=null) {
	extract(shortcode_atts(array(
		'username' 	=> '',
		'limit' => 5,
	), $atts));
	return twitter_feed($username, $limit);
}

add_shortcode("twitter", "tpo_twitter");

function tpo_lightbox($atts, $content=null) {
	extract(shortcode_atts(array(
		'title' 	=> '',
		'href' => '',
	), $atts));
	$return .= '<a title="'.$title.'" href="'.$href.'" class="lightbox">';
	$return .= do_shortcode($content);
	$return .= '</a>';	
	return $return;
}

add_shortcode("lightbox", "tpo_lightbox");


function tpo_frame_left($atts, $content=null) {
	extract(shortcode_atts(array(
		'height'=> '',
		'width'=> '',
		'href' 	=> '',
		'src' => '',
		'alt' => '',
	), $atts));
	$output = '';
	if ($href='') $href = $src;
	if ($height && !$width) $width = intval($height * 15 / 8);
	if (!$height && $width) $height = intval($width * 8 / 15);
	if(!$width && !$height) {
		
	} else {
		$src=tpo_image_resize($width,$height,$src);
	}
	$output .= '<div class="frame_left"><a href='.$href.'"" class="img_frame"><img src="'.$src.'" alt="'.$alt.'"></a><span class="caption">'.do_shortcode($content).'</span></div>';
	return $output;
}
add_shortcode("frame_left", "tpo_frame_left");

function tpo_frame_right($atts, $content=null) {
	extract(shortcode_atts(array(
		'href' 	=> '',
		'src' => '',
		'alt' => '',
	), $atts));
	if ($href='') $href = $src;
	$output = '<div class="frame_right"><a href='.$href.'"" class="img_frame"><img src="'.$src.'" alt="'.$alt.'"></a><span class="caption">'.do_shortcode($content).'</span></div>';
	return $output;
}
add_shortcode("frame_right", "tpo_frame_right");

function tpo_frame_center($atts, $content=null) {
	extract(shortcode_atts(array(
		'href' 	=> '',
		'src' => '',
		'alt' => '',
	), $atts));
	if ($href='') $href = $src;
	$return .= '<div class="frame_center"><a href='.$href.'"" class="img_frame"><img src="'.$src.'" alt="'.$alt.'"></a><span class="caption">'.do_shortcode($content).'</span></div>';
	return $return;
}
add_shortcode("frame_center", "tpo_frame_center");

function tpo_highlight($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'type' => false,
		'color' => '#000',
		'bg_color' => '#FF9',
	), $atts));


	return '<span class="highlight'.(($type)?' '.$type:'').'" style="color:'.$color.';background:'.$bg_color.'">'.do_shortcode($content).'</span>';
}
add_shortcode('highlight', 'tpo_highlight');


function tpo_tabs($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'style' => false
	), $atts));

	if (!preg_match_all("/(.?)\[(tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/tab\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
		}
		$output = '<ul class="'.$code.'">';
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<li><a href="#">' . $matches[3][$i]['title'] . '</a></li>';
		}
		$output .= '</ul>';
		$output .= '<div class="panes">';
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<div class="pane">' . do_shortcode(trim($matches[5][$i])) . '</div>';
		}
		$output .= '</div>';
		
		return '<div class="'.$code.'_container">' . $output . '</div>';
	}
}
add_shortcode('tabs', 'tpo_tabs');

function recent_post_func($atts , $content = null) {
	extract(shortcode_atts(array(
		'count'=>5, 
		'showdate'=>true,
		'showcomment'=>true,
		'showexcerpt'=>true,
		'thumb_height'=>60,
		'thumb_width'=>60,
	), $atts));
	global $post;

	$query = array('showposts' => $count, 'nopaging' => 0, 'orderby'=> 'comment_count');
	$recent_posts = new WP_Query($query);
	while ( $recent_posts->have_posts() )
	{

		$recent_posts->the_post();
		$num_comments = get_comments_number(); // get_comments_number returns only a numeric value
		
		if ( comments_open() ) {
			if ( $num_comments == 0 ) {
				$comments = __('No Comments', THEME_SLUG);
			} elseif ( $num_comments > 1 ) {
				$comments = $num_comments . __(' Comments', THEME_SLUG);
			} else {
				$comments = __('1 Comment', THEME_SLUG);
			}
		}
		if(get_post_meta($post->ID, "_post_image")) :
		  $img = get_post_meta($post->ID, "_post_image",true);
		  $img = tpo_image_resize($thumb_height, $thumb_width, $img );
		else :
		  $img = get_template_directory_uri() . '/images/no_image.gif';
		endif;
		$thumbimg ='<img src="'.$img.'" alt="" />';
		$result.='<li class="recentpost"><div class="recent-post-info"><a class="recent-post-thumbnail" href="'.get_permalink().'">'.$thumbimg.'</a><a class="recentpost_title" href="'.get_permalink().'">'.the_title("","",false).'</a>';

		if ( $showdate == 'true' ||  $showcomment == 'true'  ) : 
				 $result.='<div class="recentpost_meta">';
               	 if ( $showdate == 'true' ) :
				 	$result.='<span class="recentpost_date">' . get_the_time("F j, Y") . '</span>';
            	 endif;
                 if ( $showdate == 'true' &&  $showcomment == 'true'  ) : 
                 	$result.='<span>&nbsp;&nbsp;</span>';
                 endif;
				 if ( $showcomment == 'true'  ) : 
                  	$result.='<span class="comment-num">' . $comments . '</span>';
                  endif; 
   				 $result.='</div>';
        endif;
		$excerpt_length = '55';
		if ( $showexcerpt == 'true' ) {
			$myExcerpt = rtrim(substr(get_the_excerpt(),0,$excerpt_length));
			if ($myExcerpt != '') {
				$myExcerpt .= '...';
				$result.= '' . str_replace('[...]','',$myExcerpt);
			}
		}
		$result.='</div><div class="clearboth"></div></li>';
	}

	wp_reset_query();
	return '<ul class="recent-post" ><h2 class="widget-title">Recent Posts</h2>'.$result.'</ul>';
}
add_shortcode('recent_post', 'recent_post_func');

function tpo_table($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'id' => false,
	), $atts));
	return '<div'.($id?'id="'.$id.'"':'').' class="table_wrapper">' . do_shortcode(trim($content)) . '</div>';
}
add_shortcode('table','tpo_table');

/*=============================	Contact Form ================================*/		

function tpo_contact_form($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'id' => false,
	), $atts));
	global $wp_filter;
	$content_backup = $wp_filter['the_content'];
	ob_start();
	?>
	<form class="wid_contact_form" action="<?php echo tpo_INCLUDES ?>/sendmail.php" method="post">
		<p><input type="text" required="required" id="wid_contactname" name="wid_contactname" class="text_input" value="" size="22" />
		<label><?php echo __('Name*', THEME_SLUG); ?></label></p>
		
		<p><input type="email" required="required" id="wid_contactemail" name="wid_contactemail" class="text_input" value="" size="22"  />
		<label><?php echo __('Email*', THEME_SLUG); ?></label></p>
		
		<p><textarea required="required" name="wid_contactmessage" class="textarea" cols="25" rows="15" ></textarea></p>
		
		<p><button type="submit" class="button white"><span>Submit</span></button></p>
		<input type="hidden" value="<?php echo $email;?>" name="wid_adminemail" />
	</form>
	<?php
	$output = ob_get_contents();
	ob_end_clean();
	$wp_filter['the_content'] = $content_backup;
	return '[raw]<div'.($id?'id="'.$id.'"':'').' class="contact_form">'.$output.'</div>[/raw]';
}
add_shortcode('contact_form','tpo_contact_form');


function tpo_portfolio($atts, $content = null, $code ){ 
	global $wp_filter;
	$content_backup = $wp_filter['the_content'];
	extract(shortcode_atts(array(
		'count' => 4,
		'cat' => '',
		'posts' => '',
		'image' => 'true',
		'type' => 'one-fourth',
		'width' => '',
		'showtitle' => true,
		'showimage' => true,
		'showcontent' => true,
		'showreadmore' => true,
	), $atts));

	$query_string = array(
		'posts_per_page' => (int)$count,
		'post_type'=>'post',
	);
	if($cat){
		$query_string['cat'] = $cat;
	}
	if($posts){
		$query_string['post__in'] = explode(',',$posts);
	}
	switch ($type){
		case 'full-page':
			$tvar= 1;
			$ptype = '_full-page';
			$pagewidth = round((TPO_CONTENT_WIDTH/100)*90);
			$columnwidth = round((($pagewidth/100)*101));
			$portfolio_imagewidth = round($pagewidth/1)-(TPO_PORTFOLIO_IMAGE_MARGIN*2);
			$portfolio_height = TPO_PORTFOLIO_1COLUMN_IMAGE_HEIGHT;
			$portfolio_noitems = TPO_PORTFOLIO_1COLUMN_NOITEMS;
			break;
		case 'one-half':
			$tvar= 2;
			$ptype = '_one-half';
			$pagewidth = round((TPO_CONTENT_WIDTH/100)*90);
			$columnwidth = round((($pagewidth/100)*50.3));
			$portfolio_imagewidth = round($pagewidth/2) -(TPO_PORTFOLIO_IMAGE_MARGIN*2);
			$portfolio_height = TPO_PORTFOLIO_2COLUMN_IMAGE_HEIGHT;
			$portfolio_noitems = TPO_PORTFOLIO_2COLUMN_NOITEMS;
			break;
		case 'one-third':
			$tvar=3;
			$ptype = '_one-third';	
			$pagewidth = round((TPO_CONTENT_WIDTH/100)*88);
			$columnwidth = round((($pagewidth/100)*33.6));
			$portfolio_imagewidth = round($pagewidth/3)-(TPO_PORTFOLIO_IMAGE_MARGIN*2);
			$portfolio_height = TPO_PORTFOLIO_3COLUMN_IMAGE_HEIGHT;
			$portfolio_noitems = TPO_PORTFOLIO_3COLUMN_NOITEMS;
			break;
		case 'one-fourth':
			$tvar= 4;
			$ptype = '_one-fourth';	
			$pagewidth = round((TPO_CONTENT_WIDTH/100)*86);
			$columnwidth = round((($pagewidth/100)*25.3));
			$portfolio_imagewidth = round($pagewidth/4)-(TPO_PORTFOLIO_IMAGE_MARGIN*2);
			$portfolio_height = TPO_PORTFOLIO_4COLUMN_IMAGE_HEIGHT;
			$portfolio_noitems = TPO_PORTFOLIO_4COLUMN_NOITEMS;
			break;
	}
	$portfolio_noitems = $count;
	ob_start();
	$page = get_query_var('page');
	query_posts( array( 'post_type' => 'portfolio', 'posts_per_page' => $portfolio_noitems  ) );
    $counter = 1;  ?>
	<div id="content" class="portfolio"  style="width:<?php echo TPO_CONTENT_WIDTH; ?>px;" >
	<?php if (have_posts()) : ?>
        <ul  class="portfolio<?php echo $ptype ; ?>" >
		<?php while (have_posts()) : the_post();
         	$catype = ''; 
			$categories = get_the_terms(get_the_ID(), 'portfolio_entries');
			foreach ($categories as $cat) {
				$catype .=  strip_tags($cat->slug) . ' ';
			}
		 ?>
		<?php 
			if ($counter % $tvar == 0){
				$listyle = 'style="margin-right:0px;width:'.$columnwidth.'px"';
			} else {
				$listyle ='';
			}
			$listyle = 'style="width:'.$columnwidth.'px;width:'.$columnwidth.'px"';
			$port_column = $tvar;
			$lastcol = $counter % $port_column;
			$class_style = "";
			if ($lastcol==0){
				$class_style = 'style="width:'.$columnwidth.'px;margin-right:0;"';
			}else{
				$class_style = 'style="width:'.$columnwidth.'px;"';
			}
		?>
          	<li  <?php echo $class_style; ?>  data-id="id<?php echo $counter; ?>" class="<?php echo  trim($catype); ?>">
		 <?php 	$postimagebig = get_post_meta(get_the_ID(), 'tpo_portfolio_thumb_image', true);
		 	if($postimagebig) { 
				$postimage = tpo_image_resize($height=$portfolio_height, $width=$portfolio_imagewidth, $postimagebig);
				 ?>
              <div class="blog_image">
			  <?php  if($showtitle=='true'){ ?>
			  <?php if(get_post_meta(get_the_ID(),'tpo_portfolio_imagetype',true) == '') {
						$boxlink = $postimagebig;
						$boxclass = 'port_image';
				} else if(get_post_meta(get_the_ID(),'tpo_portfolio_imagetype',true) == 'image') {
						$boxlink = $postimagebig;
						$boxclass = 'port_image';
				} else if(get_post_meta(get_the_ID(),'tpo_portfolio_imagetype',true) == 'video') {
						$boxlink = get_post_meta(get_the_ID(),'tpo_portfolio_video_link',true);
						$boxclass = 'port_video';
				} else if(get_post_meta(get_the_ID(),'tpo_portfolio_imagetype',true) == 'video') {
						$boxlink = get_post_meta(get_the_ID(),'tpo_portfolio_video_link',true);
						$boxclass = 'port_document';
				}
			   ?>
					<div class="image_frame"><a class="lightbox <?php echo $boxclass ?>" rel="portfolio"   href="<?php echo $boxlink; ?>" >
			  <?php } ?>
                    <img  class="portimage" src="<?php echo $postimage; ?>" alt="<?php echo the_title() ?>">
                  </a></div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/image_shadow.png" class="image_shadow" style="width:<?php  echo $portfolio_imagewidth ?>px">
                </div>
         <?php } ?> 
			<?php  if($showtitle=='true'){ ?>
				<h1 class="port-heading" style="color:<?php echo TPO_PORTFOLIO_TITLE_FONTCOLOR; ?>;font-size:<?php echo TPO_PORTFOLIO_TITLE_FONTSIZE; ?>px"><a  style="color:<?php echo TPO_PORTFOLIO_TITLE_FONTCOLOR; ?>" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<?php } ?>
				<?php  if(TPO_PORTFOLIO_SHOWDESCRIPTION=='true'){ 
					  echo '<div style="color:'.TPO_PORTFOLIO_PARA_FONTCOLOR.';font-size:'.TPO_PORTFOLIO_PARA_FONTSIZE.'px">';
						the_excerpt();
					  echo '</div>';
				 } ?>
				<?php  if($showreadmore=='true'){ ?>
					<a class="button_link" href="<?php the_permalink(); ?>"><span style="color:<?php echo TPO_PORTFOLIO_READMORE_FONTCOLOR; ?>;font-size:<?php echo TPO_PORTFOLIO_READMORE_FONTSIZE; ?>px"><?php echo TPO_PORTFOLIO_READMORETEXT; ?></span></a>
				<?php } ?>
			</li>
		<?php $counter++;endwhile; ?>
        </ul>
		<?php endif; ?>
		</div>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		wp_reset_postdata();
	    wp_reset_query(); 
		$wp_filter['the_content'] = $content_backup;
		return '[raw]'.$output.'[/raw]';
}
add_shortcode('portfolio', 'tpo_portfolio');



	function shortcode_youtube($atts) {
		$atts = shortcode_atts(
			array(
				'id' => '',
				'width' => 600,
				'height' => 360
			), $atts);
		
			return '<div class="video-shortcode"><iframe title="YouTube video player" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://www.youtube.com/embed/' . $atts['id'] . '" frameborder="0" allowfullscreen></iframe></div>';
	}

add_shortcode('youtube', 'shortcode_youtube');


/*=============================	Sound Cloud ================================*/

add_shortcode('soundcloud', 'shortcode_soundcloud');
	function shortcode_soundcloud($atts) {
		$atts = shortcode_atts(
			array(
				'url' => '',
				'width' => '100%',
				'height' => 81,
				'comments' => 'true',
				'auto_play' => 'true',
				'color' => 'ff7700',
			), $atts);
		
			return '<object height="' . $atts['height'] . '" width="' . $atts['width'] . '"><param name="movie" value="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" height="' . $atts['height'] . '" src="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '" type="application/x-shockwave-flash" width="' . $atts['width'] . '"></embed></object>';
	}

/*=============================	Section ================================*/

function tpo_sc_section($atts , $content = null) {
	extract(shortcode_atts(array(
		'icon' => 'null',
		'title' => 'Type Your Text',
	), $atts));
	if( !$icon ){
		$image="";
		$title = '<h2 style="margin: 0px 0 8px 40px;" >'.$title.'</h2>';
	}else{
		$image = '<span class="icon-wrap" > <i class="icon-'.$icon.'" style="width: 28px; height: 28px; font-size: 28px;" ></i></span>';
		$title = '<h2 style="margin: -29px 0 8px 40px;" >'.$title.'</h2>';
	}
	$newchar = array("\r\n", "\n", "\r","<p>", "</p>");
	$content = str_replace($newchar, "",$content);
	
	return '[raw]<div class="box-iconsections">'.$image.$title.'<p>'.$content.'</p></div>[/raw]';

}
add_shortcode('section', 'tpo_sc_section');

/*=============================	link ================================*/

function tpo_sc_link($atts , $content = null) {
	extract(shortcode_atts(array(
		'href' => '#',
		'class' => '',
		'fontsize' => '13px',
		'fontitralics' => true
	), $atts));

	if ( $class ) {
		$class =  'class="'.$class.'"';
	}
	
	return '[raw]<a href="'.$href.'"   '.$class.' style="font-size:'.$fontsize.'" >'.$content.'</a>[/raw]';
}
add_shortcode('link', 'tpo_sc_link');

/*=============================	Button ================================*/

function tpo_sc_button($atts , $content = null) {
	extract(shortcode_atts(array(
		'type' => 'meduim',
		'color' => 'gray',
		'size' => 'medium',
		'color' => '#fff',
		'textcolor' => '',
		'hoverBgColor' => '#ccc',
		'fontsize' => '13px',
		'fontcolor' => '#000',
        'link' => ''
	), $atts));
	if($size=='medium')
		{
		$size='meduim';
		}
        if($link!=''){
		$url='href="'.$link.'"';
	}
	return '<input  type="button" class="'.$type.'" value="'.$content.'" style="font-size:'.$fontsize.';background-color: '.$color.';color:'.$fontcolor.';"  aj-hoverbg="'.$hoverBgColor.'" />';
}
add_shortcode('button', 'tpo_sc_button');

/*=============================	Picture ================================*/

function tpo_sc_pic($atts , $content = null) {
	extract(shortcode_atts(array(	
		'title' => '',
		'size'=>'medium',
		'lightbox'=>'false',
		'link'=>'',
		'icon'=>'',
                'type'=>'',
                'width'=>'',
		'height'=>'',
	), $atts));
	if($icon==''){ 
		$icon2='';
	}else{
		$icon2='image_icon_'.$icon;
	}
	if($lightbox=="true"){
		$lightbox_style="fancyVimeo lightbox cboxElement";
		$span='<span style="opacity: 0; visibility: visible;" class="image_overlay"></span>';
		if($link==""){
			$link=$content;
		}
	}
	else{
		$lightbox_style="";
	}

	if($type=="video"){
		$video_style="fancyVimeo lightbox port_video";
	}

	if($link==""){
		$link_style="image_no_link";
		$link="#";
	}

	$shadow=$width+2;
	if($width=='' || $height==''){
		if($size=='large'){
			$width="459";
			$height="240";
			$shadow="461";
		}
	if($size=='medium'){
		$width="292";
		$height="190";
		$shadow="294";
	}
	if($size=='small'){
		$width="220";
		$height="150";
		$shadow="222";
	}
}	
	$img = tpo_image_resize($height,$width,$content);
	return '<span class="image_styled"><span class="image_frame" style="width:'.$width.'px; height:'.$height.'px;"><a class="image_size_'.$size.' '.$icon2.' '.$lightbox_style.' '.$video_style.' '.$link_style.'" title="'.$title.'" href="'.$link.'"><img style="opacity: 1; visibility: visible;" width="'.$width.'" height="'.$height.'" alt="'.$title.'" src="'.$img.'">'.$span.'</a></span><img class="image_shadow" width="'.$shadow.'" src="'.get_bloginfo('stylesheet_directory').'/images/image_shadow.png" ></span>';
}
add_shortcode('pic', 'tpo_sc_pic'); 

/*=============================	Picture Frame ================================*/

function tpo_sc_picture_frame($atts , $content = null) {
	extract(shortcode_atts(array(
		'style' => 'right',
		'title' => '',
	), $atts));
	$img = tpo_image_resize($height,$width,$content);
	return '<div class="picture_frame"><img alt="'.$title.'" src="'.$img.'" width="106" height="126"></div>';	
}
add_shortcode('picture_frame', 'tpo_sc_picture_frame');

function tpo_sc_twoup($atts , $content = null) {
	extract(shortcode_atts(array(
		'color' => 'cream',
		'title' => '',
		'price' => '',
		'plane_url' => '#',
	), $atts));
	return '<div class="twoup '.$color.'" ><h2>'.$title.'</h2><div class="star_pricingtag"><h2>'.$price.'</h2><span>/month</span></div><div class="pricing_two"><ul>'.do_shortcode($content).'</ul></div><div class="color_rounded_footer"><a href="http://'.$plane_url.'">Choose Plan</a></div></div>';
}
add_shortcode('twoup', 'tpo_sc_twoup');

function tpo_sc_prlist($atts , $content = null) {
	extract(shortcode_atts(array(
		'url' => '#',
	), $atts));	
	$all_cont='<li><a href=http://'.$url.'>'.$content.'</a></li>';
	return str_replace('<p>','',$all_cont);
}
add_shortcode('prlist', 'tpo_sc_prlist');

function tpo_sc_threeup($atts , $content = null) {
	extract(shortcode_atts(array(
		'color' => 'cream',
		'title' => '',
		'price' => '',
		'plane_url' => '#',
	), $atts));
	return '<div class="threeup '.$color.'" ><h2>'.$title.'</h2><div class="star_pricingtag"><h2>'.$price.'</h2><span>/month</span></div><div class="pricing_two"><ul>'.do_shortcode($content).'</ul></div><div class="color_rounded_footer"><a href="http://'.$plane_url.'">Choose Plan</a></div></div>';
}
add_shortcode('threeup', 'tpo_sc_threeup');

function tpo_sc_fourup($atts , $content = null) {
	extract(shortcode_atts(array(
		'color' => 'cream',
		'title' => '',
		'price' => '',
		'plane_url' => '#',
	), $atts));
	return '<div class="fourup '.$color.'" ><h2>'.$title.'</h2><div class="star_pricingtag"><h2>'.$price.'</h2><span>/month</span></div><div class="pricing_two"><ul>'.do_shortcode($content).'</ul></div><div class="color_rounded_footer"><a href="http://'.$plane_url.'">Choose Plan</a></div></div>';
}
add_shortcode('fourup', 'tpo_sc_fourup');

function tpo_toggle_content( $atts, $content = null ) {
	extract(shortcode_atts(array(
        'title'      => '',
		'open'      => 'false',
    ), $atts));
	
	$out .= '<h3 class="toggle"><a href="#">' .$title. '</a></h3>';
	$out .= '<div class="toggle-content" style="display: none;">';
	$out .= '<div class="block">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	$out .= '</div>';
	
   return $out;
}
add_shortcode('toggle', 'tpo_toggle_content');

/*=============================	Accordions ================================*/

function tpo_sc_accordions($atts , $content = null) {
	extract(shortcode_atts(array(
		'width' => '100%'
	), $atts));
	$remove = array('<p>','</p>');
	 if(strpos($content, $remove[1]) === 0)
	 {
		$content = ltrim($content,$remove[1]);
		 $content = rtrim($content,$remove[0]);
	 }
	 wp_print_scripts('jquery-accordian');
    	echo '<script type="text/javascript">
			jQuery(document).ready(function($) {
				jQuery(".basic").accordion({
					autoheight: false
				});
			});
		</script>';
	return '[raw]<div class="basic" style="width:'.$width.'">'.do_shortcode($content).'</div>[/raw]';
}
add_shortcode('accordions', 'tpo_sc_accordions');

function tpo_sc_accordion($atts , $content = null) {
	extract(shortcode_atts(array(
		'title'=> 'Title One'
	), $atts));	
	$all_cont='<a>'.$title.'</a><div>'.$content.'</div>';
	$remove = array('<p>','</p>');
	if(strpos($all_cont, $remove[1]) === 0)
	{
		$all_cont = ltrim($all_cont,$remove[1]);
		$all_cont = rtrim($all_cont,$remove[0]);
	}
	return $all_cont;
}
add_shortcode('accordion', 'tpo_sc_accordion');

/*=============================	List ================================*/

function tpo_sc_list($atts , $content = null) {
	extract(shortcode_atts(array(
		'color' => '',
		'type' => 'check',
	), $atts));
	return str_replace('<ul>', '<ul class="list '.$type.' '.$color.'">', do_shortcode($content));
}
add_shortcode('list', 'tpo_sc_list');


/*====================== Icon Text ===========================*/

function tpo_sc_icontext($atts , $content = null) {
	extract(shortcode_atts(array(
		'color' => '',
		'type' => 'check',
	), $atts));
	return  '<span class="icon_text icon_'.$type.'" >'.do_shortcode($content).'</span>';
}
add_shortcode('icontext', 'tpo_sc_icontext');

	
/*====================== Add buttons to tinyMCE ===========================*/


add_action('init', 'add_button');

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons_3', 'register_button');  
   }  
}  

function register_button($buttons) {  
   array_push($buttons, "youtube", "vimeo", "soundcloud", "button", "dropcap", "highlight", "checklist", "badlist", "tabs","accordion", "toggle", "one_half", "one_third","one_fourth", "two_third",  "three_fourth");  
   return $buttons;  
}  

function add_plugin($plugin_array) {  
   $plugin_array['youtube'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['vimeo'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['soundcloud'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['button'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['highlight'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['checklist'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['badlist'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['accordion'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['toggle'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['one_half'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['one_third'] = get_template_directory_uri().'//lib/tinymce/customcodes.js';
   $plugin_array['two_third'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['one_fourth'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   $plugin_array['three_fourth'] = get_template_directory_uri().'/lib/tinymce/customcodes.js';
   
   return $plugin_array;  
}  

/*
function tpo_sc_author($atts , $content = null) {
	extract(shortcode_atts(array(
		'type'=>5,
	), $atts));	
	 if ( get_the_author_meta('description')) : 
				$author='<h3 class="author_h3">About the author</h3><div id="entry-author-info">
						<div id="author-avatar">						
							'.get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ).'</div><div id="author-description"><h4><a href="'.get_author_posts_url(get_the_author_meta( 'ID' )).'">'. get_the_author().'</a></h4>'.get_the_author_meta( 'description' ).'
					</div>
				</div>'; endif;
		return $author;
}
add_shortcode('author_info', 'tpo_sc_author');
*/