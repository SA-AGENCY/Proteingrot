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
  <span class="massive colorWhite"><img src="http://localhost:9000/wp-content/themes/proteingrot/images/awsome-frukost.svg" style="height:250px;width:250px;"></span>
  </div>
  <!--<div class="width50 cell textCenter">
  <img class="grotpase" src="<?php echo get_template_directory_uri(); ?>/images/grotpase.png">
  </div>-->
  <h4 class="colorWhite textBlock">EXAKT RÄTT INNEHÅLL FÖR<br>
ATT STARTA DAGEN LIKE A BAWS!<br>
ATT SMAKEN SEDAN ÄR GUDOMLIG<br>
MAKES IT A NO-BRAINER.</h4>
  
  <a href="?add-to-cart=33"><button class="button frontButton">Köp proteingröt</button></a>
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


<?php get_footer(); ?>

