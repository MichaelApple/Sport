<?php 
/**
*Template Name: Register
**/
 ?>
 <?php include ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link id="buttons-css" media="all" type="text/css" href="http://commercia/wp-includes/css/buttons.min.css?ver=4.4.3" rel="stylesheet">
<link id="open-sans-css" media="all" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&subset=latin%2Clatin-ext&ver=4.4.3" rel="stylesheet">
<link id="dashicons-css" media="all" type="text/css" href="http://commercia/wp-includes/css/dashicons.min.css?ver=4.4.3" rel="stylesheet">
  <link id="login-css" media="all" type="text/css" href="http://commercia/wp-admin/css/login.min.css?ver=4.4.3" rel="stylesheet">
<style type="text/css">

html {
	}
#login {
	width: 320px;
	}
#login form {
	
	-webkit-box-shadow: 5px 5px 10px #121212;
	-moz-box-shadow: 5px 5px 10px #121212;
	-ms-box-shadow: 5px 5px 10px #121212;
	-o-box-shadow: 5px 5px 10px #121212;
	box-shadow: 5px 5px 10px #121212;
	}
#login h1 {
	display: none;
	}

</style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<?php wp_head(); ?>
</head>
<body class="login login-action-register wp-core-ui locale-en-gb">
	<div id="login">
		<form method="post" action="http://commercia/register/">

		<h2 style="font-weight: 700;font-size: 30px;margin-bottom: 20px;">Sign In</h2>
			<p><label for="user_email">Your Email: <br><input id="user_email" class="input" type="email" name="email"></label></p>
			<p><label for="user_login">Your Username: <br><input id="user_login" class="input" type="text" name="username"></label></p>
			<p><label for="user_pass">Your Password: <br><input id="user_pass" class="input" type="password" name="password"></label></p>
			<!-- <div class="social_connect_ui ">
<p class="comment-form-social-connect">
<label>Click below to sign in using your social account</label>
</p>
<div class="social_connect_form">
<a class="social_connect_login_facebook" title="Facebook" href="javascript:void(0);">
<img src="http://commercia/wp-content/plugins/social-connect/media/img/facebook.png" alt="Facebook">
</a>
<br>
<a class="social_connect_login_google_plus" title="Google+" href="javascript:void(0);">
<img src="http://commercia/wp-content/plugins/social-connect/media/img/google_plus.png" alt="Google+">
</a>
</div>
<p></p>
<div id="social_connect_facebook_auth">
<input type="hidden" value="1706416916310453" name="client_id">
<input type="hidden" value="http://commercia/index.php?social-connect=facebook-callback" name="redirect_uri">
</div>
<div id="social_connect_twitter_auth">
<input type="hidden" value="http://commercia/index.php?social-connect=twitter" name="redirect_uri">
</div>
<div id="social_connect_google_auth">
<input type="hidden" value="http://commercia/index.php?social-connect=google" name="redirect_uri">
</div>
<div id="social_connect_google_plus_auth">
<input type="hidden" value="http://commercia/index.php?social-connect=google-plus" name="redirect_uri">
</div>
<div id="social_connect_yahoo_auth">
<input type="hidden" value="http://commercia/index.php?social-connect=yahoo" name="redirect_uri">
</div>
<div id="social_connect_wordpress_auth">
<input type="hidden" value="http://commercia/index.php?social-connect=wordpress" name="redirect_uri">
</div>
<div class="social_connect_wordpress_form" title="WordPress">
<p>Enter your WordPress.com blog URL</p>
<br>
<p>
</div>
</div> -->
			<br class="clear">
			<p><input id="wp-submit" class="button button-info button-large" type="submit" name="submit" value="Go"></p>
			<br>
			<a href="login/">Log In</a>


		</form>
		<a href="http://commercia/">← Back to Commerce</a>
	</div>
<?php 
if (isset($_POST['submit'])) {
	$user_name = $_POST['username'];
	$user_email = $_POST['email'];
	$user_password = $_POST['password'];

	$check_email = "SELECT * FROM users WHERE user_email = '$user_email'";
	$run = mysql_query($check_email);

	if (mysql_num_rows($run) > 0) {
		echo "<script>alert('Email is already exist in database');</script>";
		exit();
	}

	$query = "INSERT INTO users (user_email,user_name,user_pass) values ('$user_email','$user_name','$user_password')";

	if(mysql_query($query)) {
		echo "You are registered!";
	}
}
 ?>

</body>
</html>
