<!doctype html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
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
  <?php wp_head(); ?>
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
   <span class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
   <?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
   </span>
  </div>
  
 </div>
</nav>