<?php
/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
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
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 ?>
<section class="myaccount lg">
  <div class="wrapper">
  <div class="spacer"></div>
  
<form method="post" class="login" style="text-align: left;">

	<p><?php echo apply_filters( 'woocommerce_reset_password_message', __( 'Vänligen ange ett nytt lösenord nedan.', 'woocommerce') ); ?></p>
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="user_login">
      <input type="text" class="input-text mdl-textfield__input" name="password_1" id="password_1" />
      <label class="mdl-textfield__label" for="password_1">Nytt lösenord</label>
    </div>
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="user_login">
      <input type="text" class="input-text mdl-textfield__input" name="password_2" id="password_2" />
      <label class="mdl-textfield__label" for="password_2">Bekräfta lösenord</label>
    </div>

	<input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
	<input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />

	<div class="clear"></div>

	<?php do_action( 'woocommerce_resetpassword_form' ); ?>

	<p class="woocommerce-FormRow form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="btn btnGreen" value="<?php esc_attr_e( 'Återställ', 'woocommerce' ); ?>" />
	</p>

	<?php wp_nonce_field( 'reset_password' ); ?>

</form>
