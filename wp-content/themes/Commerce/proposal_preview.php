<?php session_start(); ?>
<?php 
/**
*Template Name: proposal_preview
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
  <!-- <link rel="stylesheet" type="text/css" href="http://commercia/wp-content/themes/Commerce/css/css/screen.css"> -->

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">

<br><br><br><br>
 <?php 
include ('db.php');
// $logo_logo = $_POST['logo_image'];
// // <img src='http://sponsorships.esy.es/wp-content/themes/Commerce/uploads/proposal/".$_FILES["fileToUpload"]["name"]."' width='200px' height='100%'>


// ЗАГРУЗКА LOGO   $target_dir =   "/home/u543134190/public_html/wp-content/themes/Commerce/uploads/proposal/";

	$target_dir =   "E:\OpenServer\domains\Commercia/wp-content/themes/Commerce/uploads/proposal/";
	$name_logo = date('YmdHi').'__'. basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . $name_logo;

	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["ok3"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	   
	    if($check !== false ) {
	        echo "File is an image - " . $check["mime"] . ".<br>";
	       
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
	        echo "The file ". $target_file. " has been uploaded.<br>";
	    } else {
	        echo "Sorry, there was an error uploading your file.<br>";
	    }
	    
	} 
	// Count # of uploaded files in array
$total = count($_FILES['user_photo']['name']);

// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['user_photo']['tmp_name'][$i];
  $path_to_photos = 'E:\OpenServer\domains\Commercia/wp-content/themes/Commerce/uploads/proposal/photos/';

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = $path_to_photos . date('YmdHi').'__'. $_FILES['user_photo']['name'][$i];

$upload_photo = 1;
	$imagePhotoType = pathinfo($newFilePath,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["ok3"])) {
	    $check = getimagesize($_FILES["user_photo"]["tmp_name"][$i]);
	   
	    if($check !== false ) {
	        echo "File is an image - " . $check["mime"] . ".<br>";
	       
	        $upload_photo = 1;
	        echo "<p> Your image".$_FILES["user_photo"]["name"][$i]."</p>";
	        
	    } else {
	        echo "File is not an image.";
	        $upload_photo = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $upload_photo = 0;
	}
	// Check file size
	if ($_FILES["user_photo"]["size"][$i] > 5000000) {
	    echo "Sorry, your file is too large.";
	    $upload_photo = 0;
	}
	
	// Allow certain file formats
	if($imagePhotoType != "jpg" && $imagePhotoType != "png" && $imagePhotoType != "jpeg"
	&& $imagePhotoType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $upload_photo = 0;
	}
	
	// Check if $upload_photo is set to 0 by an error
	if ($upload_photo == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
    	echo "The file ". $newFilePath. " has been uploaded.<br>";
      //Handle other code here

	    }
	  }
	}
}
?>





<div id="agency_view" class="agency_view">
	<form  method="post" action="pay_proposal/" enctype="multipart/form-data">

	<?php 	

		$type_proposal = $_POST['type_proposal'];
		$sport = $_POST['sport'];
		$levels = $_POST['levels'];
		echo "<img src='".$_POST["logo"]."' width='200px' height='100%'><br><br>";
		echo "<p><b>Name of Proposal: </b>" .$_POST["title"]. "</b></p><br>";
	

		echo "<div class='row'>
			<div class='col-sm-6'> 
				<p><b>Type proposal:</b>". " "; print_r($type_proposal[0]); echo"</p>
				<p><b>Date of proposal:    </b>" .$_POST["date_of_proposal_from"]." " . "/" . " " .$_POST["date_of_proposal_to"]. "</p>
			</div>
			<div class='col-sm-6'><p><b>Sport:</b>". " "; print_r($sport); echo "</p></div>
			<p><b>Valid until:</b>". " " .$_POST["valid_until"]. "</p>
		</div><br>";


		echo "<p ><b>Location: </b>"  .$_POST["city1"]. "," .$_POST["state1"]. "," .$_POST["country1"]. "</p>";

// echo ' <div id="floating-panel">
//       <input id="address" type="textbox" value="'.$_POST["adress1"].",".$_POST["city1"].'">
//       <input id="submit" type="button" value="Geocode">
//     </div>
//     <div id="map"></div>';

		  
echo "
		<br>
		<p class='view-content'><b>Description: </b></p>". "<p style='text-align:justify;'>" .$_POST["notes"]. "</p>". "<br><br>
		<p class='view-content'><b>Other sponsors: </b></p>". "<p style='text-align:justify;'>" .$_POST["other_sponsors"]. "</p>". "<br><br>
		<p class='view-content'><b>Media partners: </b></p>". "<p style='text-align:justify;'>" .$_POST["media_partners"]. "</p>". "<br><br>";


		echo "<div class='row'>
				<div class='col-sm-4'><p ><b>Website URL </b></p><br><a href='".$_POST["website"]."' target='_blank'>".$_POST["website"]."</a></div>
				<div class='col-sm-4'><p ><b>Facebook </b></p><br><a href='".$_POST["facebook"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce/images/05.png'></a></div>
				<div class='col-sm-4'><p ><b>Twitter </b></p><br><a href='".$_POST["twitter"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce/images/twitter.png'></a></div></div><br><br>";
		  // <div class='col-sm-4'><p ><b>Facebook </b></p><br>"."<a href='".$_POST["facebook"]."' target='_blank'><img src='/wp-content/themes/Commerce/images/05.png'></a></div>
				// <div class='col-sm-4'><p ><b>Twitter </b></p><br>"."<a href='".$_POST["twitter"]."' target='_blank'><img src='/wp-content/themes/Commerce//images/twitter.png'></a></div></div><br><br>";
		        
		echo "<p class='view-content'><b>Photo: </b></p>
		<div class='row'>

		<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id='blueimp-gallery' class='blueimp-gallery blueimp-gallery-controls'>
    <div class='slides'></div>
    <h3 class='title'></h3>
    <a class='prev'>‹</a>
    <a class='next'>›</a>
    <a class='close'>×</a>
    <a class='play-pause'></a>
    <ol class='indicator'></ol>
</div>
<div id='links'>"; if(isset($_POST["photo_number_1"])) echo"
	<a href='" . $_POST["photo_number_1"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_1"] . "' >
	</a>";
	if(isset($_POST["photo_number_2"])) echo"
	<a href='" . $_POST["photo_number_2"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_2"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_3"])) echo"
	<a href='" . $_POST["photo_number_3"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_3"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_4"])) echo"
	<a href='" . $_POST["photo_number_4"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_4"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_5"])) echo"
	<a href='" . $_POST["photo_number_5"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_5"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_6"])) echo"
	<a href='" . $_POST["photo_number_6"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_6"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_7"])) echo"
	<a href='" . $_POST["photo_number_7"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_7"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_8"])) echo"
	<a href='" . $_POST["photo_number_8"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_8"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_9"])) echo"
	<a href='" . $_POST["photo_number_9"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_9"] . "' >
	</a>"; 
	if(isset($_POST["photo_number_10"])) echo"
	<a href='" . $_POST["photo_number_10"] . "'>
		<img class='view_images' src='" . $_POST["photo_number_10"] . "' >
	</a>";
	echo"
</div>
			<br><br>
			</div>
		<br><br></<br><br>";

// TARGET AUDIENCE
			echo '
	<div class="row" style="border: 2px solid #3078BE;box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);-moz-border-radius: 15px;
  -webkit-border-radius: 15px;  border-radius: 15px;">
	<p style="text-align: center; "><b style="font-weight: 700; ">TARGET AUDIENCE*</b></p><br><br>
		<div class="col-sm-6">
			<p style="text-align: right;"><b style="font-weight: 700;" >Gender: </b></p>
			<p style="text-align: right;"><b style="font-weight: 700;" >Age: </b></p>
			<p style="text-align: right;"><b style="font-weight: 700;" >Education: </b></p>
			<p style="text-align: right;"><b style="font-weight: 700;" >Marital status: </b>
			<p style="text-align: right;"><b style="font-weight: 700;" >Household income: </b>
		</div>
		<div class="col-sm-6">
			<p style="text-align: left;">';
			if (isset($_POST["male"])) {
				echo 'Male  ';
			}     
			if (isset($_POST["female"])) {
				echo 'Female  ';
			}
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["age1"])) {
				echo '0-17  ';
			}
				
			if (isset($_POST["age2"])) {
				echo '18-24  ';
			}
			if (isset($_POST["age3"])) {
				echo '25-34  ';
			}     
			if (isset($_POST["age4"])) {
				echo '35-44  ';
			}  
			if (isset($_POST["age5"])) {
				echo '45-54  ';
			}
			if (isset($_POST["age6"])) {
				echo '55-64  ';
			}     
			if (isset($_POST["age7"])) {
				echo '64+';
			}
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["edu1"])) {
				echo 'Less than HS diploma  ';
			}     
			if (isset($_POST["edu2"])) {
				echo 'High scool ';
			}
			if (isset($_POST["edu3"])) {
				echo 'Some college  ';
			}     
			if (isset($_POST["edu4"])) {
				echo 'Bachelor\'s degree  ';
			}
			if (isset($_POST["edu5"])) {
				echo 'Graduate degree  ';
			}     
			
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["marital1"])) {
				echo 'Single  ';
			}     
			if (isset($_POST["marital2"])) {
				echo 'Married/couple ';
			}
			if (isset($_POST["marital3"])) {
				echo 'Couple with children  ';
			}     
						
			echo' </p>
			<p style="text-align: left;">';
			if (isset($_POST["income1"])) {
				echo '$0-$24,999  ';
			}     
			if (isset($_POST["income2"])) {
				echo '$25,000-$49,999 ';
			}
			if (isset($_POST["income3"])) {
				echo '$50,000-$74,999  ';
			}     
			if (isset($_POST["income4"])) {
				echo '$75,000-$99,999  ';
			}
			if (isset($_POST["income5"])) {
				echo '$100,000-$149,000  ';
			}  
			if (isset($_POST["income6"])) {
				echo '$150,000 or more  ';
			}    
			
			echo' </p>
		</div>
	</div><br><br>


<div class="row">
    <p style="text-align: center;"> <b>OPPORTUNITIES</b></p>
    	<div class="col-sm-10 col-xs-7 ">
          <p style=" text-align: left; border-bottom: 1px solid #222;">Levels:</p>
        </div>
	<div class="col-sm-2 col-xs-5" style="padding-left: 3%; padding-right: 0;height: 50px;">
		
	        <div id="first_level" class="" style="width: 65%;">
	        	<div style="font-size:20px;">
	          	'; print_r($levels[0]); echo'
				</div>
	        </div>
	    </div>
</div>
    
      <div class="row">
      <p style="text-align: left;"><b style="padding-left: 15px;">Naming Rights</b></p>
        <div class="col-sm-10 col-xs-8" style="text-align: left; font-size: 16px;">
          <p style="font-size: 14px;">Sponsor business will hold the naming rights  to the competition e.g. The "Brand"
          Championship Competitions. 
          This means every competition will have your business
          name in front of it in website, printed marketing and media, and other.</p>
        </div>
        <div class="col-sm-2 col-xs-4"></div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-6">
          <p style="text-align: left;"><b>Name Event/team</b></p>
        </div>
		<div class="col-sm-2 col-xs-6" >
            
            		<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check1" ';if (isset($_POST["check1"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
				
		</div>
    
      </div>
       
   		          <br>
      <p style="text-align: left;"><b >Advertising</b></p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Company banner at all events</p>
        </div>
		<div class="col-sm-2">
			<div class="ck_boxes">
			    <label>
			      <input type="checkbox" class="hidden" name="check2" ';if (isset($_POST["check2"])) echo 'checked'; echo ' disabled><span></span>
			    </label>
			</div>
		</div>

      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo on training clothes</p>
        </div>
        <div class="col-sm-2">
   			<div class="ck_boxes">
			    <label>
			      <input type="checkbox" class="hidden" name="check3" ';if (isset($_POST["check3"])) echo 'checked'; echo ' disabled><span></span>
			    </label>
			</div>
  		</div>
        
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo on playing clothes</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check4" ';if (isset($_POST["check4"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo on sport inventory and equipment</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check5" ';if (isset($_POST["check5"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>   
      </div>

      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo on printed material  <span style="text-align: left; font-size: 14px; margin-top: -3%;">newsletter, letterhead, brochures, flyers, tickets</span></p>
          
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check6" ';if (isset($_POST["check6"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
        </div>   
      
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo on souvenirs</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check7" ';if (isset($_POST["check7"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>';
        	if (isset($_POST["check8"])) {	
	 		echo '
      <div class="row">
        <div class="col-sm-10 col-xs-8"><p style="text-align:left;">'.$_POST["or_other#1"].'</p>
	 	</div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check8" checked disabled><span></span>
					    </label>
					</div>
        		
        </div> 
      </div>
';
        	if (isset($_POST["check9"])) {	echo '
       <p><div class="row " id="or_other1" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
				<p style="text-align:left;">'.$_POST["or_other#2"].'</p> </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check9" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div></p>';}
        	
        	if (isset($_POST["check10"])) {	echo '
      <div class="row " id="or_other2" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
				<p style="text-align:left;">'.$_POST["or_other#3"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check10" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div>  ';}}
    echo'
<br><br>
      <p style="text-align: left;"><b>Media</b></p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo and link on our website</p>
        </div>
        <div class="col-sm-2">
        	<div class="row">
        		
					    <label>
					      <input type="checkbox" class="hidden" name="check11"';if (isset($_POST["check11"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Permanent advertisement spot on the website</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check12"';if (isset($_POST["check12"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo of the sponsor at the video</p>
        </div>
       <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check13"';if (isset($_POST["check13"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo of the sponsor at the photos</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check14"';if (isset($_POST["check14"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Announce name of sponsor during our events</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check15"';if (isset($_POST["check15"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>';
        	if (isset($_POST["check16"])) {	
	 		echo '
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#4"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check16" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>   
      </div>';
        	if (isset($_POST["check17"])) {	
	 		echo '

       <p>
      <div class="row " id="or_other3" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#5"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check17" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div>';}
        	if (isset($_POST["check18"])) {	
	 		echo '</p>
    <div class="row " id="or_other4" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#6"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check18" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div>';}}
     echo '<br><br>
      <p style="text-align: left;"><b>Hospitality</b></p>
      <p style="text-align: left; font-size: 14px; margin-top: -1%;">Tickets to the sports and official events</p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Sports events</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check19"';if (isset($_POST["check19"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Official events</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check20"';if (isset($_POST["check15"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>';
        	if (isset($_POST["check21"])) {	
	 		echo '
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#7"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check21" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>    
      </div>';
        	if (isset($_POST["check22"])) {	
	 		echo '
	<p>
       <div class="row " id="or_other5" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#8"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check22" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>    
      </div>';}
        	if (isset($_POST["check23"])) {	
	 		echo '</p>
      <div class="row " id="or_other6" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#9"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check23" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>    
      </div>';}} echo'<br><br>
      <p style="text-align: left;"><b>General</b></p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Use of our logo in marketing</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check24"';if (isset($_POST["check24"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Use of databases of participants/players and spectators</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check25"';if (isset($_POST["check25"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Promote events <span style="font-size: 16px;">(presentation of products with participants/players and spectators during our events)</p>
          
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check26"';if (isset($_POST["check26"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Offer discount or sample product to all members</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check27"';if (isset($_POST["check27"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Name a perpetual award</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check28"';if (isset($_POST["check28"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Present award</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check29"';if (isset($_POST["check29"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Certificate of appreciation</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check30"';if (isset($_POST["check30"])) echo 'checked'; echo ' disabled><span></span>
					    </label>
					</div>
        		
        </div>
      </div>';
        	if (isset($_POST["check31"])) {	
	 		echo '
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<p style="text-align:left;">'.$_POST["or_other#10"].'</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check31" checked disabled><span></span>
					    </label>
					</div>
        		
        </div>   
      </div>';
        	if (isset($_POST["check32"])) {	
	 		echo '
                <p>
		           <div class="row " id="or_other7" style="margin-top: -7px;">
		            <div class="col-sm-10 col-xs-8">
		            	<p style="text-align:left;">'.$_POST["or_other#11"].'</p>
		            </div>
		            <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check32" checked disabled><span></span>
					    </label>
					</div>
                </div>   
  </div>';}
        	if (isset($_POST["check33"])) {	
	 		echo '</p>
  		<div class="row " id="or_other8" style="margin-top: -7px;">
		            <div class="col-sm-10 col-xs-8">
		            	<p style="text-align:left;">'.$_POST["or_other#12"].'</p>
		            </div>
		            <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check33" checked disabled><span></span>
					    </label>
					</div>
                </div>   
	</div>';}}echo'<br><br>
				<div class="row">
					<div class="col-sm-10"><p style=" text-align: left; border-bottom: 1px solid #222;">Price $US:</p></div>
					<div class="col-sm-2">
						<input  name="price1" id="price" type="number" value="'.$_POST["price1"].'" disabled style="border:none; background-color:#fff; width:100%;font-size:17px;text-align:center;">
					</div>
						
				</div>				
				<br>';
	
echo "<p ><b>CONTACTS </b></p>
<p><b>First name:</b>". " " .$_POST["first_name"]. "</p>
<p><b>Last name:</b>". " " .$_POST["last_name"]. "<br></p>
<p><b>Phone number:</b>". " " .$_POST["phone"]. "<br></p>
<p><b>Email adress:</b>". " ".$_POST["email"]. "</p><br>";


// echo "<p><input class='main_buttons' type='button' value='Print'  onclick='window.print();return false;' />"." ";
echo "<input class='main_buttons' type='button' value='Edit Form'  onclick='history.go(-1)' />"." ";
echo "<input class='main_buttons' type='submit' name='proposal_preview' value='Pay' /></p>";


// INSERT WITHOUT PAYING YET

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
$logo = $name_logo;


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



 if(isset($_POST['ok3'])){
   
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
            // alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5CDYaEOeIs0TbXykQW3XN10JnAVBsqz0&callback=initMap">
    </script>
     <script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
</body>
</html>