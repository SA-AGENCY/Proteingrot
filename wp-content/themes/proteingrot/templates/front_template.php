<?php
/*
Template Name: Startsida
*/
?>
<?php get_header(); 
do_action( 'woocommerce_before_cart' ); ?>

<?php 
$image = get_field('front_picture');
if( !empty($image) ): ?>
<section class="row fullSize textCenter">
<div class="frontPicture zoomHover"></div>
<?php endif; ?>
<div class="shadow"></div>
 <div class="cell">
	<div class="width50 cell">
  <img src="<?php echo get_template_directory_uri(); ?>/images/awsome-frukost.svg" class="most-awesome">
  </div>
  <!--<div class="width50 cell textCenter">
  <img class="grotpase" src="<?php echo get_template_directory_uri(); ?>/images/grotpase.png">
  </div>-->
  <h4 class="colorWhite textBlock frontTitle">
   Exakt rätt innehåll för att starta dagen like a baws, att smaken sedan är gudomlig makes it a no-brainer.</h4>
  <a href="#buy"><button class="btn btnGreen floatNone buyfront">Köp proteingröt</button></a>

 </div>
 
 <div class="scrollDown animated bounce infinite"></div>
</section>

<section style="background-color:#74af26; padding: 100px 0px;">
<div class="wrapper" style="text-align:center;">
	<h2 id="#anchorprotein" style="color:#fff;"> <b>Varför proteingröt?</b> </h2><br>

	<p style="color:#fff;">Det är sällan man hinner med en lugn, god & nyttig frukost och<br>
	det är just därför vi tagit fram vår gröt. Portionsförpackad för<br>
	att alltid ha perfekt balanserad blandning och fräscht innehåll.<br>
	Den är enkel att ta med och den smakar tydligen supergott om<br>
	man går in och kollar vår Instagram ; )<br><br>
Jo just det, den innehåller exakt de fetter, proteiner och kolisar<br>
 du behöver för att kickstarta dagen like a baws. And of course,<br><b> NO SOCKER!</b>
</p>	


 </div>
</section>
<section class="shopSection fullSize row textCenter" id="buy">
<div class="cell">
	
<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>
<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
  
<!-- Coupons -->

 <div class="discountOverlay">
  <div class="discountHolder">
   <div class="discountBox">
   <span class="discountClose"><i class="fa fa-times"></i></span>
    <b>Rabattkupong</b>
    
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="name">
      <input type="text" class="input-text mdl-textfield__input" name="coupon_code" id="coupon_code" />
      <label class="mdl-textfield__label" for="coupon_code">Ange din rabattkupong</label>
    </div>
    
    <input type="submit" class="btn btnGreen" name="apply_coupon" value="Ge mig rabatt!">
    <?php do_action( 'woocommerce_cart_coupon' ); ?>
    
    
   </div>
  </div>
 </div>
 
 <!-- End Coupons -->      
        
      
<div class="shopHolder">
<div class="freeshipping"></div>
<div class="shopTitle">Beställ</div>
<div class="mainShop">
<span class="title">8-pack <span class="colorRed">149:-</span></span>

<div class="checkout">
<?php
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
</div>

<div class="checkout">
<?php }} do_action( 'woocommerce_cart_contents' ); ?>
<input type="submit" class="btn btnGreen floatNone" name="update_cart" value="<?php esc_attr_e( 'Till kassan', 'woocommerce' ); ?>" /><br>
<span href="#" class="if_couponCode">Rabattkupong?</span>
</div>

<span class="deliveryNotice">Vid beställning av mer än ett 8 pack skickas det med DHL.
Levereras på 1-3 arbetsdagar.</span>
</div>
</div>  





<?php do_action( 'woocommerce_cart_actions' ); ?>
<?php wp_nonce_field( 'woocommerce-cart' ); ?>
<?php do_action( 'woocommerce_after_cart_contents' ); ?>
<?php do_action( 'woocommerce_after_cart_table' ); ?>
        

</div>
</form>
<?php do_action( 'woocommerce_after_cart' ); ?>
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



<section class="lifesum" style="position: relative;">
 <div class="wrapper">
 <img src="<?php echo get_template_directory_uri(); ?>/images/bg/lifesumbg.png" class="lifesumbg">
 <img src="<?php echo get_template_directory_uri(); ?>/images/bg/lifesumbgpepper.png" class="lifesumbgPepper">
 
  <div class="width50 cell textCenter">
   <img class="grotpase os-animation lifesumIphone" data-os-animation="bounceInLeft" data-os-animation-delay="0s" src="<?php echo get_template_directory_uri(); ?>/images/iphone.png">
  </div>
  
  <div class="width50 cell">
  
  <img src="<?php echo get_template_directory_uri(); ?>/images/logos/lifesum.png" class="lifesumLogo os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0s">
  
  <span class="small colorBlack textBlock os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0s">  Proteingröten är inte bara smakligt god, utan även nyttig. Använder du Lifesum för att hålla koll på kosten kommer vår gröt att hjälpa dig på vägen. Gröten är A klassad på Lifesum!
  </span><br>
  
  <a href="#buy"><button class="btn btnGreen floatLeft os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0s">Köp gröt</button></a>
 
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
<h4>Instagram</h4>
<?php echo do_shortcode('[instagram-feed id="1782467428" showheader=false background=#74AF27]'); ?>
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
 
 <script>
 $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
 </script>
</body>
</html>

