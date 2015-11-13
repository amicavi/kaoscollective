

<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

get_header();
 ?>

<div class="container"  >
	<div class="row"> 
		<div class="content-wrapper" > 
		   <?php get_sidebar( 'left' ); ?>
 	       <?php
				get_template_part( 'content' , 'single' );
				get_sidebar( 'right' );  
			?>
            <div class="clear"></div>
        </div> <!-- Content Wrapper End -->
	</div><!-- Row End -->
</div><!-- Container End -->

<?php  get_footer(); ?>