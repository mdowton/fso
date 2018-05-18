<?php
/*
Template Name: Accept Terms&Condition
*/
get_header();
 
$to = 'veeermca2010@gmail.com';
$subject = 'Accept Terms & Conditons';
$from = $_GET['email'];
$body = '<div class="jumbotron terms-email text-xs-center">
			  <h1 class="display-3">Thank You!</h1>
			  <p class="lead"><strong>Your order is confiremd,Please check your email</strong> for further instructions admin will contact you as soon as possible.</p>
			  <hr>
			  <p>
				Having trouble? <a href="https://www.framelessshowersonline.com.au/contact-us/">Contact us</a>
			  </p>
			  <p class="lead">
				<a class="btn btn-primary btn-sm" href="https://www.framelessshowersonline.com.au/" role="button">Continue to Homepage</a>
			  </p>
		  </div>';
   // To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Create email headers
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
 
if(mail( $to, $subject, $body, $headers ))
{
	echo '<div class="jumbotron terms-email text-xs-center">
			  <h1 class="display-3">Thank You!</h1>
			  <p class="lead"><strong>Your order is confiremd,Please check your email</strong> for further instructions admin will contact you as soon as possible.</p>
			  <hr>
			  <p>
				Having trouble? <a href="https://www.framelessshowersonline.com.au/contact-us/">Contact us</a>
			  </p>
			  <p class="lead">
				<a class="btn btn-primary btn-sm" href="https://www.framelessshowersonline.com.au/" role="button">Continue to Homepage</a>
			  </p>
		  </div>';
}
else
{
	echo '<div class="jumbotron terms-email text-xs-center">
			  <h1 class="display-3">Thank You!</h1>
			  <p class="lead"><strong>Your order is not confiremd,Please check your email</strong> for further instructions , please contact to admin regarding your order.</p>
			  <hr>
			  <p>
				Having trouble? <a href="https://www.framelessshowersonline.com.au/contact-us/">Contact us</a>
			  </p>
			  <p class="lead">
				<a class="btn btn-primary btn-sm" href="https://www.framelessshowersonline.com.au/" role="button">Continue to Homepage</a>
			  </p>
		  </div>';
}


get_footer();
?>