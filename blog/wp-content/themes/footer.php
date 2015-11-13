		<?php   if(  TPO_DISABLE_FOOTER_WIDGETS != 'true' ) { ?>
            	<?php include (TEMPLATEPATH . '/sidebar-footer.php'); ?>
		<?php  } ?>

		   		<div class="clear"> </div>
				<div id="footer" class="col-md-12" >
					
							<div class="footer-wrapper" >
								<div class="footer-text">
									 &copy; <?php echo date('Y'); ?>  <?php echo get_bloginfo('name'); ?>. All right reserved. <a href="http://www.zebrathemes.com">Music Blog Theme By Zebra Themes</a><?php /* If you want to use this theme, you must keep footer link( NO JUNK CODE ). We apprciate if you buy link free version to access our support forum and help us developing new themes for you people http://www.zebrathemes.com/buy/?wordpress-theme=musicnight*/ ?>
								</div>
							</div>
					
		  		</div>
	<?php  wp_footer(); ?>
</body>
</html>
