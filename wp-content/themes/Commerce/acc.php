  <?php 
/**
*Template Name: Account
**/
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title> Your account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  



</head>
<body>
	<p>
		<?php global $current_user;
		get_currentuserinfo();

		echo "Ім'я користувача: " . $current_user->user_login . "\n";
		echo 'E-mail : ' . $current_user->user_email . "\n";
		echo "Ім'я: " . $current_user->user_firstname . "\n";
		echo '<p>Прізвище: </p>' . $current_user->user_lastname . "\n";
		echo 'Відображати як: ' . $current_user->display_name . "\n";
		echo 'ID користувача: ' . $current_user->ID . "\n";
		 ?>
	</p>
	<!-- <nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/index.php">SponsorshipProposal</a>
      </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register"> Login/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav> -->


</body>
</html>