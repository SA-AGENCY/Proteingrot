<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
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

	Glömt ditt lösenord?

    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="user_login">
      <input type="text" class="input-text mdl-textfield__input" name="user_login" id="user_login" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
      <label class="mdl-textfield__label" for="user_login">Användarnamn eller e-post</label>
    </div>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="woocommerce-FormRow form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="btn btnGreen" value="<?php esc_attr_e( 'Återställ lösenord', 'woocommerce' ); ?>" />
	</p>

	<?php wp_nonce_field( 'lost_password' ); ?>

</form>

</div>
<div class="spacer"></div>
</section>