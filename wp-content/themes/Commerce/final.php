<?php session_start(); ?>
<?php 
/**
*Template Name: final
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

$user_email = $_SESSION['email'];

$title = $_POST['title'];
$type_proposal = $_POST['type_proposal'];
$sport = $_POST['sport'];
// DATES
$date_of_proposal_from = $_POST['date_of_proposal_from'];
$date_of_proposal_to = $_POST['date_of_proposal_to'];
$valid_until = $_POST['valid_until'];
// LOCATION1
$adress1 = $_POST['adress1'];
$city1 = $_POST['city1'];
$state1 = $_POST['state1'];
$zip1 = $_POST['zip1'];
$country1 = $_POST['country1'];
// LOCATION2
$adress2 = $_POST['adress2'];
$city2 = $_POST['city2'];
$state2 = $_POST['state2'];
$zip2 = $_POST['zip2'];
$country2 = $_POST['country2'];
// LOCATION3
$adress3 = $_POST['adress3'];
$city3 = $_POST['city3'];
$state3 = $_POST['state3'];
$zip3 = $_POST['zip3'];
$country3 = $_POST['country3'];
// LOCATION4
$adress4 = $_POST['adress4'];
$city4 = $_POST['city4'];
$state4 = $_POST['state4'];
$zip4 = $_POST['zip4'];
$country4 = $_POST['country4'];
// LOCATION5
$adress5 = $_POST['adress5'];
$city5 = $_POST['city5'];
$state5 = $_POST['state5'];
$zip5 = $_POST['zip5'];
$country5 = $_POST['country5'];
// LOCATION6
$adress6 = $_POST['adress6'];
$city6 = $_POST['city6'];
$state6 = $_POST['state6'];
$zip6 = $_POST['zip6'];
$country6 = $_POST['country6'];
// LOCATION7
$adress7 = $_POST['adress7'];
$city7 = $_POST['city7'];
$state7 = $_POST['state7'];
$zip7 = $_POST['zip7'];
$country7 = $_POST['country7'];
// LOCATION8
$adress8 = $_POST['adress8'];
$city8 = $_POST['city8'];
$state8 = $_POST['state8'];
$zip8 = $_POST['zip8'];
$country8 = $_POST['country8'];
// LOCATION9
$adress9 = $_POST['adress9'];
$city9 = $_POST['city9'];
$state9 = $_POST['state9'];
$zip9 = $_POST['zip9'];
$country9 = $_POST['country9'];
// LOCATION10
$adress10 = $_POST['adress10'];
$city10 = $_POST['city10'];
$state10 = $_POST['state10'];
$zip10 = $_POST['zip10'];
$country10 = $_POST['country10'];
// DESCRIPTION
$notes = $_POST['notes'];
$other_sponsors = $_POST['other_sponsors'];
$media_partners = $_POST['media_partners'];
// SOCIAL
$website = $_POST['website'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
// CONTACTS
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// LOGO
$logo = $_POST['logo'];


// ДРУГА INSERT NUMBERS
$number = $_POST['number'];
$male = $_POST['male'];
$female = $_POST['female'];
$age1 = $_POST['age1'];
$age2 = $_POST['age2'];
$age3 = $_POST['age3'];
$age4 = $_POST['age4'];
$age5 = $_POST['age5'];
$age6 = $_POST['age6'];
$age7 = $_POST['age7'];
$edu1 = $_POST['edu1'];
$edu2 = $_POST['edu2'];
$edu3 = $_POST['edu3'];
$edu4 = $_POST['edu4'];
$edu5 = $_POST['edu5'];
$marital1 = $_POST['marital1'];
$marital2 = $_POST['marital2'];
$marital3 = $_POST['marital3'];
$income1 = $_POST['income1'];
$income2 = $_POST['income2'];
$income3 = $_POST['income3'];
$income4 = $_POST['income4'];
$income5 = $_POST['income5'];
$income6 = $_POST['income6'];

// $check = $_POST['check'];
//   $n = count($check);
//     for($i=0; $i<$n; $i++)
//       {
//         echo($check[$i].' ');
//       }



 if(isset($_POST['pay'])){
   
    // if (isset($type_proposal)){
    //     foreach ($type_proposal as $type_proposal_value){
    //       $type_proposal_value = addslashes($type_proposal_value);
    //       $type_proposal_value = htmlspecialchars($type_proposal_value);
    //     }
    //     foreach ($sport as $sport_value) {
    //       $sport_value = addslashes($sport_value);
    //       $sport_value = htmlspecialchars($sport_value);
    //     }
        $status = 1;
        $title = addslashes($title);
        // $type_proposal = addslashes($type_proposal);
        // $sport = addslashes($sport);
        // DATES
        $date_of_proposal_from = addslashes($date_of_proposal_from);
        $date_of_proposal_to = addslashes($date_of_proposal_to);
        $valid_until = addslashes($valid_until);
        // LOCATION1
        $adress1 = addslashes($adress1);
        $city1 = addslashes($city1);
        $state1 = addslashes($state1);
        $zip1 = addslashes($zip1);
        $country1 = addslashes($country1);
        // LOCATION2
        $adress2 = addslashes($adress2);
        $city2 = addslashes($city2);
        $state2 = addslashes($state2);
        $zip2 = addslashes($zip2);
        $country2 = addslashes($country2);
        // LOCATION3
        $adress3 = addslashes($adress3);
        $city3 = addslashes($city3);
        $state3 = addslashes($state3);
        $zip3 = addslashes($zip3);
        $country3 = addslashes($country3);
        // LOCATION4
        $adress4 = addslashes($adress4);
        $city4 = addslashes($city4);
        $state4 = addslashes($state4);
        $zip4 = addslashes($zip4);
        $country4 = addslashes($country4);
        // LOCATION5
        $adress5 = addslashes($adress5);
        $city5 = addslashes($city5);
        $state5 = addslashes($state5);
        $zip5 = addslashes($zip5);
        $country5 = addslashes($country5);
        // LOCATION6
        $adress6 = addslashes($adress6);
        $city6 = addslashes($city6);
        $state6 = addslashes($state6);
        $zip6 = addslashes($zip6);
        $country6 = addslashes($country6);
        // LOCATION7
        $adress7 = addslashes($adress7);
        $city7 = addslashes($city7);
        $state7 = addslashes($state7);
        $zip7 = addslashes($zip7);
        $country7 = addslashes($country7);
        // LOCATION8
        $adress8 = addslashes($adress8);
        $city8 = addslashes($city8);
        $state8 = addslashes($state8);
        $zip8 = addslashes($zip8);
        $country8 = addslashes($country8);
        // LOCATION9
        $adress9 = addslashes($adress9);
        $city9 = addslashes($city9);
        $state9 = addslashes($state9);
        $zip9 = addslashes($zip9);
        $country9 = addslashes($country9);
        // LOCATION10
        $adress10 = addslashes($adress10);
        $city10 = addslashes($city10);
        $state10 = addslashes($state10);
        $zip10 = addslashes($zip10);
        $country10 = addslashes($country10);
        // DESCRIPTION
        $other_sponsors = addslashes($other_sponsors);
        $media_partners = addslashes($media_partners);
        $notes = addslashes($notes);

        // $photo = addslashes($photo);

        // SOCIAL
        $email = addslashes($email);
        $facebook = addslashes($facebook);
        $twitter = addslashes($twitter);
        // CONTACTS
        $first_name = addslashes($first_name);
        $last_name = addslashes($last_name);
        $phone = addslashes($phone);
        $website = addslashes($website);



        // SPECIALCHARS
         $title = htmlspecialchars($title);
        // $type_proposal = htmlspecialchars($type_proposal);
        // $sport = htmlspecialchars($sport);
        // DATES
        $date_of_proposal_from = htmlspecialchars($date_of_proposal_from);
        $date_of_proposal_to = htmlspecialchars($date_of_proposal_to);
        $valid_until = htmlspecialchars($valid_until);
        // LOCATION1
        $adress1 = htmlspecialchars($adress1);
        $city1 = htmlspecialchars($city1);
        $state1 = htmlspecialchars($state1);
        $zip1 = htmlspecialchars($zip1);
        $country1 = htmlspecialchars($country1);
        // LOCATION2
        $adress2 = htmlspecialchars($adress2);
        $city2 = htmlspecialchars($city2);
        $state2 = htmlspecialchars($state2);
        $zip2 = htmlspecialchars($zip2);
        $country2 = htmlspecialchars($country2);
        // LOCATION3
        $adress3 = htmlspecialchars($adress3);
        $city3 = htmlspecialchars($city3);
        $state3 = htmlspecialchars($state3);
        $zip3 = htmlspecialchars($zip3);
        $country3 = htmlspecialchars($country3);
        // LOCATION4
        $adress4 = htmlspecialchars($adress4);
        $city4 = htmlspecialchars($city4);
        $state4 = htmlspecialchars($state4);
        $zip4 = htmlspecialchars($zip4);
        $country4 = htmlspecialchars($country4);
        // LOCATION5
        $adress5 = htmlspecialchars($adress5);
        $city5 = htmlspecialchars($city5);
        $state5 = htmlspecialchars($state5);
        $zip5 = htmlspecialchars($zip5);
        $country5 = htmlspecialchars($country5);
        // LOCATION6
        $adress6 = htmlspecialchars($adress6);
        $city6 = htmlspecialchars($city6);
        $state6 = htmlspecialchars($state6);
        $zip6 = htmlspecialchars($zip6);
        $country6 = htmlspecialchars($country6);
        // LOCATION7
        $adress7 = htmlspecialchars($adress7);
        $city7 = htmlspecialchars($city7);
        $state7 = htmlspecialchars($state7);
        $zip7 = htmlspecialchars($zip7);
        $country7 = htmlspecialchars($country7);
        // LOCATION8
        $adress8 = htmlspecialchars($adress8);
        $city8 = htmlspecialchars($city8);
        $state8 = htmlspecialchars($state8);
        $zip8 = htmlspecialchars($zip8);
        $country8 = htmlspecialchars($country8);
        // LOCATION9
        $adress9 = htmlspecialchars($adress9);
        $city9 = htmlspecialchars($city9);
        $state9 = htmlspecialchars($state9);
        $zip9 = htmlspecialchars($zip9);
        $country9 = htmlspecialchars($country9);
        // LOCATION10
        $adress10 = htmlspecialchars($adress10);
        $city10 = htmlspecialchars($city10);
        $state10 = htmlspecialchars($state10);
        $zip10 = htmlspecialchars($zip10);
        $country10 = htmlspecialchars($country10);
        // DESCRIPTION
        $other_sponsors = htmlspecialchars($other_sponsors);
        $media_partners = htmlspecialchars($media_partners);
        $notes = htmlspecialchars($notes);

                
        // SOCIAL
        $email = htmlspecialchars($email);
        $facebook = htmlspecialchars($facebook);
        $twitter = htmlspecialchars($twitter);
        // CONTACTS
        $first_name = htmlspecialchars($first_name);
        $last_name = htmlspecialchars($last_name);
        $phone = htmlspecialchars($phone);
        $website = htmlspecialchars($website);
       

        $male = addslashes($male);
        $female = addslashes($female);
        $age1 = addslashes($age1);
        $age2 = addslashes($age2);
        $age3 = addslashes($age3);
        $age4 = addslashes($age4);
        $age5 = addslashes($age5);
        $age6 = addslashes($age6);
        $age7 = addslashes($age7);
        $edu1 = addslashes($edu1);
        $edu2 = addslashes($edu2);
        $edu3 = addslashes($edu3);
        $edu4 = addslashes($edu4);
        $edu5 = addslashes($edu5);
        $marital1 = addslashes($marital1);
        $marital2 = addslashes($marital2);
        $marital3 = addslashes($marital3);
        $income1 = addslashes($income1);
        $income2 = addslashes($income2);
        $income3 = addslashes($income3);
        $income4 = addslashes($income4);
        $income5 = addslashes($income5);
        $income6 = addslashes($income6);

        $male = htmlspecialchars($male);
        $female = htmlspecialchars($female);
        $age1 = htmlspecialchars($age1);
        $age2 = htmlspecialchars($age2);
        $age3 = htmlspecialchars($age3);
        $age4 = htmlspecialchars($age4);
        $age5 = htmlspecialchars($age5);
        $age6 = htmlspecialchars($age6);
        $age7 = htmlspecialchars($age7);
        $edu1 = htmlspecialchars($edu1);
        $edu2 = htmlspecialchars($edu2);
        $edu3 = htmlspecialchars($edu3);
        $edu4 = htmlspecialchars($edu4);
        $edu5 = htmlspecialchars($edu5);
        $marital1 = htmlspecialchars($marital1);
        $marital2 = htmlspecialchars($marital2);
        $marital3 = htmlspecialchars($marital3);
        $income1 = htmlspecialchars($income1);
        $income2 = htmlspecialchars($income2);
        $income3 = htmlspecialchars($income3);
        $income4 = htmlspecialchars($income4);
        $income5 = htmlspecialchars($income5);
        $income6 = htmlspecialchars($income6);

        $query = mysql_query("INSERT INTO main(status, title, date_of_proposal_from, date_of_proposal_to, valid_until, type_proposal, sport, other_sponsors, media_partners, notes, first_name, last_name, phone, website, email, facebook, twitter, male, female, age1, age2, age3, age4, age5, age6, age7, edu1, edu2, edu3, edu4, edu5, marital1, marital2, marital3, income1, income2, income3, income4, income5, income6, logo, state, country, city, user_email) VALUES('$status', '$title', '$date_of_proposal_from', '$date_of_proposal_to', '$valid_until', '$type_proposal', '$sport', '$other_sponsors', '$media_partners', '$notes', '$first_name', '$last_name', '$phone', '$website', '$email', '$facebook', '$twitter', '$male', '$female', '$age1', '$age2', '$age3', '$age4', '$age5', '$age6', '$age7', '$edu1', '$edu2', '$edu3', '$edu4', '$edu5', '$marital1', '$marital2', '$marital3', '$income1', '$income2', '$income3', '$income4', '$income5', '$income6', '$logo', '$state1', '$country1', '$city1','$user_email')");


       
     }
// }     



echo "

<!-- Modal -->
<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Congratulations!</h4>
      </div>
      <div class='modal-body'>
        <p>".$user_email."</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='main_buttons' onClick='history.go(-3)'>Close</button>
      </div>
    </div>

  </div>
</div>";?>
<script type="text/javascript"> 
       $(document).ready(function() {
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
