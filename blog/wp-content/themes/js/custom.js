
	
	

	
	
	function onBefore(slider) { 
			 	 jQuery('.flex-active-slide').find('.sliderheading').css({opacity :  0 } );
				 jQuery('.flex-active-slide').find('.sliderheading').animate({left :  "200px" } );
			 	 jQuery('.flex-active-slide').find('.slidercontent').css({opacity :  0 } );
				 jQuery('.flex-active-slide').find('.slidercontent').animate({left :  "200px" } );
			}
			function onAfter(slider){

				
			 	jQuery('.flex-active-slide').find('.sliderheading').animate({left :  "40px", opacity: "1"  }, 2000, "easeOutBack" , function() {
						  	jQuery('.flex-active-slide').find('.slidercontent').animate({left :  "40px" , opacity: "1" }, 2000 , "easeOutBack");
					});
			}
			function onStart(slider){

				
			 	jQuery('.flex-active-slide').find('.sliderheading').animate({left :  "40px", opacity: "1" }, 2000, "easeOutBack" , function() {
						  	jQuery('.flex-active-slide').find('.slidercontent').animate({left :  "40px" , opacity: "1" }, 2000 , "easeOutBack");
					});
			}
			

 