<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php function tpo_init_theme() { if (!function_exists("tpo_init_themeload") || !function_exists("tpo_init_themefinish")) { tpo_init_theme_message(); die; } } tpo_init_theme(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<?php if (TPO_FAVICON) { ?>
<link rel="shortcut icon" href="<?php echo TPO_FAVICON; ?>" type="image/x-icon" />
<?php } ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/woo.css" type="text/css" media="screen" />

<?php wp_enqueue_script("jquery"); ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700 ' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family= Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>
	<body <?php body_class(); ?>> 
  		<div class="container" ><div class="wrapper" >
			<div id="header" class="col-md-12">	<?php tpo_show_topnav(); ?>
	<div class="col-md-4">

			<?php  
				if ( get_option('tpo_enablelogotext') == true ) {
					$logo = get_option('tpo_logotext');	
				} else {
					if ( get_option('tpo_logo') == '' ) { 
						$logo = get_template_directory_uri() . "/images/logo.png";
					} else {
						$logo = get_option('tpo_logo');
					}
					$logo ='<img src="' . $logo . '"/>';
				}
			?>
			<div id="logo" style="margin-top:<?php echo tpo_option('tpo_logomargin') ?>px" ><a href="<?php bloginfo('url'); ?>"><?php echo $logo ?></a><?php if ( get_option('tpo_tagline') )  ?> <div id="tagline"><?php echo get_option('tpo_tagline') ?></div></div>
			
			
			</div>
			<div class="col-md-8">
			</div>

				<div class="clear"></div>
			</div> <!-- header End -->
				<div class="menu-outer col-md-12">
<?php tpo_show_nav(); ?>		</div>

<?php tpo_slide_show();	?>
