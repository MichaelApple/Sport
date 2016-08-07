<?php session_start();
include ('db.php'); ?>
<?php 
/**
*Template Name: Findsponsor
**/
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  <?php wp_head(); ?>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body >

  <div class="background" id="home">
   
  <div class="container1">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
<!-- ПОЧАТОК ФОРМИ -->
<form role="form" id="sponsor" method="POST" action="proposal_preview/" enctype="multipart/form-data" name="sponsor">
<div class="tab-content">
<!-- ПЕРША ЧАСТИНА ІНПУТА -->
    <div class="tab-pane active" role="tabpanel" id="step1">
        <div class="container1" > 
		<fieldset style="text-align: center; ">
			<b>GENERAL INFO</b>
		</fieldset>
		
			<div class="uploader" onclick="document.getElementById('filePhoto').click()">
			    <p style="margin-top: 31%; margin-left: 37%;">Add logo</p>
			    <img  height="auto">
			    
			</div>
			<input type="file" name="fileToUpload"  id="filePhoto" />
<!-- 
			<input type="file" class="form-control"  multiple accept="image/*" name="image" onchange="previewFile()" >
			<img src="" name="logo" height="200" alt="Image preview..."></br>
			 -->
			<input id="logo_name" type="hidden" name="logo">
		</fieldset>
		
			<p>Name proposal*<input id="title" class="form-control" type="text" name="title" /></p> 
		
		<div class="row">
			<div class="col-sm-6 col-xs-6">
				<p>Type proposal*<select class="form-control" name="type_proposal[]">
					<optgroup>
						<option>Event</option>
						<option>Team/club</option>
						<option>Sportsmen</option>
					</optgroup>
				</select></p>
			</div> 
			<div class="col-sm-6 col-xs-6">
				<p>Sport* 

				<input class="form-control"  type="text" name="sport" list="sport_list">
				<datalist id="sport_list" style="overflow: scroll;" >
				
				<optgroup>  
				  	<option>Aikido</option>
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
				</optgroup>
			</datalist>

				</p>
			</div> 
		</div>
		<div class="row">
			
			<div class="col-sm-4 col-xs-4">
				<p style="margin-bottom: 0px;">Date of proposal:</p>
			        <div class="form-group">
			            <div class='input-group date' id='datetimepicker1'>
			                <input id="datetimeinput1" type='text' class="form-control" placeholder="From:" name="date_of_proposal_from" />
			                <span class="input-group-addon">
			                    <span class="fa fa-calendar">
			                    </span>
			                </span>
			            </div>
			        </div>
    <!-- <input type="date" class="form-control" name="date_of_proposal_from"></p> -->
			</div>
			<div class="col-sm-4 col-xs-4" style="left: -15px;">
				<p style="margin-bottom: 0px;">&nbsp;</p>
				 <div class="form-group">
			            <div class='input-group date' id='datetimepicker2'>
			                <input type='text' class="form-control" placeholder="To:" name="date_of_proposal_to" />
			                <span class="input-group-addon">
			                    <span class="fa fa-calendar">
			                    </span>
			                </span>
			            </div>
			        </div>
				<!-- <input type="date" class="form-control" name="date_of_proposal_to"></p> -->
			</div>
			<div class="col-sm-4 col-xs-4">
				<p style="margin-bottom: 0px;">Valid until*</p>
				<div class="form-group">
			            <div class='input-group date' id='datetimepicker3'>
			                <input id="datetimeinput3" type='text' class="form-control" name="valid_until" />
			                <span class="input-group-addon">
			                    <span class="fa fa-calendar">
			                    </span>
			                </span>
			            </div>
			        </div>
				<!-- <input type="date" class="form-control" name="valid_until"></p> -->
			</div>
		</div>
		
		<br>
	<div class="loc">
		<p style="text-align: center;">Location</p>
		<!-- <div class="row">
			<div class="col-sm-6 col-xs-6">
				<p>Adress
				<input class="form-control" type="text" name="adress1"></p>
			</div>
			<div class="col-sm-6 col-xs-6">
				<p>City*
				<input class="form-control" type="text" name="city1"></p>
			</div>
		</div> -->
		<div class="row">
			<div class="col-sm-4 col-xs-4">
				<p>State*
				<input class="form-control" type="text" name="state1" list="state_list">
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
			<div class="col-sm-4 col-xs-4">
				<p>City*
				<input class="form-control" type="text" name="city1"></p>
			</div>
			<div class="col-sm-4 col-xs-4">
				<p>Country*
				<input class="form-control" type="text" name="country1" placeholder="USA"></p>
			</div>
		</div>
				
		<!-- <button id="add_location" type="button" class="location_btn" style="margin-top: 10px;">+</button> -->

		<button id="add_location1" type="button" class="location_btn" data-toggle="collapse" data-target="#demo">+</button>
		<br>
		<div id="demo" class="collapse">
			<p style="text-align: center;">Location 2</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress2"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city2"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state2" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city2" ></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country2" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location2" type="button" class="location_btn" data-toggle="collapse" data-target="#demo1">+</button>
			<button id="remove_location1" type="button" class="location_btn" data-toggle="collapse" data-target="#demo">-</button>
		</div>
		
		<div id="demo1" class="collapse"><br>
			<p style="text-align: center;">Location 3</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress3"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city3"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state3" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city3"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country3" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location3" type="button" class="location_btn" data-toggle="collapse" data-target="#demo2">+</button>
			<button id="remove_location2" type="button" class="location_btn" data-toggle="collapse" data-target="#demo1">-</button>
		</div>
		<div id="demo2" class="collapse"><br>
			<p style="text-align: center;">Location 4</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress4"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city4"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state4" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city4"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country4" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location4" type="button" class="location_btn" data-toggle="collapse" data-target="#demo3">+</button>
			<button id="remove_location3" type="button" class="location_btn" data-toggle="collapse" data-target="#demo2">-</button>
		</div>
		<div id="demo3" class="collapse"><br>
			<p style="text-align: center;">Location 5</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress5"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city5"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state5" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city5"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country5" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location5" type="button" class="location_btn" data-toggle="collapse" data-target="#demo4">+</button>
			<button id="remove_location4" type="button" class="location_btn" data-toggle="collapse" data-target="#demo3">-</button>
		</div>
		<div id="demo4" class="collapse"><br>
			<p style="text-align: center;">Location 6</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress6"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city6"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state6" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city6"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country6" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location6" type="button" class="location_btn" data-toggle="collapse" data-target="#demo5">+</button>
			<button id="remove_location5" type="button" class="location_btn" data-toggle="collapse" data-target="#demo4">-</button>
		</div>
		<div id="demo5" class="collapse"><br>
			<p style="text-align: center;">Location 7</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress7"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city7"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state7" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city7"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country7" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location7" type="button" class="location_btn" data-toggle="collapse" data-target="#demo6">+</button>
			<button id="remove_location6" type="button" class="location_btn" data-toggle="collapse" data-target="#demo5">-</button>
		</div>
		<div id="demo6" class="collapse"><br>
			<p style="text-align: center;">Location 8</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress8"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city8"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state8" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city8"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country8" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location8" type="button" class="location_btn" data-toggle="collapse" data-target="#demo7">+</button>
			<button id="remove_location7" type="button" class="location_btn" data-toggle="collapse" data-target="#demo6">-</button>
		</div>
		<div id="demo7" class="collapse"><br>
			<p style="text-align: center;">Location 9</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress9"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city9"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state9" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city9"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country9" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location9" type="button" class="location_btn" data-toggle="collapse" data-target="#demo8">+</button>
			<button id="remove_location8" type="button" class="location_btn" data-toggle="collapse" data-target="#demo7">-</button>
		</div>
		<div id="demo8" class="collapse"><br>
			<p style="text-align: center;">Location 10</p>
			<!-- <div class="row">
				<div class="col-sm-6 col-xs-6">
					<p>Adress
					<input class="form-control" type="text" name="adress10"></p>
				</div>
				<div class="col-sm-6 col-xs-6">
					<p>City*
					<input class="form-control" type="text" name="city10"></p>
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<p>State*
					<input class="form-control" type="text" name="state10" list="state_list"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>City*
					<input class="form-control" type="text" name="city10"></p>
				</div>
				<div class="col-sm-4 col-xs-4">
					<p>Country*
					<input class="form-control" type="text" name="country10" placeholder="USA"></p>
				</div>
			</div>
			<button id="add_location10" type="button" class="location_btn" data-toggle="collapse" data-target="#demo9">+</button>
			<button id="remove_location9" type="button" class="location_btn" data-toggle="collapse" data-target="#demo8">-</button>
		</div>
	</div>	
		
		<br>
		<div class="row">
			<div class="col-sm-12">
				<p>Description
				<textarea name="notes"  cols="40" rows="2" class="form-control" style="max-width: 100%; min-width: 100%;" maxlength="100"></textarea></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Other sponsors
				<input name="other_sponsors"  class="form-control" ></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Media partners
				<input name="media_partners" class="form-control"></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-4 col-xs-4">
				<p>Website URL
				<input class="form-control" type="text" name="website"></p>
			</div>
			<div class="col-sm-4 col-xs-4">
				<p>Facebook
				<input class="form-control" type="text" name="facebook"></p>
			</div>
			<div class="col-sm-4 col-xs-4">
				<p>Twitter
				<input class="form-control" type="text" name="twitter"></p><br>
			</div>
		</div>


<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

		<div class="row" >
		
			<div class="col-sm-6 col-xs-12">
				<div class="uploader_photo1" onclick="document.getElementById('filePhoto1').click()">
		    		<p style="float:right;margin: 5% 15%;">Add photos</p>
				    <div class="plus_image"></div>
				    <img >
				</div>
				
				

				<input type="file"  name="user_photo[]"  id="filePhoto1" multiple/>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div id="links" ></div>
				<div id="send_image"></div>
				<!-- <div >
					<input id="utube_link" type="text" class="form-control">
					<button id="utube_btn" type="button" class="btn btn-md btn-success">Your Link</button>
					<iframe id='video_src' width="420" height="345"
						src="https://www.youtube.com/watch?v=yuLV87FCuJw">
					</iframe>
					<video width="420" height="345" controls="">
				    		<source id="video_src"  src="https://www.youtube.com/watch?v=yuLV87FCuJw" type="video/webm"> 
				    	</video>
				</div> -->

				<!-- <div class="uploader_video1" onclick="document.getElementById('fileVideo1').click()">
				    <p style="float:right;margin: 5% 15%;">Add videos</p>
				    <div class="plus_video"></div>
				    	<video width="320" height="240" controls="">
				    		<source id="video_src" src="https://www.youtube.com/watch?v=yuLV87FCuJw" type="video/mp4"> 
				    	</video>
				    	<input type="hidden">
				    <input type="file" name="userprofile_video1"  id="fileVideo1" accept="video/*" multiple/>
				</div> -->
			</div>


		</div><br>

<div class="row">
	<div class="col-sm-6">
		<div class="first_photo"><img src="" alt=""></div>
	</div>
	<div class="col-sm-6"></div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div id="links" ></div>
		<div id="send_image"></div>
	</div>
	<div class="col-sm-8">
		<div id="video_links"></div>
	</div>
</div>

		
		<!-- <div class="row" style="margin-left: 25px;">
			<p>Add video (Premium)</p>
			<div class="col-sm-6 col-xs-12">
				<div class="uploader_video1" onclick="document.getElementById('fileVideo1').click()">
				    <video>
				    	<source >
				    </video>
				    <input type="file" name="userprofile_video1"  id="fileVideo1" />
				    
				</div>
				
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="uploader_video2" onclick="document.getElementById('fileVideo2').click()">
				    <video>
				    	<source >
				    </video>
				    <input type="file" name="userprofile_video2"  id="fileVideo2" />
				    
				</div>
			</div>
		</div> -->
		

<br>
		
		<input id="title2" type="hidden" name="title2" value="">
		<!-- <input class="btn btn-lg btn-primary next-step" type="submit" name="ok" value="Step 2"> -->
		<button type="button" class="main_buttons next-step">Next</button>
</div>

        <ul class="list-inline pull-right">
            <li></li>
        </ul>
    </div>
    <!-- ДРУГА ЧАСТИНА ІНПУТА -->
    <div class="tab-pane" role="tabpanel" id="step2">
         <div class="container1" > 
		    
		     
		      <!-- <p><input id="title3" type="text" name="title3" value="<?php echo $title2; ?>" readonly></p> -->
		       

			<p style="text-align: center; "><b>TARGET AUDIENCE*</b></p> 
         <div class="row">
		        	<div class="col-sm-6 col-xs-5"><p style="text-align: right; ">Number</p></div>
		        	<div class="col-sm-6 col-xs-7"><p><input class="form-control " style="width: 25%;" type="number"  name="number" /></p></div>
		        </div><br>
      <div class="row" style="text-align: right;">
      	<p style="text-align: center;font-weight: 700;">Gender</p>
      		<div class="row">
				<div class="col-sm-6"><p>Male</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="male" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Female</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="female" ><span></span>
					    </label>
					</div>
				</div>
			</div>
	    </div>
          <br>
          <div class="row" style="text-align: right;">
            
           <div class="col-md-12 col-sm-12">
              <p style="text-align: center;"><b>Age</b></p>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>0-17</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age1" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>18-24</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age2" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>25-34</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age3" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>35-44</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age4" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>45-54</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age5" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>55-64</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age6" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>65+</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="age7" ><span></span>
					    </label>
					</div>
				</div>
			</div>
		</div> 
             <br>
        	<div  class="row" style="text-align: right;">
            <div class="col-md-12 col-sm-12">
                <p style="text-align: center;"><b>Education</b></p>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Less than HS diploma</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="edu1" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>High school</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="edu2" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Some college</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="edu3" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Bachelor's degree</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
					    <label>
					      <input type="checkbox" class="hidden" name="edu4" ><span></span>
					    </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Graduate degree</p></div>
				<div class="col-sm-6">
					<div class="ck_boxes ck-boxes_target">
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
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="marital1" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>Married/couple</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="marital2" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>Couple with children</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="marital3" ><span></span>
				    </label>
				</div>
			</div>
		</div>
    </div><br>
    <div class="row" style="text-align: right;">
        <div class="col-md-12 col-sm-12"> 
        	<p style="text-align: center;"><b>Household income</b></p>
        </div>
        <div class="row">
			<div class="col-sm-6"><p>$0-$24,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="income1" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$25,000-$49,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="income2" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$50,000-$74,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="income3" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$75,000-$99,999</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="income4" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$100,000-$149,000</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="income5" ><span></span>
				    </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><p>$150,000 or more</p></div>
			<div class="col-sm-6">
				<div class="ck_boxes ck-boxes_target">
				    <label>
				      <input type="checkbox" class="hidden" name="income6" ><span></span>
				    </label>
				</div>
			</div>
		</div>		
    </div>
  </br>


<!-- КРАЩА ТАРГЕТ АУДІЄНС -->
<!-- 
		        <div class="row">
		        	<div class="col-sm-12 col-xs-12"><p style="text-align: center; "><b>TARGET AUDIENCE*</b></p> </div>
		        </div>

		        <div class="row">
		        	<div class="col-sm-5 col-xs-5"><p style="text-align: right; ">Number</p></div>
		        	<div class="col-sm-7 col-xs-7"><p><input class="form-control " style="width: 15%;" type="number"  name="number" /></p></div>
		        </div>
		        
		    
		      <div id="gender-div" class="row">
		      <p style="text-align: center; "><b>Gender</b></p>
				<div class="col-sm-5 col-xs-5" style="text-align: right; line-height: 1.41;">
					<p>Male</p>
					<p>Female</p>
				</div>
				<div class="col-sm-7 col-xs-7">
					<p><input id="progr" class="form-control " type="number" placeholder="%" max="100" min="0" name="male" >&nbsp;&nbsp;<progress class="progressbar" max="100" value="0" id="progress_male"></progress></p>
					<p><input id="progr2" class="form-control " type="number" placeholder="%" max="100" min="0" name="female" >&nbsp;&nbsp;<progress class="progressbar" max="100" value="0" id="progress_female"></progress></p>
				</div>
		      	
		      
		      </div>
		          
		        <div id="age-edu" class="row">
			            <div class="col-md-12 col-sm-12 col-xs-12">
		              <p style="text-align: center; "><b>Age</b></p>
		              <div class="row">
		                <div id="ageText" class="col-sm-5 col-xs-5" style="text-align: right; line-height: 1.41;">
		                  <p>0-17</p>
		                     <p>18-24</p>
		                     <p>25-34</p>
		                     <p>35-44</p>
		                     <p>45-54</p>
		                     <p>55-64</p>
		                    <p>65+</p>
		                  
		                </div>
		                <div id="age-div" class="col-sm-7 col-xs-7" style="text-align: left;">
		                                
		                  <p><input id="age1" class="form-control " placeholder="%" type="number"  name="age1" data-max="25" size="5">&nbsp;&nbsp;<progress id="pr1" class="progressbar" max="100" value="0"></progress></p>
		                   <p><input id="age2" class="form-control " placeholder="%" type="number"  name="age2" size="3" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr2" class="progressbar" max="100" value="0"></progress></p>
		                   <p><input id="age3" class="form-control " placeholder="%" type="number"  name="age3" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr3" class="progressbar" max="100" value="0"></progress></p>
		                   <p><input id="age4" class="form-control " placeholder="%" type="number"  name="age4" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr4" class="progressbar" max="100" value="0"></progress></p>
		                   <p><input id="age5" class="form-control " placeholder="%" type="number"  name="age5" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr5" class="progressbar" max="100" value="0"></progress></p>
		                   <p><input id="age6" class="form-control " placeholder="%" type="number"  name="age6" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr6" class="progressbar" max="100" value="0"></progress></p>
		                   <p><input id="age7" class="form-control " placeholder="%" type="number"  name="age7" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr7" class="progressbar" max="100" value="0"></progress></p>
		                  <input id="age_percent"  type="text" value="100%" style="width:15%;border: none; text-align: center;" disabled>
		                </div>

		              </div>  
		            </div>
				</div>    
		        	<div id="age-edu" class="row">
		            <div class="col-md-12 col-sm-12 col-xs-12">
		                <p style="text-align: center;"><b>Education</b></p>
		              <div class="row">
		                <div id="eduText" class="col-sm-5 col-xs-5" style="text-align: right; line-height: 1.41;">
		                  <p>Less than HS diploma</p>
		                  <p>High school</p>  
		                  <p>Some college</p>
		                  <p>Bachelor's degree</p>
		                  <p>Graduate degree</p>                
		                </div>
		                <div id="edu-div" class="col-sm-7 col-xs-7" style="text-align: left;">
		                  <p><input id="edu1" class="form-control " type="number" placeholder="%" name="edu1" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		                  <p><input id="edu2" class="form-control " type="number" placeholder="%" name="edu2" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		                  <p><input id="edu3" class="form-control " type="number" placeholder="%" name="edu3" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		                  <p><input id="edu4" class="form-control " type="number" placeholder="%" name="edu4" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		                  <p><input id="edu5" class="form-control " type="number" placeholder="%" name="edu5" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		                  <input id="edu_percent"  type="text" value="100%" style="width:15%;border: none; text-align: center;" disabled>
		                </div>
		              </div>
		            </div>
		          </div>
		           <br>
		    <div id="mar-inc" class="row">
		      <div class="col-md-12 col-sm-12 col-xs-12">  
		      <p style="text-align: center;"><b>Marital status</b></p>
		        <div class="row">
		          <div id="marText" class="col-sm-5 col-xs-5" style="text-align: right; line-height: 1.75!important;">    
		            <p>Single</p>
		            <p>Married/couple</p>
		            <p>Couple with children</p>
		          </div>
		          <div id="mar-div" class="col-sm-7 col-xs-7" style="text-align: left;">
		            <p><input id="marital1" class="form-control " placeholder="%" type="number" name="marital1" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		            <p><input id="marital2" class="form-control " placeholder="%" type="number" name="marital2" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		            <p><input id="marital3" class="form-control " placeholder="%" type="number" name="marital3" maxlength="3">&nbsp;&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		            <input id="mar_percent" type="text" value="100%" style="width:15%;border: none; text-align: center;" disabled>
		          </div>
		        </div>   
		      </div>
		    </div>
		    <div id="mar-inc" class="row">
		      <div id="houseText" class="col-md-12 col-sm-12 col-xs-12"> 
		          <p style="text-align: center;"><b>Household income</b></p>
		            <div class="row">
		              <div class="col-sm-5 col-xs-5" style="text-align: right; line-height: 1.71;">
		                <p>$0-$24,999</p>
		                <p>$25,000-$49,999</p>
		                <p>$50,000-$74,999</p>
		                <p>$75,000-$99,999</p>
		                <p>$100,000-$149,000</p>
		                <p>$150,000 or more</p>
		            </div>
		            <div id="inc-div" class="col-sm-7 col-xs-7" style="text-align: left;">
		              <p><input id="income1" class="form-control " placeholder="%" type="number" name="income1" maxlength="3">&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		              <p><input id="income2" class="form-control " placeholder="%" type="number" name="income2" maxlength="3">&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		              <p><input id="income3" class="form-control " placeholder="%" type="number" name="income3" maxlength="3">&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		              <p><input id="income4" class="form-control " placeholder="%" type="number" name="income4" maxlength="3">&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		              <p><input id="income5" class="form-control " placeholder="%" type="number" name="income5" maxlength="3">&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		              <p><input id="income6" class="form-control " placeholder="%" type="number" name="income6" maxlength="3">&nbsp;<progress class="progressbar" max="100" value="0"></progress></p>
		              <input id="income_percent" type="text" value="100%" style="width:15%;border: none; text-align: center;" disabled>
		            </div>
		          </div>
		      </div>
		    </div>
		  </br>
		<input id="maxGender" type="hidden" name="maxGender" value="">
		<input id="maxAge" type="hidden" name="maxAge" value="">
		<input id="maxEdu" type="hidden" name="maxEdu" value="">
		<input id="maxMar" type="hidden" name="maxMar" value="">
		<input id="maxInc" type="hidden" name="maxInc" value=""> -->
		<!-- <input class="btn btn-lg btn-info" type="submit" name="ok2" value="Step 3" />
-->
				
				<button id="numbers_check" type="button" class="main_buttons next-step">Next</button>
				<button type="button" style="float: left;" class="main_buttons prev-step">Back</button>
		  </div>
        
    </div>
    <div class="tab-pane " role="tabpanel" id="step3" >
        <div class="container1" > 

<!--  <form name="forma" id="sponsor" method="POST" action="final/" enctype="multipart/form-data"> -->
  <fieldset>
  
    <div class="row">
    <p style="text-align: center;"> <b>OPPORTUNITIES</b></p>
    	<div class="col-sm-10 col-xs-7 ">
          <p style=" text-align: left; border-bottom: 1px solid #222;">Levels:</p>
        </div>
	<div class="col-sm-2 col-xs-5" style="padding-left: 3%; padding-right: 0;height: 50px;">
		
	        <div id="first_level" class="" style="width: 100%;">
	        	<div id="plat_level">
	          	<select id="select1" class="form-control" name="levels[]" style="padding-left: 5px; font-size: 17px;">
		          	<option value="Platinum" >Platinum</option>
		          	<option value="Gold" >Gold</option>
		          	<option value="Silver">Silver</option>
					<option value="Bronze">Bronze</option>
				</select> 
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
					      <input type="checkbox" class="hidden" name="check1" ><span></span>
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
			      <input type="checkbox" class="hidden" name="check2" ><span></span>
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
			      <input type="checkbox" class="hidden" name="check3" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check4" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check5" ><span></span>
					    </label>
					</div>
        		
        </div>   
      </div>

      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo on printed material <span style="font-size: 14px;">(newsletter, letterhead, brochures, flyers, tickets)</span></p>
          
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check6" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check7" ><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#1" style="text-align: left;" placeholder="Or other">
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check8" disabled><span></span>
					    </label>
					</div>
        		
        </div> 
      </div>
<button id="add_other1" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other1">+</button>
       <p><div class="row collapse" id="or_other1" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#2" style="text-align: left;" placeholder="Or other">
        	<button id="add_other2" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other2">+</button>
          	<button id="remove_other1" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other1">-</button>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check9" disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div></p>
      <div class="row collapse" id="or_other2" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#3" style="text-align: left;" placeholder="Or other">
        	
          	<button id="remove_other2" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other2">-</button>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check10" disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div>  
<br><br>
      <p style="text-align: left;"><b>Media</b></p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Logo and link on our website</p>
        </div>
        <div class="col-sm-2">
        	<div class="row">
        		
					    <label>
					      <input type="checkbox" class="hidden" name="check11" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check12" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check13" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check14" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check15" ><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#4" style="text-align: left;" placeholder="Or other">
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check16" disabled><span></span>
					    </label>
					</div>
        		
        </div>   
      </div>
<button id="add_other3" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other3">+</button>
       <p>
      <div class="row collapse" id="or_other3" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#5" style="text-align: left;" placeholder="Or other">
        	<button id="add_other4" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other4">+</button>
          	<button id="remove_other3" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other3">-</button><br>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check17" disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div></p>
    <div class="row collapse" id="or_other4" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#6" style="text-align: left;" placeholder="Or other">
        	
          	<button id="remove_other4" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other4">-</button>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check18" disabled><span></span>
					    </label>
					</div>
        		
        </div>
    </div><br><br>
      <p style="text-align: left;"><b>Hospitality</b></p>
      <p style="text-align: left; font-size: 14px; margin-top: -1%;">Tickets to the sports and official events</p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Sports events</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check19" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check20" ><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#7" style="text-align: left;" placeholder="Or other">
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check21" disabled><span></span>
					    </label>
					</div>
        		
        </div>    
      </div>
<button id="add_other5" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other5">+</button>
	<p>
       <div class="row collapse" id="or_other5" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#8" style="text-align: left;" placeholder="Or other">
        	<button id="add_other6" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other6">+</button>
          	<button id="remove_other5" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other5">-</button>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check22" disabled><span></span>
					    </label>
					</div>
        		
        </div>    
      </div></p>
      <div class="row collapse" id="or_other6" style="margin-top: -7px;">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#9" style="text-align: left;" placeholder="Or other">
        	
          	<button id="remove_other6" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other6">-</button>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check23" disabled><span></span>
					    </label>
					</div>
        		
        </div>    
      </div><br><br>
      <p style="text-align: left;"><b>General</b></p>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Use of our logo in marketing</p>
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check24" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check25" ><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
          <p style="text-align: left;">Promote events <span style="font-size: 14px;">(presentation of products with participants/players and spectators during our events)</span></p>
          
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check26" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check27" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check28" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check29" ><span></span>
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
					      <input type="checkbox" class="hidden" name="check30" ><span></span>
					    </label>
					</div>
        		
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-xs-8">
        	<input class="form-control" name="or_other#10" style="text-align: left;" placeholder="Or other">
        </div>
        <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check31" disabled><span></span>
					    </label>
					</div>
        		
        </div>   
      </div>
          <button id="add_other7" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other7">+</button>
          <p>
		           <div class="row collapse" id="or_other7" style="margin-top: -7px;">
		            <div class="col-sm-10 col-xs-8">
		            	<input class="form-control" name="or_other#11" style="text-align: left;" placeholder="Or other">
		            	<button id="add_other8" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other8">+</button>
          	<button id="remove_other7" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other7">-</button>
		            </div>
		            <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check32" disabled><span></span>
					    </label>
					</div>
        		
        </div>   
  </div></p>
  <div class="row collapse" id="or_other8" style="margin-top: -7px;">
		            <div class="col-sm-10 col-xs-8">
		            	<input class="form-control" name="or_other#12" style="text-align: left;" placeholder="Or other">
		            	
          	<button id="remove_other8" type="button" class="other_btn" data-toggle="collapse" data-target="#or_other8">-</button>
		            </div>
		            <div class="col-sm-2">
        	
        			<div class="ck_boxes">
					    <label>
					      <input type="checkbox" class="hidden" name="check33" disabled><span></span>
					    </label>
					</div>
        		
        </div>   
	</div><br><br>
				<div class="row">
					<div class="col-sm-10"><p style=" text-align: left; border-bottom: 1px solid #222;">Price $US:</p></div>
					<div class="col-sm-2">
						<input style="width: 100%;" class="form-control" id="price" type="number" name="price1" placeholder="$US">
					</div>
						
				</div>				
				<br>
				
				<div class="row">
				<p style="text-align: center;margin-bottom: 0px;"><b>CONTACTS</b></p>
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
						<p style="margin-bottom: 0px;">Phone number*</p>
						<input type="text" class="form-control" name="phone" >
					</div>
					<div class="col-sm-6">
						<p style="margin-bottom: 0px;">Email adress*</p>
						<input type="text" class="form-control" name="email" >
					</div>
				</div>
				  </br>
				<!-- <input class="btn btn-info btn-lg" type="submit" name="ok3" value="Submit"  /> -->
				  <button type="button" style="float:left;" class="main_buttons prev-step" >Back</button>
           
            <!-- <button type="button" class="main_buttons next-step" >Next</button> -->
            
			<input class="main_buttons next-step" type="submit" name="ok3" value="View"  />
				
				</fieldset>
		    
		  </div>
        <ul class="list-inline pull-right">

            
            <!-- <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li> -->
        </ul>
    </div>
       <!-- <div class="tab-pane" role="tabpanel" id="complete">
            
           
            <div class="row">
            	<div class="col-sm-6 col-xs-4"><p style="text-align: left;"><b>Publish period:</b></p></div>
            	<div  class="col-sm-2 col-xs-3">
        			<div  class="ck_boxes">
					    <label>
					      <input id="month3" type="checkbox" class="hidden" name="check26" ><span></span>
					    </label>
					</div>
	           	</div>
            	<div class="col-sm-4 col-xs-2" style="text-align: right;">
            		<p>3 month - US$25.00</p>
            	</div>
            </div>

            <div class="row">
            	<div class="col-sm-6 col-xs-4"></div>
            	<div class="col-sm-2 col-xs-3">
            		<div class="ck_boxes">
					    <label>
					      <input id="month6" type="checkbox" class="hidden" name="check28" ><span></span>
					    </label>
					</div>
            	</div>
            	<div class="col-sm-4 col-xs-2" style="text-align: right;">
            		<p>6 month - US$45.00</p>
            	</div>
            	
            </div>
            <div class="row">
            	<div class="col-sm-6 col-xs-4"></div>
            	<div class="col-sm-2 col-xs-3">
            		<div class="ck_boxes">
					    <label>
					      <input id="month12" type="checkbox" class="hidden" name="check30" ><span></span>
					    </label>
					</div>
            	</div>
            	<div class="col-sm-4 col-xs-2" style="text-align: right;">
            		<p>12 month - US$85.00</p>
            	</div>
            	
            </div>
            <br><br>
             <div class="row">
            	<div class="col-sm-6 col-xs-4"><p style="font-weight: 700; text-align: left;">Premium</p></div>
            	<div class="col-sm-2 col-xs-3">
            		<div class="ck_boxes">
					    <label>
					      <input id="prem" type="checkbox" class="hidden" name="check32" ><span></span>
					    </label>
					</div>
            	</div>
            	<div class="col-sm-4 col-xs-2" style="text-align: right;">
            		<p>US$50.00</p>
            	</div>
            	
            </div>
            <p class="payment">first position in search</p>
            <p class="payment">more levels in opportunities</p>
            <p class="payment">24h support service</p>
            <p class="payment">personal assistant</p>
            <p class="payment">add more photo</p>
            <p class="payment">add video</p>
           <br>
            <div class="row" style="border-bottom: 1px solid #222;">
            	<div class="col-sm-10"><p style=" text-align: left;"><b>Total:</b></p></div>
            	<div  class="col-sm-2"><input id="total" type="text" disabled style="border: none; font-size: 17px; text-align: right;"></div>
            </div><br><br>
            
           <button type="button" style="float:left;" class="main_buttons prev-step">Back</button>
           
            <input class="main_buttons next-step" type="submit" name="ok3" value="View"  /> 
        </div> -->
    <div class="clearfix"></div>
</div>
</form>
        </div>
    </section>
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