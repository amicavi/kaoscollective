<?php
/**
 * class templuto_main
 *
 * @package templuto
 * @version 1.1
 */
if ( !function_exists('wp_nonce_field') ) {
        function tpo_nonce_field($action = -1) { return; }
        $wppa_nonce = -1;
} else {
		function tpo_nonce_field($action = -1,$name = 'tpo-update-check') { return wp_nonce_field($action,$name); }
		define('TPO_NONCE' , 'tpo-update-check');
}
	   $googlefonts = array (
			"Allan" => "Allan:bold",
			"Anonymous Pro" => "Anonymous Pro",
			"Anonymous Pro (plus italic, bold, and bold italic)" => "Anonymous Pro:regular,italic,bold,bolditalic",
			"Allerta Stencil" => "Allerta Stencil",
			"Allerta" => "Allerta",
			"Arimo" => "Arimo",
			"Arimo (plus italic, bold, and bold italic)" => "Arimo:regular,italic,bold,bolditalic",
			"Arvo" => "Arvo",
			"Arvo (plus italic, bold, and bold italic)" => "Arvo:regular,italic,bold,bolditalic",
			"Bentham" => "Bentham",
			"Buda:light" => "Buda",
			"Cabin" => "Cabin",
			"Calligraffitti" => "Calligraffitti",
			"Cardo" => "Cardo",
			"Cantarell" => "Cantarell",
			"Cantarell (plus italic, bold, and bold italic)" => "Cantarell:regular,italic,bold,bolditalic",
			"Cardo" => "Cardo",
			"Cherry Cream Soda" => "Cherry Cream Soda",
			"Chewy" => "Chewy",
			"Coda" => "Coda",
			"Coming Soon" => "Coming Soon",
			"Copse" => "Copse",
			"Corben" => "Corben:bold",
			"Cousine" => "Cousine",
			"Cousine:regular,italic,bold,bolditalic" => "Cousine (plus italic, bold, and bold italic)",
			"Covered By Your Grace" => ">Covered By Your Grace",
			"Crafty Girls" => "Crafty Girls",
			"Crimson Text" => "Crimson Text",
			"Crushed" => "Crushed",
			"Cuprum" => "Cuprum",
			"Droid Sans" => "Droid Sans",
			"Droid Sans (plus bold)" => "Droid Sans:regular,bold",
			"Droid Sans Mono" => "Droid Sans Mono",
			"Droid Serif" => "Droid Serif",
			"Droid Serif (plus italic, bold, and bold italic)" => "Droid Serif:regular,italic,bold,bolditalic",
			"Fontdiner Swanky<" => "Fontdiner Swanky<",
			"Geo" => "Geo",
			"Gruppo" => "Gruppo",
			"Homemade Apple" => "Homemade Apple",
			"Inconsolata" => "Inconsolata",
			"IM Fell DW Pica"  => "IM Fell DW Pica",
			"IM Fell DW Pica:regular,italic"  => "IM Fell DW Pica (plus italic)",
			"IM Fell DW Pica SC"  => "IM Fell DW Pica SC",
			"IM Fell Double Pica"  => "IM Fell Double Pica",
			"IM Fell Double Pica:regular,italic"  => "IM Fell Double Pica (plus italic)",
			"IM Fell Double Pica SC"  => "IM Fell Double Pica SC",
			"IM Fell English"  => "IM Fell English",
			"IM Fell English:regular,italic"  => "IM Fell English (plus italic)",
			"IM Fell English SC"  => "IM Fell English SC",
			"IM Fell French Canon"  => "IM Fell French Canon",
			"IM Fell French Canon:regular,italic"  => "IM Fell French Canon (plus italic)",
			"IM Fell French Canon SC"  => "IM Fell French Canon SC",
			"IM Fell Great Primer"  => "IM Fell Great Primer",
			"IM Fell Great Primer:regular,italic"  => "IM Fell Great Primer (plus italic)",
			"IM Fell Great Primer SC"  => "IM Fell Great Primer SC",
			"Irish Growler"  => "Irish Growler",
			"Josefin Sans:100"  => "Josefin Sans 100",
			"Josefin Sans:100,100italic"  => "Josefin Sans 100 (plus italic)",
			"Josefin Sans:light"  => "Josefin Sans Light 300",
			"Josefin Sans:light,lightitalic"  => "Josefin Sans Light 300 (plus italic)",
			"Josefin Sans"  => "Josefin Sans Regular 400",
			"Josefin Sans:regular,regularitalic"  => "Josefin Sans Regular 400 (plus italic)",
			"Josefin Sans:600"  => "Josefin Sans 600",
			"Josefin Sans:600,600italic"  => "Josefin Sans 600 (plus italic)",
			"Josefin Sans:bold"  => "Josefin Sans Bold 700",
			"Josefin Sans:bold,bolditalic"  => "Josefin Sans Bold 700 (plus italic)",
			"Josefin Slab:100"  => "Josefin Slab 100",
			"Josefin Slab:100,100italic"  => "Josefin Slab 100 (plus italic)",
			"Josefin Slab:light"  => "Josefin Slab Light 300",
			"Josefin Slab:light,lightitalic"  => "Josefin Slab Light 300 (plus italic)",
			"Josefin Slab"  => "Josefin Slab Regular 400",
			"Josefin Slab:regular,regularitalic"  => "Josefin Slab Regular 400 (plus italic)",
			"Josefin Slab:600"  => "Josefin Slab 600",
			"Josefin Slab:600,600italic"  => "Josefin Slab 600 (plus italic)",
			"Josefin Slab:bold"  => "Josefin Slab Bold 700",
			"Josefin Slab:bold,bolditalic"  => "Josefin Slab Bold 700 (plus italic)",
			"Just Another Hand"  => "Just Another Hand",
			"Just Me Again Down Here"  => "Just Me Again Down Here",
			"Kenia"  => "Kenia",
			"Kranky"  => "Kranky",
			"Kristi"  => "Kristi",
			"Lato:100"  => "Lato 100",
			"Lato:100,100italic"  => "Lato 100 (plus italic)",
			"Lato:light"  => "Lato Light 300",
			"Lato:light,lightitalic"  => "Lato Light 300 (plus italic)",
			"Lato:regular"  => "Lato Regular 400",
			"Lato:regular,regularitalic"  => "Lato Regular 400 (plus italic)",
			"Lato:bold"  => "Lato Bold 700",
			"Lato:bold,bolditalic"  => "Lato Bold 700 (plus italic)",
			"Lato:900"  => "Lato 900",
			"Lato:900,900italic"  => "Lato 900 (plus italic)",
			"Lekton"  => " Lekton ",
			"Lekton:regular,italic,bold"  => "Lekton (plus italic and bold)",
			"Lobster"  => "Lobster",
			"Luckiest Guy"  => "Luckiest Guy",
			"Maiden Orange"  => "Maiden Orange",
			"Merriweather"  => "Merriweather",
			"Molengo"  => "Molengo",
			"Mountains of Christmas"  => "Mountains of Christmas",
			"Nobile"  => "Nobile",
			"Nobile:regular,italic,bold,bolditalic"  => "Nobile (plus italic, bold, and bold italic)",
			"Neucha"  => "Neucha",
			"Neuton"  => "Neuton",
			"OFL Sorts Mill Goudy TT"  => "OFL Sorts Mill Goudy TT",
			"OFL Sorts Mill Goudy TT:regular,italic"  => "OFL Sorts Mill Goudy TT (plus italic)",
			"Old Standard TT"  => "Old Standard TT",
			"Old Standard TT:regular,italic,bold"  => "Old Standard TT (plus italic and bold)",
			"Orbitron"  => "Orbitron Regular (400)",
			"Orbitron:500"  => "Orbitron 500",
			"Orbitron:bold"  => "Orbitron Regular (700)",
			"Orbitron:900"  => "Orbitron 900",
			"Reenie Beanie"  => "Reenie Beanie",
			"Permanent Marker"  => "Permanent Marker",
			"Philosopher"  => "Philosopher",
			"PT Sans"  => "PT Sans",
			"PT Sans:regular,italic,bold,bolditalic"  => "PT Sans (plus itlic, bold, and bold italic)",
			"PT Sans Caption"  => "PT Sans Caption",
			"PT Sans Caption:regular,bold"  => "PT Sans Caption (plus bold)",
			"PT Sans Narrow"  => "PT Sans Narrow",
			"PT Sans Narrow:regular,bold"  => "PT Sans Narrow (plus bold)",
			"Puritan"  => "Puritan",
			"Puritan:regular,italic,bold,bolditalic"  => "Puritan (plus italic, bold, and bold italic)",
			"Raleway:100"  => "Raleway",
			"Rock Salt"  => "Rock Salt",
			"Schoolbell"  => "Schoolbell",
			"Slackey"  => "Slackey",
			"Sniglet:800"  => "Sniglet",
			"Sunshiney"  => "Sunshiney",
			"Syncopate"  => "Syncopate",
			"Tangerine"  => "Tangerine",
			"Tinos"  => "Tinos",
			"Tinos:regular,italic,bold,bolditalic"  => "Tinos (plus italic, bold, and bold italic)",
			"Ubuntu"  => "Ubuntu",
			"Ubuntu:regular,italic,bold,bolditalic"  => "Ubuntu (plus italic, bold, and bold italic)",
			"Unkempt"  => "Unkempt",
			"UnifrakturCook:bold"  => "UnifrakturCook",
			"UnifrakturMaguntia"  => "UnifrakturMaguntia",
			"Vibur"  => "Vibur",
			"Vollkorn"  => "Vollkorn",
			"Vollkorn:regular,italic,bold,bolditalic"  => "Vollkorn (plus italic, bold, and bold italic)",
			"Walter Turncoat"  => "Walter Turncoat",
			"Yanone Kaffeesatz"  => "Yanone Kaffeesatz",
			"Yanone Kaffeesatz:300"  => "Yanone Kaffeesatz:300",
			"Yanone Kaffeesatz:400"  => "Yanone Kaffeesatz:400",
			"Yanone Kaffeesatz:700"  => "Yanone Kaffeesatz:700"
		);

class Templuto {
	function hook($tag, $arg = '')
    {
        do_action('themater_' . $tag, $arg);
    }
    
    function add_hook($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
        add_action( 'themater_' . $tag, $function_to_add, $priority, $accepted_args );
    }
}

$hook = new Templuto();


class templuto_main {
	 public $cycleeffects = array("blindX", "blindY", "blindZ","cover", "curtainX", "curtainY","fadeZoom", "growX", "growY", "none", "scrollUp", "scrollDown","scrollLeft", "scrollRight", "scrollHorz","scrollVert", "shuffle", "slideX","slideY", "toss", "turnUp","turnDown", "turnLeft", "turnRight","uncover", "wipe", "zoom");
	
	function tpo_get_navs(){
		$nav_menus = wp_get_nav_menus();
		$tpo_navmenu['None'] = 'None';
		foreach ($nav_menus as $navv) {
			$tpo_navmenu[$navv -> name] = $navv -> name;
		}
		return $tpo_navmenu;
	}
	function tpo_get_categories(){
		$categories = get_categories('hide_empty=0&orderby=name');
		$wp_cats = array();
		foreach ($categories as $category_list ) {
			   $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
		}
		array_unshift($wp_cats, "Choose a category");
		echo $wp_cats;
	}
	function tpo_list_pages( $args = '') {

	$defaults = array(
		'depth' => 0, 'show_date' => '',
		'date_format' => get_option('date_format'),
		'child_of' => 0, 'exclude' => '',
		'title_li' => __('Pages' , THEME_SLUG ), 'echo' => 1,
		'authors' => '', 'sort_column' => 'menu_order, post_title',
		'link_before' => '', 'link_after' => '', 'walker' => '','type' => '',
	);

	$r = wp_parse_args( $args, $defaults );
	extract( $r, EXTR_SKIP );

	$output = '';
	$current_page = 0;
	// sanitize, mostly to keep spaces out
	$r['exclude'] = preg_replace('/[^0-9,]/', '', $r['exclude']);

	// Allow plugins to filter an array of excluded pages (but don't put a nullstring into the array)
	$exclude_array = ( $r['exclude'] ) ? explode(',', $r['exclude']) : array();
	$r['exclude'] = implode( ',', apply_filters('wp_list_pages_excludes', $exclude_array) );

	// Query pages.
	$r['hierarchical'] = 0;
	$pages = get_pages($r);
	if ( !empty($pages) ) {
		if ( $r['title_li'] )
			$output .= '<li class="pagenav">' . $r['title_li'] . '<ul>';
			global $wp_query;
			if ( is_page() || is_attachment() || $wp_query->is_posts_page )
				$current_page = $wp_query->get_queried_object_id();
				$output .= walk_page_tree($pages, $r['depth'], $current_page, $r);
		if ( $r['title_li'] )
			$output .= '</ul></li>';
	}

	$output = apply_filters('wp_list_pages', $output, $r);

	if ( $r['echo'] )
		echo $output;
	else
		return $output;
	}
	
	
	function sitenav() {
		$pages = get_pages();
		$optionstring = '';
		foreach ($pages as $pagg) {
			$option = '<li>';
			$option .= '<a href="' . get_page_link($pagg->ID) . '">';
			$option .= $pagg -> post_title;
			$option .= '</a></li><li>:</li>';
			$optionstring = $optionstring . $option;
		}
		return $optionstring;
	}

	function tpo_admin_select_categories($id,$selcatgories='') {
		$catgories = get_categories();
		if (is_array($selcatgories)) {
			$selcatgories = '';
		}
		if ($selcatgories != '') {
			$arr_catgories =  explode(",",$selcatgories);
		}
		$arr_catgories =  explode(",",$selcatgories);
		$optionstring = '<select id="' . $id . '" class="multiselect" multiple="multiple" name="' . $id . '[]">';
		foreach ($catgories as $pagg) {
			if (is_array($arr_catgories)) {
				if (in_array($pagg->cat_ID, $arr_catgories)) {
					$optionstring .= '<option value="'. $pagg->cat_ID .'" selected="selected">'. $pagg -> cat_name .'</option>';
				} else {
					$optionstring .=  '<option value="'. $pagg->cat_ID .'">'. $pagg -> cat_name .'</option>';	
				}
			}
		}
			$optionstring .= '</select>';
			return $optionstring;
	}
	
	function tpo_admin_themeoptiontabs($optiontabs) {
		global $themename, $shortname;
		$i=0;
		$listcount = 1;
		$panelcount = 0;
		if ( isset( $_REQUEST['saved'] ) && $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
		if ( isset( $_REQUEST['reset']) &&  $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
		$output = TPO_MESSAGE;
		$output .= '<div class="tpo-adminpanel-wrap">
					<form id="tpoform" method="post">
					<div class="tpo-adminpanel-header" >
						<div class="alignleft" ><h2>Zebra Themes Framework v3.2</h2></div>
						<div class="alignright tpoadminsubmit"><img style="display: none;" src="'. TEMPLUTO_URI.'/lib/images/ajax-loader.gif" class="ajax-loader-img" alt="Working..." ><input class="tpo_admin_button button-primary"  name="save' . $i . '" type="submit" value="Save Changes" /></div>
					</div>
					<div class="tpo-adminpanel-title" >Theme Framework  :  <span>Zebra Themes - Version v3.2</span></div>
					
					<div class="tpo-adminpanel-body" >
					<div class="tpo-adminpanel">

					<ul>';
					
				foreach($optiontabs as $tab => $optiontab){
						if ( $listcount == 1 ) {
								$output .= '<li class="' . strtolower($optiontab['name']) . '" ><a href="#" rel="'.$listcount.'" class="current">' .  $optiontab['name']  . '</a></li>';
						} else {
								$output .= '<li class="' . strtolower($optiontab['name']) . '" ><a href="#" rel="'.$listcount.'" >' . $optiontab['name'] . '</a></li>';
						}
						$listcount++;
				}
		$output .= '</ul>
					
					<br>
					
				</div>'; 

		$output .= '';
		$panelcount = 1;
		$output .= '<div class="tpo-panels" >';
		foreach($optiontabs as $tab => $optiontab){
		 	require_once(TEMPLUTO_OPTIONS . '/'.$optiontab['page'].'.php');
			$output .= $this->tpo_admin_options_creation( $options, $panelcount );
			$panelcount++;
		}
		$output .= '</div>';	
		
		$output .= '<div id="tpo-popup-save" class="tpoadminajaxsave"><div class="tposaveimg">Saved Successfully</div></div>';
		$output .= '<div id="tpo-popup-reset" class="tpoadminajaxsave"><div class="tposaveimg">Options Reset</div></div>';
		
					
        $output .= '<div style="width:290px;">';
		$output .= '<input type="hidden" name="action" value="save" />';
		$output .= '</form>';
		$output .= '<form method="post">';
		$output .= '<p class="tpoadminsubmit">';
		$output .= '</p>';
		$output .= '</form>';
 		$output .= '</div></div>					<div class="tpo-adminpanel-footer" >Copyright &copy Zebra Themes</div></div>';
		return $output;				
	}
	function tpo_admin_page_creation($options) {
			foreach ($options as $value) {
				switch ( $value['type'] ) {
				case "include_file":
					 $this->process_file($value['filename']);
					 return;
					 break;
				}
			}
	}
	function tpo_admin_options_creation($options, $panelcount) {
		global $themename, $shortname;
		$i=0;
		$output ='';
		$output .= '<div id="'.$panelcount.'" class="tpo-panel">';
			foreach ($options as $value) {
				$field_vlaue = isset($value['type']) ? $value['type'] : '';
				switch ( $field_vlaue ) {
				case "open":
					break;
				case "close":
					break;
 				case "title":
					break;
 				case 'text':
        			$output .= '<div class="tpo_admin_input">' ;
					$output .= '<label for="' . $value['id'] . '">' .$value['name'] .'</label>';
					$output .= '<input name="' . $value['id'] . '" id="' . $value['id'] . '" ' . (($value['class'] != "") ? "class=".$value['class']."" : "" ) . ' type="' . $value['type'] . '" value="' .
					 ( (get_option( $value['id'] ) != '') ?  stripslashes(get_option( $value['id'])) :  $value['std'] ) . '" />';
					 $output .= '&nbsp;' .$value['suffix'] ;
					$output .= '<small>' . $value['desc'] . '</small><div class="clearfix"></div>';
					$output .= '</div>';
					break;
 				case 'textslider1':
        			$output .= '<div class="tpo_admin_input">' ;
					$output .= '<label for="' . $value['id'] . '">' .$value['name'] .'</label>';
					$output .= '<div class="slider_con" ><div id="slider_' . $value['id'] . '" class="sliderscroll" ></div><input name="' . $value['id'] . '" id="' . $value['id'] . '" class="inputscroll" type="text" value="' .
					 ( (get_option( $value['id'] ) != '') ?  stripslashes(get_option( $value['id'])) :  $value['std'] ) . '" />';
					 $output .= '&nbsp;' .$value['suffix'] .'</div>' ;
					$output .= '<small>' . $value['desc'] . '</small><div class="clearfix"></div>';
					$output .= '</div>';
						break;
				case 'textslider':

					
					if	( !isset($value['minimum'] )){
						$min_val  = '0';
					} else {
						$min_val = $value['minimum'];
					}

					if	( !isset($value['maximum'] )){
						$max_val  = '0';
					} else {
						$max_val = $value['maximum'];
					}

					$data = 'data-id="'.$value['id'].'" data-val="'.stripslashes(tpo_options( $value['id'], $value['std'])).'" data-min="'.$min_val.'" data-max="'.$max_val.'" data-step="1"';
					
        			$output .= '<div class="tpo_admin_input">' ;
					$output .= '<label for="' . $value['id'] . '">' .$value['name'] .'</label>';
					$output .= '<input type="text" name="'.$value['id'].'" id="'.$value['id'].'" class="slider_input" value="'.stripslashes(tpo_options( $value['id'], $value['std'])).'" class="mini" readonly="readonly" />';
					$output .= '<div id="'.$value['id'].'-slider" class="tpo_sliderui" style="margin-left: 7px;" '. $data .'></div>';
					$output .= '<small>' . $value['desc'] . '</small><div class="clearfix"></div>';
					$output .= '</div>';	
				break;
				

				case 'textarea':
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<textarea name="' . $value['id'] . '" ' . (($value['class'] != "") ? "class=".$value['class'] : "" ) . '" type="' . $value['type'] . '" cols="" rows="">';
					$output .=  ( (get_option( $value['id'] ) != "") ? stripslashes(get_option( $value['id']) ) :  $value['std'] );  
					$output .= '</textarea>';
				 	$output .= '<small>' . $value['desc'] .'</small><div class="clearfix"></div>';
				 	$output .= '</div>';
					break;
				case 'select':
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<div class="select_wrapper" >';
					$output .= '<select name="' . $value['id'] . '" id="' . $value['id'] . '">';
					foreach ($value['options'] as $k => $option ) { 
						$output .= '<option  ' . ((get_option( $value['id'] ) == $option) ? 'selected="selected"' : '') . '>'. $option .'</option>';
					 } 
					$output .= '</select>';
					$output .= '</div>';
				 	$output .= '<small>' . $value['desc'] .'</small><div class="clearfix"></div>';
				 	$output .= '</div>';
					break;
				case 'wselect':
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<div class="select_wrapper" >';
					$output .= '<select name="' . $value['id'] . '" id="' . $value['id'] . '">';
					foreach ($value['options'] as $k => $option ) { 
					
						$output .= '<option  value="'.$k.'" ' . ((get_option( $value['id'] ) == $k) ? 'selected="selected"' : '') . '>'. $option .'</option>';
					 } 
					$output .= '</select>';
					$output .= '</div>';
				 	$output .= '<small>' . $value['desc'] .'</small><div class="clearfix"></div>';
				 	$output .= '</div>';
					break;
				case 'googlefonts':
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<div class="select_wrapper" >';
					$output .= '<select name="' . $value['id'] . '" id="' . $value['id'] . '">';
					$output .=  listgooglefonts(get_option($value['id']));
					$output .= '</select>';
					$output .= '</div>';
				 	$output .= '<small>' . $value['desc'] .'</small><div class="clearfix"></div>';
				 	$output .= '</div>';
					break;
 				case "checkbox":
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
					$output .= '<input type="checkbox" name="' . $value['id'] . '" id="' . $value['id'] . '" value="true"' . $checked .'/>';
					 $output .= '&nbsp;' .$value['suffix'] ;
				 	$output .= '<small>' . $value['desc'] .'</small><div class="clearfix"></div>';
				 	$output .= '</div>';
					break; 

				case "multicategories":
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<div style="float:left;">';
					$output .= $this->tpo_admin_select_categories($value['id'],get_option($value['id']));
					$output .= '</div>';
				 	$output .= '<small>' . $value['desc'] .'</small><div class="clearfix"></div>';
				 	$output .= '</div>';
					break; 
				case "section":
				//	$panelcount++;
				//	$i++;
				//	$output .= '<div  class="tpo-section">';
				//	$output .= '';
				//	$output .= '<div class="tpo_adminpanelcont">';
					 break;
				case "include_file":
					 $this->process_file($value['filename']);
					 return;
					 break;
				case 'editor':
					$output .= '<div class="tpo_admin_input">';
					$output .= '<label style="dispaly:block;width:100%" for="' . $value['id'] . '">' . $value['name'] . '</label><br />';
					$output .= '<small style="dispaly:block;width:100%" >' . $value['desc'] .'</small><br />';
					$output .= wpeditor($value);
				 	$output .= '<div class="clearfix"></div>';
				 	$output .= '</div>';
					break;
 				case 'image':
					$output .= '<div class="tpo_admin_input rm_image">';
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<div>';
					$output .= '<input name="' . $value['id'] . '" id="' . $value['id'] . '_upload" type="text" value="' . ( ( get_option( $value['id'] ) != "") ? stripslashes(get_option( $value['id'])) : $value['std'] ) .'" />';
					$output .= '</div>';
					$output .= '<div><span  id="' . $value['id'] . '" class="tpo_image_upload" >Upload Image</span>';
					if ( get_option( $value['id'] ) != "") { 
						$output .= '<span  id="remove_' . $value['id'] . '" class="tpo_image_remove" >Remove</span>';
					 }
					$output .= '</div>';
					if ( get_option( $value['id'] ) != "") { 
					$output .= '<img class="hide" id="image_' . $value['id'] . '"  src="' . stripslashes(get_option( $value['id'])) . '" alt="" style="">';
					} 
					$output .= '<small>' . $value['desc'] . '</small><div class="clearfix"></div>';
					$output .= '</div>';
					 break;
				case 'colorpicker':
        			$output .= '<div class="tpo_admin_input">' ;
					$output .= '<label style="padding-top:7px;" for="' . $value['id'] . '">' .$value['name'] .'</label>';
					$output .= '<input name="' . $value['id'] . '" id="' . $value['id'] . '" class="tpo-colorpicker" type="text" value="' .
					 ( (get_option( $value['id'] ) != '') ?  stripslashes(get_option( $value['id'])) :  $value['std'] ) . '" />';

					$output .= '<small>' . $value['desc'] . '</small><div class="clearfix"></div>';
					$output .= '</div>';
					break;
				case 'footerlayout':
	        		$output .= '<div class="tpo_admin_input">' ;
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<input name="' . $value['id'] . '" id="' . $value['id'] . '" type="hidden" value="' .
					 ( (get_option( $value['id'] ) != '') ?  stripslashes(get_option( $value['id'])) :  $value['std'] ) . '" />';
					$output .= $this->$value['func']($value['id']);
					$output .= '</div>';
 					break;
				case 'patternlayout':
	        		$output .= '<div class="tpo_admin_input">' ;
					$output .= '<label for="' . $value['id'] . '">' . $value['name'] . '</label>';
					$output .= '<input name="' . $value['id'] . '" id="' . $value['id'] . '" type="hidden" value="' .
					 ( (get_option( $value['id'] ) != '') ?  stripslashes(get_option( $value['id'])) :  $value['std'] ) . '" />';
					$output .= $this->$value['func']($value['id']);
					$output .= '</div>';
 					break;		
				//drag & drop block manager
				case 'sorter':

				    // Make sure to get list of all the default blocks first
				    $all_blocks = $value['std'];

				    $temp = array(); // holds default blocks
				    $temp2 = array(); // holds saved blocks

					foreach($all_blocks as $blocks) {
					    $temp = array_merge($temp, $blocks);
					}

				    $sortlists = isset($data[$value['id']]) && !empty($data[$value['id']]) ? $data[$value['id']] : $value['std'];

				    foreach( $sortlists as $sortlist ) {
					$temp2 = array_merge($temp2, $sortlist);
				    }

				    // now let's compare if we have anything missing
				    foreach($temp as $k => $v) {
					if(!array_key_exists($k, $temp2)) {
					    $sortlists['disabled'][$k] = $v;
					}
				    }

				    // now check if saved blocks has blocks not registered under default blocks
				    foreach( $sortlists as $key => $sortlist ) {
					foreach($sortlist as $k => $v) {
					    if(!array_key_exists($k, $temp)) {
						unset($sortlist[$k]);
					    }
					}
					$sortlists[$key] = $sortlist;
				    }

				    // assuming all sync'ed, now get the correct naming for each block
				    foreach( $sortlists as $key => $sortlist ) {
					foreach($sortlist as $k => $v) {
					    $sortlist[$k] = $temp[$k];
					}
					$sortlists[$key] = $sortlist;
				    }

				    $output .= '<div id="'.$value['id'].'" class="sorter">';


				    if ($sortlists) {

						foreach ($sortlists as $group=>$sortlist) {

							$output .= '<ul id="'.$value['id'].'_'.$group.'" class="sortlist_'.$value['id'].'">';
							$output .= '<h3>'.$group.'</h3>';

							foreach ($sortlist as $key => $list) {

							$output .= '<input class="sorter-placebo" type="hidden" name="'.$value['id'].'['.$group.'][placebo]" value="placebo">';

							if ($key != "placebo") {

								$output .= '<li id="'.$key.'" class="sortee">';
								$output .= '<input class="position" type="hidden" name="'.$value['id'].'['.$group.']['.$key.']" value="'.$list.'">';
								$output .= $list;
								$output .= '</li>';

							}

							}

							$output .= '</ul>';
						}
				    }

				    $output .= '</div>';
				break;
				//multiple checkbox option

				case 'custom':
	        		$output .= '<div class="tpo_admin_custom">' ;
					$output .= $this->$value['func']();
					$output .= '</div>';
 					break;
			}
			}
			$output .= '</div>';
			return $output;
	}
	function show_footer_layout($valueid){
		$selectedvalue = get_option($valueid) ;
		$output .= '<div id="footerlayoutcontentHolder"><div class="demo">';
			$output .= '<ol id="adselectable" class="ui-selectable">';
				$output .= '<li  data-val="1" class="ui-state-default ui-selectee '.(($selectedvalue == 1 ) ? 'ui-selected' : '').'">
				<img src="'.TEMPLUTO_IMAGES.'/footer-option-1-column.jpg" width="85" height="45" /><span>one column</span></li>';
				$output .= '<li data-val="2" class="ui-state-default ui-selectee '.(($selectedvalue == 2 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-2-column.jpg" width="85" height="45" /><span>two column</span></li>';
				$output .= '<li data-val="3" class="ui-state-default ui-selectee '.(($selectedvalue == 3 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-3-column.jpg" width="85" height="45" /><span>three column</span></li>';
				$output .= '<li data-val="4" class="ui-state-default ui-selectee '.(($selectedvalue == 4 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-4-column.jpg" width="85" height="45" /><span>four column</span></li>';
				$output .= '<li data-val="5" class="ui-state-default ui-selectee '.(($selectedvalue == 5 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-5-column.jpg" width="85" height="45" /><span>five column</span></li>';
				$output .= '<li  data-val="6"  class="ui-state-default ui-selectee'.(($selectedvalue == 6 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-6-column.jpg" width="85" height="45" /><span>six column</span></li>';
				$output .= '<li data-val="7" class="ui-state-default ui-selectee '.(($selectedvalue == 7 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-left-big-3.jpg" width="85" height="45" /><span>three column(left)</span></li>';
				$output .= '<li data-val="8" class="ui-state-default ui-selectee '.(($selectedvalue == 8 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-left-big-4.jpg" width="85" height="45" /><span>four column(left)</span></li>';
				$output .= '<li data-val="9" class="ui-state-default ui-selectee '.(($selectedvalue == 9 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-left-so-so-4.jpg" width="85" height="45" /><span>four column(left1)</span></li>';
				$output .= '<li data-val="10" class="ui-state-default ui-selectee '.(($selectedvalue == 10 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-left-so-so-5.jpg" width="85" height="45" /><span>five column(left)</span></li>';
				$output .= '<li data-val="11" class="ui-state-default ui-selectee  '.(($selectedvalue == 11) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-right-big-3.jpg" width="85" height="45" /><span>three column(right)</span></li>';
				$output .= '<li data-val="12"  class="ui-state-default ui-selectee  '.(($selectedvalue == 12 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-right-big-4.jpg" width="85" height="45" /><span>four column(right)</span></li>';
				$output .= '<li data-val="123" class="ui-state-default ui-selectee"><img src="'.TEMPLUTO_IMAGES.'/footer-option-right-so-so-4.jpg" width="85" height="45" /><span>four column(right1)</span></li>';
				$output .= '<li data-val="14"  class="ui-state-default ui-selectee '.(($selectedvalue == 13 ) ? 'ui-selected' : '').'"><img src="'.TEMPLUTO_IMAGES.'/footer-option-right-so-so-5.jpg" width="85" height="45" /><span>five column(right)</span></li>';
			$output .= '</ol>';
			$output .= '</div></div>';
		return $output;
	}

	function show_pattern_layout($valueid){
		$selectedvalue = get_option($valueid) ;
		$output .= '<div id="footerlayoutcontentHolder"><div class="demo">';
			$output .= '<ol id="adselectable" class="ui-selectable">';
			for($i=1; $i <25 ; $i++){
				$output .= '<li data-val="'.$i.'" class="ui-state-default ui-selectee '.(($selectedvalue == $i ) ? 'ui-selected' : '').'">
				<img src="'.TEMPLUTO_IMAGES.'/pattern'.$i.'.jpg" width="85" height="45" /></li>';
			}
			$output .= '</ol>';
			$output .= '</div></div>';
		return $output;
	}


	function process_file($filename) {
		global $wpdb,$shortname;
		$temp_path = get_template_directory_uri();
		require_once( TEMPLUTO_INC . '/' . $filename ); 
		
	}


	function show_sidebar_options() {
		$output = "";
		$sidebar_id = isset($_GET['sidebar_id']) ? $_GET['sidebar_id'] : '';
		$output .= $this->tpo_form_sidebar($sidebar_id);
		$output .= '<div class="tpolist">';
		$output .= $this->show_sidebar_list();
		$output .= '</div>';

		return $output ;
	}

	function tpo_form_sidebar($sidebar_id){
		global $wpdb, $shortname;
		global $sidebar;
		$output = "";
		$output .= '<p>
			<label for="tpoimageurl">Sidebar Name:</label>
			<input type="text" name="'.$shortname.'_sidebarname" id="'.$shortname.'_sidebarname" size="100" value="" /><small>' . __("Enter the name of the new sidebar.","templuto_admin") . '</small>
		<input type="hidden" name="'.$shortname.'_savesidebar" id="'.$shortname.'_savesidebar"  value="" /><p>';
		if ($sidebar_id != '' && $_REQUEST['slide'] == 'edit') {
				$output .= '<input type="button" class="add-sidebar button" name="'.$shortname.'_sidebar_submit" id="'.$shortname.'_sidebar_submit" value="Edit Slide!" />';
			} else {
				$output .= '<input type="button" class="add-sidebar button" name="'.$shortname.'_sidebar_submit" id="'.$shortname.'_sidebar_submit" value="Add Sidebar!" />';
			}
			$output .= '</p>';
		return $output;
	}
	function show_sidebar_list(){
		global $wpdb,$shortname;
		$output = "";
		$sidebar = "";
		$alt = "";
		$temp_path=get_template_directory_uri();
		$sidebars = get_option($shortname.'_sidebarname');

			$output .= '
			<table class="tblgrid"  >
			<thead><tr><th scope="row" style="text-align:left;width=350px">' . __("Below are the created sidebars","templuto_admin") . '</th><th scope="row">&nbsp;</th></tr></thead><tbody>';
		$tp_serial_id = 1;
			if (!empty($sidebars)) {
				foreach ($sidebars as $sidebar) {
				  $output .=  '<tr>';
				  $output .=  '	<td  style="padding:5px;" >'.$sidebar.'</td><td><a href="#" class="delete"><img style="padding:0;margin:0;" src="' . $temp_path . '/lib/images/delete.gif" width="16" height="16" /></a></td>';			
								if ($alt == '') { $alt = ' class="alternate" '; } else { $alt = '';}
								$tp_serial_id++;
				}
			} else { 
				//$output .= "No sidebar yet."; 
			}
			$sidbar_str = '';
			if ( $sidebars ) {
				$sidbar_str = implode(",", $sidebars) ;
			}
		$output .= '</tbody></table><input type="hidden" name="sidebar" value="'. $sidbar_str . '" />';
		return $output;
	}
	function show_slide_options() {
		$output .= '<div class="tpolist">';
		$output .= $this->show_slide_list();
		$output .= '</div>';
		$output .= $this->tpo_form_sliders($_GET['slider_id']);
		return $output ;
	}
	function tpo_form_sidebars_options(){
		global $shortname;
		$slider_options = 	array($shortname."_sidebarname" => "");
		return $slider_options;
	}

	function show_slide_list(){
			global $wpdb,$shortname;
			$temp_path=get_template_directory_uri();
			//echo $shortname.'_slide_options';
			$slides = get_option($shortname.'_slide_options');
			//print_r($slides);
			//$slides = $wpdb->get_results("SELECT * FROM wp_templuto_slides", 'ARRAY_A');
			
			if (!empty($slides)) {
			
				$output .= '
				<table class="widefat">
				<thead><tr><th scope="row" >&nbsp;</th><th scope="row"  style="text-align:center;width=350px">Image URL</th><th scope="row"  style="text-align:center;" width="300" >Link</th><th scope="row"  style="text-align:left;">Effect</th><th scope="row"  style="text-align:left;"></th></tr></thead><tbody><tr><td  colspan="10"><ul id="slide-show">';
   			$tp_serial_id = 1;
			foreach ($slides as $slide) {
				//var_dump($slide);
				  $output .=  '<li id="listItem_'.$tp_serial_id.'"><table width="100%" border="2" ><tr>
										<td width="3%" ><img src="' . $temp_path . '/lib/images/arrow.png" alt="move" width="16" height="16" class="handle" /></td>
										<td  width="3%" >' . $slide[$shortname.'_slide_slider_id'] . '</td>
										<td width="30%" ><input type="text" name="tpo_slide_imagepath" value="' . $slide[$shortname.'_slide_imageurl'] . '" class="tpo_slide_imagepath" ></td>
											<td width="30%" ><input type="text" name="tpo_slide_imagepath" value="' . $slide[$shortname.'_slide_imagelink'] . '" class="tpo_slide_imagelink" ></td>
										<td  width="20%">
											<select name="'.$shortname.'_slide_effect" id="'.$shortname.'_slide_effect" >
												' . getoptionhtml($this->cycleeffects,$slide[$shortname.'_slide_effect'])  . '
											</select>	
										</td>
										<td   width="8%"  ><a href="admin.php&#63;page=templuto_slideshowpage&amp;slide=edit&amp;slider_id=' . $slide[$shortname.'_slide_slider_id'] . '" class="edit"><img src="' . $temp_path . '/lib/images/edit.gif"  width="16" height="16" /></a></td>
										<td   width="5%"  ><a href="admin.php?page=templuto_slideshowpage&amp;slide=del&amp;slider_id=' . $slide[$shortname.'_slide_slider_id'] . '" class="delete"><img src="' . $temp_path . '/lib/images/delete.gif" width="16" height="16" /></a></td>
										</tr></table></li>
				';			
										if ($alt == '') { $alt = ' class="alternate" '; } else { $alt = '';}
										$tp_serial_id++;
									}
									
								$output .= '</ul></td></tr></tbody></table>';
							
							} else { 
								$output .= "No Slides yet."; 
							}
							return $output;
				}
				function tpo_form_sliders_options(){
					global $shortname;
					$slider_options = 	array($shortname."_slide_imageurl" => "",
						$shortname."_slide_imagelink" => "",
						$shortname."_slide_effect" => "",
						$shortname."_slide_title" => "",
					 	$shortname."_slide_description" => "",
						$shortname."_slide_order" => "",
						$shortname."_slide_slider_id" => "",
						$shortname."_savetype" => "");
					return $slider_options;
				}
				function tpo_form_sliders($slider_id){
	
					global $shortname;
						$output .= '<br /><h2>Add Slide</h2>';
						
					//	$output .= '<form id="tpoform" action="' . get_option('siteurl') . '/wp-admin/admin.php?page=templuto_slideshowpage&amp;tab=edit" method="post">';
				//$output .= '<form>';
						//wppa_nonce_field('$wppa_nonce', WPPA_NONCE);

							global $wpdb;
				//			$slides = $wpdb->get_results("SELECT * FROM wp_templuto_slides where tpo_slide_slider_id=$slider_id", ARRAY_A);
							if ($_REQUEST['slide']== 'edit') {
								$slides = get_option($shortname.'_slide_options');
							}
							if (!empty($slides)) {
								$slide =  $slides[$slider_id-1];
							}
							
							$imgurl = $slide['imageurl'];
						$output .= '<p>
								<label for="tpoimageurl">Image URL: </label>
								<input type="text" name="'.$shortname.'_slide_imageurl" id="'.$shortname.'_slide_imageurl" size="100" value="'.$slide[$shortname.'_slide_imageurl'].'" />
							</p>
						
							<p>
								<label for="tpoimagelink">Image Link: </label>
								<input type="text" name="'.$shortname.'_slide_imagelink" id="'.$shortname.'_slide_imagelink" size="100" value="'.$slide[$shortname.'_slide_imagelink'].'" />
							</p>
							<p>
								<label for="tpoeffect">Effect: </label>
								<select name="'.$shortname.'_slide_effect" id="'.$shortname.'_slide_effect" >
									' . getoptionhtml($this->cycleeffects,$slide[$shortname.'_slide_effect'])  . '
								</select>
							</p>
							<p>
								<label for="tpotitle">Title: </label>
								<input type="text" name="'.$shortname.'_slide_title" id="'.$shortname.'_slide_title" size="100" value="'.$slide[$shortname.'_slide_title'].'"  />
							</p>
							<p>
								<label for="tpodescription">Description: </label>
								<textarea rows="5" cols="60" name="'.$shortname.'_slide_description" id="'.$shortname.'_slide_description">'.$slide[$shortname.'_slide_description'].'</textarea>
							</p>
							<p>
								<label for="tporder">Order: </label>
								<input type="text" name="'.$shortname.'_slide_order" id="'.$shortname.'_slide_order" size="2" value="'.$slide[$shortname.'_slide_order'].'"   />
							</p>
								<input type="hidden" name="'.$shortname.'_slide_slider_id" id="'.$shortname.'_slide_slider_id"  value="' . $slide[$shortname.'_slide_slider_id'] . '" />
								<input type="hidden" name="'.$shortname.'_savetype" id="'.$shortname.'_savetype"  value="' . (($slider_id != '') ? 'modify' : 'add') . '" /><p>
								<input type="hidden" name="'.$shortname.'_saveslide" id="'.$shortname.'_saveslide"  value="" /><p>';
							if ($slider_id != '' && $_REQUEST['slide']== 'edit') {
								$output .= '<input type="submit" name="'.$shortname.'_slide_submit" id="'.$shortname.'_slide_submit" value="Edit Slide!" />';
							} else {
								$output .= '<input type="submit" name="'.$shortname.'_slide_submit" id="'.$shortname.'_slide_submit" value="Add Slide!" />';
							}
							$output .= '</p>';
							
						//</form>';
						return $output;
				}

	function tpo_admin_slide_delete(){
			global $themename, $shortname;
			if (($_REQUEST['page'] == 'templuto_slideshowpage') && $_REQUEST['slide'] == 'del')  {
				$slideid = $_REQUEST['slider_id'] ;
				if ($slideid!='' && $slideid > 0 ) {
					$slideid--;
					$slides = get_option($shortname."_slide_options");
					foreach ($slides as $i => $slide) {
						if ($i==$slideid) {
							unset($slides[$i]);
						}
					}
					$slides = array_values($slides);
					foreach ($slides as $i => $slide) {
						$slides[$i][$shortname."_slide_slider_id"] = $i +1;
					}
						update_option( $shortname."_slide_options",$slides  );
						wp_redirect(get_option('siteurl') . '/wp-admin/admin.php?page=templuto_slideshowpage');
				}
			}	
	}
	function tpo_admin_options_update($options) {
		global $themename, $shortname;
				if ( 'save' == $_REQUEST['action'] ) {
					foreach ($options as $value) {
						if( isset( $_REQUEST[ $value['id'] ] ) ) {
							update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
						 
						} else { 
							delete_option( $value['id'] ); 
						} 
					}
						header("Location: admin.php?page=".$_REQUEST['page']."&saved=true");
						die;
				} 
				else if( 'reset' == $_REQUEST['action'] ) {
					foreach ($options as $value) {
						delete_option( $value['id'] );
					}
					header("Location: admin.php?page=".$_REQUEST['page']."&reset=true");
					die;
				}
		
	}
}

class tpo_display_slideshow{
	var $slideshowLoop;
	var $slideEffectsLoop;
	var $slidePerPage;
	var $postType = 'slideshow';
	var $welcomeMsg = '';
	var $height = '';
	var $width = '';
	var $defaults = array();
	var $slider;
	function tpo_display_slideshow(){	
		$this->defaults[0] = array ( 
			'slideimage' => get_template_directory_uri() . '/images/slide1.jpg' , 
			'caption' => 'Awesome design and Features', 
			'slider_url' => 'http://www.zebrathemes.com',
			'des' => 'Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' ,
			'hide_title' => '',
			'slider_readmore' => 'Read More' );
		$this->defaults[1] = array ( 
			'slideimage' => get_template_directory_uri() . '/images/slide2.jpg' , 
			'caption' => 'Easy to use featured enrich admin panel', 
			'slider_url' => 'http://www.zebrathemes.com',
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.',
			'hide_title' => '',
			'slider_readmore' => 'Read More' );
		$this->defaults[2] = array ( 
			'slideimage' => get_template_directory_uri() . '/images/slide3.jpg' , 
			'caption' => 'Custom inbuilt widgets', 
			'slider_url' => 'http://www.zebrathemes.com',
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' ,
			'hide_title' => '',
			'slider_readmore' => 'Read More' );
		$this->defaults[3] = array ( 
			'slideimage' => get_template_directory_uri() . '/images/slide4.jpg' , 
			'caption' => 'Extensive support forum', 
			'slider_url' => 'http://www.zebrathemes.com',
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' ,
			'hide_title' => '',
			'slider_readmore' => 'Read More' );
		$this->defaults[4] = array ( 
			'slideimage' => get_template_directory_uri() . '/images/slide5.jpg' , 
			'caption' => 'Higly SEO optimized structure', 
			'slider_url' => 'http://www.zebrathemes.com',
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' ,
			'hide_title' => '',
			'slider_readmore' => 'Read More' );
	}
	function setWelcome($arg)
	{
		$this->welcomeMsg .= $arg;
	}
	function showFlexSlider()
	{
		$slides = array();
		$slidekey = 0;
		$sliderEffects = "";
		$this->postPerPage = tpo_option('tpo_flex_slide_count');

		if ( tpo_option('tpo_flex_from_post') == true ) {
			
			$this->slideshowLoop = new WP_Query('post_type=post&posts_per_page=2');
			if($this->slideshowLoop->have_posts())
				{
					while ($this->slideshowLoop->have_posts())
					{ 
						$this->slideshowLoop->the_post();
						if($sliderEffects != '') {
							$sliderEffects .= ',' . get_post_meta($this->slideshowLoop->post->ID,'tpo_slider_effect', true);
						} else {
							$sliderEffects .=   get_post_meta($this->slideshowLoop->post->ID,'tpo_slider_effect', true);
						}
						$slides[$slidekey]['hide_title'] = get_post_meta($this->slideshowLoop->post->ID,'tpo_hide_slider_title', true);
						$slides[$slidekey]['caption'] = $this->slideshowLoop->post->post_title;
						$slides[$slidekey]['slideimage'] = get_post_meta($this->slideshowLoop->post->ID, '_post_image', true);
						$slides[$slidekey]['slider_url'] =  get_permalink( $this->slideshowLoop->post->ID );
						
						$description = $this->slideshowLoop->post->post_content;
						
						if (strlen($description) > 130) {
							$myExcerpt = rtrim(substr($description,0,130));
							if ($myExcerpt != '') {
								$myExcerpt .= '...';
								$desexcept = str_replace('[...]','',strip_tags($myExcerpt));
							}
						} else {
							$desexcept = rtrim($description);
						}
						
						$slides[$slidekey]['des'] = $desexcept;
						$slidekey++;
					}
				}
		} else {

			$this->slideshowLoop = new WP_Query('post_type='.$this->postType.'&posts_per_page=2');
			if($this->slideshowLoop->have_posts()) {
				while ($this->slideshowLoop->have_posts())	{ 
					$this->slideshowLoop->the_post();
					if($sliderEffects!='') {
						$sliderEffects .= ',' . get_post_meta($this->slideshowLoop->post->ID,'tpo_slider_effect', true);
					} else {
						$sliderEffects .=   get_post_meta($this->slideshowLoop->post->ID,'tpo_slider_effect', true);
					}
					$slides[$slidekey]['hide_title'] = get_post_meta($this->slideshowLoop->post->ID,'tpo_hide_slider_title', true);
					$slides[$slidekey]['caption'] = $this->slideshowLoop->post->post_title;
					$slides[$slidekey]['slideimage'] = get_post_meta($this->slideshowLoop->post->ID, 'tpo_slider_image', true);
					$slides[$slidekey]['slider_url'] = get_post_meta($this->slideshowLoop->post->ID, 'tpo_slider_url', true);
					$slides[$slidekey]['slider_readmore'] = get_post_meta($this->slideshowLoop->post->ID, 'tpo_slider_readmore', true);
					
					$description =  get_post_meta($this->slideshowLoop->post->ID, 'tpo_slider_description', true);
					if (strlen($description) > 230) {
						$myExcerpt = rtrim(substr($description,0,230));
						if ($myExcerpt != '') {
							$myExcerpt .= '...';
							$desexcept = str_replace('[...]','',$myExcerpt);
						}
					} else {
						$desexcept = rtrim($description);
					}
					
					$slides[$slidekey]['des'] = $desexcept;
					$slidekey++;
				}
			} else {
					$slides = $this->defaults;
					$sliderEffects = 'fade';
			}
		}
			$flex_sliderspeed= (get_option('tpo_flex_sliderspeed')*1000);
			$flex_animationspeed= (get_option('tpo_flex_animationspeed')*1000);
			if ($flex_sliderspeed == '' ) { $flex_sliderspeed = 7000; }
			if ($flex_animationspeed == '' ) { $flex_animationspeed = 600; }
			
		$this->slider .= '<script type="text/javascript">
			var all = "'.$sliderEffects.'";
			jQuery(document).ready(function(){
				jQuery(".flexslider").flexslider({
					animation: "swing",
					easing: "easeInBounce",
					direction:"horizontal",
					directionNav: true,
					controlNav: true, 
					slideshowSpeed: '.$flex_sliderspeed.',
					animationSpeed: '.$flex_animationspeed.',
					start:   onStart,
					before:   onBefore,
					after:   onAfter 
				});
			});
		</script>';
		$this->slider.= '<div class="featureslider" >';
		$this->slider.= '	<div class="flex-container">';
		$this->slider.= '		<div class="flexslider">';
		$this->slider.= '			<ul class="slides">';

		if ( $slides ) {
			foreach ( $slides as $sk => $slide ) {
				$caption = $slide['caption'];
				$slideimage = $slide['slideimage'];
				$img = $slideimage;  // tpo_image_resize($cycleheight, $cyclewidth, $slideimage);
				if ( $slide['slider_url'] ) {
					$this->slider .= '<li><figure><a href="' . $slide['slider_url'] . '" target="_blank" ><img src="' . $img .'"  alt="'.$caption.'" /></a></figure>';
				} else {
					$this->slider .= '<li><figure><img src="' . $img .'"  alt="'.$caption.'" /></figure>';		
				}
				
				if ( !$slide['hide_title'] ) {
					if ( $caption ) {
						$this->slider .= '<div class="sliderheading" >' . $caption . '</div>';
					}
					if ( $slide['des'] ) {
						$this->slider .= '<div class="slidercontent" >'. $slide['des'] .'</div>';
					}
					if ( TPO_SLIDER_READMORE == true ) {
						if ( $slide['slider_readmore'] ) {
							$this->slider .= '<div class="slider-readmore" ><a class="button" href="' . $slide['slider_url'] . '" target="_blank" >'. $slide['slider_readmore'] .'</a></div>';
						}
					}
				}
				
				$this->slider .= '</li>';
			}
		}
		$this->slider.= "			</ul>";
		$this->slider.= "		</div>";
		$this->slider.= "	</div>";
		$this->slider.= "</div>";
		$this->slider.= "<!-- end .featured_inside --> 
";
		echo $this->slider;
		wp_reset_query();
	}
}	



function tpo_slide_show() {
	global $post; 

	if (  is_home() ) {
		$slideshow = new tpo_display_slideshow();
		$slideshow->setWelcome("You can add Slides.<a href='".get_option('siteurl')."/wp-admin/edit.php?post_type=slideshow' title=''>Click here</a> to add.");
		$slideshow->showFlexSlider();
	} else {
		if ( $post ) {
			if ( is_page($post->ID) ) {
				if ( get_post_meta( $post->ID, '_post_slider', true ) ) {
					$slideshow = new tpo_display_slideshow();
					$slideshow->setWelcome("You can add Slides.<a href='".get_option('siteurl')."/wp-admin/edit.php?post_type=slideshow' title=''>Click here</a> to add.");
					$slideshow->showFlexSlider();
				}
			}
		}
	}
}

class templuto_meta_boxes{
	var $options; 			
	//constructor
	function templuto_meta_boxes($options)
	{	
		$this->options = $options;
		$mbox =  $this->options;
		$priority = 1;
		add_action('admin_menu', array(&$this, 'initMetaBoxes'), $priority);
		add_action('save_post', array(&$this, 'save_postmeta'));
	}
	function initMetaBoxes(){
		$mbox = $this->options;
		add_meta_box( 	
			$mbox['id'], 
			$mbox['title'],
			array(&$this,'create_meta_boxes'),
			$mbox['page'], $mbox['context'], 
			$mbox['priority']
		);  
	}
    function create_meta_boxes() {
		global  $post;
		$meta_box = $this->options;
		echo '<div id="tpo_admin_wrap" >';
		echo '<div class="tpo-admin-meta">';
		echo '<input type="hidden" name="tpo_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
		foreach ($meta_box['fields'] as $field) {
		if( !isset($field['id']) ) $field['id'] = '' ;
		if( !isset($field['type']) ) $field['type'] = '' ;
		if( !isset($field['class']) ) $field['class'] = '' ;
		if( !isset($field['name']) ) $field['name'] = '' ;
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
			case 'text':
				$output = '';
				$output .= '<div class="tpo_post_admin_input">' ;
				$output .= '<label for="' . $field['id'] . '">' .$field['name'] .'</label>';
				$output .= '<div>' . $field['desc'] . '<br/></div><br/>';
				$output .= '<input name="' . $field['id'] . '" id="' . $field['id'] . '" ' . (($field['class'] != "") ? "class=".$field['class']."" : "" ) . ' type="' . $field['type'] . '" value="' .
				 ( $meta ? $meta : $field['std'] ) . '" />';
				 $output .= '&nbsp;' .$field['suffix'] ;
				$output .= '<div class="clearfix"></div>';
				$output .= '</div>';
				echo $output;
				break;
			case 'textarea':
					$output = '';
					$output .= '<div class="tpo_post_admin_input">';
					$output .= '<label for="' . $field['id'] . '">' . $field['name'] . '</label>';
					$output .= '<div>' . $field['desc'] . '<br/></div><br/>';
					$output .= '<textarea name="' . $field['id'] . '" ' . (($field['class'] != "") ? "class=".$field['class'] : "" ) . '" type="' . $value['type'] . '" cols="" rows="">';
					$output .=  ( $meta ? $meta : $field['std'] );  
					$output .= '</textarea>';
				 	$output .= '<div><br /><small>' . $field['desc'] . '</small></div><div class="clearfix"></div>';
				 	$output .= '</div>';
					echo $output;
					break;
			case "checkbox":
					$output = '';
					$output .= '<div class="tpo_post_admin_input">';
					
					if($meta){ $checked = "checked=\"checked\""; } else { $checked = "";}
					$output .= '<input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" value="true"' . $checked .'/>';
					$output .= '<label for="' . $field['id'] . '">' . $field['name'] . '</label>';
					 $output .= '&nbsp;' .$field['suffix'] ;
					$output .= '<small>' . $field['desc'] .'</small><div class="clearfix"></div>';
					$output .= '</div>';
					echo $output;
					break; 
			case 'select':
				$output = '';
				$output .= '<div class="tpo_post_admin_input">';
				$output .= '<label for="' . $field['id'] . '">' . $field['name'] . '</label>';
				$output .= '<div>' . $field['desc'] . '<br/></div><br/>';
				$output .= '<select name="' . $field['id'] . '" id="' . $field['id'] . '">';
				foreach ($field['options'] as $option) { 
					$output .= '<option ' . (( $meta == $option) ? 'selected="selected"' : '') . '>'. $option .'</option>';
				 } 
				$output .= '</select>';
				$output .= '</div>';
				echo $output;
				break;
			case 'colorpicker':
				$output = '';
				$output .= '<div class="tpo_post_admin_input">' ;
				$output .= '<label style="padding-top:7px;" for="' . $field['id'] . '">' .$field['name'] .'</label>';
				$output .= '<div>' . $field['desc'] . '<br/></div><br/>';
				$output .= '<input name="' . $field['id'] . '" id="' . $field['id'] . '" ' . (($field['class'] != "") ? "class=".$field['class']."" : "" ) . ' type="text" value="' .
				 ( $meta ? $meta : $field['std'] ) . '" />';
				 $output .= '&nbsp;' .$field['suffix'] ;
				$output .= '<div id="cp_tpo' . $field['id'] . '" class="cpicker"><div style="background-color: ' .
				 ( $meta ?  stripslashes($meta) :  $field['std'] ) . ';"></div></div>';
				$output .= '<div class="clearfix"></div>';
				$output .= '</div>';
				echo $output;
				break;
			case 'image':
				echo '<div class="tpo_post_admin_input">';
				echo '<label for="' . $field['id'] . '">' . $field['name'] . '</label>';
				echo '<div>' . $field['desc'] . '<br/></div><br/>';
				echo '<div>';
				echo '<input name="' . $field['id'] . '" id="' . $field['id'] . '_upload" type="text" value="' . ( $meta ? $meta : $field['std'] ) .'" />';
				echo '</div>';
				echo '<div><span  id="' . $field['id'] . '" class="tpo_image_upload" >Upload Image</span>';
				if ( $meta != "") { 
					echo '<span  id="remove_' . $field['id'] . '" class="tpo_image_remove" >Remove</span>';
				 }
				echo '</div>';
				if ( $meta != "") { 
					if (get_option('tpo_slide_width')) {
						$sliderwidth = get_option('tpo_slide_width');
						if ($sliderwidth > 400) 	$sliderwidth = 400;
					} else {
						$sliderwidth = 200;
					}
					if (get_option('tpo_slide_height')) {
						$sliderheight = get_option('tpo_slide_height');
						$sliderheight = round(($sliderwidth/get_option('tpo_slide_width'))*$sliderheight);
					} else {
						$sliderheight = 150;
					}
				$sliderimage = tpo_image_resize($height=$sliderheight, $width=$sliderwidth, stripslashes($meta));
				echo '<img class="hide"  id="image_' . $field['id'] . '"  src="' . $sliderimage. '" alt="" style="">';
				} 
				echo '<div class="clearfix"></div>';
				echo '</div>';
				 break;

		}
	}
	echo '</div></div>';
	}

	function save_postmeta($post_id) {
		$meta_box = $this->options;
		if ( isset($_POST['tpo_meta_box_nonce'])) {
			if (!wp_verify_nonce($_POST['tpo_meta_box_nonce'], basename(__FILE__))) {
				return $post_id;
			}
		}
		// check autosave
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}
		// check permissions
		if ( isset( $_POST['post_type']) && 'page' == $_POST['post_type']) {
			if (!current_user_can('edit_page', $post_id)) {
				return $post_id;
			}
		} elseif (!current_user_can('edit_post', $post_id)) {
			return $post_id;
		}
		
		foreach ($meta_box['fields'] as $field) {
			if ( isset ( $field['id'] ) ) {
				$old = get_post_meta($post_id, $field['id'], true);
				if ( isset ( $_POST[$field['id']] )) { 
					$new = $_POST[$field['id']];
				} else {
					$new = '' ;
				}
			}
			if ($new && $new != $old) {
				update_post_meta($post_id, $field['id'], $new);
			} elseif ('' == $new && $old) {
				delete_post_meta($post_id, $field['id'], $old);
			}
		}
	}

}

	function wpeditor($value) {
		$rows = isset($value['rows']) ? $value['rows'] : '15';
		$meta = get_option( $value['id'] );
		if (isset($meta)) {
			$value['default'] = stripslashes($meta);
		}
		$output .= '<tr><td>';
		$output .=  '<div id="poststuff"><div id="post-body"><div id="post-body-content"><div class="postarea" id="postdivrich">';
		ob_start();
		wp_editor($value['default'],$value['id']);
		$output .= ob_get_contents();
		ob_end_clean();
		$output .=  '<table id="post-status-info" cellspacing="0">';
		$output .=  '<tbody><tr>';
		$output .=  '<td>&nbsp;</td>';
		$output .=  '<td>&nbsp;</td>';
		$output .=  '</tr></tbody>';
		$output .=  '</table>';
		$output .=  '</div></div></div></div>';
		$output .=  '</td></tr>';
		return $output;
	}

	function getoptionhtml($opts,$sel){
		foreach ($opts as $opt) {
			$option .= '<option ' . (($sel == $opt) ? 'selected="selected"' : '') . '>' . $opt . '</option>';
		}
		return $option;
	}
function listgooglefonts($sel_value) { 
	global $googlefonts;
	foreach ($googlefonts as $key => $value) { 
		$output .= '<option value="'.$value.'"' . (($sel_value==$value) ? 'selected="selected"' : '') . '>'. $key .'</option>';
	} 
	return $output;
	}

$tpomain = new templuto_main() ;
