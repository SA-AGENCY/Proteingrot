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
	<div class="width50 cell">
  <span class="massive colorWhite"><img src="<?php echo get_template_directory_uri(); ?>/images/awsome-frukost.svg" style="height:250px;width:250px;"></span>
  </div>
  <!--<div class="width50 cell textCenter">
  <img class="grotpase" src="<?php echo get_template_directory_uri(); ?>/images/grotpase.png">
  </div>-->
  <h4 class="colorWhite textBlock">EXAKT RÄTT INNEHÅLL FÖR<br>
ATT STARTA DAGEN LIKE A BAWS!<br>
ATT SMAKEN SEDAN ÄR GUDOMLIG<br>
MAKES IT A NO-BRAINER.</h4>
  <br>
  <a href="?add-to-cart=33"><button class="btn btnGreen">Köp proteingröt</button></a>
  <br>
  <br>
  <br>
 </div>
 
 <div class="scrollDown animated bounce infinite"></div>
</section>

<section style="background-color:#74af26;">
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
  
  <a href="?add-to-cart=33"><button class="btn btnGreen floatLeft os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0s">Köp gröt</button></a>
 
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

