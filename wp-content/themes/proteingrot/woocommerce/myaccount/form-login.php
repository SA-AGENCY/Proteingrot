<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>


<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>


<?php endif; ?>

<section class="myaccount lg">
  <div class="wrapper">
  <div class="spacer"></div>
   <form method="post" class="login">
   <?php wc_print_notices(); ?>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="name">
      <input type="text" class="input-text mdl-textfield__input" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
      <label class="mdl-textfield__label" for="tt1">Användarnamn eller e-post</label>
    </div>
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="name">
      <input class="mdl-textfield__input input-text" type="password" name="password" id="password" />  
      <label class="mdl-textfield__label" for="tt1">Lösenord</label>
    </div>
    
    <p class="form-row">
	  <?php wp_nonce_field( 'woocommerce-login' ); ?>
	  
      <input type="submit" class="btn btnGreen" name="login" value="<?php esc_attr_e( 'Logga in', 'woocommerce' ); ?>" />
	
      <label for="rememberme" class="inline">
	    <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> 
		<?php _e( 'Kom ihåg mig', 'woocommerce' ); ?>
	  </label>
     </p>
     
     <p class="lostPassword">
	  <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Glömt ditt lösenord?', 'woocommerce' ); ?></a>
	 </p>

	 <?php do_action( 'woocommerce_login_form_end' ); ?>
  
   </form>
  </div>
</section>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
