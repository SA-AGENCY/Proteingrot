<?php

// WooCommerce Support
add_theme_support('woocommerce');

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'SEK': $currency_symbol = ':-'; break;
     }
     return $currency_symbol;
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Remove admin menu
add_filter('show_admin_bar', '__return_false');
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

//Köp knapp till product
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 
        return __( 'Köp', 'woocommerce' );
 
}

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
function woo_archive_custom_cart_button_text() {
 
        return __( 'Köp', 'woocommerce' );
 
}


// Tar bort länk till produkt-page

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}

add_action('init','custom_login');

/*
function custom_login(){
 global $pagenow;
 if( 'wp-login.php' == $pagenow ) {
  wp_redirect('/mitt-konto');
  exit();
 }
} */



// add item to cart on visit
add_action( 'template_redirect', 'add_product_to_cart' );
function add_product_to_cart() {
	if ( ! is_admin() ) {
		$product_id = 33;
		$found = false;
		//check if product already in cart
		if ( sizeof( WC()->cart->get_cart() ) > 0 ) {
			foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
				$_product = $values['data'];
				if ( $_product->id == $product_id )
					$found = true;
			}
			// if product not found, add it
			if ( ! $found )
				WC()->cart->add_to_cart( $product_id );
		} else {
			// if no products in cart, add it
			WC()->cart->add_to_cart( $product_id );
		}
	}
}

add_filter( 'woocommerce_add_to_cart_redirect', 'redirect_to_checkout' );
function wc_custom_cart_redirect() {
  return get_permalink( wc_get_page_id( '/betalning' ) );
}


?>


