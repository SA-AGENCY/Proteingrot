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

// Remove admin menu
add_filter('show_admin_bar', '__return_false');

?>