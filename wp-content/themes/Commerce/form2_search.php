<?php 
/**
*Template Name: Form2_search
**/
 ?>
 <?php 
 $output = "";

if (isset($_POST['search'])) {
  $search_state = $_POST['state'];

  $query = mysql_query("SELECT * FROM agency WHERE agency_state LIKE '%$search_state%'") or die('There is no matches!');  
  $count = mysql_num_rows($query);
  if ($count == 0) {
    $output = "There is no search results!";
  }
  else {

    while ($row_search = mysql_fetch_array($query)){

     $output = '<div class="search-container">
              <div class="row">
                <div class="col-sm-4 logo">
                 
                  <img src="http://commercia/wp-content/themes/Commerce/uploads/agency/'.$row_search['agency_logo'].'" width="200px" height="100%">
                </div>
                <div class="col-sm-8" style="text-align: left;">
                  <p>'.$row_search['state'].'</p>'.$row_search['notes'].'&nbsp;'.$row_search['adress1'].' '.$row_search['city1'].'
                </div>
              </div>
            </div>';
    }
  }

} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php bloginfo( 'name' ); wp_title( );?></title>
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

  
  <input  class="btn btn-info btn-lg" type="submit" name="ok3" value="Search" />
</form>
</div>
</div>
<div class="col-sm-8">
        <div class="search-wrapper">
<?php
include ('db.php');

?>
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
        
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="find_proposals/">Proposals</a></li>
        <li><a href="find_sponsors/">Sponsors</a></li>
        <li><a href="find_agencies/">Agencies</a></li>
        
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