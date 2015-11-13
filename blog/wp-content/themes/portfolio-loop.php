<?php
$sortable =get_option('tpo_portfolio_sortable');

if (TPO_BREADCRUMBS=='true') tpo_breadcrumbs();

switch ($column){
	case 1:
		$ptype = 'fullcolumn';
		$thumbsize = 'portfolio-one';
		$width = PORTFOLIO_ONE_WIDTH;
		$height = PORTFOLIO_ONE_HEIGHT;
		break;
	case 2:
		$ptype = 'one-half';
		$thumbsize = 'portfolio-two';
		$portfolio_noitems = 8;
		$width = 750;
		$height = 530;
		break;
	case 3:
		$ptype = 'one-third';
		$thumbsize = 'portfolio-three';	
		$portfolio_noitems = 9;
		$width = 520;
		$height = 370;

		break;
	case 4:
		$ptype = 'one-fourth';	
		$thumbsize = 'portfolio-four';
		$portfolio_noitems = 12;
		$width = 520;
		$height = 370;
		break;
}
function portfolio_the_excerpt($charlength) {
   $excerpt = get_the_excerpt();
   $charlength++;
   if(strlen($excerpt)>$charlength) {
       $subex = substr($excerpt,0,$charlength-5);
       $exwords = explode(" ",$subex);
       $excut = -(strlen($exwords[count($exwords)-1]));
       if($excut<0) {
            $str = substr($subex,0,$excut);
       } else {
       	    $str = $subex;
       }
   }

			  echo '<p>' . $str . '</p><div class="port-readmore" ><a href="' . get_permalink() . '" >' . TPO_PORTFOLIO_READMORE_TEXT . '</a></div>';
	
}

?>
<script>

	jQuery(document).ready(function() {


			jQuery('.viewport').hover(function(){ 
					jQuery(this).addClass('hover');
					$overlay_icon_top = (( jQuery('.overlay').height() - 40 ) / 2);
					$overlay_icon_left = (( jQuery(this).find('.overlay').width() - 40 ) / 2);
					jQuery(this).find('.overlay .overlay_icon_circle').css('top', $overlay_icon_top + 'px');
					jQuery(this).find('.overlay').stop(true, false, true).fadeIn();
					jQuery(this).find('.overlay .overlay_icon_circle').stop(true, false, true).animate({ left:  + $overlay_icon_left + 'px' }, 300);
					jQuery('#'+jQuery(this).attr('data-rel')).addClass('hover');
			},
			function()
			{	
				jQuery(this).find('.overlay').stop(true, false, true).fadeOut();
				jQuery(this).find('.overlay .overlay_icon_circle').stop(true, false, true).animate({ left: '150%' }, 100, function() {
					jQuery(this).css('left', '-46%');
				});
				jQuery(this).removeClass('hover');
				jQuery('#'+jQuery(this).attr('data-rel')).removeClass('hover');
			});

	}); 
</script>


<div class="container">
     <div class="row"> 
      	<div class="content-wrapper" >
        
            <div  class="col-md-12 page-intro" >
                 <?php if ( get_post_meta($post->ID, "_post_title", true) != "Hide" ) { ?>
                    <h2 class="pagetitle" ><?php the_title(); ?></h2>
                <?php } ?>
            </div>
            
            <div id="content" class="col-md-12" >
				<?php 
                $counter = 1;	
                $no_image = '<img src="' . get_bloginfo('template_directory') . '/images/one-fourh-noimage.png" class="image_shadow" alt="" >';
                $page = get_query_var('page');
                query_posts( array( 'post_type' => 'portfolio-item', 'posts_per_page' => $portfolio_noitems , 'paged' => $paged ) );
                $counter = 1; ?>
                <?php if (have_posts()) : ?>
                    <div id="portfolio" >
                    <?php while (have_posts()) : the_post();
                        $catype = ''; 
                        $categories = get_the_terms($post->ID, 'portfolio_category');
                        if ( $categories ) {
                            foreach ($categories as $cat) {
                                $catype .=  strip_tags($cat->slug) . ' ';
                            }
                        }
                     ?>
                    <?php
                            $lastclass = '' ; 
                            if ( $counter % $column == 0 ) 	$lastclass = "last";
                              // Fetching post thumb and attachment images
            
                                $post_thumb = array();   $images_array = array();
            
            
            
                                  if( has_post_thumbnail() ) : 
                                        array_push ( $post_thumb , get_the_post_thumbnail(  $post->ID,  $thumbsize ) );
                                  else :
                                        $postimage = get_post_meta($post->ID, '_post_image', true);
                                        if ($postimage) {
                                            $postimg = tpo_image_resize( $height, $width, $postimage);  
                                            $postimg =  '<img src="'.$postimg.'" alt="'.get_the_title().'" title="'.get_the_title().'" />';	
                                            array_push ( $post_thumb , $postimg );
                                        }
                                  endif;
                                  $images_array =  $post_thumb ;
                                  /*$attach_images = get_post_thumb_image($post->ID, 'portfolio-four');
                                  if ( $attach_images ) {
                                    $images_array =  array_merge ( $post_thumb ,  $attach_images  );
                                  } */
                                  // displaying post thumb and attachment images
                                  
                                    $categories = get_categories('taxonomy=portfolio_category&hide_empty=0&orderby=name');
                                    $wp_cats = array();
                                    foreach ($categories as $category_list ) {
                                         if($category_list->slug) {
                                         //   echo '<li><a href="#">' . $category_list->slug . '</a></li>';
                                         }
                                    }
                                  ?>
                                <div data-id="id<?php echo $counter; ?>" class="portfolio-column <?php echo $ptype ; ?>  <?php echo  trim($catype); ?> <?php echo $lastclass; ?> " >  
                                    <div class="viewport" >
                                    <?php
                                        if ( get_post_meta($post->ID, '_post_featuretype', true) == 'video' ) {
                                    ?>
                                            <iframe width="<?php echo $width; ?>"  height="<?php echo $height; ?>"  src="<?php echo  get_post_meta($post->ID, '_post_video_link', true)  ?>" frameborder="0" allowfullscreen></iframe>
                                    <?php	} else { ?>
                                        <a href="<?php the_permalink() ?>" >
                                         
                                                    <?php
                                                        if( $images_array ) { 
                                                            foreach( $images_array as $image ) 	echo $image;
                                                         } else {  
                                                            echo $no_image;
                                                        } 	
                                                    ?> 
                                         </a>
                                         <?php } ?>
                                          <div class="overlay" ><div class="overlay_icon_circle icon_link" ><a href="<?php the_permalink() ?>" class="lightbox" rel="portfolio"  ><img src="<?php bloginfo('template_directory'); ?>/images/icon_link.png" alt="" class=""></a></div></div>		
                                   </div>
                                   <div class="portfolio-title" ><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></div>
                                   <div class="portfolio-content" ><?php portfolio_the_excerpt(80); ?></div>
                              </div>
                              <?php
                                if ( $counter % $column == 0 ) { 
                                ?>
                                    <div style="clear:both" ></div>
                                <?php
                            }
                            ?>
                    <?php $counter++; endwhile; ?>
            
                </div>
                            <?php if($sortable!='true'){ ?>
                    
                                <div class="navigation" style="width:940px;">
                    
                                    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
                    
                                        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    
                                        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                    
                                    <?php } ?>
                    
                                </div>
                    
                            <?php } ?>
            
                <?php else : ?>
            
            
            
                    <h2 class="center"><?php echo __('Not Found','templuto_front') ?></h2>
            
                    <p class="center"><?php echo  __('Sorry, but you are looking for something that isn\'t here.','templuto_front') ?></p>
            
                    <?php get_search_form(); ?>
            
            
            
                <?php endif; ?>
            
    
    		</div>
		</div>
	</div>
</div>