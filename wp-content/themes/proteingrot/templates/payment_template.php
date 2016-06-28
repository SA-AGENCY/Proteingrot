<?php
/*
Template Name: Payment Template
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_cart' ); ?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta charset="utf-8">
  <title>Proteingröt</title>
  <meta name="description" content="Proteingröt">
  <meta name="author" content="WooWho">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
  <script src="https://use.typekit.net/ktm7jno.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="https://use.fontawesome.com/09ba95fe54.js"></script>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
<nav class="main-nav <?php if( is_home() || is_front_page() ) : ?> <?php else : ?>static<?php endif; ?>">
<a href="<?php echo get_home_url(); ?>"><div class="logo"></div></a>
 <div class="wrapper">
  <?php wp_nav_menu(); ?>
  
  <div class="buyContainer">
   <?php if ( is_user_logged_in() ) { ?>
     <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Mitt konto','woothemes'); ?>"><span class="signin"><?php _e('Mitt konto','woothemes'); ?></span></a>
   <?php } else { ?>
 	 <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Logga in','woothemes'); ?>"><span class="signin"><?php _e('Logga in','woothemes'); ?></span></a>
 <?php } ?>
   <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>">
   <span class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
   <?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
   </span></a>
  </div>
  
 </div>
</nav>

<?php if( !is_front_page() ) : ?>
 <div class="static-spacer-klarna"></div>
<?php endif; ?>

<section class="padding10">
<div class="hold_all">
 <div class="cart_content_holder" style="border: 0px;">
<?php echo do_shortcode('[woocommerce_klarna_checkout]'); ?>
 </div>
</div>

<div class="cart_total">
 <?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<p class="cart_title">Totalt</p>
    <?php do_action( 'woocommerce_before_cart_table' ); ?>
  
    <?php do_action( 'woocommerce_before_cart_contents' ); ?>
    
    <?php
   foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
     $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
	 $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
	 
	 if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 
	 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
	 $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
	?>
    
    
    <div class="count_total">
	 <div class="total_left_klarna">
	 <?php if ( ! $product_permalink ) {
	 	echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
	 } else {
		echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<div class="%s">%s</div>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
	} echo WC()->cart->get_item_data( $cart_item ); ?></div>
	 
     
     <div class="total_right_klarna">
	 <?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );	?> 
	 
	 <?php if ( $_product->is_sold_individually() ) {
		   $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
		   } else {
		   echo " x ".$cart_item['quantity'];
		   }
     ?>
	 
	 <?php echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); ?></div>
    </div>
    
	
	<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
	?>
 
 </div>
</section>

<?php get_footer(); ?>