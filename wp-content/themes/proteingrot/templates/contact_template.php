<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>
<br>
<br>
<section style="background-color:#74af26;">
 <div class="wrapper" style="text-align:center;">
	<h2 style="color:#fff;"> Kontakt! </h2>

	<p style="color:#fff;">VILL DU VETA MER OM ELLER BLI
ÅTERFÖRSÄLJARE AV VÅR GRÖT? <br>

KONTAKTA OSS PÅ:<br>
08-7108000<br>
info@proteingrot.se</p>	


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