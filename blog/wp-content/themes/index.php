
		<?php
		/**
		 * @package WordPress
		 * @subpackage Templuto
		 */
		 
		get_header();
		?>
		
		
		
				<div class="content-wrapper" > 
				   <?php get_sidebar( 'left' ); ?>
					<?php
						get_template_part( 'content' );
						get_sidebar( 'right' );  
					?>
					<div class="clear"></div>
				</div> <!-- Content Wrapper End -->
		
		<?php  get_footer(); ?>
		
		