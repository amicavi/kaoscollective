<?php
global $shortname ;

$meta_box = array(
	'id' => 'portfolio-item',
	'title' => 'Portfolio details',
	'page'=> 'portfolio-item',
	'context' => 'normal',
	'priority' => 'high',
	'callback'=>'',
	'fields' => array(
		array( "name" => "Portolio Image",
			"desc" => "Upload portfolio image.",
			"id" => "_post_image",
			"type" => "image",
			"std" => ""),
		array( "name" => "Type",
			"desc" => "Portfolio items may contains images, video and documet. When image is clicked, the crossponding image, video or document will open in Lightbox.",
			"id" => "_post_featuretype",
			"type" => "select",
			"options" => array( "image", "video", "document"),
			"std" => "Image"),
		array( "name" => "Video Link",
			"desc" => "Enter URL of YouTube/Vimeo. Applicable if only you choose type is video..",
			"id" => "_post_video_link",
			"type" => "text",
			"std" => ""),
		array(
			'name' => 'Read More',
			'desc' => 'Enter read more caption.',
			'id' =>   '_post_readmore',
			'type' => 'text',
			'std' => 'Read More'
		),
		array(
			'name' => 'Display Addition Detail',
			'desc' => 'Display Addition Detail i.e categories, skills, project url etc.',
			'id' =>   '_extra_info',
			'type' => 'checkbox',
			'std' => ''
		),
		array(
			'name' => 'Project URL',
			'desc' => 'Project URL.',
			'id' =>   '_project_url',
			'type' => 'text',
			'std' => ''
		),
		array(
			'name' => 'Project URL Text',
			'desc' => 'Project URL Text to display.',
			'id' =>   '_project_url_text',
			'type' => 'text',
			'std' => ''
		),
		array(
			'name' => 'Copyright URL',
			'desc' => 'Copyright URL.',
			'id' =>   '_copyright_url',
			'type' => 'text',
			'std' => ''
		),
		array(
			'name' => 'Copyright URL Text',
			'desc' => 'Copyright URL Text to display.',
			'id' =>   '_copyright_url_text',
			'type' => 'text',
			'std' => ''
		),
	)
);


$portfolio_page = new templuto_meta_boxes($meta_box);

add_action('init', 'portfolio_items', 0);

	function portfolio_items() {
		$args = array(
			'description' => 'Portolio Post Type',
			'show_ui' => true,
			'menu_position' => 4,
			'labels' => array(
				'name'=> 'Portolio Items',
				'singular_name' => 'Portolio Item',
				'add_new' => 'Add New Item', 
				'add_new_item' => 'Add New Item',
				'edit' => 'Edit Item',
				'edit_item' => 'Edit Portfolio Item',
				'new-item' => 'New Portfolio Item',
				'view' => 'View Portfolio Item',
				'view_item' => 'View Portfolio Item',
				'search_items' => 'Search Portfolio Items',
				'not_found' => 'No Portfolio Items Found',
				'not_found_in_trash' => 'No Portfolio Items Found in Trash',
				'parent' => 'Parent Portfolio Item'
			),
			'public' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'portfolio-items', 'with_front' => false ),
			'supports' => array('title', 'editor', 'thumbnail', 'author')
		);
		register_post_type( 'portfolio-item' , $args );

    	register_taxonomy("portfolio_category", 
					    	array("portfolio-item"), 
					    	array(	"hierarchical" => true, 
									'show_ui' => true,
					    			"label" => "Portfolio Categories", 
					    			"singular_label" => "Portfolio Categories", 
					    			"rewrite" => true,
									'paged'=>true,
									"_builtin" => false,
					    			"query_var" => true
					    		)); 

    	register_taxonomy("portfolio_skill", 
					    	array("portfolio-item"), 
					    	array(	"hierarchical" => true, 
									'show_ui' => true,
					    			"label" => "Portfolio Skills", 
					    			"singular_label" => "Portfolio Skills", 
					    			"rewrite" => true,
									'paged'=>true,
									"_builtin" => false,
					    			"query_var" => true
					    		)); 
								
	}
?>