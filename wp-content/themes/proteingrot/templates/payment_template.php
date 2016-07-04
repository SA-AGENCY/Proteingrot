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
<div class="hold_all" style="margin: 0 auto; float: none">
 <div class="cart_content_holder" style="border: 0px;">
<?php echo do_shortcode('[woocommerce_klarna_checkout]'); ?>
 </div>
</div>

<div class="cart_total">
 <?php do_action( 'woocommerce_before_cart_totals' ); ?>

	
 
 </div>
</section>

<section class="bgWood">
 <div class="wrapper">

  <div class="width50 cell">
   <span class="medium colorWhite textBlock os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s">So good yet so, </span><br>
   <span class="medium colorWhite textBlock os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s"><i class="fa fa-check" aria-hidden="true"></i> 185 Kcal</span>
   <span class="medium colorWhite textBlock os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s"><i class="fa fa-check" aria-hidden="true"></i> 22% Protein</span>
   <span class="medium colorWhite textBlock os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s"><i class="fa fa-check" aria-hidden="true"></i> 6% Chiafrön</span><br>
   
   <span class="textBlock colorWhite os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s">
   Ingredienser:
   <b>Havregryn</b>, <b>rågflingor</b>, <b>vassleproteinkoncentrat
   (mjölk, sojalecitin)</b>, chiafrön, sockerbetsfiber,
   äppeltärningar, solroslecitin, kanel,
   natriumklorid, arom.
   </span>
   
  </div>
  
  <div class="width50 cell textCenter">
   <img class="grotpase os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0s" src="<?php echo get_template_directory_uri(); ?>/images/grotpase.png">
  </div>
 
 </div>
</section>


<section class="footer-sub">
 <div class="wrapper">
  <div class="medium colorBlack textBlock">Partners</div><br>
  <div class="holder"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/nordicwellness.png"></div>
  <div class="holder"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/bodybox.png"></div>
  <div class="holder"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/herfitness.png"></div>
  <div class="holder"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/placeholder.png"></div>
  <div class="holder"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/placeholder.png"></div>
 </div>
</section>

<section class="footerLast" style="background-color:#74AF27;">
 <img src="<?php echo get_template_directory_uri(); ?>/images/SF_pos.svg" style="width:350px;height:350px;"><br>
 Proteingröt drivs av SuperFuel AB<br>
 All rights reserved Superfuel AB 2016
</section>
<?php wp_footer(); ?> 
<script src="<?php echo get_template_directory_uri(); ?>/resources/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/resources/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/resources/js/material.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/resources/js/onView.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/resources/js/wodry.min.js"></script>
<script>
 $('.wodryRX').wodry({
    animation: 'rotateX',
    delay: 1000,
    animationDuration: 800
});
 </script>
</body>
</html>