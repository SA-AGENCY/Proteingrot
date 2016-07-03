<?php
/*
Template Name: Startsida
*/
?>
<?php get_header(); ?>

<?php 
$image = get_field('front_picture');
if( !empty($image) ): ?>
<section class="row fullSize textCenter" style="background: url(<?php echo $image['url']; ?>) center;" >
<?php endif; ?>
<div class="shadow"></div>
 <div class="cell">

  <span class="massive colorWhite"><?php the_field('front_heading'); ?></span>
  <h4 class="colorWhite textBlock"><?php the_field('front_heading_subtitle'); ?></h4>
  
  <a href="#Köp"><button class="button frontButton">Köp proteingröt</button></a>
 </div>
 
 <div class="scrollDown animated bounce infinite"></div>
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

<section class="product-front" id="köp">
<div class="wrapper">
<div class="row">
  <div class="width50 cell">
   <img class="grotpase os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s" src="<?php echo get_template_directory_uri(); ?>/images/grotpase.png">
  </div>
  
  <div class="width50 cell">
  <span class="medium colorWhite textBlock os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s">
  Det enkla valet.</span><br>
  <span class="textBlock colorWhite os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="0s">
  Detta må vara det enklaste valet du gjort i ditt liv, att köpa vår proteingröt är grymt - då vår gröt är the world's most amazing frukost. Så vad väntar du på?
  </span><br><br>
   <a href="?add-to-cart=33"><button class="btn buynow-button floatNone">Köp så det ryker!</button></a>
  </div>
 </div>
</section>
<?php get_footer(); ?>

