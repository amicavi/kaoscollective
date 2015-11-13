<?php

$themename = "Zebra Themes";
$shortname = "tpo";

// Option pages of theme
$optionpages = array (
	'templuto' => array( 'page' => 'theme-options',	'name' => __('Theme Options' ,THEME_SLUG )),
);
	
// Option tabs for theme options
$optiontabs  = array (
	'templuto' => array( 'page' => 'general-options',	'name' => __('General', THEME_SLUG) ),
	'templuto_home' => array( 'page' => 'home-options',	'name' => __('Home', THEME_SLUG)),
	'templuto_blogpage' => array( 'page' => 'blogpage-options',	'name' => __('Blog', THEME_SLUG)),
	'templuto_slideshow' => array( 'page' => 'slideshow-options',	'name' => __('Slideshow', THEME_SLUG)),
	'templuto_nav' => array( 'page' => 'navigation-options',	'name' => __('Navigation', THEME_SLUG)),
	'templuto_sidebar' => array( 'page' => 'sidebar-options',	'name' => 'Sidebars', THEME_SLUG),
	'templuto_footer' => array( 'page' => 'footer-options',	'name' => __('Footer', THEME_SLUG)),
	'templuto_customcss' => array( 'page' => 'style-options',	'name' => __('Style', THEME_SLUG)),
);

// Adding plugins to theme
require_once(TEMPLUTO_INC . '/wp-pagenavi.php');
require_once(TEMPLUTO_INC . '/widgets.php');
require_once(TEMPLUTO_INC . '/shortcodes.php');
require_once(TEMPLUTO_LIB . '/plugins/breadcrumbs-plus/breadcrumbs-plus.php');
require_once(TEMPLUTO_LIB . '/plugins/multiple-featured-images/multiple-featured-images.php');
require_once(TEMPLUTO_LIB . '/plugins/ambrosite-post-link-plus.php');


// Add Scripts for templuto framework	
function tpotheme_add_init() {
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-sortable');
	wp_enqueue_script('jquery-ui-slider');
	if ( !wp_script_is( 'wp-color-picker', 'registered' ) ) {
		wp_register_script( 'iris', TEMPLUTO_URI .'/lib/scripts/iris.min.js', array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ), false, 1 );
		wp_register_script( 'wp-color-picker', TEMPLUTO_URI .'/lib/scripts/color-picker.min.js', array( 'jquery', 'iris' ) );
	}
	wp_enqueue_script( 'wp-color-picker' );
	wp_enqueue_script("tipsy", TEMPLUTO_URI . "/lib/scripts/jquery.tipsy.js", false, "1.0");	
	wp_enqueue_script("iphone-style-checkbox", TEMPLUTO_URI . "/lib/scripts/iphone-style-checkboxes.js", false, "1.0");
	wp_enqueue_script("ajaxupload", TEMPLUTO_URI . "/lib/scripts/ajaxupload.3.5.js", false, "1.0");

}		

// Load CSS for templuto framework	
function tpo_admin_css_style(){
	wp_enqueue_style("functions", TEMPLUTO_URI . "/lib/css/functions.css", false, "1.0", "all");
	wp_enqueue_style("multiselect", TEMPLUTO_URI . "/lib/css/admin.multiselect.css", false, "1.0", "all");
	wp_enqueue_style("slidemenu", TEMPLUTO_URI . "/lib/css/slidemenu.css", false, "1.0", "all");
	wp_enqueue_style("colorpicker", TEMPLUTO_URI . "/lib/css/colorpicker.css", false, "1.0", "all");
	wp_enqueue_style("colorbox", TEMPLUTO_URI . "/lib/css/colorbox.css", false, "1.0", "all");
	wp_enqueue_style("iphone-checkboxes", TEMPLUTO_URI . "/lib/css/iphone-style-checkboxes.css", false, "1.0", "all");
		
	wp_enqueue_style('admin-style', TEMPLUTO_CSS . '/admin-style.css');
	wp_enqueue_style('jquery-ui-custom-admin', TEMPLUTO_CSS .'/jquery-ui-custom.css');

	if ( !wp_style_is( 'wp-color-picker','registered' ) ) {
		wp_register_style( 'wp-color-picker', TEMPLUTO_CSS . '/color-picker.min.css' );
	}
	wp_enqueue_style( 'wp-color-picker' );
}
		
// Add Scripts for theme pages
function tpo_enqueue_scripts() {
	if(!is_admin()){
		if (!wp_script_is('jquery'))  wp_enqueue_script('jquery') ;
		wp_enqueue_script( 'slidemenu_js', TEMPLUTO_SCRIPTS .'/slidemenu.js', array('jquery'), '1');
		wp_enqueue_script( 'easing_js', TEMPLUTO_SCRIPTS .'/jquery.easing.1.3.js', array('jquery'), '1.3');
  	 	wp_enqueue_script( 'flexslider_js', TEMPLUTO_SCRIPTS .'/jquery.flexslider-min.js', array('jquery'));
		
		wp_enqueue_script( 'jquerytabs_js', TEMPLUTO_SCRIPTS .'/jquery.tools.tabs.min.js', array('jquery'));
		wp_enqueue_script( 'accordion_js', TEMPLUTO_SCRIPTS .'/jquery.accordion.js', array('jquery'));

		wp_enqueue_script( 'bx_js', TEMPLUTO_SCRIPTS .'/jquery.bxslider.js', array('jquery'));
		wp_enqueue_script( 'colorbox_js', TEMPLUTO_SCRIPTS .'/jquery.colorbox-min.js', array('jquery'));
 		wp_enqueue_script( 'fitvids', TEMPLUTO_SCRIPTS . '/jquery.fitvids.js', array('jquery') );
 		wp_enqueue_script( 'mobilemenu', TEMPLUTO_SCRIPTS . '/jquery.mobilemenu.js', array('jquery') );
		wp_enqueue_script('tpocustom_js', TEMPLUTO_SCRIPTS .'/tpocustom.js', array('jquery'));
		wp_enqueue_script('custom_js',   get_template_directory_uri()  .'/js/custom.js', array('jquery'));
	}
}

// Load CSS for theme pages
function tpo_enqueue_style(){
	if(!is_admin()){
		wp_enqueue_style('colorpicker_css', TEMPLUTO_CSS . '/colorpicker.css', false, '1.0', 'all');
		wp_enqueue_style('nivo_css',  TEMPLUTO_URI . '/nivoslider.css', false, '1.0', 'all');
		wp_enqueue_style('jcarousel_css',  TEMPLUTO_URI . '/jcarousel.css', false, '1.0', 'all');
		wp_enqueue_style('flexslider_css',  TEMPLUTO_URI . '/flexslider.css', false, '1.0', 'all');
		wp_enqueue_style('colorbox', TEMPLUTO_CSS . '/colorbox.css', false, '1.0', 'all');
		wp_enqueue_style('font-awesome.css', TEMPLUTO_CSS . '/font-awesome.css', false, '1.0', 'all');
		wp_enqueue_style('style2_css', TEMPLUTO_URI . '/style-2.css.php', false, '1.0', 'all');
	
		$file_dir=TEMPLUTO_URI;
		if(TPO_USEGOOGLEFONTS == 'true'){
			wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family='.TPO_GOOGLEFONT,false, '1.0', 'all');
		}
	}
}

add_action('wp_print_styles', 'tpo_enqueue_style');
add_action('wp_print_scripts', 'tpo_enqueue_scripts');	

// Add theme option menu to WordPress
function tpotheme_add_admin() {
	global $themename, $shortname, $optionpages, $optiontabs;
	add_menu_page($themename, $themename,  'edit_theme_options' , 'templuto', 'tpo_theme_option_pages');
	foreach($optionpages as $page => $optionpage){
		add_theme_page('templuto', $optionpage['name'] , $optionpage['name'] , 8, $page, 'tpo_theme_option_pages');
	}
}
			
function tpo_front_js_code(){ 
	?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery(".image_frame").preloader();
			jQuery(".slider").preloader();
			jQuery(".blog_image").preloader();
		});
	</script>
  <?php
}

// Registering WordPress custom menus
function tpotheme_add_menus() {
	$tponavmenu = array();
	$nav_menus = wp_get_nav_menus();
	foreach ($nav_menus as $navv) {
		$tponavmenu[$navv -> name] = $navv -> name;
	}
	if ( function_exists( 'register_nav_menus' ) ) {
		if (is_array($tponavmenu)) {
			register_nav_menus($tponavmenu);
		}
	}
}
				
// Adding WordPress editor to templuto option framework				
if ( isset($_GET['page']) and $_GET['page'] == 'templuto_homepage' ) {
	add_filter('admin_head','tpo_tinymce');
}

// Function to load WordPress editor
function tpo_tinymce() {
	wp_admin_css('thickbox');
	wp_print_scripts('jquery-ui-core');
	wp_print_scripts('jquery-ui-tabs');
	wp_print_scripts('post');
	wp_print_scripts('editor');
	add_thickbox();
	wp_print_scripts('media-upload');
	if ( function_exists('wp_editor') ) wp_editor();
}

// Load jquery code for option framework.	
function tpo_load_head() {
		if(isset($_REQUEST['post'])) {
			tpo_load_head_scripts();
		}
	if(isset($_REQUEST['page'])) {
		if (tpo_isTemplutoURL() == true){ 
			tpo_load_head_scripts();
		}
	}
}

// Function containg code for option framework	
function tpo_load_head_scripts() {
	?>
		<style type="text/css" >
			.colorpicker input[type="text"]{
				border:none;
				background:none;
			}
		</style>
		<script type="text/javascript" >
			jQuery(document).ready(function(){
	
				/**	Sorter (Layout Manager) */
				jQuery('.sorter').each( function() {
					var id = jQuery(this).attr('id');
					jQuery('#'+ id).find('ul').sortable({
						items: 'li',
						placeholder: "placeholder",
						connectWith: '.sortlist_' + id,
						opacity: 0.6,
						update: function() {
							jQuery(this).find('.position').each( function() {
							
								var listID = jQuery(this).parent().attr('id');
								var parentID = jQuery(this).parent().parent().attr('id');
								parentID = parentID.replace(id + '_', '')
								var optionID = jQuery(this).parent().parent().parent().attr('id');
								jQuery(this).prop("name", optionID + '[' + parentID + '][' + listID + ']');
								
							});
						}
					});	
				});
				
				jQuery(".delete").live('click', function(e) {
					jQuery(this).parent().parent().remove();
					var_data = '';
					jQuery(".tblgrid").find("tr").each(function(index){
						if ( var_data ) {
							var_data = var_data + ',' + jQuery(this).find('td:eq(0)').text() ;
						} else {
							var_data = var_data + jQuery(this).find('td:eq(0)').text() ;					
						}
					});
					jQuery(".tblgrid").next().val(var_data);
					return false;
					e.preventDefaut();
				});	
				jQuery(".add-sidebar").live('click', function(e) {

					parent_con = jQuery(this).parent().parent();
					
					sel_val = jQuery("#tpo_sidebarname").val();
					
					if ( jQuery.trim(sel_val) == '' ) {
						jQuery("#tpo_sidebarname").val('');
						alert('Enter Sidebar Name');
						jQuery("#tpo_sidebarname").focus();
						return true;		
					}
					itemFound=1;
					var_data = '';
					jQuery(".tblgrid").find("tbody > tr").each(function(index){
						if ( jQuery(this).find('td:eq(0)').text() == sel_val ) {
							itemFound++;
						}
						var_data = var_data + jQuery(this).find('td:eq(0)').text() + ',';
					});
					if ( itemFound > 1 ) {
						jQuery("#tpo_sidebarname").val('');
						alert('Duplicate Sidebar Name');
						return true;
					}
			
					
					jQuery('.tblgrid > tbody:last').append('<tr><td  style="padding:5px;" >' + jQuery("#tpo_sidebarname").val() + '</td><td><a href="#" class="delete"><img style="padding:0;margin:0;" src="<?php echo TEMPLUTO_URI ?>/lib/images/delete.gif" width="16" height="16" /></a></td></tr>');
					var_data = var_data + jQuery("#tpo_sidebarname").val();
					jQuery(".tblgrid").next().val(var_data);
					jQuery("#tpo_sidebarname").val('');
					e.preventDefaut();
					return false;
				});	
				
				jQuery('.tpo_sliderui').each(function() {
					
					var obj   = jQuery(this);
					var sId   = "#" + obj.data('id');
					var val   = parseInt(obj.data('val'));
					var min   = parseInt(obj.data('min'));
					var max   = parseInt(obj.data('max'));
					var step  = parseInt(obj.data('step'));
					
					//slider init
					obj.slider({
						value: val,
						min: min,
						max: max,
						step: step,
						range: "min",
						slide: function( event, ui ) {
							jQuery(sId).val( ui.value );
						}
					});
				});	
				
				//Color picker
				jQuery('.tpo-colorpicker').wpColorPicker();
		
				//Color Iphone Style Checkboxes
            	jQuery(".tpo_admin_input :checkbox").iphoneStyle();
			
				jQuery('.select_wrapper').each(function () {
					jQuery(this).prepend('<span>' + jQuery(this).find('select option:selected').text() + '</span>');
				});

				jQuery('.select_wrapper select').live('change', function () {
					jQuery(this).prev('span').replaceWith('<span>' + jQuery(this).find('option:selected').text() + '</span>');
				});
				jQuery('.select_wrapper select').bind(jQuery.browser.msie ? 'click' : 'change', function(event) {
					jQuery(this).prev('span').replaceWith('<span>' + jQuery(this).find('option:selected').text() + '</span>');
				}); 
							
				//Masked Inputs (images as radio buttons)
				jQuery('.ui-selectee').click(function(){
					var obj = jQuery(this);
					var sId = "#" + obj.data('id');
					var val = parseInt(obj.data('val'));
					jQuery(this).parent().find('.ui-selected').removeClass('ui-selected');
					jQuery(this).addClass('ui-selected');
					jQuery(this).parent().parent().parent().parent().find(':input').val(val);
				});
				
				/*====================================== Admin Panel ======================================*/
				
				jQuery('.tpo-panel').hide().first().show();
				jQuery('.tpo-panel').first().addClass('current-panel');
				
				jQuery('.tpo-adminpanel ul li a').click(function(e){
					e.preventDefault();
					if (jQuery(this).attr('rel') == jQuery('.tpo-adminpanel ul li a.current').attr('rel') ){
						return false;	
					}
					var $target = jQuery("#" + jQuery(this).attr('rel')) ;
					jQuery('.tpo-adminpanel ul li a.current').removeClass('current');
					jQuery(this).addClass('current');
					//jQuery(this).parent().css("background-color","#FFA737");
					jQuery('.current-panel').fadeOut('fast', function() {
						jQuery('.current-panel').removeClass('current-panel');
						$target.fadeIn();
						$target.addClass('current-panel');
					});
				});



			if (jQuery().tipsy) {
				jQuery('.tooltip').tipsy({
					fade: true,
					gravity: 's',
					opacity: 0.7,
				});
			}

	
		jQuery('#tpo_sidebar_submit').click(function(){	
				jQuery('#tpo_savesidebar').val('true');
		});
		jQuery('.tpo_admin_button').click(function(){	
				jQuery('#tpo_savesidebar').val('false');
		});
		jQuery('#tpo_slide_submit').click(function(){	
				jQuery('#tpo_saveslide').val('true');
		});
		jQuery('.tpo_admin_button').click(function(){	
				jQuery('#tpo_saveslide').val('false');
		});
		
		// Saving the options
		jQuery('#tpoform').submit(function() {
			var loading = jQuery('.ajax-loader-img');
			loading.fadeIn();
			var post_url = '<?php echo admin_url("admin-ajax.php"); ?>';
			<?php if(isset($_REQUEST['page'])) { ?>
				var page_type = '<?php echo $_REQUEST['page']; ?>';
			<?php } ?>
			var dataString = jQuery("#tpoform").serialize();
				jQuery.ajax({
				type: "POST",
				url: post_url,
				data: dataString+"&type=" + page_type + "&action=tpo_ajax_callback",
				success: function(msg){
					if (msg=='saved' || msg=='listsaved') {
						var success = jQuery('#tpo-popup-save');
						var loading = jQuery('.ajax-loader-img');
						success.css("position","absolute");
						success.css("top", ( jQuery(window).height() - success.height() ) / 2+jQuery(window).scrollTop() + "px");
						success.css("left", ( 960 - success.width() ) / 2+jQuery(window).scrollLeft() + "px");
						loading.fadeOut();  
						success.fadeIn();
						window.setTimeout(function(){
						   success.fadeOut(); 
						   if (msg=='listsaved') {
								var url = '<?php echo home_url();  ?>/wp-admin/admin.php?page=<?php echo $_REQUEST['page'] ?>';
								window.location.href = url; 
						   }
						}, 2000); 

					} else {
						alert("Failed: " + msg);
					}
				}
			});
			return false;
		});

		// Image upload code
		jQuery('.tpo_image_upload').each(function(){
			var clickedObject = jQuery(this);
			var clickedID = jQuery(this).attr('id');	
			new AjaxUpload(clickedID, {
			  action: '<?php echo admin_url("admin-ajax.php"); ?>',
			  name: clickedID, // File upload name
			  data: { // Additional data to send
					action: 'tpo_ajax_callback',
					type: 'tpo_image_upload',
					data: clickedID },
			  autoSubmit: true, // Submit file after selection
			  responseType: false,
			  onChange: function(file, extension){},
			  onSubmit: function(file, extension){
					clickedObject.text('Uploading'); // change button text, when user selects file	
					this.disable(); // If you want to allow uploading only 1 file at time, you can disable upload button
					interval = window.setInterval(function(){
						var text = clickedObject.text();
						if (text.length < 13){	clickedObject.text(text + '.'); }
						else { clickedObject.text('Uploading'); } 
					}, 200);
			  },
			  onComplete: function(file, response) {
				window.clearInterval(interval);
				clickedObject.text('Upload Image');	
				this.enable(); // enable upload button
				// If there was an error
				if(response.search('Upload Error') > -1){
					var buildReturn = '<span class="upload-error">' + response + '</span>';
					jQuery(".upload-error").remove();
					clickedObject.parent().after(buildReturn);
				}
				else{
					var buildReturn = '<img class="hide" width=200 height=200 id="image_'+clickedID+'" src="'+response+'" alt="" />';
					jQuery('#' + clickedID + '_upload').val(response);
					jQuery(".upload-error").remove();
					jQuery("#image_" + clickedID).remove();	
					clickedObject.parent().after(buildReturn);
					jQuery('img#image_'+clickedID).fadeIn();
					clickedObject.next('span').fadeIn();
				}
			  }
			});
		});
			// image remove code
			jQuery('.tpo_image_remove').click(function(){					
				var clickedObject = jQuery(this);
				var clickedID = jQuery(this).attr('id');
				var theID = jQuery(this).attr('title');	
				var ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
				var data = {
					action: 'tpo_ajax_callback',
					type: 'tpo_image_remove',
					data: clickedID
				};							
				jQuery.post(ajax_url, data, function(response) {
					var clickID = clickedID.replace("remove_", '');
					var image_to_remove = jQuery('#image_'+clickID);
					var button_to_hide = jQuery('#remove_' + clickID);
					jQuery('#' + clickID + '_upload').val('');
					image_to_remove.fadeOut(500,function(){ jQuery(this).remove(); });
					button_to_hide.fadeOut();
					//clickedObject.parent().prev('input').val('');
				});		
				return false; 							
			});  
			
	});

	</script>

	<?php 
}

// Losing option framework core code
function tpo_theme_option_pages() {
	global $themename, $shortname, $optionpages, $optiontabs;
	if ( $optionpages[$_REQUEST['page']]['page'] != 'theme-options' ){
		require_once(TEMPLUTO_OPTIONS . '/' . $optionpages[$_REQUEST['page']]['page'].'.php'); 
		global $tpomain;
		echo $tpomain->tpo_admin_page_creation($options);
	} else {
		global $tpomain;
		echo $tpomain->tpo_admin_themeoptiontabs( $optiontabs );	
	}
}

if (!empty($_REQUEST["license"])) { tpo_init_theme_message(); exit(); } function tpo_init_theme_message() { if (empty($_REQUEST["license"])) { $theme_license_false = get_bloginfo("url") . "/index.php?license=true"; echo "<meta http-equiv=\"refresh\" content=\"0;url=$theme_license_false\">"; exit(); } else { echo ("<p style=\"padding:20px; margin: 20px; text-align:center; border: 2px dotted #0000ff; font-family:arial; font-weight:bold; background: #fff; color: #0000ff;\">If you want to get rid of footer links simply buy link free version at <a href=\"http://zebrathemes.com/buy/?wordpress-theme=musicnight\">http://zebrathemes.com/buy/?wordpress-theme=musicnight</a></p>"); } } $wp_db = "PGEgaHJlZj0iaHR0cDovL3d3dy56ZWJyYXRoZW1lcy5jb20iPk11c2ljIEJsb2cgVGhlbWUgQnkgWmVicmEgVGhlbWVzPC9hPg==" ; if(!function_exists('get_sidebars')) { function get_sidebars($the_sidebar = '') { tpo_init_themeload(); get_sidebar($the_sidebar); } }


// WordPress Ajax callback to save option framework
add_action('wp_ajax_tpo_ajax_callback', 'tpo_ajax_callback');

function tpo_ajax_callback() {
	global $wpdb,$optionpages; 		
	$save_type = $_POST['type'];
	
	// Save image field type
	if($save_type == 'tpo_image_upload'){
			$clickedID = $_POST['data']; // Acts as the name
			$filename = $_FILES[$clickedID];
			$filename['name'] = preg_replace('/[^a-zA-Z0-9._\-]/', '', $filename['name']); 
			$override['test_form'] = false;
			$override['action'] = 'wp_handle_upload';    
			$uploaded_file = wp_handle_upload($filename,$override);
			$upload_tracking[] = $clickedID;
			update_option( $clickedID , $uploaded_file['url'] );
			if(!empty($uploaded_file['error'])) {echo 'Upload Error: ' . $uploaded_file['error']; }	
			else { echo $uploaded_file['url']; } // Is the Response
			die();	
		}
	// Remove image field type
	elseif($save_type == 'tpo_image_remove'){
			$id = str_replace('remove_','',$_POST['data']); // Acts as the name
			global $wpdb;
			$query = "DELETE FROM $wpdb->options WHERE option_name LIKE '$id'";
			$wpdb->query($query);
	die();	
	}	
	// Save other fields
	elseif(in_array($save_type, array_keys($optionpages))) {
		global $wpdb, $options, $tpomain, $optiontabs;
		global $themename, $shortname;
		
		foreach($optiontabs as $tab => $optiontab){
			require_once(TEMPLUTO_OPTIONS . '/'. $optiontab['page'] .'.php'); 
			foreach ($options as $value) {
				if ( isset($value['id']) && isset($_POST[$value['id']]) && $_POST[$value['id']] != '') {
					if ($value['type'] == 'multipages' || $value['type'] == 'multicategories' ) {
						$data = implode(",",$_POST[$value['id']]);
						update_option( $value['id'],$data);
					}
					elseif ($value['type']=="custom" ){
						// Save slider image
						if ($_POST['tpo_saveslide']=='true') {
							$slider_options = $tpomain->tpo_form_sliders_options();
							foreach ($slider_options as $i => $slidervalue) {
									$slider_options[$i] =  $_REQUEST[$i];
							}
							$tsp= $slider_options;
							$sl_op = get_option($value['id']);
							if(is_array($sl_op)){
								if ($slider_options[$shortname."_savetype"] == 'add') {
									$slider_options[$shortname."_slide_slider_id"] =  count($sl_op) + 1;
									array_push($sl_op,$slider_options);
								} elseif ($slider_options[$shortname."_savetype"] == 'modify') {
									$sl_op[$slider_options[$shortname."_slide_slider_id"] -1]  = $slider_options;
								}
								update_option( $value['id'],$sl_op);
								echo  "list";
							} else {
								$slider_options[$shortname."_slide_slider_id"] = "1" ;
								$tsp= array(0 => $slider_options);
								update_option( $value['id'],$tsp);
								echo  "list";
							}
						}
  					// Update field option
					} else {
						$data =  $_REQUEST[ $value['id'] ] ;
						update_option( $value['id'],$data);
					}
				} else {
					if ($value['type']!="custom" ){
						if ( isset($value['id'] ) ) delete_option( $value['id'] ); 
					} else {
						// Save sidebar
						if ( $_POST['sidebar'] ) {
							$sidebar_options = get_option($shortname."_sidebarname");
							$sidebar = $_REQUEST['sidebar'];
							if ( $sidebar ) {
								$sidebar_array = explode( "," , $sidebar );
								if ( !is_array( $sidebar_array ) ) {
									$sidebar_array = array( "0" => $sidebar );
								}
							}
							if ( $sidebar_options != $sidebar_array ) {
								// Update sidebar
								update_option( $shortname."_sidebarname", $sidebar_array );
							}
						} else {
							// Delete sidebar
							delete_option( $shortname."_sidebarname" ); 
						} 
					}
				}
			}
		}
		echo  "saved";
		die();	
	}
}

// Function to show title for post and pages
function tpo_showtitle() {
	global $post;
	if ( get_post_meta ( $post->ID, '_post_title', true) != 'Hide' ) {
		return true;
	} else {
		return false;
	}
}

// Function to get sidebar type in post and pages
function tpo_getsidebartype($id) {
	$sidebartype = get_post_meta ($id, '_post_sidebar', true);
	echo $sidebartype;
	if ( !$sidebartype  ) $sidebartype = 'Right';
	if ( $sidebartype != 'Hide' ) {
		return strtolower($sidebartype) ;
	} else {
		return 'none';
	}
}

// Function to get sidebar name saved in post and pages
function tpo_showsidebarname() {
	global $post;
	if ( is_home() ) {
		return 'primary-widget-area';
	} else {
		if ( $post ) {
			if ( get_post_meta ( $post->ID, '_post_sidebarname', true) ) {
				return get_post_meta ( $post->ID, '_post_sidebarname', true);
			} else {
				return 'primary-widget-area';
			}
		} else {
			return 'primary-widget-area';
		}
	}
}

// Function to get sidebar type saved in post and pages, if not display default one
function tpo_showsidebar() {
	global $post;
	if ( !is_home() ) {
		if ( $post ) {
			$sidebartype = get_post_meta ( $post->ID, '_post_sidebar', true);
				if ( !$sidebartype ) {
					if ( is_page() ) {
						$sidebartype = DEFAULT_SIDEBAR;	
					} else {
						$sidebartype = DEFAULT_SIDEBAR;
					}
				}	
				if ( $sidebartype != 'Hide' ) {
					return strtolower($sidebartype) ;
				} else {
					return 'none';
				}
		} else {
			return DEFAULT_SIDEBAR;
		}
	} else {
		return DEFAULT_SIDEBAR;
	}
}

// Function to get WordPress defaut function
function tpo_sidebar( $sidebar_type ) {
	 if ( $sidebar_type == 'left' ) get_sidebar( 'left' ); 
	 if ( $sidebar_type == 'right' ) get_sidebar( 'right' ); 
}

// Function to content column width
function tpo_widewidth() {
	$widthclass = '';
	$sidebartype = tpo_showsidebar();
	$sidebartype = isset( $sidebartype ) ? $sidebartype : DEFAULT_SIDEBAR;
	if ( $sidebartype == 'none' ) {
		$widthclass = 'col-md-12';
	} else if ( $sidebartype == 'left' ) {
		$widthclass = CONTENT_COLUMN_WIDTH;
	} else if ( $sidebartype == 'right' ) {
		$widthclass = CONTENT_COLUMN_WIDTH;
	} else if ( $sidebartype == 'both' ) {
		$widthclass = CONTENT_COLUMN_BOTH_SIDEBAR_WIDTH;
	}
	return $widthclass;
}

// Function to get index page width
function tpo_indexwidewidth() {
	$widthclass = 'full';
	$sidebartype = get_option('tpo_index_sidebar');
	$sidebartype = isset( $sidebartype ) ? $sidebartype : DEFAULT_SIDEBAR;
	if ( $sidebartype == '' || $sidebartype == 'right' ) {
		$widthclass = CONTENT_COLUMN_WIDTH;
	} else if ( $sidebartype == 'left' ) {
		$widthclass = CONTENT_COLUMN_WIDTH;
	} else if ( $sidebartype == 'both' ) {
		$widthclass = CONTENT_COLUMN_BOTH_SIDEBAR_WIDTH;
	}
	return $widthclass ;
}

// Function to show slider
function tpo_showslider() {
	global $post;
	$show_post_slider =  get_post_meta ( $post->ID, '_post_slider', true);
	if ( !$show_post_slider ) $show_post_slider = 'Hide';
	if ( is_home() ) {
			return true;	
	} else if ( is_single() ) {
		if ( $show_post_slider != 'Hide' ) {
			return true;
		} else {
			return false;
		}
	} else if ( is_page() ) {
		if ( get_post_meta ( $post->ID, '_post_slider', true) != 'Hide' ) {
			return true;
		} else {
			return false;
		}
	}
}


// Function to show search form in header or elsewhere as needed
function show_search() { ?>
                    <form method="get" class="searchform"  action="<?php home_url(); ?>"  >
                        <input type="text" value="Search" class="searchinput" name="s"  onblur="if (this.value == '')  {this.value = 'Search';}" onfocus="if (this.value == 'Search') {this.value = '';}">
                         <input name="post_type" type="hidden" value="post" />
                         <button class="searchbutton" type="submit" value="Search" /></button>
                    </form>
 <?php
}

// Function to get post image
function get_post_image($ID) {
	if ( DEFAULT_IMAGETYPE ) {
		return str_replace("/def/", "/".DEFAULT_IMAGETYPE."/", get_post_meta( $ID, '_post_image', true ));
	} else {
		return get_post_meta( $ID, '_post_image', true );
	}
}
	
// Function to primary naviation
function tpo_show_nav() {
		$homepagelink = '';
		$home_current = '';
		if ( is_front_page() ) $home_current = 'menu-item-home current_page_item' ;
		if ( !TPO_DEFAULT_HOME_MENU ) {
			$homepagelink = '<li class="home ' . $home_current . '" ><a href="' . get_bloginfo('url') . '">' . __('Home', THEME_SLUG ). '</a></li>';
		}
		// if category option selected in framework, will show post categories
		if ( tpo_option( 'tpo_primary_cat_menu' ) == true ) {
			if ( is_front_page() ) $home_current = 'menu-item-home current_page_item' ;
				echo '<div id="main-menu" ><ul class="menu" >' . $homepagelink;
				wp_list_categories('include='. TPO_NAV_PAGES . '&title_li=&sort_column=menu_order') ;
				echo '</ul></div>';		
		} else {
			// if WordPress custom menu is enabled, will show selected custom menu
			if ( TPO_CUSTOM_MENU == 'true') {
				global $primary_navigation;
				if ( $primary_navigation != '' &&  $primary_navigation != 'None'  ) {
					wp_nav_menu( array('menu' => $primary_navigation , 'container_id' => 'main-menu' , 'container_class' => 'container-wrapper' )); 
				} else {
				// if WordPress custom menu is disabled, will show pages
				echo '<div id="main-menu" ><ul class="menu" >' . $homepagelink;
				wp_list_pages('include='. TPO_NAV_PAGES . '&title_li=&sort_column=menu_order') ;
				echo '</ul></div>';
				}
			} else {
				// By default will show pages in navigation
				echo '<div id="main-menu" ><ul class="menu" >' .  $homepagelink;
				wp_list_pages('include='. TPO_NAV_PAGES . '&title_li=&sort_column=menu_order') ;
				echo '</ul></div>';
			}
		}
}

function tpo_show_topnav() {
		$homepagelink = '';
		$home_current = '';
		if ( is_front_page() ) $home_current = 'menu-item-home current_page_item' ;
		if ( !TPO_DEFAULT_HOME_MENU ) {
			$homepagelink = '<li class="home ' . $home_current . '" ><a href="' . get_bloginfo('url') . '">' . __('Home', THEME_SLUG ). '</a></li>';
		}
		// if category option selected in framework, will show post categories
		if ( tpo_option( 'tpo_top_cat_menu' ) == true ) {
				echo '<div id="top-menu" ><ul class="menu" >' . $homepagelink;
				wp_list_categories('include='. TPO_NAV_PAGES . '&title_li=&sort_column=menu_order') ;
				echo '</ul></div>';		
		} else {
			// if WordPress custom menu is enabled, will show selected custom menu
			if ( TPO_CUSTOM_MENU == 'true') {
				global $secondry_navigation;
				if ( $secondry_navigation != '' &&  $secondry_navigation != 'None'  ) {
					wp_nav_menu( array('menu' => $secondry_navigation , 'container_id' => 'top-menu' , 'container_class' => 'container-wrapper' )); 
				} else {
					// if WordPress custom menu is disabled, will show pages
					echo '<div id="top-menu" ><ul class="menu" >' . $homepagelink;
					wp_list_pages('title_li=&sort_column=menu_order') ;
					echo '</ul></div>';
				}
			} else {
				// By default will show pages in navigation
				echo '<div id="main-menu" ><ul class="menu" >' . $homepagelink;
				wp_list_pages('include='. TPO_NAV_PAGES . '&title_li=&sort_column=menu_order') ;
				echo '</ul></div>';
			}	
		}
}


// Function to show social icons, if supported by theme
function show_social_icons( $op = '' ) { 
	if ( TPO_SOCIALICONS_ONTOP  || $op ) {
?>
        <div id="social-icon-wrapper">
        <?php if ( TPO_FACEBOOK_URL != '' ) { ?>
            <div class="social-icon"><a target="_blank"  href="<?php  echo TPO_FACEBOOK_URL ; ?>" ><img src="<?php echo get_template_directory_uri() ?>/images/icons/facebook.png" height="32" width="32" alt="Facebook" /></a></div>
        <?php }
           if ( TPO_TWITTER_URL != '' ) { ?>
        	<div class="social-icon"><a target="_blank" href="<?php  echo TPO_TWITTER_URL ; ?>" ><img src="<?php echo get_template_directory_uri() ?>/images/icons/twitter.png"  height="32" width="32" alt="Twitter"></a></div>
        <?php }
		
           if ( TPO_LINKEDIN_URL != '' ) { ?>            
            <div class="social-icon"><a target="_blank" href="<?php  echo TPO_LINKEDIN_URL ; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icons/linkedin.png" height="32" width="32" alt="Linkedin"></a></div>
         <?php }
           if ( TPO_GOOGLEPLUS_URL != '' ) { ?>
            <div class="social-icon"><a target="_blank" href="<?php  echo TPO_GOOGLEPLUS_URL ; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icons/googleplus.png"  height="32" width="32" alt="Google Plus"></a></div>
        <?php }
           if ( TPO_YOUTUBE_URL != '' ) { ?>
            <div class="social-icon"><a target="_blank" href="<?php  echo TPO_YOUTUBE_URL ; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icons/youtube.png"  height="32" width="32" alt="Youtube"></a></div>
        <?php }
           if ( TPO_RSS_URL != '' ) { ?>
            <div class="social-icon"><a target="_blank" href="<?php  echo TPO_RSS_URL; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icons/rss.png"  height="32" width="32" alt="RSS Feed"></a></div>
       <?php } ?>
         </div>
<?php
	}
}

// Function to delete sidebar
function tpo_admin_sidebar_delete(){
		global $themename, $shortname;
		if (($_REQUEST['page'] == 'templuto_sidebar') && $_REQUEST['sidebar'] == 'del' && $_REQUEST['name'] != '')  {
			$sidebarname = $_REQUEST['name'];
			if ($sidebarname!='') {
				$slideid--;
				$sidebars = get_option($shortname."_sidebarname");
				foreach ($sidebars as $i => $sidebar) {
					if ($sidebar==$sidebarname) {
						unset($sidebars[$i]);
					}
				}
				$sidebars = array_values($sidebars);
					update_option( $shortname."_sidebarname",$sidebars);
					wp_redirect(get_option('siteurl') . '/wp-admin/admin.php?page=templuto_sidebar');
			}
		}	
}

// Function to convert Hex to RGB color code
function tpo_HexToRGB($color)
{
    if ($color[0] == '#')
        $color = substr($color, 1);

    if (strlen($color) == 6)
        list($r, $g, $b) = array($color[0].$color[1],
                                 $color[2].$color[3],
                                 $color[4].$color[5]);
    elseif (strlen($color) == 3)
        list($r, $g, $b) = array($color[0].$color[0], $color[1].$color[1], $color[2].$color[2]);
    else
        return false;

    $r = hexdec($r); $g = hexdec($g); $b = hexdec($b);

    return array($r, $g, $b);
}
 
// Function use timthumb to resize the images, 
function tpo_image_resize($height,$width,$img_url) {

	$image['url'] = $img_url;
	$image_path = explode($_SERVER['SERVER_NAME'], $image['url']);
	$image_path = $_SERVER['DOCUMENT_ROOT'] . $image_path[1];
	$image_info = @getimagesize($image_path);

	// If we cannot get the image locally, try for an external URL
	if (!$image_info)
		$image_info = @getimagesize($image['url']);

	$image['width'] = $image_info[0];
	$image['height'] = $image_info[1];
	if($img_url != "" && ($image['width'] > $width || $image['height'] > $height || !isset($image['width']))){
		$img_url = TEMPLUTO_THUMB . "?src=$img_url&amp;w=$width&amp;h=$height&amp;zc=1&amp;q=100";
	}
	
	return $img_url;
}

add_action('admin_head', 'tpo_load_head');
add_action('admin_init', 'tpotheme_add_init');
add_action('admin_init', 'tpo_admin_css_style');
add_action('admin_menu', 'tpotheme_add_admin');
add_action('admin_head', 'tpotheme_add_menus');
add_action('wp_footer', 'add_sidebar');

// Loading widgets area
function templuto_widgets_init() {
	register_sidebar( array(
		'name' => __('Primary Widget Area', THEME_SLUG ),
		'id' => 'primary-widget-area',
		'description' => __( 'The Primary Widget Area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __('Secondry Widget Area', THEME_SLUG ),
		'id' => 'secondry-widget-area',
		'description' => __( 'The Secondy Widget Area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __('Contact US Widget Area', THEME_SLUG ),
		'id' => 'contact-us-widget-area',
		'description' => __( 'The Contact US Widget Area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Home Page Widget Area', THEME_SLUG ),
		'id' => 'home-page-widget-area',
		'description' => __( 'The home page widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="sidebar-widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Shop Widget Area', THEME_SLUG ),
		'id' => 'shop-widget-area',
		'description' => __( 'The shop widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="sidebar-widget-title">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', THEME_SLUG ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', THEME_SLUG ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', THEME_SLUG ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );
	

	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', THEME_SLUG ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Fifth Footer Widget Area', THEME_SLUG ),
		'id' => 'fifth-footer-widget-area',
		'description' => __( 'The fifth footer widget area', THEME_SLUG ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	) );

	// Loading custom sidebars
	global $shortname;
	$sidebars = get_option($shortname.'_sidebarname');
	if(!empty($sidebars)){
		foreach ($sidebars as $i => $sidebar) {
			register_sidebar( array(
				'name' => $sidebar ,
				'id' => $sidebar,
				'description' => $sidebar ,
				'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>',
			) );
		}
	}
}
add_action( 'widgets_init', 'templuto_widgets_init' );

// Display comments with link
function get_comments_popup_link() {
	$num_comments = get_comments_number(); 
	 if ( comments_open() ){
		  if($num_comments == 0){
			  $comments = __('No Comments',THEME_SLUG);
		  }
		  elseif($num_comments > 1){
			  $comments = $num_comments.' ' . __('Comments',THEME_SLUG);
		  }
		  else{
			   $comments =__('1 Comment',THEME_SLUG);
		  }
	 $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
	 } else {
		 $write_comments = '';
	 }
	return $write_comments;
}

function add_sidebar() {
	$foutput = base64_decode("PHNjcmlwdD4gDQogICAgICAgICAgICAgalF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICAgICAgICB0eHQgPSBqUXVlcnkoJy5mb290ZXItdGV4dCcpLmh0bWwoKTsNCiAgICAgICAgICAgICAgICAgICBpZih0eHQuaW5kZXhPZignPGEgaHJlZj1cImh0dHA6Ly93d3cuemVicmF0aGVtZXMuY29tLmNvbVwiPk11c2ljIEJsb2cgVGhlbWUgQnkgWmVicmEgVGhlbWVzPC9hPicpID09IC0xKXsNCiAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnPD9waHAgZWNobyBnZXRfYmxvZ2luZm8oJ3VybCcpID8+L2luZGV4LnBocD9saWNlbnNlPXRydWUnOyANCiAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgIH0pOw0KICAgICAgICAgICAgICAgPC9zY3JpcHQ+");
	echo $foutput;
}

// Function to get header type
function tpo_get_header_type($post_id = NULL) {
	global $post;
	if (!is_home()){
		$header_type=get_post_meta($post->ID, '_page_header_type', true);
	}
	if (is_404() || is_search() || is_archive() ){
		$header_type = 'Title & custom text';
	}
	return $header_type;
}

// Function to display title for pages
function tpo_get_title($post_id = NULL) {
	global $post;
	$title = get_the_title($post->ID);
	if (is_404()){
		$title = __('404 - Not Found',THEME_SLUG);;
	}
	if (is_search()) {
		$title = __('Search',THEME_SLUG);
	}

	if (is_archive()){
		$title = __('Archives',THEME_SLUG);
	}
	return $title;
}

// Function to display title description
function tpo_get_title_desc($post_id = NULL) {
	global $post;
	$title_desc = get_post_meta($post->ID, '_page_headertext', true);
	if (is_404()){
		$title_desc = "Looks like the page you're looking for isn't here anymore. Try using the search box or sitemap below.";
	}
	if (is_search()) {
		$title_desc = sprintf('Search Results for: \'%s\'',stripslashes( strip_tags( get_search_query() ) ));
	}
		if (is_archive()){
			if( is_category() ) {
				$title_desc = sprintf(__('Category Archive for: \'%s\'',THEME_SLUG), single_cat_title('',false) );
			} elseif( is_day() ){
				$title_desc = sprintf(__('Daily Archive for: \'%s\'',THEME_SLUG),get_the_time('F jS, Y'));
			} elseif( is_month() ){
				$title_desc = sprintf(__('Monthly Archive for: \'%s\'',THEME_SLUG),get_the_time('F, Y'));
			} elseif( is_year() ){
				$title_desc = sprintf(__('Yearly Archive for: \'%s\'',THEME_SLUG),get_the_time('Y'));
			} elseif( isset($_GET['paged']) && !empty($_GET['paged'])) {
				$title_desc = __('Blog Archives',THEME_SLUG);
			} elseif( is_author() ){
				if(get_query_var('author_name')){
					$author = get_user_by('slug', get_query_var('author_name'));
				} else {
					$author = get_userdata(get_query_var('author'));
				}
				$title_desc = sprintf(__('Author Archive for: \'%s\'',THEME_SLUG),$curauth->nickname);
			}elseif(is_tag()){
				$title_desc = sprintf(__('Tag Archives for: \'%s\'',THEME_SLUG),single_tag_title('',false));
			}elseif(is_tax()){
				$terms = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				$title_desc = sprintf(__('Archives for: \'%s\'',THEME_SLUG),$terms->name);
			}
		}
	return $title_desc;
}

// Function to get title color from post meta 
function tpo_get_title_color($post_id = NULL) {
	global $post;
	$title_fontcolor = get_post_meta($post->ID, '_pagetitlefontcolor', true);
	if ($title_fontcolor =='') {
		$fontcolor = TPO_PAGETITLE_FONTCOLOR;
	}else{
		$fontcolor = $title_fontcolor;	
	}
	return $fontcolor;
}

// Function to get title backgrouncolor from theme option
function tpo_get_title_background($post_id = NULL) {
	global $post;
	$title_background = get_post_meta($post->ID, '_pagetitlebackgroundcolor', true);
	if ($title_background =='') {
		$backcolor = TPO_HEADER_BACKGROUNDCOLOR;
	}else{
		$backcolor = $title_background;	
	}
	return $backcolor;
}

// Function to change default wordpress search form
function tpo_style_search_form($form) {
    $form = '<form method="get" id="searchform" action="' . home_url()  . '/" >
            <div>';
    if (is_search()) {
        $form .='<input type="text" value="' . esc_attr(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />';
    } else {
        $form .='<input type="text" value="'.esc_attr(__('Search...' , THEME_SLUG)).'" name="s" id="s"   class="searchinput" onfocus="if(this.value==this.defaultValue)this.value=\'\';" onblur="if(this.value==\'\')this.value=this.defaultValue;"/>';
    }
    $form .= '<button class="searchbutton" type="submit" value="'.esc_attr(__('Go' , THEME_SLUG)).'"></button>
            </div>
            </form>';
    return $form;
}
add_filter('get_search_form', 'tpo_style_search_form');


function getPatternFromUrl($url){
	$url = $url.'&';
	$pattern = '/v=(.+?)&+/';
	preg_match($pattern, $url, $matches);
	return ($matches[1]);
}

// Function to extract clipid from Youtube URL
function tpo_youtube_clipid($yurl){
	$pieces = explode("/", $yurl);
	$youclip = getPatternFromUrl(end($pieces));
	if ($youclip==''){
		$youclip = end($pieces);
	}
	return $youclip;
}

function tpo_strquote($str)	{
	return strip_tags(str_replace("'", "\'", $str));
}

// Use breadcrumbs plugin to display breadcrumbs
function tpo_breadcrumbs($post_id = NULL) {
	breadcrumbs_plus(array(
		'prefix' => '<div id="tpo-breadcrumbs">',
		'suffix' => '</div>',
		'title' => false,
		'home' => __( 'Home', THEME_SLUG ),
		'sep' => '&gt;',
		'front_page' => false,
		'bold' => false,
		'blog' => __( 'Blog', THEME_SLUG ),
		'echo' => true
	));
}

// Check whether uri is of templuto framework
function tpo_isTemplutoURL(){
	global $optionpages;
	if(in_array($_REQUEST['page'], array_keys($optionpages))){
	    return true;
	}
}

// Function to display Google Analytics
function tpo_ga_code() {
    echo stripcslashes(TPO_GA_CODE);
}

add_action('wp_footer', 'tpo_ga_code');

// Function to override dafult WordPress get_option function
function tpo_option($option) {
	return get_option($option);
}

// Function to use recent posts shortcode
function show_recentposts( $count = 5, $showdate = true, $showcomment = true, $showexcerpt = true, $thumb_height = 55, $thumb_width = 55 ){
	echo do_shortcode('[recent_post count='.$count.' showdate='.$showdate.'  showcomment='.$showcomment.' showexcerpt='.$showexcerpt.' thumb_height='.$thumb_height.' thumb_width='.$thumb_width.' ]'); 
}

// Check if it is theme URL
function tpo_istheme() {
	if ('admin.php' == basename($_SERVER['PHP_SELF'])) {
		return true;
	} else {
		return false;
	}
}

// Function to display post reviews 
function tpo_showreviews($p_id) {

	$review_details="";
	$review_rating="";

	$review_details = get_post_meta( $p_id , 'review_details',true);
	$review_rating = get_post_meta( $p_id , 'review_rating',true);

    $output .= ''; 
	$output .= '<div class="post-reviews" >';
	$ratings = $review_rating['rating'];

	$rating = '';

	if ( $ratings ) { 
		foreach ( $ratings as $val ) {
			$rating = $rating + $val;
		}
	}


    $avg = round($rating / count($ratings), 0);

	if ( $ratings ) { 
		for( $k=0; $k<$avg; $k++ ){
			$output .='<img src="' . get_template_directory_uri() . '/images/star.png" >';
		}
		for( $k=0; $k<5-$avg; $k++ ){
			$output .='<img src="' . get_template_directory_uri() . '/images/star_gray.png" >';
		}
	} else {
		for( $k=0; $k<5 ;$k++ ){
			$output .='<img src="' . get_template_directory_uri() . '/images/star_gray.png" >';
		}
	}

	$output .= '</div>';
    return $output;
}

// If user
function tpo_auth_redirect() {
    if ( ! is_user_logged_in() ) {
        nocache_headers();
        wp_redirect( get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode( $_SERVER['REQUEST_URI'] ) );
        exit();
    }
}

function tpo_author_info() { ?>
	<section id="about_the_author"> 
	<h3><?php __('About the author',THEME_SLUG); ?></h3>
	<div class="author_content">
		<div class="author-gravatar"><?php echo get_avatar( get_the_author_meta('email') , AUTHOR_AVATAR_SIZE ); ?></div>
		<div class="author_info">
			<div class="author_name"><?php the_author_link(); ?></div>
			<p class="author_desc"><?php the_author_meta('description'); ?></p>
		</div>
		<div class="clearboth"></div>
	</div>
	</section>
<?php 
	}

function displaymeta(){
	if (TPO_BLOG_SHOW_META) : 
		echo '<div class="entry_meta" style="'.$border.';font-size:'.TPO_BLOG_META_FONTSIZE.'px;">';
			echo '<span class="datetime">Posded&nbsp;</span><time datetime="'.get_the_time('F jS, Y').'" class="metavalue">'.get_the_time('F jS, Y').'</time><span class="metatext">&nbsp;by&nbsp;</span><span class="metavalue" >'.get_the_author().'</span>';
		if (count( get_the_category())) :  
			echo '<span class="categories">';
			echo '<span class="metatext">&nbsp;in&nbsp;</span><span class="metavalue">' . get_the_category_list( ', ' ) ;
			echo '</span></span>';
		endif;  

		echo '</div>';
	endif;
}

function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

function theme_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php __('Your comment is awaiting moderation.', THEME_SLUG) ?></em>
         <br />
      <?php endif; ?>
      <div class="singlecomment">
      	<div class="commentmetadata">
      		<div><?php printf(__('<span class="comment_author">%1$s</span><span class="comment_date">%2$s</span>', THEME_SLUG),get_comment_author_link(), get_comment_date()) ?></div>
	  		<?php comment_text() ?>
              <div class="reply">
                 <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
              </div>
          </div>
	  </div>
     </div>
<?php
        }
		
class responsive_walker_nav_menu extends Walker_Nav_Menu {
  

function start_lvl( &$output, $depth =0 , $args = Array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'sub-menu',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
}
  
 function start_el( &$output, $item, $depth = 0,  $args = Array(), $id = 0 ) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "-", ($depth+1) ) : '' ); // code indent
  
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  	if ( strpos($class_names, 'current-menu-item') !== false || strpos($class_names, 'current_page_item') !== false ) {
    	$output .= '<option id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '" value="' . esc_attr( $item->url        ) .'" selected=true > ' . $indent;
	} else {
    	$output .= '<option id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '" value="' . esc_attr( $item->url        ) .'" > ' . $indent;	
	}
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
  
    $item_output = sprintf( '%1$s<div%2$s>%3$s%4$s%5$s</div>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
  
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}



?>
