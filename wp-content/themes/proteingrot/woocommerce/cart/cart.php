<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_cart' ); ?>

<section class="padding10">
 
 <div class="discountOverlay">
  <div class="discountHolder">
   <div class="discountBox">
   <span class="discountClose"><i class="fa fa-times"></i></span>
    <b>Rabattkupong</b>
    
    
    <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="name">
      <input type="text" class="input-text mdl-textfield__input" name="coupon_code" id="coupon_code" />
      <label class="mdl-textfield__label" for="coupon_code">Ange din rabattkupong</label>
    </div>
    
    <input type="submit" class="btn btnGreen" name="apply_coupon" value="Ge mig rabatt!">
    <?php do_action( 'woocommerce_cart_coupon' ); ?>
    
    </form>
    
   </div>
  </div>
 </div>
 
 <div class="hold_all">
  <?php wc_print_notices(); ?>
 <div class="cart_content_holder">
 <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
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
				
       
     <div class="product_img grayBG">Produkt</div>
     <div class="product_info">Beskrivning</div>
     
     <div class="product_img product_no_border">
	  <?php 
	  $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
	    if ( ! $product_permalink ) {echo $thumbnail;} else {printf( $thumbnail );}
	  ?>
	 </div>

    <div class="product_info">
    
						<?php
							if ( ! $product_permalink ) {
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
							} else {
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<div class="%s">%s</div>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
							}

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

							
						?>
                        
                 
                        
						 <p class="cart_text"><?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );	?> x </p><br><?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),									
									'min_value'   => '0'
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
						?>
                        <br>
                        <?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
								'<b><a href="%s" class="remove_product" title="%s" data-product_id="%s" data-product_sku="%s">Ta bort produkt</a></b>',
								esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
								__( 'Remove this item', 'woocommerce' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							), $cart_item_key );
						?>
                        
                   
		</div>

					
						
		
				<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
		?>
        
        </div>
        <!-- Coupons -->
        <?php if ( wc_coupons_enabled() ) { ?>
		<div class="coupon">
		
        <p class="if_couponCode">Rabattkupong?</p>
        
        
        
        <input type="submit" class="btn btnGreen" name="update_cart" value="<?php esc_attr_e( 'Uppdatera kundvagnen', 'woocommerce' ); ?>" />

		<?php do_action( 'woocommerce_cart_actions' ); ?>

		<?php wp_nonce_field( 'woocommerce-cart' ); ?>

		<?php do_action( 'woocommerce_cart_coupon' ); ?>
	    </div>
		<?php } ?>
 </form>
</div>

 <!-- Cart Totals -->
 <div class="cart_total">
  <?php do_action( 'woocommerce_cart_collaterals' ); ?>
 
 </div>
</section>
<?php do_action( 'woocommerce_after_cart' ); ?>
