<?php
  // Registration routine
  
  if(isset($_POST['sent']) && $_POST['sent'] == 'true') { // has the form been submitted?
    
    // You need to sanitize data here
    			
  	$password = $_POST['password'];
  	$username = $_POST['username'];
  	$email = $_POST['email'];			
	
  	// Create a new WordPress user
  	
	wp_insert_user(array(
		    	'user_pass' => $password,
		    	'user_login'=> $username,
		    	'user_email' => $email,
		    	'role' => 'subscriber')
    );
		    	
    $login = wp_login_url(); // Login page URL
    wp_redirect($login);  // Redirect the user
    exit();


}
?>
<?php
/**
 Template Name: Sign Up
 */

get_header(); ?>



<section class="myaccount lg">
  <div class="wrapper">
  <div class="spacer"></div>

   

<div class="spacer"></div>
</div>
</section>

<?php get_footer(); ?>