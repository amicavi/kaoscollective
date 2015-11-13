<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */
?>
<?php global $hook; ?>
<?php 
$sidebartype = tpo_showsidebar();

if ( $sidebartype != 'none' && ( $sidebartype == 'right' || $sidebartype == 'both' ) ) { ?>
<div class="sidebar <?php echo RIGHT_SIDEBAR_WIDTH; ?>">
    <?php
        if(!dynamic_sidebar( tpo_showsidebarname())) {
            $hook->hook('primary-widget-area');
        }
   	?>
  </div>
<?php } ?>
