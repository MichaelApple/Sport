<?php 
/**
*Template Name: company_preview
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

<?php 
	$target_dir =   "/home/u543134190/public_html/wp-content/themes/Commerce/uploads/company/";
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
?>

<div id="agency_view" class="agency_view">
	<form  method="post" action="company/" >

	<?php 	

	

	echo "<p><b style='font-weight: 700; '>GENERAL INFO</b></p>";
			echo "<br><img src='http://sponsorships.esy.es/wp-content/themes/Commerce/uploads/company/".$name_logo."' width='200px' height='100%'><br><br>";
			echo "<p ><b style='font-weight: 700; '>Company Name: </b>" .$_POST["comp_title"]. "</p>";
					
			echo "<p ><b style='font-weight: 700; '>Category:  </b>".$_POST['category']." </p>";
				
			// Website URL
			echo "<p class='view-content' ><b style='font-weight: 700; '>Description </b></p>". "<p style='text-align:justify; '>" .$_POST["comp_notes"]. "</p>". "<br><br>";
			echo "<div class='row'>
					<div class='col-sm-4'><p ><b style='font-weight: 700; '>Website URL </b></p><br><a href='" .$_POST["comp_website"]. "' target='_blank'>" .$_POST["comp_website"]. "</a></div>";
			
			// Facebook
			echo "<div class='col-sm-4'><p ><b style='font-weight: 700; '>Facebook </b></p><br>"."<a href='".$_POST["comp_facebook"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce/images/05.png'></a></div>"  ;
			
			// Twitter
			echo "<div class='col-sm-4'><p style='font-weight: 700; '><b>Twitter </b></p><br>"."<a href='".$_POST["comp_twitter"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce/images/twitter.png'></a></div></div><br><br>";
		    
		    // Location:
			echo "<p ><b style='font-weight: 700; '>Location: </b>" .$_POST["comp_adress"]. "," .$_POST["comp_city"]. "," .$_POST["comp_state"]. "," .$_POST["comp_zip"]. "," .$_POST["comp_country"]. "</p>";

			// echo ' <div id="floating-panel">
		 //      <input id="address" type="textbox" value="'.$_POST["comp_adress"].",".$_POST["comp_city"].'">
		 //      <input id="submit" type="button" value="Geocode">
		 //    </div>
		 //    <div id="map"></div><br><br>';

			// TARGET AUDIENCE
			echo '<p style="text-align: center; "><b style="font-weight: 700; ">TARGET AUDIENCE*</b></p><br><br>
	<div class="row">
		<div class="col-sm-6">
			<p style="text-align: right;"><b style="font-weight: 700;" >Gender: </b></p>
			<p style="text-align: right;"><b style="font-weight: 700;" >Age: </b></p>
			<p style="text-align: right;"><b style="font-weight: 700;" >Education: </b></p>
			<p style="text-align: right;"><b style="font-weight: 700;" >Marital status: </b>
			<p style="text-align: right;"><b style="font-weight: 700;" >Household income: </b>
		</div>
		<div class="col-sm-6">
			<p style="text-align: left;">';
			if (isset($_POST["comp_male"])) {
				echo 'Male  ';
			}     
			if (isset($_POST["comp_female"])) {
				echo 'Female';
			}
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["comp_age1"])) {
				echo '0-17  ';
			}
				
			if (isset($_POST["comp_age2"])) {
				echo '18-24  ';
			}
			if (isset($_POST["comp_age3"])) {
				echo '25-34  ';
			}     
			if (isset($_POST["comp_age4"])) {
				echo '35-44  ';
			}  
			if (isset($_POST["comp_age5"])) {
				echo '45-54  ';
			}
			if (isset($_POST["comp_age6"])) {
				echo '55-64  ';
			}     
			if (isset($_POST["comp_age7"])) {
				echo '64+';
			}
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["comp_edu1"])) {
				echo 'Less than HS diploma  ';
			}     
			if (isset($_POST["comp_edu2"])) {
				echo 'High scool ';
			}
			if (isset($_POST["comp_edu3"])) {
				echo 'Some college  ';
			}     
			if (isset($_POST["comp_edu4"])) {
				echo 'Bachelor\'s degree  ';
			}
			if (isset($_POST["comp_edu5"])) {
				echo 'Graduate degree  ';
			}     
			
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["comp_marital1"])) {
				echo 'Single  ';
			}     
			if (isset($_POST["comp_marital2"])) {
				echo 'Married/couple ';
			}
			if (isset($_POST["comp_marital3"])) {
				echo 'Couple with children  ';
			}     
						
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["comp_income1"])) {
				echo '$0-$24,999  ';
			}     
			if (isset($_POST["comp_income2"])) {
				echo '$25,000-$49,999 ';
			}
			if (isset($_POST["comp_income3"])) {
				echo '$50,000-$74,999  ';
			}     
			if (isset($_POST["comp_income4"])) {
				echo '$75,000-$99,999  ';
			}
			if (isset($_POST["comp_income5"])) {
				echo '$100,000-$149,000  ';
			}  
			if (isset($_POST["comp_income6"])) {
				echo '$150,000 or more  ';
			}    
			
			echo' </p>
		</div>
	</div><br><br>';

	
			echo "<p ><b style='font-weight: 700;'>CONTACTS </b></p>
			<p><b>First name:</b>". " " .$_POST["first_name"]. "</p>
			<p><b>Last name:</b>". " " .$_POST["last_name"]. "<br></p>
			<p><b>Phone number:</b>". " " .$_POST["comp_phone"]. "<br></p>
			<p><b>Email adress:</b>". " ".$_POST["comp_email"]. "</p><br>";


			echo "<input class='main_buttons' type='button' value='Print'  onclick='window.print();return false;' />"." ";
	        echo "<input class='main_buttons' type='button' value='Edit Form'  onClick='history.go(-1)' />"." ";
	        echo "<input class='main_buttons' type='submit' name='company' value='Submit' /></p>";

	       	echo "<input type='hidden' name='comp_title' value='".$_POST["comp_title"]."' />";
	       	// Категорії не хочуть інсертитись...
	       	echo "<input type='hidden' name='category' value='".$_POST["category"]."' />";
	       	echo "<input type='hidden' name='comp_logo' value='".$_POST["comp_logo"]."' />";
	       	echo "<input type='hidden' name='comp_notes' value='".$_POST["comp_notes"]."' />";
	       	echo "<input type='hidden' name='comp_website' value='".$_POST["comp_website"]."' />";
	       	echo "<input type='hidden' name='comp_facebook' value='".$_POST["comp_facebook"]."' />";
	       	echo "<input type='hidden' name='comp_twitter' value='".$_POST["comp_twitter"]."' />";
	       	echo "<input type='hidden' name='comp_adress' value='".$_POST["comp_adress"]."' />";
	       	echo "<input type='hidden' name='comp_city' value='".$_POST["comp_city"]."' />";
	       	echo "<input type='hidden' name='comp_state' value='".$_POST["comp_state"]."' />";
	       	echo "<input type='hidden' name='comp_zip' value='".$_POST["comp_zip"]."' />";
	       	echo "<input type='hidden' name='comp_country' value='".$_POST["comp_country"]."' />";
	      	echo "<input type='hidden' name='first_name' value='".$_POST["first_name"]."' />";
	       	echo "<input type='hidden' name='last_name' value='".$_POST["last_name"]."' />";
	       	echo "<input type='hidden' name='comp_phone' value='".$_POST["comp_phone"]."' />";
	       	echo "<input type='hidden' name='comp_email' value='".$_POST["comp_email"]."' />";
	       	echo "<input type='hidden' name='comp_male' value='".$_POST["comp_male"]."' />";
	       	echo "<input type='hidden' name='comp_female' value='".$_POST["comp_female"]."' />";
	      	echo "<input type='hidden' name='comp_age1' value='".$_POST["comp_age1"]."' />";
	       	echo "<input type='hidden' name='comp_age2' value='".$_POST["comp_age2"]."' />";
	       	echo "<input type='hidden' name='comp_age3' value='".$_POST["comp_age3"]."' />";
	       	echo "<input type='hidden' name='comp_age4' value='".$_POST["comp_age4"]."' />";
	       	echo "<input type='hidden' name='comp_age5' value='".$_POST["comp_age5"]."' />";
	       	echo "<input type='hidden' name='comp_age6' value='".$_POST["comp_age6"]."' />";
	       	echo "<input type='hidden' name='comp_age7' value='".$_POST["comp_age7"]."' />";
	       	echo "<input type='hidden' name='comp_edu1' value='".$_POST["comp_edu1"]."' />";
	       	echo "<input type='hidden' name='comp_edu2' value='".$_POST["comp_edu2"]."' />";
	       	echo "<input type='hidden' name='comp_edu3' value='".$_POST["comp_edu3"]."' />";
	       	echo "<input type='hidden' name='comp_edu4' value='".$_POST["comp_edu4"]."' />";
	       	echo "<input type='hidden' name='comp_edu5' value='".$_POST["comp_edu5"]."' />";
	       	echo "<input type='hidden' name='comp_marital1' value='".$_POST["comp_marital1"]."' />";
	       	echo "<input type='hidden' name='comp_marital2' value='".$_POST["comp_marital2"]."' />";
	       	echo "<input type='hidden' name='comp_marital3' value='".$_POST["comp_marital3"]."' />";
	       	echo "<input type='hidden' name='comp_income1' value='".$_POST["comp_income1"]."' />";
	       	echo "<input type='hidden' name='comp_income2' value='".$_POST["comp_income2"]."' />";
	       	echo "<input type='hidden' name='comp_income3' value='".$_POST["comp_income3"]."' />";
	       	echo "<input type='hidden' name='comp_income4' value='".$_POST["comp_income4"]."' />";
	       	echo "<input type='hidden' name='comp_income5' value='".$_POST["comp_income5"]."' />";
	       	echo "<input type='hidden' name='comp_income6' value='".$_POST["comp_income6"]."' />";

	       	echo "<input type='hidden' name='comp_logo' value='".$name_logo."' />";
	        
	         ?>
	</form>
	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Hot Sauce-12oz Bottle">
  <input type="hidden" name="amount" value="5.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="PayPal - The safer, easier way to pay online">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

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
       <?php if(!$_SESSION['email']) {
          echo "<li><a data-toggle='modal' data-target='#login' > Login/Sign Up</a></li>";
          } 
          else {
            echo "<li><a href='http://sponsorships.esy.es/personal/'>".$_SESSION['email']."</a></li>
            <li><a href='http://sponsorships.esy.es/logout/'> Logout</a></li>";
          }

          ?>
      </ul>
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
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5CDYaEOeIs0TbXykQW3XN10JnAVBsqz0&callback=initMap">
    </script>

 
</body>

</html>