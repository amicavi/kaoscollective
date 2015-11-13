<?php
/**
 * @package WordPress
 * @Theme Templuto
 */
/*
Template Name: Portfolio 2 columns
*/


get_header(); 
$column = 2;
require_once('portfolio-loop.php');
?>
<?php // if ($tpo_full_page != 'true') get_sidebar(); ?>

<?php get_footer(); ?>
