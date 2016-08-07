<?php 
session_start();
 ?>
<?php 
/**
*Template Name: Personal cabinet
**/
 ?>
 <?php include ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<?php wp_head(); ?>

</head>
<body>
<div class="background">
<div class="row">
	<div class="col-sm-4">
		<div class="container2">
			<p>There will be personal cabinet</p>
					
			<?php 
				$email = $_SESSION['email'];
			if (isset($_SESSION['email'])) {

				$query = mysql_query("SELECT * FROM users WHERE user_email = '$email'");
				$result = mysql_fetch_array($query);

				echo "<p>Your login: ".$result['user_name']."</p>
					<p>Your email: ".$result['user_email']."</p>
					<p>Your password: ".$result['user_pass']."</p><br><br>";
			}

			 ?>
		</div>
	</div>
	<div class="col-sm-8">
	<div class="container">
   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Proposals</a></li>
    <li><a data-toggle="tab" href="#menu1">Companies</a></li>
    <li><a data-toggle="tab" href="#menu2">Agencies</a></li>
   
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Proposals</h3>
<?php
    if (isset($_SESSION['email'])) {
		// Витягуємо із пропозицій
		$prop_query = mysql_query("SELECT * FROM main WHERE user_email = '$email'");
		$prop_count = mysql_num_rows($prop_query);

		if($prop_count == 0){
			echo "<p>You have no proposals!";
		}
		else {
			for($i=0; $i<$prop_count; $i++){
				$prop_result = mysql_fetch_array($prop_query);

				// echo '<p>Your Proposals: '.$prop_result['title'].'</p>';
				echo '<div class="search-container proposal_personal">
                      <div class="row">
                        <div class="col-sm-4 logo">
                     
                      <img src="http://commercia/wp-content/themes/Commerce/uploads/proposal/'.$prop_result['logo'].'" width="200px" height="100%">
                    </div>
                    <div class="col-sm-8" style="text-align: left;">
                      <p>'.$prop_result['title'].'</p>'.$prop_result['notes'].'&nbsp;'.$prop_result['adress1'].' '.$prop_result['city1'].'
                    <p>'.$prop_count.'</p>
                    </div>
                  </div>
                </div>';

			}
		}	
	}
?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Companies</h3>
      <?php
      // Витяг із компаній
      if (isset($_SESSION['email'])) { 
		$comp_query = mysql_query("SELECT * FROM company WHERE user_email = '$email'");
		$comp_count = mysql_num_rows($comp_query);

		if($comp_count == 0){
			echo "<p>You have no companies!";
		}
		else {
			for($j=0; $j<$comp_count; $j++){
				$comp_result = mysql_fetch_array($comp_query);

				// echo '<p>Your Companies: '.$comp_result['title'].'</p>';
				echo '<div class="search-container company_personal">
                      <div class="row">
                        <div class="col-sm-4 logo">
                     
                      <img src="http://commercia/wp-content/themes/Commerce/uploads/company/'.$comp_result['comp_logo'].'" width="200px" height="100%">
                    </div>
                    <div class="col-sm-8" style="text-align: left;">
                      <p>'.$comp_result['comp_title'].'</p>'.$comp_result['comp_notes'].'&nbsp;'.$comp_result['comp_adress1'].' '.$comp_result['comp_city1'].'
                    <p>'.$comp_count.'</p>
                    </div>
                  </div>
                </div>';

			}
		}
	} ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Agencies</h3>
      <?php
      // Витяг із агенцій
      if (isset($_SESSION['email'])) {
		$agency_query = mysql_query("SELECT * FROM agency WHERE user_email = '$email'");
		$agency_count = mysql_num_rows($agency_query);

		if($agency_count == 0){
			echo "<p>You have no companies!";
		}
		else {
			for($l=0; $l<$agency_count; $l++){
				$agency_result = mysql_fetch_array($agency_query);

				// echo '<p>Your Agency: '.$agency_result['agency_title'].'</p>';
				echo '<div class="search-container agency_personal">
                      <div class="row">
                        <div class="col-sm-4 logo">
                     
                      <img src="http://commercia/wp-content/themes/Commerce/uploads/agency/'.$agency_result['agency_logo'].'" width="200px" height="100%">
                    </div>
                    <div class="col-sm-8" style="text-align: left;">
                      <p>'.$agency_result['agency_title'].'</p>'.$agency_result['agency_notes'].'&nbsp;'.$agency_result['agency_adress1'].' '.$agency_result['agency_city1'].'
                    <p>'.$agency_count.'</p>
                    </div>
                  </div>
                </div>';

			}
		}
	} ?>
    </div>
    
  </div>
</div>
		
	</div>
</div>			
</div>	

 <nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/index.php">SponsorshipProposal.net </a>
      </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="find_proposals/">Proposals</a></li>
        <li><a href="find_sponsors/">Sponsors</a></li>
        <li><a href="find_agencies/">Agencies</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register" > Login/Sign Up</a></li> -->
        <?php if(!$_SESSION['email']) {
          echo "<li><a href='register/' > Login/Sign Up</a></li>";
          } 
          else {
            echo "<li><a href='http://commercia/personal/'>".$_SESSION['email']."</a></li>
            <li><a href='http://commercia/logout/'> Logout</a></li>";
          }

          ?>
        

      </ul><!-- <a href="registration/">Login/Sign Up</a> -->
    </div>
  </div>
</nav>

</body>
</html>
