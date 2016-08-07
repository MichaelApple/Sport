<?php session_start() ?>
<?php 
/**
*Template Name: pay_proposal
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

<form class="pay_form" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr" enctype="multipart/form-data">

    <div class="row">
                <div class="col-sm-6 col-xs-4"><p style="text-align: left;"><b>Publish period:</b></p></div>
                <div  class="col-sm-2 col-xs-3">
                    <div  class="ck_boxes">
                        <label>
                          <input id="month3" type="checkbox" class="hidden" name="pay_25" ><span></span>
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
                          <input id="month6" type="checkbox" class="hidden" name="pay_45" ><span></span>
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
                          <input id="month12" type="checkbox" class="hidden" name="pay_85" ><span></span>
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
                          <input id="prem" type="checkbox" class="hidden" name="pay_50" ><span></span>
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
                <div  class="col-sm-2"><input id="total" type="text" disabled style="border: none; font-size: 18px; background: none;"></div>
            </div><br><br>
            
           <!-- <button type="button" style="float:left;" class="main_buttons prev-step">Back</button> -->
           
            <!-- <input class="main_buttons" type="submit" name="pay" value="Submit" style="float: right;" />  -->
        </div> 


  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="SilverLeafy-facilitator@yahoo.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Sponsorship Proposal">
  <input id="amount" type="hidden" name="amount" value="">
  <input type="hidden" name="currency_code" value="USD">

  <input type="hidden" name="return" value="final/">


  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="PayPal - The safer, easier way to pay online" style="float: right;">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >


</form>

<br><br>
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
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="find_proposals/">Proposals</a></li>
        <li><a href="find_sponsors/">Sponsors</a></li>
        <li><a href="find_agencies/">Agencies</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(!$_SESSION['email']) {
          echo "<li><a href='register/' > Login/Sign Up</a></li>";
          } 
          else {
            echo "<li><a href='http://commercia/logout/'> Logout</a></li>";
          }

          ?>
      </ul>
    </div>
  </div>
</nav>
<?php get_footer( ); ?>
