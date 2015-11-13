<?php
/**
 * @package WordPress
 * @subpackage Templuto
/*
Template Name: Blog Template
*/
get_header(); 
?>



<div class="container" >
	<div class="row" > 
		<div class="content-wrapper" > 
		   <?php get_sidebar( 'left' ); ?>
			<?php
				$query_string = "paged=$paged";
				query_posts($query_string);
				get_template_part( 'content' );
				get_sidebar( 'right' );  
			?>
            <div class="clear"></div>
        </div> <!-- Content Wrapper End -->
	</div><!-- Row End -->
</div><!-- Container End -->

<?php  get_footer(); ?>