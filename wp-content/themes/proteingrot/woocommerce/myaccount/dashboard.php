<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account-dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woothemes.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrapper">

<div style="width: 100%; padding: 50px 0px; padding-top: 100px;" class="textCenter">

<?php 
$my_orders_columns = apply_filters( 'woocommerce_my_account_my_orders_columns', array(
	'order-number'  => __( 'Order', 'woocommerce' ),
	'order-date'    => __( 'Date', 'woocommerce' ),
	'order-status'  => __( 'Status', 'woocommerce' ),
	'order-total'   => __( 'Total', 'woocommerce' ),
	'order-actions' => '&nbsp;',
) );

$customer_orders = get_posts( apply_filters( 'woocommerce_my_account_my_orders_query', array(
	'numberposts' => $order_count,
	'meta_key'    => '_customer_user',
	'meta_value'  => get_current_user_id(),
	'post_type'   => wc_get_order_types( 'view-orders' ),
	'post_status' => array_keys( wc_get_order_statuses() )
) ) );

if ( $customer_orders ) : ?>

<div class="spacer"></div>
<div class="hold_all textLeft">
<div class="login">
<h3>
	<?php
		echo sprintf( esc_attr__( 'Välkommen %s%s%s.', 'woocommerce' ), '<strong>', esc_html( $current_user->display_name ), '</strong>', '<a href="' . esc_url( wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) ) ) . '">', '</a>' );
	?>
</h3><br><br>
    Orderhistorik<br>
	<div class="cart_content_holder">
   
    <div class="product_img grayBG">Datum</div>
    <div class="product_info">Information</div>

	<?php foreach ( $customer_orders as $customer_order ) :
	$order      = wc_get_order( $customer_order );
	$item_count = $order->get_item_count();
	?>
	
 
	<?php foreach ( $my_orders_columns as $column_id => $column_name ) : ?>
	
	 <?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
	  <?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>
	  
	  <?php elseif ( 'order-number' === $column_id ) : ?>
		<div class="product_img product_no_border">
		  
		  
		  <?php elseif ( 'order-date' === $column_id ) : ?>
		  <time datetime="<?php echo date( 'd-m-Y', strtotime( $order->order_date ) ); ?>" title="<?php echo esc_attr( strtotime( $order->order_date ) ); ?>">
		  
		  <?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></time>
        </div>
        
        <div class="product_info">
	    <span class="orderNum">
		 Order: <?php echo _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number(); ?>
        </span>
							

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo wc_get_order_status_name( $order->get_status() ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php echo sprintf( _n( '%s for %s item', '%s for %s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ); ?>

							
							<?php endif; ?>
				
					<?php endforeach; ?>
	
			<?php endforeach; ?>

<?php endif; ?>
		</div>	
    </div>	


</div>

</div>

<div class="cart_total textCenter">
 <h3>Mitt konto</h3>
 <button class="checkout-button" style="margin-top: 10px;">Kontoinställningar</button>
 <button class="checkout-button" style="margin-top: 10px;">Leveransadress</button>	
 <a href="<?php echo wp_logout_url( $redirect ); ?>" class="signOut">Logga ut</a>
</div>
 
 
<div class="spacer"></div>
</div>
<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );
?>
