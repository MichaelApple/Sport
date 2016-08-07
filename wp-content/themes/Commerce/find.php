<?php 
/**
*Template Name: Find
**/
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">
<?php 
include ('db.php');
?>
<div class="background" id="home">
    <h2>SponsorshipProposal.net</h2>
		<div class="container2">
<form id="find" method="POST" action="/search" enctype="multipart/form-data">
	Name company </br> <input class="form-control " type="text" name="title" /></br>
	Category </br> 
	<select class="form-control " name="category[]">
		<option>one</option>
		<option>two</option>
		<option>three</option>
		<option>four</option>
	</select></br>
	Location</br>
	<div class="row">
		<div class="col-sm-6">
			State</br>
			<input class="form-control " type="text" name="state"></br>
		</div>
		<div class="col-sm-6">
			Country</br>
			<input class="form-control " type="text" name="country"></br>
		</div>
	</div>
	<p>Contacts</p>
	<div class="row">
		<div class="col-sm-6">
			First Name</br>
			<input class="form-control " type="text" name="first_name"></br>
			Job title</br>
			<input class="form-control " type="text" name="job_title"></br>
		</div>
		<div class="col-sm-6">	
			Last Name</br>
			<input class="form-control " type="text" name="last_name"></br>

			Phone</br>
			<input class="form-control " type="text" name="phone"></br>
		</div>
	</div>
	Email</br>
	<input class="form-control " type="text" name="email"></br>
	Target audience</br>
	Gender</br>
	<select class="form-control " name="gender[]">
		<option>Male</option>
		<option>Female</option>
	</select></br>
	<input class="form-control " type="number" name="gender_prc"></br>
	Age</br>
	<select class="form-control " name="age[]">
		<option>0-17</option>
		<option>18-24</option>
		<option>25-34</option>
		<option>35-44</option>
		<option>45-54</option>
		<option>55-64</option>
		<option>64+</option>
	</select></br>
	<input class="form-control " type="number" name="age_prc"></br>
	Marital status</br>
	<select class="form-control " name="marital_status[]">
		<option>Single</option>
		<option>Married/couple</option>
		<option>Couple with children</option>
	</select></br>
	<input class="form-control " type="number" name="marital_status_prc"></br>
	Household income</br>
	<select class="form-control " name="income[]">
		<option>$0-$24,999</option>
		<option>$25,000-$49,999</option>
		<option>$50,000-$74,999</option>
		<option>$75,000-$99,999</option>
		<option>$100,000-$149,000</option>
		<option>$150,000 or more</option>
	</select></br>
	<input class="form-control " type="number" name="income_prc"></br>
	<input  class="btn btn-info btn-lg" type="submit" name="ok3" value="Search" />
</form>
</div>
</div>

<nav class="navbar navbar-default navbar-fixed-top">
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
</nav>

<?php get_footer( ); ?>