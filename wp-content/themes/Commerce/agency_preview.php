<?php session_start(); ?>
<?php 
/**
*Template Name: agency_preview
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
  <link rel="stylesheet" type="text/css" href="http://commercia/wp-content/themes/Commerce/css/css/screen.css">

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">
<div id='agency_view' class='agency_view'>
	<form  method='post' action='pay_agency/' >
<?php 
include ('db.php');
echo "<br><br>";
if(isset($_POST['view'])){
echo $_POST["fileToUpload"];
	// $target_dir =   "/home/u543134190/public_html/wp-content/themes/Commerce/uploads/agency/";
	$target_dir =   "E:\OpenServer\domains\Commercia/wp-content/themes/Commerce/uploads/agency/";
	$name_logo = date('YmdHi').'__'. basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . $name_logo;

	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["view"])) {
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
	        echo "The file ". basename( $_FILES["fileToUpload"]["tmp_name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	} 
	echo "<br><br>".$target_dir."<br>" ;
echo $target_file ;

	
	echo "
	<p><b style='font-weight: 700;'>GENERAL INFO</b></p>";
			echo "<br><img src='".$_POST["logo"]."' width='200px' height='150px'><br><br>";
			echo "<p><b style='font-weight: 700;'>Company Name: </b>" .$_POST["agency_title"]. "</p><br>";
			echo "<p class='view-content'><b style='font-weight: 700;'>Description </b></p>". "<p style='text-align:justify;'>" .$_POST["agency_notes"]. "</p>". "<br><br>";
					
			echo "<div class='row'>
					<div class='col-sm-4'><p ><b style='font-weight: 700;'>Website URL </b></p><br><a href='" .$_POST["agency_website"]. "'>" .$_POST["agency_website"]. "</a></div>";

			echo "<div class='col-sm-4'><p ><b style='font-weight: 700;'>Facebook </b></p><br>"."<a href='".$_POST["agency_facebook"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce/images/05.png'></a></div>"  ;

			echo "<div class='col-sm-4'><p ><b style='font-weight: 700;'>Twitter </b></p><br>"."<a href='".$_POST["agency_twitter"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce/images/twitter.png'></a></div></div><br><br>";
			
			// LOCATION
			echo "<p ><b style='font-weight: 700;'>Location: </b>" .$_POST["agency_adress"]. " " .$_POST["agency_city"]. " " .$_POST["agency_state"]. " " .$_POST["agency_zip"]. " " .$_POST["agency_country"]. "</p><br>";

			// echo ' <div id="floating-panel">
		 //      <input id="address" type="textbox" value="'.$_POST["agency_adress"].",".$_POST["agency_city"].'">
		 //      <input id="submit" type="button" value="Geocode">
		 //    </div>
		 //    <div id="map"></div><br><br>';


			echo "<br><br><p ><b style='font-weight: 700;'>CLIENTS </b></p>
			<p><b style='font-weight: 700;'>Sport:</b></p>" .$_POST["agency_sport"]. "<br><br>";
			echo "<p> <b style='font-weight: 700;'>Sponsors:</b></p>" .$_POST["agency_sponsors"]. "<br><br>";

			echo "<p><b style='font-weight: 700;'>CONTACTS </b></p>
			<p><b style='font-weight: 700;'>First name:</b>". " " .$_POST["first_name"]. "</p>";
			echo "<p><b style='font-weight: 700;'>Last name:</b>". " " .$_POST["last_name"]. "<br></p>";
			echo "<p><b style='font-weight: 700;'>Phone number:</b>". " " .$_POST["agency_phone"]. "<br></p>";
			echo "<p><b style='font-weight: 700;'>Email adress:</b>". " ".$_POST["agency_email"]. "</p><br>";


			// echo "<input class='main_buttons' type='button' value='Print'  onclick='window.print();return false;' />"." ";
	        echo "<input class='main_buttons' type='button' value='Edit Form'  onClick='history.go(-1)' />"." ";
	        echo "<input class='main_buttons' type='submit' name='agency' value='Pay' /></p>";

}
	$user_email = $_SESSION['email'];

$agency_title = $_POST['agency_title'];
$agency_logo = $name_logo;
$agency_notes = $_POST['agency_notes'];
$agency_adress = $_POST['agency_adress'];
$agency_city = $_POST['agency_city'];
$agency_state = $_POST['agency_state'];
$agency_zip = $_POST['agency_zip'];
$agency_country = $_POST['agency_country'];
$agency_name = $_POST['first_name'];
$agency_phone = $_POST['agency_phone'];
$agency_website = $_POST['agency_website'];
$agency_email = $_POST['agency_email'];
$agency_facebook = $_POST['agency_facebook'];
$agency_twitter = $_POST['agency_twitter'];
$agency_jobtitle = $_POST['last_name'];
$agency_sport = $_POST['agency_sport'];
$agency_sponsors = $_POST['agency_sponsors'];
$active = 'no';

if(isset($_POST['view'])){
    
            $agency_title = addslashes($agency_title);
			
			$agency_notes = addslashes($agency_notes);
			$agency_adress = addslashes($agency_adress);
			$agency_city = addslashes($agency_city);
			$agency_state = addslashes($agency_state);
			$agency_zip = addslashes($agency_zip);
			$agency_country = addslashes($agency_country);
			$agency_name = addslashes($agency_name);
			$agency_phone = addslashes($agency_phone);
			// $agency_website = addslashes($agency_website);
			$agency_email = addslashes($agency_email);
			$agency_facebook = addslashes($agency_facebook);
			$agency_twitter = addslashes($agency_twitter);
			$agency_jobtitle = addslashes($agency_jobtitle);
			$agency_sport = addslashes($agency_sport);
			$agency_sponsors = addslashes($agency_sponsors);

            $agency_title = htmlspecialchars($agency_title);
			// $agency_logo = htmlspecialchars($agency_logo);
			$agency_notes = htmlspecialchars($agency_notes);
			$agency_adress = htmlspecialchars($agency_adress);
			$agency_city = htmlspecialchars($agency_city);
			$agency_state = htmlspecialchars($agency_state);
			$agency_zip = htmlspecialchars($agency_zip);
			$agency_country = htmlspecialchars($agency_country);
			$agency_name = htmlspecialchars($agency_name);
			$agency_phone = htmlspecialchars($agency_phone);
			// $agency_website = htmlspecialchars($agency_website);
			$agency_email = htmlspecialchars($agency_email);
			$agency_facebook = htmlspecialchars($agency_facebook);
			$agency_twitter = htmlspecialchars($agency_twitter);
			$agency_jobtitle = htmlspecialchars($agency_jobtitle);
			$agency_sport = htmlspecialchars($agency_sport);
			$agency_sponsors = htmlspecialchars($agency_sponsors);

			
			$query = mysql_query("INSERT INTO agency (agency_title, agency_notes, agency_adress, agency_city, agency_state, agency_zip, agency_country, agency_name, agency_phone, agency_website, agency_email, agency_facebook, agency_twitter, agency_jobtitle, agency_sport, agency_sponsors, agency_logo, user_email) VALUES('$agency_title', '$agency_notes', '$agency_adress', '$agency_city', '$agency_state', '$agency_zip', '$agency_country', '$agency_name', '$agency_phone', '$agency_website', '$agency_email', '$agency_facebook', '$agency_twitter', '$agency_jobtitle', '$agency_sport', '$agency_sponsors', '$agency_logo', '$user_email')");
            
           
              
  
}
	         ?>
</form>
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
 <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: {lat: 51.509058, lng: -0.115024},
          scrollwheel: false,
          zoomControl: false


        });
        var geocoder = new google.maps.Geocoder();

        window.onload = function() {
          geocodeAddress(geocoder, map);
        };
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5CDYaEOeIs0TbXykQW3XN10JnAVBsqz0&callback=initMap">
    </script>

 
</body>

</html>