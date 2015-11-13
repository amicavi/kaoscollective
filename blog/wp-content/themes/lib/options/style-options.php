<?php
$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
array( "name" => "CSS Setting",
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Custom CSS", THEME_SLUG ),
	"desc" => __("Use the box to add your custom css.", THEME_SLUG ),
	"id" => $shortname."_custom_css",
	"type" => "textarea",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "type" => "close")

);


?>