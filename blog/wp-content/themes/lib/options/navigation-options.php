<?php


global $tpomain;


$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
	
array( "name" => __("Show categories as top menu", THEME_SLUG ),
	"desc" => __("If you want to show post categories as top menu check it.", THEME_SLUG ),
	"id" => $shortname."_top_cat_menu",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Show categories as primary menu", THEME_SLUG ),
	"desc" => __("If you want to show post categories as primary menu check it.", THEME_SLUG ),
	"id" => $shortname."_primary_cat_menu",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),

array( "name" => __("Disable default home tab on menu.", THEME_SLUG ),
	"desc" => __("Check it, if you want to hide default home tab generated on menu.", THEME_SLUG ),
	"id" => $shortname."_default_home_menu",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Enable Wordpress Custom Menu", THEME_SLUG ),
	"desc" => __("Check it, if you want to use Wordpress inbuilt custom navigation/menus. click here to configure <a href=\"./nav-menus.php\">Custom Nav</a>", THEME_SLUG ),
	"id" => $shortname."_custom_menu",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Top Wordpress Custom Menu", THEME_SLUG ),
	"desc" => __("If you want to use Wordpress Custom Menu, select one and if you have not created yet, click here <a href=\"./nav-menus.php\">Custom Nav</a>.", THEME_SLUG ),
	"id" => $shortname."_top_custom_nav",
	"type" => "select",
	"suffix" => "",
	"class" => "",
	"options" => $tpomain->tpo_get_navs(),
	"std" => "Choose a menu"),
	
array( "name" => __("Primary Wordpress Custom Menu", THEME_SLUG ),
	"desc" => __("If you want to use Wordpress Custom Menu, select one and if you have not created yet, click here <a href=\"./nav-menus.php\">Custom Nav</a>.", THEME_SLUG ),
	"id" => $shortname."_primary_custom_nav",
	"type" => "select",
	"suffix" => "",
	"class" => "",
	"options" => $tpomain->tpo_get_navs(),
	"std" => "Choose a menu"),

array( "type" => "close")
);

?>