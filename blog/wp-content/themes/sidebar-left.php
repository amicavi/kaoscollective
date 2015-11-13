<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */
?>
<?php global $hook; ?>
<?php 
$sidebartype = tpo_showsidebar();
if ( $sidebartype == 'left' || $sidebartype == 'both' ) { ?>
<div class="sidebar <?php echo LEFT_SIDEBAR_WIDTH; ?>">
    <?php
        if(!dynamic_sidebar( tpo_showsidebarname())) {
            $hook->hook('primary-widget-area');
        }
   	?>
  </div>
<?php } ?>
