jQuery(document).ready(function() {

			jQuery('.viewport').fitVids();

			jQuery('#main-menu').mobileMenu({
                defaultText: 'Go To..',
                className: 'responsive-select',
				IDName: 'responsive-dropdown',
                containerID: 'responsive-menu',
				containerClass: 'responsive-menu',
                subMenuDash: '&ndash;'
            });

			jQuery('#top-menu').mobileMenu({
                defaultText: 'Go To..',
                className: 'top-responsive-select',
				IDName: 'top-responsive-dropdown',
                containerID: 'top-responsive-menu',
				containerClass: 'top-responsive-menu',
                subMenuDash: '&ndash;'
            });


			  jQuery(".tabs-container ul.tabs").find("li:first-child").addClass("active");
			  jQuery(".tabs-container .panes").find(".pane:first-child").show();
			  jQuery(".tabs-container ul.tabs a").click(function(e) {
				  container = jQuery(this).parent().parent().parent();
				  cl_index = jQuery(this).parent().index();
				  container.find(".pane").slideUp();
				  container.find("li").removeClass('active');
				  container.find(".pane").eq(cl_index).slideDown();
				  jQuery(this).parent().addClass('active');
				  e.preventDefault();
				  return false;
			   });

				jQuery(".toggle-content").hide(); 
				jQuery("h3.toggle").toggle(function(){
					jQuery(this).addClass("active");
					}, function () {
					jQuery(this).removeClass("active");
				});
				jQuery("h3.toggle").click(function(){
					jQuery(this).next(".toggle-content").slideToggle();
				});


				jQuery(".accordion-container").find(".accordion-content:first-child").show();
			    jQuery(".accordion-header").click(function(){
					container = jQuery(this).parent();
					container.find(".accordion-content").slideUp();
					container.find(".accordion-header").removeClass('active');
					jQuery(this).addClass('active');
					jQuery(this).next().slideToggle();
				});
				
				jQuery("#top-search .searchinput").focus(function() {
					jQuery("#top-search .searchinput").stop().animate({width: '250px'},'slow');
				});
				jQuery("#top-search .searchinput").blur(function() {
					jQuery("#top-search .searchinput").stop().animate({width: '130px'},'slow');
				});
	});


