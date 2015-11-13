<?php

$pages_list = get_pages();
$wppages = array();
$wppages[''] = "Choose a page";
foreach($pages_list as $apage) {
	$wppages[$apage->ID] = $apage->post_title;
}



$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 array( "name" => __("Blog Options" , THEME_SLUG ),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Show full post contents", THEME_SLUG ),
	"desc" => __("Check It, If you want to show full contents of posts on category/search/tags pages, else excerpts is shown.", THEME_SLUG ),
	"id" => $shortname."_blog_excerpt_disable",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Hide Thumbnail Image ", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide thumbnail image on blog page.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_thumbnail",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => "true"),

array( "name" => __("Hide Meta", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide meta information ie categories, date, comments etc.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_show_meta",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => "true"),
array( "name" => __("Hide Author", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide author name on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_author",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => "true"),

array( "name" => __("Hide Publish Date", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide publish date on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_date",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => "true"),
	
array( "name" => __("Hide categories Name", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide categories name on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_cat",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => "true"),

array( "name" => __("Categories Caption", THEME_SLUG ),
	"desc" => __("Category caption.(i.e Posted In, Category etc)", THEME_SLUG ),
	"id" => $shortname."_blog_cat_caption",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => "Posted In"),

array( "name" => __("Read More Text", THEME_SLUG ),
	"desc" => __("Read More Text.(i.e Read More, Continue... etc)", THEME_SLUG ),
	"id" => $shortname."_blog_readmore_text",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => "Read More"),


array( "name" => __("Hide comments count", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide comments on meta bar.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_commentcount",
	"type" => "checkbox",
	"suffix" => "",
	"std" => ""),

array( "name" => __("Hide Author Bio", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide author bio on single page.", THEME_SLUG ),
	"id" => $shortname."_blog_author_bio",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),

array( "name" => __("Hide Tags", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide tags on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_tags",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),

array( "type" => "close")

 
);


?>