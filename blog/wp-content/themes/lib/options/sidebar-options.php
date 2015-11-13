<?php
$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
array( "name" => "Sidebars",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Sidebar Name",
	"desc" => "",
	"id" => $shortname."_sidebarname",
	"type" => "custom",
	"suffix" => "",
	"class" => "",
	"func" => "show_sidebar_options",
	"std" => ""),
	
array( "type" => "close"),


array( "name" => __("Sidebar Color Settings","templuto_admin"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Icon Color","templuto_admin"),
	"desc" => __("Select icon color","templuto_admin"),
	"id" => $shortname."_sidebariconcolor",
	"type" => "select",
	"suffix" => "",
	"class" => "",
	"options" => array("black", "white","red", "blue","coffee", "facebookblue", "violet", "orange", "pink", "seegreen", "twitterblue"),
	"std" => "black"),

array( "name" => __("Sidebar fonts Color","templuto_admin"),
	"desc" => __("Sidebar fonts Color.","templuto_admin"),
	"id" => $shortname."_sidebarforecolor",
	"type" => "colorpicker",
	"suffix" => "",
	"class" => "cpickerinput",
	"std" => "#999"),
array( "name" => __("Sidebar Widget Title fonts Color","templuto_admin"),
	"desc" => __("Sidebar Widget Title fonts Color.","templuto_admin"),
	"id" => $shortname."_sidebartitlecolor",
	"type" => "colorpicker",
	"suffix" => "",
	"class" => "cpickerinput",
	"std" => "#999"),

array( "name" => __("Sidebar widget underline color","templuto_admin"),
	"desc" => __("Sidebar widget underline color.","templuto_admin"),
	"id" => $shortname."_sidebarunderlinecolor",
	"type" => "colorpicker",
	"suffix" => "",
	"class" => "cpickerinput",
	"std" => "#999"),
	
array( "name" => __("Sidebar link's color","templuto_admin"),
	"desc" => __("Sidebar link's Color.","templuto_admin"),
	"id" => $shortname."_sidebarlinkcolor",
	"type" => "colorpicker",
	"suffix" => "",
	"class" => "cpickerinput",
	"std" => "#999"),

array( "name" => __("Sidebar link's hover color","templuto_admin"),
	"desc" => __("Sidebar link's hover color.","templuto_admin"),
	"id" => $shortname."_sidebarlinkhoverolor",
	"type" => "colorpicker",
	"suffix" => "",
	"class" => "cpickerinput",
	"std" => "#999"),

array( "name" => __("Underline on mouse over","templuto_admin"),
	"desc" => __("Check it, if you want to show underline under link text, on mouse over","templuto_admin"),
	"id" => $shortname."_sidebarlinkmouseover",
	"type" => "checkbox",
	"class" => "",
	"suffix" => "",
	"std" => ""),

array( "type" => "close")

);


?>