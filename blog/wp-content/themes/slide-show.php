<?php
/**
 * Show feature slider
 *
 * @package templuto
 *
 */

class tpo_display_slideshow{
	var $slideshowLoop;
	var $slideEffectsLoop;
	var $slidePerPage;
	var $postType = 'slideshow';
	var $welcomeMsg = '';
	var $height = '';
	var $width = '';
	var $defaults = array();
	
	function tpo_display_slideshow(){	
		$this->defaults[0] = array ( 
			'slideimage' => get_bloginfo('template_directory') . '/images/slide1.jpg' , 
			'caption' => 'Awesome design and Features', 
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' );
		$this->defaults[1] = array ( 
			'slideimage' => get_bloginfo('template_directory') . '/images/slide2.jpg' , 
			'caption' => 'Easy to use featured enrich admin panel', 
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' );
		$this->defaults[2] = array ( 
			'slideimage' => get_bloginfo('template_directory') . '/images/slide3.jpg' , 
			'caption' => 'Custom inbuilt widgets', 
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' );
		$this->defaults[3] = array ( 
			'slideimage' => get_bloginfo('template_directory') . '/images/slide4.jpg' , 
			'caption' => 'Extensive support forum', 
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' );
		$this->defaults[4] = array ( 
			'slideimage' => get_bloginfo('template_directory') . '/images/slide5.jpg' , 
			'caption' => 'Higly SEO optimized structure', 
			'des' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac vehicula sapien. Phasellus bibendum iaculis orci et vehicula. Morbi in mattis elit.' );
	}
	function setWelcome($arg)
	{
		$this->welcomeMsg .= $arg;
	}
	function showFlexSlider()
	{
		$slides = array();
		$slidekey = 0;
		$this->postPerPage = 5;
		$this->slideshowLoop = new WP_Query('post_type='.$this->postType.'&posts_per_page='.$this->postPerPage);
		if($this->slideshowLoop->have_posts())
			{
				while ($this->slideshowLoop->have_posts())
				{ 
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
			$transitiondelay= (get_settings('tpo_cycle_trandelay')*1000);
			$transitionspeed= (get_settings('tpo_cycle_transpeed')*1000);
			if ($transitionspeed == '' ) { $transitionspeed = 1000; }
			if ($transitiondelay == '' ) { $transitiondelay = 5000; }
			
		$this->slider .= '<script type="text/javascript">
			var all = "'.$sliderEffects.'";
			jQuery(document).ready(function(){
				jQuery(".flexslider").flexslider({
					animation: "slide",
					easing: "swing",
					direction:"vertical",
					directionNav: true,
					controlNav: true, 
					slideshow: true,
					slideshowSpeed: '.$transitionspeed.',
					animationSpeed: '.$transitiondelay.',    
					before:   onBefore,
					after:   onAfter 
				});
			});
		</script>';
		
		$this->slider.= '<div class="flex-container">';
		$this->slider.= '<div class="flexslider">';
		$this->slider.= '	<ul class="slides">';

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
						$this->slider .= '<div class="sliderheading">' . $caption . '</div>';
					}
					if ( $slide['des'] ) {
						$this->slider .= '<div class="slidercontent">'. $slide['des'] .'</div>';
					}
				}
				
				$this->slider .= '</li>';
					$loopCount ++;
			}
		}
		$this->slider.= "</ul></div></div>";
		$this->slider.= "<!-- end .featured_inside --> 
";
		echo $this->slider;
		wp_reset_query();
	}
}	