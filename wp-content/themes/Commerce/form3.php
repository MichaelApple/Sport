<?php session_start(); ?>
<?php 
/**
*Template Name: AddAgency
**/
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">

  <div class="background" id="home">
    
  
	<div class="container1" > 
<section>
        <div class="wizard">
            <!-- <div class="wizard-inner">
                <div class="connecting-line" style="width: 40%;"></div>
                <ul class="nav nav-tabs" role="tablist">

                    
                    <li role="presentation" class="active" style="left:18%;">
                        <a href="#step2" data-toggle="tab" aria-controls="step1" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li role="presentation" class="disabled" style="left: 29%;">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div> -->

		<form id="sponsor" method="POST"  action="agency_preview/" enctype="multipart/form-data">
		<!-- <div class="tab-content">
		 ПЕРША ЧАСТИНА ІНПУТА -->
    	<!--<div class="tab-pane active" role="tabpanel" id="step2"> -->
		<fieldset style="text-align: center;">
			<b>GENEARAL INFO</b>
		</fieldset>
		<fieldset>
			<div class="uploader" onclick="document.getElementById('filePhoto').click()">
			    <p style="margin-top: 31%; margin-left: 37%;">Add logo</p>
			    <img >
			    
			</div>
			<input type="file" name="fileToUpload"  id="filePhoto" />
			<input id="logo_name" type="hidden" name="logo">
		</fieldset>
		<fieldset>
			<p>Name company* <input id="title" class="form-control" type="text" name="agency_title" /></p>
		</fieldset>	
		<div class="row">
			<div class="col-sm-12">
				<p>Description
				<textarea name="agency_notes" class="form-control" cols="80" rows="5" style="max-width: 100%;min-width: 100%;" maxlength="100"></textarea></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p>Website URL
				<input class="form-control" type="url" name="agency_website"></p>
			</div>
			<div class="col-sm-4">
				<p>Facebook
				<input class="form-control" type="text" name="agency_facebook"></p>
			</div>
			<div class="col-sm-4">
				<p>Twitter
				<input class="form-control" type="text" name="agency_twitter"></p>
			</div>
		</div>
		<p style="text-align: center;">Location</p>
		<div class="row">
			<div class="col-sm-6">
				<p>Adress
				<input class="form-control" type="text" name="agency_adress"></p>
			</div>
			<div class="col-sm-6">
				<p>City*
				<input class="form-control" type="text" name="agency_city"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				
				<p>State*
				<input class="form-control" type="text" name="agency_state" list="state_list">
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
			<div class="col-sm-4">
				<p>Zip*
				<input class="form-control" type="text" name="agency_zip"></p>
			</div>
			<div class="col-sm-4">
				<p>Country*
				<input class="form-control" type="text" name="agency_country" placeholder="USA"></p>
			</div>
		</div>	
			<p style="text-align: center;"><b>CLIENTS</b></p>
		<div class="row">
			<div class="col-sm-12">
				<p>Sport
				<textarea name="agency_sport" class="form-control" cols="80" rows="5" style="max-width: 100%;min-width: 100%;"></textarea></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Sponsors
				<textarea name="agency_sponsors" class="form-control" cols="80" rows="5" style="max-width: 100%;min-width: 100%;"></textarea></p>
			</div>
		</div>
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
						<input type="text" class="form-control" name="agency_phone" ></p>
					</div>
					<div class="col-sm-6">
						<p>Email adress*
						<input type="text" class="form-control" name="agency_email" ></p>
					</div>
				</div>
				<input class="main_buttons next-step" type="submit" name="view" value="View"  />
				<!-- <button type="button" class="main_buttons next-step">Next</button> -->
		<!-- </div>

		        <ul class="list-inline pull-right">
		            <li></li>
		        </ul>
		   			   ДРУГА ЧАСТИНА ІНПУТА -->
		    <!--  <div class="tab-pane" role="tabpanel" id="complete"> -->
		         <!-- <div class="container2" >
				
				<div class="row">
	            	<div class="col-sm-6 col-xs-4"><p style="text-align: left;"><b>PERIOD</b></p></div>
	            	<div  class="col-sm-2 col-xs-3">
	        			<div  class="ck_boxes">
						    <label>
						      <input id="period6" type="checkbox" class="hidden" name="check26" ><span></span>
						    </label>
						</div>
		           	</div>
	            	<div class="col-sm-4 col-xs-2" style="text-align: right;">
	            		<p>6 month - US$20.00</p>
	            	</div>
	            </div>
				<div class="row">
	            	<div class="col-sm-6 col-xs-4"></div>
	            	<div  class="col-sm-2 col-xs-3">
	        			<div  class="ck_boxes">
						    <label>
						      <input id="period12" type="checkbox" class="hidden" name="check26" ><span></span>
						    </label>
						</div>
		           	</div>
	            	<div class="col-sm-4 col-xs-2" style="text-align: right;">
	            		<p>12 month - US$35.00</p>
	            	</div>
	            </div>
				<div class="row" style="border-bottom: 1px solid #222;">
            	<div class="col-sm-10"><p style=" text-align: left;"><b>Total:</b></p></div>
            		<div  class="col-sm-2"><input id="total2" type="text" disabled style="border: none; font-size: 17px; text-align: right;"></div>
            	</div><br><br>
				<button type="button" style="float:left;" class="main_buttons prev-step">Back</button>
       
		           <input class="main_buttons next-step" type="submit" name="view" value="View"  />
		        </div> -->
		    	<!-- <div class="clearfix"></div>
			</div> -->
		</div>
	</form>
        </div>
    </section>

	</div></div>
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
        <li class=""><a href="#home">Home</a></li>
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
<?php get_footer( ); ?>