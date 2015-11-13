<?php
function sidebars_array(){
	global $shortname ;
	$sidebars = get_option($shortname.'_sidebarname');
	$sidebarfound = 'false';
	$options = array();
	$options['primary-widget-area'] ='Primary Widget Area';
	$options['secondry-widget-area'] ='Secondry Widget Area';
	$options['contact-us-widget-area'] ='contact-us-widget-area';
	$options['home-page-widget-area'] ='home-page-widget-area';
	$options['shop-widget-area'] ='shop-widget-area';
	if(!empty($sidebars)){
		foreach ($sidebars as $i => $sidebar) {
			$options[$sidebar] = $sidebar;
		}
	}
	return $options;
}

if ( DEFAULT_SIDEBAR == 'both' ) {
	$sidebartypes = array('Right','Left', 'Both', 'Hide');
} else {
	$sidebartypes = array('Right','Left', 'Hide');
}

$meta_box = array(
	'id' => 'postmeta',
	'title' => sprintf(__('%s Options',THEME_SLUG),THEMENAME),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'callback'=>'',
	'fields' => array(
		array( "name" => __("Feature Image", THEME_SLUG ),
			"desc" => __("Upload feature image, to display in blog/category/archive pages", THEME_SLUG ),
			"id" =>"_post_image",
			"type" => "image",
			"suffix" => "",
			"class" => "",
			"std" => ""),
		array( "name" => __("Post Title", THEME_SLUG ),
			"desc" => __("You can hide or display page title", THEME_SLUG ),
			"id" =>"_post_title",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			'options' => array('Show','Hide'),
			"std" => "Show"),
		array( "name" => __("Video Embed Code", THEME_SLUG ),
			"desc" => __("Enter video embed code you want to display as feature video.", THEME_SLUG ),
			"id" =>"_post_video",
			"type" => "textarea" ),
			"suffix" => "",
			"class" => "",
		array( "name" => __("Slider", THEME_SLUG ),
			"desc" => __("You can hide or show slider for this post.", THEME_SLUG ),
			"id" =>"_post_slider",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			'options' => array('Hide','Show'),
			"std" => "Hide"),
		array( "name" => __("Sidebar Position", THEME_SLUG ),
			"desc" => __("You can hide or display sidebar.", THEME_SLUG ),
			"id" =>"_post_sidebar",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			'options' => array('Right','Left','None'),
			"std" => "Right"),
		array("name"=> __("Custom Sidebar", THEME_SLUG ),
			"desc" => __("Select the custom sidebar that you have created in theme's option.", THEME_SLUG ),
			"id" => "_post_sidebarname",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			"options" => sidebars_array(),
			"std" => "Sidebar Right")
	)
);

$meta_page = new templuto_meta_boxes($meta_box);

$meta_box_page = array(
	'id' => 'postmeta',
	'title' => sprintf(__('%s Options',THEME_SLUG),THEMENAME),
	'page' => 'page',
	'context' => 'normal',
	'priority' => 'high',
	'callback'=>'',
	'fields' => array(
		array( "name" => "Feature Image",
			"desc" => "Upload feature image, to display in blog/category/archive pages",
			"id" =>"_post_image",
			"type" => "image",
			"suffix" => "",
			"class" => "",
			"std" => ""),
		array( "name" => __("Post Title", THEME_SLUG ),
			"desc" => __("You can hide or display page title", THEME_SLUG ),
			"id" =>"_post_title",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			'options' => array('Show','Hide'),
			"std" => "Show"),
		array( "name" => __("Video Embed Code", THEME_SLUG ),
			"desc" => __("Enter video embed code you want to display as feature video.", THEME_SLUG ),
			"id" =>"_post_video",
			"type" => "textarea" ),
			"suffix" => "",
			"class" => "",
		array( "name" => __("Slider", THEME_SLUG ),
			"desc" => __("You can hide or show slider for this post.", THEME_SLUG ),
			"id" =>"_post_slider",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			'options' => array('Hide','Show'),
			"std" => "Show"),
		array( "name" => __("Sidebar Position", THEME_SLUG ),
			"desc" => __("You can hide or display sidebar.", THEME_SLUG ),
			"id" =>"_post_sidebar",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			'options' => $sidebartypes,
			"std" => "Right"),
		array("name"=> __("Custom Sidebar", THEME_SLUG ),
			"desc" => __("Select the custom sidebar that you have created in theme's option.", THEME_SLUG ),
			"id" => "_post_sidebarname",
			"type" => "select",
			"suffix" => "",
			"class" => "",
			"options" => sidebars_array(),
			"std" => "Sidebar Right")
	)
);


$meta_page = new templuto_meta_boxes($meta_box_page);

//add_action( 'add_meta_boxes', 'tpo_add_review_metabox' );

//add_action( 'save_post', 'tpo_save_review_metabox' );

function tpo_add_review_metabox() {
	add_meta_box( 'reviews-rating', __( 'Feature Ratings', THEME_SLUG ), 'tpo_review_rating', 'post', 'normal','high' );
}

function tpo_review_rating( $post ) { 
    include( get_template_directory(). '/lib/includes/post-reviews.php' );
}

function tpo_save_review_metabox( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( !current_user_can( 'edit_post', $post_id ) ) return;
    
    if( isset( $_POST['review_details'] ) && $_POST['review_details'] ) {
		update_post_meta($post_id,'review_details',$_POST['review_details']);
		update_post_meta($post_id,'editor_rating',$_POST['review_details']['rating']);    
    }
    if ( isset( $_POST['review_rating'] ) &&  $_POST['review_rating'] ){
		update_post_meta($post_id,'review_rating', $_POST['review_rating'] );
    }else{
        update_post_meta($post_id,'review_rating',"");
    }
    
    
}
?>