<?php 
session_start();
 ?>
<?php 
/**
*Template Name: Login
**/
 ?>
 <?php include ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		<form method="post" action="http://commercia/login/" style="text-align: center;">
			<label for="user_email" class="mq-icon-input">
			<span class="mq-svg-icon" data-icon="user-20-#b0b4b7" style="min-width: 1px;">
<svg width="20" height="20" viewBox="0 0 20 20" fill="#b0b4b7">
<path d="M12.165 13.725c-0.432-0.069-0.442-1.256-0.442-1.256s1.269-1.256 1.545-2.945c0.744 0 1.203-1.796 0.459-2.428 0.031-0.665 0.956-5.221-3.728-5.221-4.684 0-3.759 4.556-3.728 5.221-0.744 0.632-0.285 2.428 0.459 2.428 0.277 1.689 1.545 2.945 1.545 2.945s-0.010 1.187-0.442 1.256c-1.391 0.221-6.585 2.512-6.585 5.025h17.5c0-2.512-5.194-4.803-6.585-5.025z">
</svg>

			<input id="user_email" class="input" type="email" name="email"></span></label>
			<p><label for="user_pass">Your Password: <input id="user_pass" class="input" type="password" name="password"></label></p>
			<br ><p><input id="wp-submit" type="submit" name="login" value="Log In" ></p>
			<br><br><a href="register/">Register here</a>
		</form>
		
	</div>
<?php 
if (isset($_POST['login'])) {
	$password = $_POST['password'];
	$email = $_POST['email'];

	$check_user = "SELECT * FROM users WHERE user_pass = '$password' AND user_email = '$email'";

	$run = mysql_query($check_user);
	if (mysql_num_rows($run) > 0) {

		$_SESSION['email'] = $email;

		echo "<script>window.open('personal/', '_self')</script>";
	}
	else {
		echo "Email or Password is wrong!";
	}
}
 ?>
</body>
</html>
