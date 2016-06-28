<?php
/*
Template Name: Payment Template
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_cart' ); ?>
<?php get_header(); ?>

<?php echo do_shortcode('[woocommerce_klarna_checkout]'); ?>

<?php get_footer(); ?>