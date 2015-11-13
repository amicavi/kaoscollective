
	<?php if ( is_single() ) { ?>
    	<div class="page-title" >
         <?php if ( get_post_meta($post->ID, "_post_title", true) != "Hide" ) { ?>
              <h2 class="pagetitle" ><?php the_title(); ?></h2>
        <?php } ?>
        </div>
   <?php } ?>
   <?php if ( is_page() ) { ?>
		<div class="page-title" >
         <?php if ( get_post_meta($post->ID, "_post_title", true) != "Hide" ) { ?>
              <h2 class="pagetitle" ><?php the_title(); ?></h2>
        <?php } ?>
        </div>
   <?php } ?>
    <?php if ( is_404() ) { ?>
 		<div class="page-title" >
        	<h2 class="pagetitle" ><?php _e( 'Not found', THEME_SLUG ); ?></h2>
        </div>
   <?php } ?>
   <?php if ( is_search() ) { ?>
		<div class="page-title" >
        	<h2 class="pagetitle" ><?php _e('Search Results', THEME_SLUG ); ?></h2>
        </div>
   <?php } ?>
    <?php if (is_category()) {  /* If this is a category archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php  single_cat_title(); ?></h2></div>
    <?php } elseif( is_tag() ) {  /* If this is a tag archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php single_tag_title(); ?></h2></div>
    <?php } elseif (is_day()) {  /* If this is a daily archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php _e('Daily Archives:', THEME_SLUG); ?> | <?php the_time('F jS, Y'); ?></h2></div>
    <?php } elseif (is_month()) {  /* If this is a monthly archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php _e('Monthly Archives:', THEME_SLUG); ?> | <?php the_time('F, Y'); ?></h2></div>
    <?php } elseif (is_year()) {  /* If this is a yearly archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php _e('Yearly Archives:', THEME_SLUG); ?> | <?php the_time('Y'); ?></h2></div>
    <?php } elseif (is_author()) { /* If this is an author archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php _e('Posted By:', THEME_SLUG); ?> | <?php get_the_author_meta('display_name'); ?></h2></div>
    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { /* If this is a paged archive */ ?>
        <div class="page-title" ><h2 class="pagetitle" ><?php _e('Blog Archives', THEME_SLUG ) ?></h2></div>
    <?php } ?>

