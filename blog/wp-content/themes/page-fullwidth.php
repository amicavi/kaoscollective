<?php
/**
 * @package WordPress
 * @subpackage Templuto
/*
Template Name: Full Width
*/

get_header(); ?>



<?php get_template_part( 'content' , 'title' ); ?>

	<div id="content-wrapper"  >
	<?php get_sidebar( 'left' ); ?>
	<div id="content" class="fullcolumn" >
		<h2 class="post-title" ><?php the_title(); ?></h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<?php if ( get_post_meta($post->ID, "_post_title\", true) != "Hide" ) { ?>
			<h2><?php the_title(); ?></h2>
		<?php } ?>
			<div class="entry">
				<?php the_content(""); ?>

				<?php wp_link_pages(array("before" => "<p><strong>Pages:</strong> ", "after" => "</p>", "next_or_number" => "number")); ?>

			</div> <!-- Entry End -->
		</div>  <!-- Post End -->
		<?php endwhile; endif; ?>
    
	</div>  <!-- Content End -->
<div class="clear"></div>
	</div>  <!-- Content Wrapper End --> 

<?php  get_footer(); ?>