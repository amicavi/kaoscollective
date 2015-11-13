<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

	global $hook;
?>

<div class="footer-widgets">
	<div class="container">
		<div class="row">
            <div class="footer-widget-area" role="complementary">
                <?php
                
                $footercolumns = 4 ;
    
    
                switch ($footercolumns) {
                    case 3:
                        $columnwidth = 'col-md-4';	
                        break;
                    case 4:
                        $columnwidth = 'col-md-3';	
                        break;
                }
                ?>
                <?php for($i=1;$i<= $footercolumns ; $i++) { ?>
                <?php
               
                switch ($i) {
                    case 1:
                        $footercolname = 'first';
                        break;
                    case 2:
                        $footercolname = 'second';	
                        break;
                    case 3:
                        $footercolname = 'third';	
                        break;
                    case 4:
                        $footercolname = 'fourth';	
                        break;
                    case 5:
                        $footercolname = 'fifth';	
                        break;
                    case 6:
                        $footercolname = 'sixth';	
                        break;
                }
                ?>
                            <?php if($i==$footercolumns) { ?>
                                <div class="<?php echo $columnwidth; ?> last">
                            <?php } else { ?>
                                <div class="<?php echo $columnwidth; ?>">
                            <?php } ?>
                    
                                    <div id="<?php echo $footercolname; ?>" class="widget-area">
                                        <ul class="footerwidget">
                                            <?php if (!dynamic_sidebar( $footercolname.'-footer-widget-area' ) ) {
                                                $hook->hook( $footercolname.'-footer-widget-area' );
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div><!-- #first .widget-area -->
                            <?php } ?>
                </div><!-- footer widge area -->
            <div class="clearboth"></div>
		</div>
	</div>
</div><!-- footer widget -->