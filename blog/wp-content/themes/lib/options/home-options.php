<?php
$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
array( "name" => "CSS Setting",
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Top Banner", THEME_SLUG ),
	"desc" => __("Use the box to add header banner.", THEME_SLUG ),
	"id" => $shortname."_header_top",
	"type" => "textarea",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "type" => "close")

);

?>