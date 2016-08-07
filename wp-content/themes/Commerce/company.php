<?php 
/**
*Template Name: company_final
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

//Add company Form

$comp_title = $_POST['comp_title'];
$category = $_POST['category'];
$comp_logo = $_POST['comp_logo'];
$comp_notes = $_POST['comp_notes'];
$comp_adress = $_POST['comp_adress'];
$comp_city = $_POST['comp_city'];
$comp_state = $_POST['comp_state'];
$comp_zip = $_POST['comp_zip'];
$comp_country = $_POST['comp_country'];
$comp_name = $_POST['comp_myname'];
$comp_phone = $_POST['comp_phone'];
$comp_website = $_POST['comp_website'];
$comp_email = $_POST['comp_email'];
$comp_facebook = $_POST['comp_facebook'];
$comp_twitter = $_POST['comp_twitter'];
$comp_jobtitle = $_POST['comp_jobtitle'];



$comp_male = $_POST['comp_male'];
$comp_female = $_POST['comp_female'];
$comp_age1 = $_POST['comp_age1'];
$comp_age2 = $_POST['comp_age2'];
$comp_age3 = $_POST['comp_age3'];
$comp_age4 = $_POST['comp_age4'];
$comp_age5 = $_POST['comp_age5'];
$comp_age6 = $_POST['comp_age6'];
$comp_age7 = $_POST['comp_age7'];
$comp_edu1 = $_POST['comp_edu1'];
$comp_edu2 = $_POST['comp_edu2'];
$comp_edu3 = $_POST['comp_edu3'];
$comp_edu4 = $_POST['comp_edu4'];
$comp_edu5 = $_POST['comp_edu5'];
$comp_marital1 = $_POST['comp_marital1'];
$comp_marital2 = $_POST['comp_marital2'];
$comp_marital3 = $_POST['comp_marital3'];
$comp_income1 = $_POST['comp_income1'];
$comp_income2 = $_POST['comp_income2'];
$comp_income3 = $_POST['comp_income3'];
$comp_income4 = $_POST['comp_income4'];
$comp_income5 = $_POST['comp_income5'];
$comp_income6 = $_POST['comp_income6'];
// $comp_max_gender = $_POST['comp_maxGender'];
// $comp_max_age = $_POST['comp_maxAge'];
// $comp_max_edu = $_POST['comp_maxEdu'];
// $comp_max_marital = $_POST['comp_maxMar'];
// $comp_max_income = $_POST['comp_maxInc'];


if(isset($_POST['company'])){
    
            $comp_title = addslashes($comp_title);
           
            
            $comp_notes = addslashes($comp_notes);
            $comp_adress = addslashes($comp_adress);
            $comp_city = addslashes($comp_city);
            $comp_state = addslashes($comp_state);
            $comp_zip = addslashes($comp_zip);
            $comp_country = addslashes($comp_country);
            $comp_name = addslashes($comp_name);
            $comp_phone = addslashes($comp_phone);
            // $comp_website = addslashes($comp_website);
            $comp_email = addslashes($comp_email);
            $comp_facebook = addslashes($comp_facebook);
            $comp_twitter = addslashes($comp_twitter);
            $comp_jobtitle = addslashes($comp_jobtitle);


			      $comp_title = htmlspecialchars($comp_title);
            $category = htmlspecialchars($category);
            
            $notes = htmlspecialchars($comp_notes);
            $comp_adress = htmlspecialchars($comp_adress);
            $comp_city = htmlspecialchars($comp_city);
            $comp_state = htmlspecialchars($comp_state);
            $comp_zip = htmlspecialchars($comp_zip);
            $comp_country = htmlspecialchars($comp_country);
            $comp_name = htmlspecialchars($comp_name);
            $comp_phone = htmlspecialchars($comp_phone);
            // $comp_website = htmlspecialchars($comp_website);
            $comp_email = htmlspecialchars($comp_email);
            $comp_facebook = htmlspecialchars($comp_facebook);
            $comp_twitter = htmlspecialchars($comp_twitter);
            $comp_jobtitle = htmlspecialchars($comp_jobtitle);



			$comp_male = addslashes($comp_male);
			$comp_female = addslashes($comp_female);
			$comp_age1 = addslashes($comp_age1);
			$comp_age2 = addslashes($comp_age2);
			$comp_age3 = addslashes($comp_age3);
			$comp_age4 = addslashes($comp_age4);
			$comp_age5 = addslashes($comp_age5);
			$comp_age6 = addslashes($comp_age6);
			$comp_age7 = addslashes($comp_age7);
			$comp_edu1 = addslashes($comp_edu1);
			$comp_edu2 = addslashes($comp_edu2);
			$comp_edu3 = addslashes($comp_edu3);
			$comp_edu4 = addslashes($comp_edu4);
			$comp_edu5 = addslashes($comp_edu5);
			$comp_marital1 = addslashes($comp_marital1);
			$comp_marital2 = addslashes($comp_marital2);
			$comp_marital3 = addslashes($comp_marital3);
			$comp_income1 = addslashes($comp_income1);
			$comp_income2 = addslashes($comp_income2);
			$comp_income3 = addslashes($comp_income3);
			$comp_income4 = addslashes($comp_income4);
			$comp_income5 = addslashes($comp_income5);
			$comp_income6 = addslashes($comp_income6);



			$comp_male = htmlspecialchars($comp_male);
			$comp_female = htmlspecialchars($comp_female);
			$comp_age1 = htmlspecialchars($comp_age1);
			$comp_age2 = htmlspecialchars($comp_age2);
			$comp_age3 = htmlspecialchars($comp_age3);
			$comp_age4 = htmlspecialchars($comp_age4);
			$comp_age5 = htmlspecialchars($comp_age5);
			$comp_age6 = htmlspecialchars($comp_age6);
			$comp_age7 = htmlspecialchars($comp_age7);
			$comp_edu1 = htmlspecialchars($comp_edu1);
			$comp_edu2 = htmlspecialchars($comp_edu2);
			$comp_edu3 = htmlspecialchars($comp_edu3);
			$comp_edu4 = htmlspecialchars($comp_edu4);
			$comp_edu5 = htmlspecialchars($comp_edu5);
			$comp_marital1 = htmlspecialchars($comp_marital1);
			$comp_marital2 = htmlspecialchars($comp_marital2);
			$comp_marital3 = htmlspecialchars($comp_marital3);
			$comp_income1 = htmlspecialchars($comp_income1);
			$comp_income2 = htmlspecialchars($comp_income2);
			$comp_income3 = htmlspecialchars($comp_income3);
			$comp_income4 = htmlspecialchars($comp_income4);
			$comp_income5 = htmlspecialchars($comp_income5);
			$comp_income6 = htmlspecialchars($comp_income6);
			


            $query = mysql_query("INSERT INTO company(comp_title, category, comp_logo, comp_notes, comp_adress, comp_city, comp_state, comp_zip, comp_country, comp_name, comp_phone, comp_website, comp_email, comp_facebook, comp_twitter, comp_jobtitle, comp_male, comp_female, comp_age1, comp_age2, comp_age3, comp_age4, comp_age5, comp_age6, comp_age7, comp_edu1, comp_edu2, comp_edu3, comp_edu4, comp_edu5, comp_marital1, comp_marital2, comp_marital3, comp_income1, comp_income2, comp_income3, comp_income4, comp_income5, comp_income6) VALUES('$comp_title', '$category', '$comp_logo', '$comp_notes', '$comp_adress', '$comp_city', '$comp_state', '$comp_zip', '$comp_country', '$comp_name', '$comp_phone', '$comp_website', '$comp_email', '$comp_facebook', '$comp_twitter', '$comp_jobtitle', '$comp_male', '$comp_female', '$comp_age1', '$comp_age2', '$comp_age3', '$comp_age4', '$comp_age5', '$comp_age6', '$comp_age7', '$comp_edu1', '$comp_edu2', '$comp_edu3', '$comp_edu4', '$comp_edu5', '$comp_marital1', '$comp_marital2', '$comp_marital3', '$comp_income1', '$comp_income2', '$comp_income3', '$comp_income4', '$comp_income5', '$comp_income6')");
           
              
  
}


echo '

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Congratulations!</h4>
      </div>
      <div class="modal-body">
        <p>New company has been succesfully added</p>
      </div>
      <div class="modal-footer">
        
      <input class="main_buttons" type="button"  value="Close"  onClick="history.go(-3)" />
      </div>
    </div>

  </div>
</div>';?>
<script type="text/javascript"> 
       $(document).ready(function(){
           $('#myModal').modal('show');
       });
      </script>


<!-- if(($_POST["Submit"]=="Submit")){

  for ($i=0; $i<sizeof($checkbox1);$i++) {
    $query = "INSERT INTO checkboxes (check1) VALUES ('".$checkbox1[$i]."')";
    mysql_query($query) or die(mysql_error());  
  }

  echo "Record is inserted";

} -->



</body>
</html>
