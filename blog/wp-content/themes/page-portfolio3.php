<?php
/**
 * @package WordPress
 * @Theme Templuto
 */
/*
Template Name: Portfolio 3 columns
*/


get_header(); 
$column = 3;
require_once('portfolio-loop.php');
?>
<?php // if ($tpo_full_page != 'true') get_sidebar(); ?>

<?php get_footer(); ?>
