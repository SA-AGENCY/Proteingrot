<?php
/**
 Template Name: Sign Up
 */

get_header(); ?>



<section class="myaccount lg">
  <div class="wrapper">
  <div class="spacer"></div>

  <?php echo do_shortcode('[pg_registration_form]'); ?>

  <div class="spacer"></div>
</div>
</section>

<?php get_footer(); ?>