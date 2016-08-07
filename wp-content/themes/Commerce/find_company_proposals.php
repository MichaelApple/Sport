<?php session_start(); ?>
<?php 
/**
*Template Name: Find_All_Company_Proposals
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
<form id="left-search" method="POST" action="http://commercia/find_sponsors/" enctype="multipart/form-data">  
     <p>Filter by:</p>
      <p>Location
      <p>State*
        <input class="form-control" type="text" name="state" list="state_list">
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
      
      <!-- <p>Date</p>
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
      </div> -->
  
  
  <input  class="main_buttons" type="submit" name="page_search" value="Search" />
</form>
</div>
</div>
<div class="col-sm-8">
        <div class="search-wrapper">
<?php
include ('db.php');



  // Кількість пропозицій на сторінці
  $quantity=5;

  // Якщо змінна page не є числом то показуємо першу сторінку
  if(!is_numeric($page)) $page=1;

  // Менше одиниці не може бути
  if ($page<1) $page=1;

  // Кількість усіх пропозицій у базі
  $result2 = mysql_query("SELECT * FROM company;");
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

    echo '<li><a href="find_proposals/?page=1">To the start</a> &nbsp; '; //Це на саму першу сторінку
     
    echo '<li><a href="find_proposals/?page=' . $page . '">Previous </a>  ';
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

          echo '<li><a href="find_proposals/?page=' . ($page+2) . '"> Next</a> &nbsp; ';
           echo '<a href="find_proposals/?page=' . ($j-1) . '">To the end</a> &nbsp; ';
  }
if(!isset($_POST['page_search'])) {
  // Запит в базу данних із змінними $quantity и $list
  $result = mysql_query("SELECT * FROM company ORDER BY id DESC
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
                   
                    <img src="http://commercia/wp-content/themes/Commerce/uploads/company/'.$row['comp_logo'].'" width="200px" height="100%">
                  </div>
                  <div class="col-sm-8" style="text-align: left;">
                      <p>'.$row['comp_title'].'</p>'.$row['comp_notes'].'&nbsp;'.$row['comp_adress'].' '.$row['comp_city'].'
                    </div>
                </div>
              </div>';
  }
}
else {
  if(isset($_POST['page_search'])) {

            $search_state = $_POST['state'];
            

            $query = mysql_query("SELECT * FROM company  WHERE comp_state LIKE '%$search_state%' ORDER BY id DESC" ) or die('There is no matches!');  
            $count = mysql_num_rows($query);
            // Виводимо всі записи даної сторінки
            for ($l = 0; $l<$count; $l++) {
                $row_search = mysql_fetch_array($query);
               echo '<div class="search-container">
                          <div class="row">
                            <div class="col-sm-4 logo">
                         
                          <img src="http://commercia/wp-content/themes/Commerce/uploads/company/'.$row_search['comp_logo'].'" width="200px" height="100%">
                        </div>
                        <div class="col-sm-8" style="text-align: left;">
                          <p>'.$row_search['comp_state'].'</p>'.$row_search['comp_notes'].'&nbsp;'.$row_search['comp_adress'].' '.$row_search['comp_city'].'
                        <p>'.$count.'</p>
                        </div>
                      </div>
                    </div>';
            }
        } 
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