<?php get_header() ?>

<!--Content -->




<main class="content-main ">
	<div id="work" class=" how ">
		<h2 class="wow bounceIn animated" data-wow-offset="75">How it works</h2>
			<p class="wow bounceInLeft animated" data-wow-offset="75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p class="wow bounceInRight animated" data-wow-offset="75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<div class="row">
		  <div class="col-md-6 col-sm-12 col-xs-12">
		 
		    <div class="ih-item square effect7"><a href="#">
		        <div class="img"><img src="<?php bloginfo('template_url' ); ?>/images/sport1.jpg" alt="img"></div>
		        <div class="info">
		          <h3>Looking for a sponsor?</h3>
		          <p>What are you waiting for?</p>
		          <p></p>
		        </div></a></div>
		   
		  </div>
		  <div class="col-md-6 col-sm-12 col-xs-12">
		  <div class="ih-item square colored effect7"><a href="#">
		        <div class="img"><img src="<?php bloginfo('template_url' ); ?>/images/sport2.jpg" alt="img"></div>
		        <div class="info">
		          <h3>Looking for a good offer?</h3>
		          <p>Find offer</p>
		        </div></a></div>
		  	
		  </div>
		</div>





	</div>
	<div id="plans" class="plans">
		<h2 class="wow bounceIn animated" data-wow-offset="75">Plans</h2>
			<p class="wow bounceInRight animated" data-wow-offset="75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p class="wow bounceInLeft animated" data-wow-offset="75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>



	</main>


<div class="container wow flipInX animated" data-wow-delay="0.5s">  
<div class="row">
	<div class="col-sm-4 col-xs-12">
		<div class="contact-left">
			<p>500 Terry Francois Street
				San Francisco, CA 94158</p>
			<p>info@mysite.com</p>
			<p> Tel: 123-456-7890</p>
		</div>
	</div>
	<div class="col-sm-8 col-xs-12">	
		<form id="contact" method="POST" action="form/" >
	    <h2>Contact   </h2><br>
	    
		<fieldset>
	     <fieldset>
	      <input name="name" class="form-control" placeholder="Your name" type="text" tabindex="1" required  value="<?php echo $name; ?>">
	    </fieldset>
	    <fieldset>
	      <input name="email" class="form-control" placeholder="Your Email Address" type="email" tabindex="2" required value="<?php echo $email; ?>">
	    </fieldset>
	    
	    <fieldset>
	      <textarea name="message" class="form-control" placeholder="Type your Message Here...." tabindex="5" required ><?php echo $message; ?></textarea>
	    </fieldset>
	    
	      <input  type="submit" name="ok" value="Submit">
	    
	  </form></div>
	</div>
  
</div>



<?php get_footer( ); ?>









