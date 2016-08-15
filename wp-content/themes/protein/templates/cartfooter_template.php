<?php
/*
Template Name: Footer in cart page
*/
?>
<?php get_header(); ?>

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