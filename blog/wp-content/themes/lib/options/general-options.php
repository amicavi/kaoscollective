<?php

 
global $tpomain;

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
array( "name" => __("General", THEME_SLUG ),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Logo Image", THEME_SLUG ),
	"desc" => __("Enter the link to your logo image", THEME_SLUG ),
	"id" => $shortname."_logo",
	"type" => "image",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Use text as logo", THEME_SLUG ),
	"desc" => __("Check it, if you want show text instead of logo.", THEME_SLUG ),
	"id" => $shortname."_enablelogotext",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Logo Text", THEME_SLUG ),
	"desc" => __("Text to use as logo.", THEME_SLUG ),
	"id" => $shortname."_logotext",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),	

array( "name" => __("Logo top margin", THEME_SLUG ),
	"desc" => __("Logo margin from top, to adjust logo in middle", THEME_SLUG ),
	"id" => $shortname."_logomargin",
	"class" => "input_numeric",
	"maxlength" => "2",
	"type" => "textslider",
	"suffix" => "",
	"maximum" => "100",
	"minimum" => "0",
	"std" => "15"),
	
	
array( "name" => __("Tagline", THEME_SLUG ),
	"desc" => __("Tagline of website", THEME_SLUG ),
	"id" => $shortname."_tagline",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),	
	
array( "name" => __("Phone", THEME_SLUG ),
	"desc" => __("Enter your phone no.", THEME_SLUG ),
	"id" => $shortname."_phone",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),	
	
array( "name" => __("Email", THEME_SLUG ),
	"desc" => __("Enter your email.", THEME_SLUG ),
	"id" => $shortname."_email",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),	
	
array( "name" => __("Address", THEME_SLUG ),
	"desc" => __("Enter your address.", THEME_SLUG ),
	"id" => $shortname."_address",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),	
		
array( "name" => __("Show Breadcrumbs", THEME_SLUG ),
	"desc" => __("Check it, if you want to show Breadcrumbs on pages/posts.", THEME_SLUG ),
	"id" => $shortname."_breadcrumbs",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Google Analytics Code", THEME_SLUG ),
	"desc" => __("You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.", THEME_SLUG ),
	"id" => $shortname."_ga_code",
	"type" => "textarea",
	"suffix" => "",
	"class" => "",
	"std" => ""),	
	
array( "name" => __("Custom Favicon", THEME_SLUG ),
	"desc" => __("A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image", THEME_SLUG ),
	"id" => $shortname."_favicon",
	"type" => "image",
	"suffix" => "",
	"class" => "",
	"std" => get_template_directory_uri() ."/favicon.ico"),	
	
array( "name" => __("Feedburner URL", THEME_SLUG ),
	"desc" => __("Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website", THEME_SLUG ),
	"id" => $shortname."_feedburner",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => get_bloginfo('rss2_url')),
 
array( "type" => "close"),

array( "name" => __("Social Profile", THEME_SLUG ),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Show Social Icons", THEME_SLUG ),
	"desc" => __("If the theme support, it shows social icons on top. Not all theme support it. It depend on design.", THEME_SLUG ),
	"id" => $shortname."_socialicons_ontop",
	"type" => "checkbox",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Facebook", THEME_SLUG ),
	"desc" => __("Enter Tacebook url", THEME_SLUG ),
	"id" => $shortname."_facebook_url",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),	
	
array( "name" => __("Twitter", THEME_SLUG ),
	"desc" => __("Enter Twitter url", THEME_SLUG ),
	"id" => $shortname."_twitter_url",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("Linkedin", THEME_SLUG ),
	"desc" => __("Enter Linkedin url", THEME_SLUG ),
	"id" => $shortname."_linkedin_url",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),

array( "name" => __("Google Plus", THEME_SLUG ),
	"desc" => __("Enter Google Plus url", THEME_SLUG ),
	"id" => $shortname."_googleplus_url",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),


array( "name" => __("Youtube", THEME_SLUG ),
	"desc" => __("Enter Youtube url", THEME_SLUG ),
	"id" => $shortname."_youtube_url",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),
	
array( "name" => __("RSS", THEME_SLUG ),
	"desc" => __("Your rss feed url", THEME_SLUG ),
	"id" => $shortname."_rss_url",
	"type" => "text",
	"suffix" => "",
	"class" => "",
	"std" => ""),

array( "type" => "close")

);


?>