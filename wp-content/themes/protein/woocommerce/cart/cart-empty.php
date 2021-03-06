<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

?>
<section class="myaccount lg">
  <div class="wrapper">
  <div class="spacer"></div>
<p class="cart-empty"><?php _e( 'Kundvagnen är tom!', 'woocommerce' ) ?></p><br>
<a href="?add-to-cart=33"><button class="btn btnGreen floatNone">Köp gröt!</button></a>
<?php do_action( 'woocommerce_cart_is_empty' ); ?>
</div>
<div class="spacer"></div>
</section>


