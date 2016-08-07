<?php 
session_start();
/**
*Template Name: Find_All_Sponsors_Proposals
**/
 ?>
 <?php 
 include ('db.php');


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
<form id="left-search" method="POST" action="http://commercia/find_proposals/" enctype="multipart/form-data">  
      <p>Filter by:</p>
      <p>Location</p>
<div class="row">
    <div class="col-sm-6"><p>Country<input type="text" name="country" class="form-control" value="<?php echo $_POST['country']; ?>"></p></div>
    <div class="col-sm-6">
      
      <p>State*
        <input class="form-control" type="text" name="state" list="state_list" value="<?php echo $_POST['state']; ?>"></p>
         <datalist id="state_list">
            <option value="Alaska"> Alaska</option>
            <option value="American Samoa"> American Samoa</option>
            <option value="Arizona"> Arizona</option>
            <option value="Arkansas"> Arkansas</option>
            <option value="California"> California</option>
            <option value="Colorado"> Colorado</option>
            <option value="Connecticut"> Connecticut</option>
            <option value="District of Columbia"> District of Columbia</option>
            <option value="Federated States of Micronesia"> Federated States of Micronesia</option>
            <option value="Florida"> Florida</option>
            <option value="Georgia"> Georgia</option>
            <option value="Guam"> Guam</option>
            <option value="Hawaii"> Hawaii</option>
            <option value="Idaho"> Idaho</option>
            <option value="Illinois"> Illinois</option>
            <option value="Indiana"> Indiana</option>
            <option value="Iowa"> Iowa</option>
            <option value="Kansas"> Kansas</option>
            <option value="Kentucky"> Kentucky</option>
            <option value="Louisiana"> Louisiana</option>
            <option value="Maine"> Maine</option>
            <option value="Marshall Islands"> Marshall Islands</option>
            <option value="Maryland"> Maryland</option>
            <option value="Massachusetts"> Massachusetts</option>
            <option value="Michigan"> Michigan</option>
            <option value="Minnesota"> Minnesota</option>
            <option value="Mississippi"> Mississippi</option>
            <option value="Missouri"> Missouri</option>
            <option value="Montana"> Montana</option>
            <option value="Nebraska"> Nebraska</option>
            <option value="Nevada"> Nevada</option>
            <option value="New Hampshire"> New Hampshire</option>
            <option value="New Jersey"> New Jersey</option>
            <option value="New Mexico"> New Mexico</option>
            <option value="New York"> New York</option>
            <option value="North Carolina"> North Carolina</option>
            <option value="North Dakota"> North Dakota</option>
            <option value="Northern Mariana Islands"> Northern Mariana Islands</option>
            <option value="Ohio"> Ohio</option>
            <option value="Oklahoma"> Oklahoma</option>
            <option value="Oregon"> Oregon</option>
            <option value="Palau"> Palau</option>
            <option value="Pennsylvania"> Pennsylvania</option>
            <option value="Puerto Rico"> Puerto Rico</option>
            <option value="Rhode Island"> Rhode Island</option>
            <option value="South Carolina"> South Carolina</option>
            <option value="South Dacota"> South Dacota</option>
            <option value="Tennessee"> Tennessee</option>
            <option value="Texas"> Texas</option>
            <option value="Utah"> Utah</option>
            <option value="Vermont"> Vermont</option>
            <option value="Virgin Islands"> Virgin Islands</option>
            <option value="Virginia"> Virginia</option>
            <option value="Washington"> Washington</option>
            <option value="West Virginia"> West Virginia</option>
            <option value="Wisconsin"> Wisconsin</option>
            <option value="Wyoming"> Wyoming</option>
          </datalist>
          </div>
</div>
<p>Price</p>
<div class="row">
    <div class="col-sm-6"><p>From: <input type="text" class="form-control" name="price_from" value="<?php echo $_POST['price_from']; ?>"></p></div>
    <div class="col-sm-6"><p>To: <input type="text" class="form-control" name="price_to" value="<?php echo $_POST['price_to']; ?>"></p></div>
</div>
<p>Sport* 

        <input class="form-control"  type="text" name="sport" list="sport_list">
        <datalist id="sport_list" style="overflow: scroll;font-family: DIN;">
          <option style="font-family: DIN;">Aikido</option>
          <option>Air sports</option>
          <option>Alpine skiing</option>
          
        <option>American football</option>
        <option>Archery</option>
        <option>Arm Wresting</option>
        <option>Athletics</option>
        <option>Australian football</option>
        <option>Auto racing</option>
        <option>Badminton</option>
        <option>Ballooning</option>
        <option>Bandy</option>
        <option>Baseball</option>
        <option>Basketball</option>
        <option>Basque pelota</option>
        <option>Beach Wrestling</option>
        <option>Belt Wrestling Alysh</option>
        <option>Biathlon</option>
        <option>Bicycle Polo</option>
        <option>Billiard sports</option>
        <option>Bobsleigh</option>
        <option>Bodybuilding</option>
        <option>Boules</option>
        <option>Bowling</option>
        <option>Boxing</option>
        <option>Bridge</option>
        <option>Budо</option>
        <option>Canoe/kayak (slalom)</option>
        <option>Canoe/kayak (sprint)</option>
        <option>Casting</option>
        <option>Catholic Sport</option>
        <option>Chess</option>
        <option>Cricket</option>
        <option>Croquet</option>
        <option>Crossbow</option>
        <option>Cross-country skiing</option>
        <option>Curling</option>
        <option>Cycling BMX</option>
        <option>Cycling Mountain biking</option>
        <option>Cycling Road cycling</option>
        <option>Cycling Track cycling</option>
        <option>Dance sport</option>
        <option>Disabled skiing</option>
        <option>Diving</option>
        <option>Draughts</option>
        <option>Equestrian / Dressage</option>
        <option>Equestrian / Eventing</option>
        <option>Equestrian / Jumping</option>
        <option>Equestrian / Vaulting</option>
        <option>European Broadcasting</option>
        <option>Fencing</option>
        <option>Field hockey</option>
        <option>Figure skating</option>
        <option>Finnish baseball</option>
        <option>Fistball</option>
        <option>Flag Football</option>
        <option>Floorball</option>
        <option>Flying Disc</option>
        <option>Football</option>
        <option>Freestyle skiing</option>
        <option>Gliding</option>
        <option>Glima</option>
        <option>Golf</option>
        <option>Grappling</option>
        <option>Gymnastics Artistic</option>
        <option>Gymnastics Rhythmic</option>
        <option>Gymnastics Trampoline</option>
        <option>Handball</option>
        <option>Ice hockey</option>
        <option>Ice stock sport</option>
        <option>Jeu de paume</option>
        <option>Judo</option>
        <option>Ju-Jitsu</option>
        <option>Kaatsen </option>
        <option>Karate</option>
        <option>Korfball</option>
        <option>Kushti</option>
        <option>La canne</option>
        <option>Lacrosse</option>
        <option>Lifesaving</option>
        <option>Longue paum </option>
        <option>Luge</option>
        <option>Maccabi</option>
        <option>Masters Games</option>
        <option>Military patrol</option>
        <option>Military Sport</option>
        <option>Minigolf</option>
        <option>Modern pentathlon</option>
        <option>Motorcycle racing</option>
        <option>Motorsport </option>
        <option>Mountaineering and Climbing</option>
        <option>Netball</option>
        <option>Nordic combined</option>
        <option>Orienteering</option>
        <option>Pahlavani Wrestling</option>
        <option>Pankration</option>
        <option>Paralympic</option>
        <option>Pelota Vasca</option>
        <option>Polo</option>
        <option>Powerboating</option>
        <option>Powerlifting</option>
        <option>Rackets</option>
        <option>Racquetball</option>
        <option>Roller hockey</option> 
        <option>Roller Soccer</option>
        <option>Roller sports</option>
        <option>Roque</option>
        <option>Rowing</option>
        <option>Rugby</option>
        <option>Rugby sevens</option>
        <option>Sailing</option>
        <option>Savate</option>
        <option>School Sport</option>
        <option>Sepaktakraw</option>
        <option>Shooting</option>
        <option>Shooting Sport</option>
        <option>Short track speed skating</option>
        <option>Skeleton</option>
        <option>Ski jumping</option>
        <option>Ski Mountaineering</option>
        <option>Skibob</option>
        <option>Skijoring</option>
        <option>Sleddog</option>
        <option>Sled-dog racing</option>
        <option>Snowboarding</option>
        <option>Soft Tennis</option>
        <option>Softball</option>
        <option>Speed skating</option>
        <option>Speed skiing</option>
        <option>Sport climbing</option>
        <option>Sports Chiropratic</option>
        <option>Sports Facilities</option>
        <option>Sports Fishing</option>
        <option>Sports for the Deaf</option>
        <option>Sports Karate</option>
        <option>Sports Medicine</option>
        <option>Squash</option>
        <option>Sumo</option>
        <option>Super-Cricket</option>
        <option>Surf lifesaving</option>
        <option>Surfing</option>
        <option>Swimming</option>
        <option>Synchronized swimming</option>
        <option>Table tennis</option>
        <option>Taekwondo</option>
        <option>Tenni-Koit</option>
        <option>Tennis</option>
        <option>Tennis-ball</option>
        <option>Timekeepers</option>
        <option>Touch</option>
        <option>Triathlon</option>
        <option>Tug of war</option>
        <option>Ultimate (Flying disc)</option>
        <option>Underwater sports</option>
        <option>University Sports</option>
        <option>Volleyball (beach)</option>
        <option>Volleyball (indoor)</option>
        <option>Water motorsports</option>
        <option>Water polo</option>
        <option>Water ski</option>
        <option>Water skiing </option>
        <option>Weightlifting</option>
        <option>Winter Pentathlon</option>
        <option>Women's Wrestling</option>
        <option>Wrestling Freestyle</option>
        <option>Wrestling Greco-Roman</option>
        <option>Wushu</option>
        <option>Zurkhaneh</option>
      </datalist>

        </p>
          <!-- <p>City <input type="text" class="form-control" name="city" value="<?php echo $_POST['city']; ?>"></p> -->
      <p>Date</p>
      <div class="row">
        <div class="col-sm-6 form-group">
            <div class='input-group date' id='datetimepicker4'>
                <input type='text' class="form-control" placeholder="From:" name="date_of_proposal_from" value="<?php echo $_POST['date_of_proposal_from']; ?>"/>
                <span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>
            </div>
        </div>
        <div class="col-sm-6 form-group">
            <div class='input-group date' id='datetimepicker5'>
                <input type='text' class="form-control" placeholder="To:" name="date_of_proposal_to" value="<?php echo $_POST['date_of_proposal_to']; ?>"/>
                <span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>
            </div>
        </div>
      </div>
    
        <p>Type proposal*<select class="form-control" name="type_proposal[]">
          <option>Event</option>
          <option>Team/club</option>
          <option>Sportsmen</option>
        </select></p>
     
  
  <input  class="main_buttons" type="submit" name="page_search" value="Filter" />
</form>
</div>
</div>
<div class="col-sm-8">
        <div class="search-wrapper">
<?php



    // Кількість пропозицій на сторінці
    $quantity=5;

    // Якщо змінна page не є числом то показуємо першу сторінку
    if(!is_numeric($page)) $page=1;

    // Менше одиниці не може бути
    if ($page<1) $page=1;

    // Кількість усіх пропозицій у базі
    $result2 = mysql_query("SELECT * FROM main;");
    $num = mysql_num_rows($result2);

    // Кількість сторінок
    $pages = $num/$quantity;

    // Округлення в більшу сторону
    $pages = ceil($pages);

    // Збільшуємо на 1, щоб не = 0
    $pages++; 

    // Про всяк випадок якщо page > усіх сторінок
    if ($page>$pages) $page = 1;

    // Виведення заголовка із номером даної сторінки
    echo '<strong style="color: #df0000">Сторінка номер: ' . $page . 
    '</strong><br /><br />'; 

    // Змінна $list вказує з якого запису почтнати виводити дані.
    if (!isset($list)) $list=0;

    $list=--$page*$quantity;

    echo ' <ul class="pager">';

    // Попередня сторінка
    if ($page>=1) {

      echo '<li><a href="find_sponsors/?page=1">To the start</a> &nbsp; '; //Це на саму першу сторінку
       
      echo '<li><a href="find_sponsors/?page=' . $page . '">Previous </a>  ';
    }

    // На данному етапі номер даної сторінки = $page+1
    $that = $page+1;

    // Дізнаємося з якого посилання починати виведення
    $start = $this-$limit;

    // Дізнаємося номер останнього посилання з якого почнемо виведення
    $end = $this+$limit;

    // Виводимо посилання на всі сторінки
    for ($j = 1; $j<$pages; $j++) {

        
        if ($j>=$start && $j<=$end) {

            // Тут було посилання на дану сторінку, я його знищив
        }
    }

    // Наступна сторінка і в кінець
    if ($j>$page && ($page+2)<$j) {

            echo '<li><a href="find_sponsors/?page=' . ($page+2) . '"> Next</a> &nbsp; ';
             echo '<a href="find_sponsors/?page=' . ($j-1) . '">To the end</a> &nbsp; ';
    }
if(!isset($_POST["comp_search_form"]) && !isset($_POST["page_search"])) {
    // Запит в базу данних із змінними $quantity и $list
    $result = mysql_query("SELECT * FROM main ORDER BY id DESC
                          LIMIT $quantity OFFSET $list;");

    // Рахуємо кількість отриманих пропозицій
    $num_result = mysql_num_rows($result);
    
    // Виводимо всі записи даної сторінки
    for ($i = 0; $i<$num_result; $i++) {
        $row = mysql_fetch_array($result);
        
        echo '
                <div class="search-container">
                  <div class="row">
                    <div class="col-sm-4 logo">
                     
                      <img src="http://commercia/wp-content/themes/Commerce/uploads/proposal/'.$row['logo'].'" width="200px" height="100%">
                    </div>
                    <div class="col-sm-8" style="text-align: left;">
                      <p>'.$row['title'].'</p>'.$row['notes'].'&nbsp;'.$row['adress'].' '.$row['city'].' '.$row['country'].'</p>
                      <p>'.$num_result.'</p>
                    </div>
                  </div>
                </div>';
    }

}
else {
    $output = "";

    if (isset($_POST['comp_search_form'])) {

            $fields = array('male', 'female', 'age1', 'age2', 'age3', 'age4', 'age5', 'age6', 'age7', 'edu1', 'edu2', 'edu3', 'edu4', 'edu5', 'marital1', 'marital2', 'marital3', 'income1', 'income2', 'income3', 'income4', 'income5', 'income6');
            $conditions = array();

            // loop through the defined fields
            foreach($fields as $field){
                // if the field is set and not empty
                if(isset($_POST[$field]) && $_POST[$field] != '') {
                    // create a new condition while escaping the value inputed by the user (SQL Injection)
                    $conditions[] = "`$field` LIKE '%" . mysql_real_escape_string($_POST[$field]) . "%'";
                }
            }
            // builds the query
            $query = "SELECT * FROM main ";
            // if there are conditions defined
            if(count($conditions) > 0) {
                // append the conditions
                $query .= "WHERE " . implode (' OR ', $conditions);
                 // you can change to 'OR', but I suggest to apply the filters cumulative
            }
            
            $result = mysql_query($query);
      $search_state = $_POST['comp_state'];

      // $query = mysql_query("SELECT * FROM main  WHERE state LIKE '%$search_state%' ORDER BY id DESC" ) or die('There is no matches!');  
      $count = mysql_num_rows($result);

      if ($count == 0) {
        echo "There is no matches!";
      }
      else {
        // Виводимо всі записи даної сторінки
        for ($k = 0; $k<$count; $k++) {
            $row_search = mysql_fetch_array($result);

           echo '<div class="search-container">
                      <div class="row">
                        <div class="col-sm-4 logo">
                     
                      <img src="http://commercia/wp-content/themes/Commerce/uploads/proposal/'.$row_search['logo'].'" width="200px" height="100%">
                    </div>
                    <div class="col-sm-8" style="text-align: left;">
                      <p>'.$row_search['state'].'</p>'.$row_search['notes'].'&nbsp;'.$row_search['adress1'].' '.$row_search['city1'].'
                    <p>'.$count.'</p>
                    <p>'.$row_search['male'].'</p>
                    </div>
                  </div>
                </div>';
        }

      }
    
    } 
    else {
        if(isset($_POST['page_search'])) {
            $fields = array('country', 'state', 'sport', 'date_of_proposal_from', 'date_of_proposal_to', 'type_proposal');
            // builds the query
            $query1='';
            $and=' and ';
            $field='country';
            if(isset($_POST[$field]) && $_POST[$field] != '') {
            	if($query1!='') $query1=$query1.$and;
            	$query1=$query1."`$field` LIKE '%".mysql_real_escape_string($_POST[$field])."%'";
            }
            $field='state';
            if(isset($_POST[$field]) && $_POST[$field] != '') {
            	if($query1!='') $query1=$query1.$and;
            	$query1=$query1."`$field` LIKE '%".mysql_real_escape_string($_POST[$field])."%'";
            }

            if($query1) $query1=' WHERE '.$query1;
            $query1 = 'SELECT * FROM main'.$query1;
            // if there are conditions defined
            //if(count($conditions) > 0) {
                // append the conditions
            //    $query1 .= "WHERE true " . implode (' AND ', $conditions);
                 // you can change to 'OR', but I suggest to apply the filters cumulative

                    // if(isset($_POST['price_from'])) {
                    //     $query1 .= "OR "
                    // }
            //}

            $result1 = mysql_query($query1);
                $count1 = mysql_num_rows($result1);
                if ($count1 == 0) {
                    echo $query1;
                }
                else{
                  // Виводимо всі записи даної сторінки
                    for ($l = 0; $l<$count1; $l++) {
                        $row_search1 = mysql_fetch_array($result1);
                       echo '<div class="search-container">
                                  <div class="row">
                                    <div class="col-sm-4 logo">
                                 
                                  <img src="http://commercia/wp-content/themes/Commerce/uploads/proposal/'.$row_search1['logo'].'" width="200px" height="100%">
                                </div>
                                <div class="col-sm-8" style="text-align: left;">
                                  <p>'.$row_search1['state'].'</p>'.$row_search1['country'].'&nbsp;'.$row_search1['adress'].' '.$row_search1['city'].'
                                <p>'.$count1.'</p>
                                <p>'.$fields[0].'
                                </div>
                              </div>
                            </div>';  
                    }
                }       
            
           
        } 
    }
   
}
    



    //Add company Form
$user_email = $_SESSION['email'];


$comp_title = $_POST['comp_title'];
$category = $_POST['category'];

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


if(isset($_POST['comp_search_form'])){

    
    $target_dir =   "E:\OpenServer\domains\Commercia/wp-content/themes/Commerce/uploads/company/";
    $name_logo = date('YmdHi').'__'. basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $name_logo;
    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["ok3"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            echo "<p> Your image".$_FILES["fileToUpload"]["name"]."</p>";
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". $target_file . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
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
            


            $query = mysql_query("INSERT INTO company(comp_title, category, comp_logo, comp_notes, comp_adress, comp_city, comp_state, comp_zip, comp_country, comp_name, comp_phone, comp_website, comp_email, comp_facebook, comp_twitter, comp_jobtitle, male, female, age1, age2, age3, age4, age5, age6, age7, edu1, edu2, edu3, edu4, edu5, marital1, marital2, marital3, income1, income2, income3, income4, income5, income6, user_email) VALUES('$comp_title', '$category', '$name_logo', '$comp_notes', '$comp_adress', '$comp_city', '$comp_state', '$comp_zip', '$comp_country', '$comp_name', '$comp_phone', '$comp_website', '$comp_email', '$comp_facebook', '$comp_twitter', '$comp_jobtitle', '$comp_male', '$comp_female', '$comp_age1', '$comp_age2', '$comp_age3', '$comp_age4', '$comp_age5', '$comp_age6', '$comp_age7', '$comp_edu1', '$comp_edu2', '$comp_edu3', '$comp_edu4', '$comp_edu5', '$comp_marital1', '$comp_marital2', '$comp_marital3', '$comp_income1', '$comp_income2', '$comp_income3', '$comp_income4', '$comp_income5', '$comp_income6', '$user_email')");
           
              
  
} 

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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
</body>
</html>