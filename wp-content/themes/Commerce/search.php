<?php 
/**
*Template Name: Search
**/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  
<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">
<div class="background" id="home">
   
    <div class="row">
      <div class="col-sm-4">
        <div class="container2">
<form id="left-search" method="POST" action="#" enctype="multipart/form-data">  
      <p>Filter by:</p>
      <p>Location
      <input class="form-control " type="text" name="country" placeholder="Country"></p>
      <p><input class="form-control " type="text" name="state" placeholder="State"></p>
      <p><input class="form-control " type="text" name="state" placeholder="City"></p>
      <p>Price</p>
      <p><input class="form-control " placeholder="From:" type="number" name="price1" ><input class="form-control " type="number" name="price2" placeholder="To:"></p>
      <p>Date</p>
      <div class="row">
        <div class="col-sm-6 form-group">
            <div class='input-group date' id='datetimepicker4'>
                <input type='text' class="form-control" placeholder="From:" name="date_of_proposal_from" />
                <span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>
            </div>
        </div>
        <div class="col-sm-6 form-group">
            <div class='input-group date' id='datetimepicker5'>
                <input type='text' class="form-control" placeholder="To:" name="date_of_proposal_to" />
                <span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>
            </div>
        </div>
      </div>
<!--       <input class="form-control " type="text" name="date"></br> -->
      <p>Sport
        <select class="form-control" name="type_proposal[]">
          <option>one</option>
          <option>two</option>
          <option>three</option>
          <option>four</option>
        </select>
      </p>
      <p>Type
        <select class="form-control" name="sport[]">
          <option>football</option>
          <option>basketball</option>
          <option>hockey</option>
          <option>tenis</option>
        </select>
      </p>
 
  
  <input  class="btn btn-info btn-lg" type="submit" name="ok3" value="Search" />
</form>
</div>
</div>
<div class="col-sm-8">
        <div class="search-wrapper">
<?php
include ('db.php');
$name_company = $_POST['name_company'];
$category = $_POST['category'];
$state = $_POST['state'];
$country = $_POST['country'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$job_title = $_POST['job_title'];
$phone_company = $_POST['phone_company'];
$email_company = $_POST['email_company'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$marital_status = $_POST['marital_status'];
$income = $_POST['income'];

$gender_prc = $_POST['gender_prc'];
if(empty($_POST['gender_prc'])) {
  $_POST['gender_prc'] = '0';
  $gender_prc = $_POST['gender_prc'];
}
$age_prc = $_POST['age_prc'];
if(empty($_POST['age_prc'])) {
  $_POST['age_prc'] = '0';
  $age_prc = $_POST['age_prc'];
}
$marital_status_prc = $_POST['marital_status_prc'];
if(empty($_POST['marital_status_prc'])) {
  $_POST['marital_status_prc'] = '0';
  $marital_status_prc = $_POST['marital_status_prc'];
}
$income_prc = $_POST['income_prc'];
if(empty($_POST['income_prc'])) {
  $_POST['income_prc'] = '0';
  $income_prc = $_POST['income_prc'];
}

if(isset($_POST['ok3'])){
    foreach ($category as $category_value){
      $category_value = addslashes($category_value);
      $category_value = htmlspecialchars($category_value);
    }

      $name_company = addslashes($name_company);
      $state = addslashes($state);
      $country = addslashes($country);
      $first_name = addslashes($first_name);
      $last_name = addslashes($last_name);
      $job_title = addslashes($job_title);
      $phone_company = addslashes($phone_company);
      $email_company = addslashes($email_company);

      $name_company = htmlspecialchars($name_company);
      $state = htmlspecialchars($state);
      $country = htmlspecialchars($country);
      $first_name = htmlspecialchars($first_name);
      $last_name = htmlspecialchars($last_name);
      $job_title = htmlspecialchars($job_title);
      $phone_company = htmlspecialchars($phone_company);
      $email_company = htmlspecialchars($email_company);

      $query1 = mysql_query("INSERT INTO companies (name_company, category_company, state, country, first_name, last_name, job_title, phone_company, email_company) VALUES('$name_company', '$category_value', '$state', '$country', '$first_name', '$last_name', '$job_title', '$phone_company', '$email_company')");
      
    foreach ($gender as $gender_value) {
      $gender_value = addslashes($gender_value);
      $gender_value = htmlspecialchars($gender_value);
    }
    foreach ($age as $age_value) {
      $age_value = addslashes($age_value);
      $age_value = htmlspecialchars($age_value);
    }
    foreach ($marital_status as $marital_status_value) {
      $marital_status_value = addslashes($marital_status_value);
      $marital_status_value = htmlspecialchars($marital_status_value);
    }
    foreach ($income as $income_value) {            
      $income_value = addslashes($income_value);
      $income_value = htmlspecialchars($income_value);
    }
    $fltr='';
    // Умова фільтру

    // по статі
    if($gender_value == 'Male'){$fltr1 = 'male >'.$gender_prc;}
    else if($gender_value == 'Female'){$fltr1 = 'female >'.$gender_prc;}

    // по віку
    if($age_value == '0-17'){$fltr2 = 'age1 >'.$age_prc;}
    else if($age_value == '18-24'){$fltr2 = 'age2 >'.$age_prc;}
    else if($age_value == '25-34'){$fltr2 = 'age3 >'.$age_prc;}
    else if($age_value == '35-44'){$fltr2 = 'age4 >'.$age_prc;}
    else if($age_value == '45-54'){$fltr2 = 'age5 >'.$age_prc;}
    else if($age_value == '55-64'){$fltr2 = 'age6 >'.$age_prc;}
    else if($age_value == '64+'){$fltr2 = 'age7 >'.$age_prc;}

    // по сімейному стані
    if($marital_status_value == 'Single'){$fltr3 = 'marital1 >'.$marital_status_prc;}
    else if($marital_status_value == 'Married/couple'){$fltr3 = 'marital2 >'.$marital_status_prc;}
    else if($marital_status_value == 'Couple with children'){$fltr3 = 'marital3 >'.$marital_status_prc;}

    // по доходу сім'ї
    if($income_value == '$0-$24,999'){$fltr4 = 'income1 >'.$income_prc;}
    else if($income_value == '$25,000-$49,999'){$fltr4 = 'income2 >'.$income_prc;}
    else if($income_value == '$50,000-$74,999'){$fltr4 = 'income3 >'.$income_prc;}
    else if($income_value == '$75,000-$99,999'){$fltr4 = 'income4 >'.$income_prc;}
    else if($income_value == '$100,000-$149,000'){$fltr4 = 'income5 >'.$income_prc;}
    else if($income_value == '$150,000 or more'){$fltr4 = 'income6 >'.$income_prc;}

    $fltr = $fltr1.' AND '.$fltr2.' AND '.$fltr3.' AND '.$fltr4;

    $query2 = mysql_query("SELECT * FROM main WHERE $fltr");
    $row = mysql_fetch_array($query2);
    do{
      echo '
                <div class="search-container">
                <div class="row">
                  <div class="col-sm-4 logo">
                    <p>There must be a logo</p>
                    <img src="'.$row['photo'].'">
                  </div>
                  <div class="col-sm-8" style="text-align: left;">
                    <p>'.$row['title'].'</p>'.$row['sport'].'&nbsp;'.$row['other_sponsors'].' '.$row['name'].'
                  </div>
                </div>
                </div>';}
    while($row = mysql_fetch_array($query2));
}
else{
  echo '<div class="search-container">
        <div class="row">
          <div class="col-sm-4">
            <h1>Ви зайшли на цю сторінку неправильно. Зайдіть через форму.</h1>
          </div>
        </div>
        </div>';}?>
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
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/index.php">SponsorshipProposal.net</a>
      </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="search/">Proposals</a></li>
        <li><a href="#">Sponsors</a></li>
        <li><a href="#">Agencies</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register"> Login/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
</body>
</html>