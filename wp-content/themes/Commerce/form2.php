<?php session_start(); ?>
<?php 
/**
*Template Name: AddCompany
**/
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">

  <div class="background" id="home">
    
  
	<div class="container1" > 


<form id="sponsor" method="POST"  enctype="multipart/form-data">
		<fieldset style="text-align: center; ">
			<b>GENERAL INFO</b>
		</fieldset>
		
			<div class="uploader" onclick="document.getElementById('filePhoto').click()">
			    <p style="margin-top: 31%; margin-left: 37%;">Add logo</p>
			    <img >
			    
			</div>
			<input type="file" name="fileToUpload"  id="filePhoto" />
			<input id="logo_name" type="hidden" name="logo">
<!-- 
			<input type="file" class="form-control"  multiple accept="image/*" name="image" onchange="previewFile()" >
			<img src="" name="logo" height="200" alt="Image preview..."></br>
			 -->

		</fieldset>
			<p>Name company* <input id="title" class="form-control" type="text" name="comp_title" /></p>
		</fieldset>	
		<div class="row">
			<div class="col-sm-12">
				<p>Category
<div style="overflow: hidden;">
				<input type="text" class="form-control" name="category" list="categories">

					<datalist id="categories" >
						<option>Agriculture and Food</option>
		<option>Organic products</option>
		<option>Agriculture and forestry</option>
		<option>Livestock and fish</option>
		<option>Food</option>
		<option>Agricultural and forestry machinery and equipment</option>
		<option>Beverages</option>
		<option>Food, drink, tobacco and catering industry machinery and equipment</option>
		<option>Business Services</option>
		<option>Services to businesses</option>
		<option>Hire and rental services</option>
		<option>Hygiene and cleaning</option>
		<option>Financial and insurance services</option>
		<option>Chemicals, Pharmaceuticals and Plastics</option>
		<option>Chemical base materials</option>
		<option>Plastic products</option>
		<option>Chemical products</option>
		<option>Chemical industry plant and equipment</option>
		<option>Rubber and plastic industry plant and equipment</option>
		<option>Health, medical and pharmaceutical</option>
		<option>Rubber products</option>
		<option>Construction</option>
		<option>Furniture and linen</option>
		<option>Metal constructions for the building industry</option>
		<option>Heating, ventilation, air conditioning (HVAC) and refrigeration equipment</option>
		<option>Metal pipework, valves and containers</option>
		<option>Security equipment</option>
		<option>Hardware, ironmongery, cutlery and tools</option>
		<option>Timber, wooden products, machinery and equipment for the woodworking industry</option>
		<option>Building industry</option>
		<option>Civil engineering and building machinery and equipment</option>
		<option>Civil and marine engineering contractors</option>
		<option>Education, Training and Organisations</option>
		<option>Education and training</option>
		<option>International organisations, administrations and associations</option>
		<option>Medical care, social services</option>
		<option>Electrical, Electronics and Optical</option>
		<option>Measuring and testing equipment</option>
		<option>Electronic equipment. Telecommunications equipment</option>
		<option>Electrical equipment. Nuclear equipment</option>
		<option>Optical, photographic and cinematographic equipment</option>
		<option>Energy, Environment</option>
		<option>Energy, fuel and water</option>
		<option>Environmental services, renewable energies</option>
		<option>Oil and gas industry plant and equipment</option>
		<option>IT, Internet, RandD</option>
		<option>Research and testing</option>
		<option>Information technology (IT) and Internet</option>
		<option>Technical offices and engineering consultancies, architects</option>
		<option>Leisure and Tourism</option>
		<option>Postal services, telecommunications, radio and television</option>
		<option>Hospitality, tourism, hotel and catering industries</option>
		<option>Leisure, culture and entertainment</option>
		<option>Sports and leisure equipment</option>
		<option>Metals, Machinery and Engineering</option>
		<option>Industrial subcontractors</option>
		<option>Basic metal products</option>
		<option>Engines and mechanical parts</option>
		<option>Machinery and equipment for metalworking</option>
		<option>Minerals</option>
		<option>Glass, cement and ceramics</option>
		<option>Quarried stone</option>
		<option>Mining, quarrying and stoneworking plant and equipment</option>
		<option>Ores and minerals</option>
		<option>Paper, Printing, Publishing</option>
		<option>Paper and board making plant and equipment</option>
		<option>Printing and publishing</option>
		<option>Printing equipment. Office and shop equipment</option>
		<option>Paper and board</option>
		<option>Retail and Traders</option>
		<option>General traders, department and retail stores</option>
		<option>Textiles, Clothing, Leather, Watchmaking, Jewellery</option>
		<option>Textile, clothing, leather and shoemaking machinery and equipment</option>
		<option>Leathers, furs and their products</option>
		<option>Clothing and footwear</option>
		<option>Textiles</option>
		<option>Precious stoneworking, watchmaking and jewellery</option>
		<option>Transport and Logistics</option>
		<option>Transportation and logistics services</option>
		<option>Handling and storage plant and equipment</option>
		<option>Packaging machinery, equipment and services</option>
		<option>Means of transport</option>

					</datalist>
</div>
				</p>
			</div> 
		</div>
		<p style="text-align: center;">Location</p>
		<div class="row">
			<div class="col-sm-6">
				<p>Adress
				<input class="form-control" type="text" name="comp_adress"></p>
			</div>
			<div class="col-sm-6">
				<p>City*
				<input class="form-control" type="text" name="comp_city"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p>State*
				<input class="form-control" type="text" name="comp_state" list="state_list">
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
				</p>
			</div>
			<div class="col-sm-4">
				<p>Zip*
				<input class="form-control" type="text" name="comp_zip"></p>
			</div>
			<div class="col-sm-4">
				<p>Country*
				<input class="form-control" type="text" name="comp_country" placeholder="USA"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Description
				<textarea name="comp_notes" class="form-control" cols="80" rows="5" style="max-width: 100%;min-width: 100%;" maxlength="100"></textarea></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p>Website URL
				<input class="form-control" type="url" name="comp_website"></p>
			</div>
			<div class="col-sm-4">
				<p>Facebook
				<input class="form-control" type="text" name="comp_facebook"></p>
			</div>
			<div class="col-sm-4">
				<p>Twitter
				<input class="form-control" type="text" name="comp_twitter"></p><br>
			</div>
		</div>
			
	<fieldset>
      <!-- <p><input id="title3" type="text" name="title3" value="<?php echo $title2; ?>" readonly></p> -->
        <p style="text-align: center; "><b>TARGET AUDIENCE*</b></p> 
        
      </fieldset>
      <div class="row" style="text-align: right;">
      	<p style="text-align: center;font-weight: 700;">Gender</p>
      		<div class="row">
				<div class="col-sm-6"><p>Male</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="male" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Female</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="female" ><span></span>
					    </label>
					</div>
				</div>
			</div>
	    </div>
          
          <div class="row" style="text-align: right;">
            
           <div class="col-md-12 col-sm-12">
              <p style="text-align: center;"><b>Age</b></p>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>0-17</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age1" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>18-24</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age2" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>25-34</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age3" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>35-44</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age4" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>45-54</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age5" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>55-64</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age6" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>65+</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="age7" ><span></span>
					    </label>
					</div>
				</div>
			</div>
		</div> 
             
        	<div  class="row" style="text-align: right;">
            <div class="col-md-12 col-sm-12">
                <p style="text-align: center;"><b>Education</b></p>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Less than HS diploma</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="edu1" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>High school</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="edu2" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Some college</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="edu3" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Bachelor's degree</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="edu4" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Graduate degree</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="edu5" ><span></span>
					    </label>
					</div>
				</div>
			</div>
                          
          </div>
           <br>
    <div  class="row" style="text-align: right;">
      <div class="col-md-12 col-sm-12" >  
      	<p style="text-align: center;"><b>Marital status</b></p>
      </div>
		<div class="row">
			<div class="col-sm-6"><p>Single</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="marital1" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>Married/couple</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="marital2" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>Couple with children</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="marital3" ><span></span>
				    </label>
				</div>
			</div>
		</div>
    </div>
    <div class="row" style="text-align: right;">
        <div class="col-md-12 col-sm-12"> 
        	<p style="text-align: center;"><b>Household income</b></p>
        </div>
        <div class="row">
			<div class="col-sm-6"><p>$0-$24,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="income1" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$25,000-$49,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="income2" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$50,000-$74,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="income3" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$75,000-$99,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="income4" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$100,000-$149,000</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="income5" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$150,000 or more</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes">
				    <label>
				      <input type="checkbox" class="hidden" name="income6" ><span></span>
				    </label>
				</div>
			</div>
		</div>		
    </div>
  </br>

<p style="text-align: center;"><b>CONTACTS</b></p>
		<div class="row">
			<div class="col-sm-6">
				<p style="margin-bottom: 0px;">Name*</p>
				<input type="text" class="form-control" name="first_name" placeholder="First name:">
			</div>
			<div class="col-sm-6">
				<p style="margin-bottom: 0px;">&nbsp;</p>
				<input type="text" class="form-control" name="last_name" placeholder="Last name:">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 ">
				<p>Phone number*
				<input type="text" class="form-control" name="comp_phone" ></p>
			</div>
			<div class="col-sm-6">
				<p>Email adress*
				<input type="text" class="form-control" name="comp_email" ></p>
			</div>
		</div>
		<input class="main_buttons next-step" style="float: left;" type="submit" name="ok3" onclick="submitForm('company_preview/')" value="View"/>
		<input class="main_buttons" type="submit" name="comp_search_form" onclick="submitForm('http://commercia/find_proposals/')" value="Save & Search"  />
				
		</form>

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
          echo "<li><a data-toggle='modal' data-target='#login' > Login/Sign Up</a></li>";
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
<!-- Modal Login -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Sign In</h4>
        </div>
        <div class="modal-body">
        <form method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>


      <div class="form-group has-feedback has-feedback-left">
        <label class="control-label">Email:</label>
        <input class="form-control input" id="user_email" type="email" name="email" required>
        <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
    </div>    
    <div class="form-group has-feedback has-feedback-left">
        <label class="control-label">Your Password:</label>
        <input class="form-control input" type="password" name="password" required>
        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
    </div>    
          
      
      <br ><input class="main_buttons login" type="submit" name="login" value="Log In" >
      
      <div class="text-divider">
        <em>or</em>
        <span></span>
      </div>
 <a class="button google full-width" href="/login/google">
<i class="mq-svg-icon right-spacing" data-icon="gplus-16-#FFF" style="min-width: 1px;">
<svg width="16" height="16" viewBox="0 0 20 20" fill="#FFF">
<path d="M10.919 1.25c0 0-3.925 0-5.233 0-2.346 0-4.554 1.777-4.554 3.836 0 2.104 1.599 3.802 3.986 3.802 0.166 0 0.327-0.003 0.485-0.015-0.155 0.297-0.266 0.631-0.266 0.977 0 0.585 0.315 1.059 0.712 1.446-0.301 0-0.591 0.009-0.907 0.009-2.906-0-5.143 1.851-5.143 3.77 0 1.89 2.452 3.073 5.358 3.073 3.313 0 5.143-1.88 5.143-3.77 0-1.516-0.447-2.423-1.83-3.401-0.473-0.335-1.378-1.149-1.378-1.628 0-0.561 0.16-0.837 1.004-1.497 0.865-0.676 1.478-1.627 1.478-2.733 0-1.317-0.586-2.6-1.687-3.023h1.659l1.171-0.847zM9.091 14.052c0.042 0.175 0.064 0.356 0.064 0.54 0 1.527-0.984 2.721-3.808 2.721-2.009 0-3.459-1.272-3.459-2.799 0-1.497 1.799-2.743 3.808-2.721 0.469 0.005 0.906 0.080 1.302 0.209 1.090 0.758 1.873 1.187 2.093 2.051zM5.875 8.355c-1.348-0.040-2.63-1.508-2.862-3.279-0.233-1.771 0.671-3.126 2.019-3.086 1.348 0.041 2.63 1.461 2.862 3.232 0.233 1.771-0.672 3.173-2.019 3.133zM16.25 5v-3.75h-1.25v3.75h-3.75v1.25h3.75v3.75h1.25v-3.75h3.75v-1.25z">
</svg>
</i>
Log in with Google
</a><br>
    <a data-dismiss="modal" data-toggle='modal' data-target='#register'>Register</a>
    </form>
    
  

      </div>
      
    </div>

  </div>
</div>

<!-- Modal Register -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
        <form method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>

    <div class="form-group has-feedback has-feedback-left">
        <label class="control-label">Email:</label>
        <input class="form-control input" id="user_email" type="email" name="email" required>
        <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
    </div>   
    <div class="form-group has-feedback has-feedback-left">
        <label class="control-label">Username:</label>
        <input class="form-control input" id="user_email" type="text" name="username" required>
        <i class="glyphicon glyphicon-user form-control-feedback"></i>
    </div> 
    <div class="form-group has-feedback has-feedback-left">
        <label class="control-label">Your Password:</label>
        <input class="form-control input" type="password" name="password" required>
        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
    </div>  

      <br class="clear">
      <input class="main_buttons login" type="submit" name="submit" value="Go">
      <br>
       <div class="text-divider">
        <em>or</em>
        <span></span>
      </div>
      <a class="button google full-width" href="/login/google">
        <i class="mq-svg-icon right-spacing" data-icon="gplus-16-#FFF" style="min-width: 1px;">
        <svg width="16" height="16" viewBox="0 0 20 20" fill="#FFF">
        <path d="M10.919 1.25c0 0-3.925 0-5.233 0-2.346 0-4.554 1.777-4.554 3.836 0 2.104 1.599 3.802 3.986 3.802 0.166 0 0.327-0.003 0.485-0.015-0.155 0.297-0.266 0.631-0.266 0.977 0 0.585 0.315 1.059 0.712 1.446-0.301 0-0.591 0.009-0.907 0.009-2.906-0-5.143 1.851-5.143 3.77 0 1.89 2.452 3.073 5.358 3.073 3.313 0 5.143-1.88 5.143-3.77 0-1.516-0.447-2.423-1.83-3.401-0.473-0.335-1.378-1.149-1.378-1.628 0-0.561 0.16-0.837 1.004-1.497 0.865-0.676 1.478-1.627 1.478-2.733 0-1.317-0.586-2.6-1.687-3.023h1.659l1.171-0.847zM9.091 14.052c0.042 0.175 0.064 0.356 0.064 0.54 0 1.527-0.984 2.721-3.808 2.721-2.009 0-3.459-1.272-3.459-2.799 0-1.497 1.799-2.743 3.808-2.721 0.469 0.005 0.906 0.080 1.302 0.209 1.090 0.758 1.873 1.187 2.093 2.051zM5.875 8.355c-1.348-0.040-2.63-1.508-2.862-3.279-0.233-1.771 0.671-3.126 2.019-3.086 1.348 0.041 2.63 1.461 2.862 3.232 0.233 1.771-0.672 3.173-2.019 3.133zM16.25 5v-3.75h-1.25v3.75h-3.75v1.25h3.75v3.75h1.25v-3.75h3.75v-1.25z">
        </svg>
        </i>
        Sign up with Google
      </a>
      <br>
      <a data-dismiss="modal" data-toggle='modal' data-target='#login'>Log in</a>

    </form>
    
  

      </div>
      
    </div>

  </div>
</div>
<script type="text/javascript">
    function submitForm(action)
    {
        document.getElementById('sponsor').action = action;
        document.getElementById('sponsor').submit();
    }
</script>
<?php get_footer( ); ?>