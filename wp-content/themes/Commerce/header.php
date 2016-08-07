<?php 
session_start();
  ?>
  <?php include ('db.php'); ?>
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
<?php 

if (isset($_POST['login'])) {
  $password = $_POST['password'];
  $email = $_POST['email'];

$pass_query = mysql_query("SELECT * FROM users WHERE user_email = '$email'");
$pass_result = mysql_fetch_array($pass_query);
// echo $pass_result['user_name'];
//  echo "<script>alert('".$pass_result['user_name']."');</script>";
$hash = $pass_result['user_pass'];
  if (password_verify($password, $hash)) {
    $_SESSION['email'] = $email;
}
else {
  echo "<script>alert('Password didnt matched!!');</script>";
}
  // $check_user = "SELECT * FROM users WHERE user_pass = '$password' AND user_email = '$email'";

  // $run = mysql_query($check_user);
  // if (mysql_num_rows($run) > 0) {

    
  // }
}


if (isset($_POST['submit'])) {
  $user_name = $_POST['username'];
  $user_email = $_POST['email'];
  $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check_email = "SELECT * FROM users WHERE user_email = '$user_email'";
  $run = mysql_query($check_email);

  if (mysql_num_rows($run) > 0) {

    echo "<script>alert('Email is already exist in database');</script>";
    exit();
  }

  $query = "INSERT INTO users (user_email,user_name,user_pass) values ('$user_email','$user_name','$user_password')";

  if(mysql_query($query)) {
     $_SESSION['email'] = $user_email;
    echo "You are registered!";
  }
  
}
 ?>

<div class="mid1"></div>
<div class="mid" id="home">
    

  <div class="row-wrapper1">
    <div class="row" >
      <div class="col-sm-12">
        <h2 class="tlt" >SponsorshipProposal.net</h2>
        <h3 class="tlt" style="fon bold;">We unite sport and bussiness</h3>
      </div>
    </div>
  
     <div class="row">
    <div class="col-sm-4 col-xs-12">
    <a style="text-decoration: none; color: #fff; cursor: pointer; " href="form1/">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" data-original-aspect-ratio="1" style="width: 125px; height: 125px; fill: currentColor;">
        <g transform="translate(0,0)" >
          <path d="M62.5 0C28 0,0 28,0 62.5c0 34.5,28 62.5,62.5 62.5c34.5 0,62.5 -28,62.5 -62.5C125 28,97 0,62.5 0zM63.75 89.0625v5.0625c0 1.375,-1.125 2.4375,-2.5 2.4375s-2.5 -1.125,-2.5 -2.4375v-5.125c-6.875 -1,-12.625 -6.0625,-12.625 -13.25c0 -1.375,1.3125 -2.4375,2.6875 -2.4375s2.4375 1.125,2.4375 2.4375c0 6.25,5.5 8.5,10.6875 8.5c5.1875 0,10.6875 -2.25,10.6875 -8.5c0 -4.9375,-2 -6.125,-9.6875 -9.875c-0.6875 -0.3125,-1.375 -0.6875,-2.125 -1.0625c-0.75 -0.375,-1.5 -0.6875,-2.125 -1c-7.5 -3.6875,-12.5 -6.125,-12.5 -14.3125c0 -7.25,5.75 -12.3125,12.625 -13.3125v-4.5c0 -1.375,1.125 -2.4375,2.5 -2.4375s2.5 1.125,2.5 2.4375v4.4375c8.75 0.8125,13.4375 5.9375,13.4375 13.375c0 1.375,-0.875 2.4375,-2.25 2.4375c-1.375 0,-2.5 -1.125,-2.5 -2.4375c0 -7.9375,-8.0625 -8.5625,-10.5 -8.5625C56.8125 40.875,51.25 43.125,51.25 49.4375c0 4.9375,2 6.125,9.6875 9.875c0.6875 0.3125,1.3125 0.6875,2.0625 1.0625c0.6875 0.375,1.375 0.6875,2 1c7.5 3.6875,12.375 6.125,12.375 14.3125C77.375 83.125,72.5 88.25,63.75 89.0625z"></path>
        </g>
      </svg>
      <h2>FIND A SPONSOR</h2>
      <h4>Add your sponsorship proposal</h4>
      </a>
     
      <!-- Modal -->
      <div id="modal1" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Hi there!</h4>
            </div>
            <div class="modal-body">
              <p>Please register to make this work !</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
    <a style="text-decoration: none; color: #fff; cursor: pointer;" href="form2/">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" data-original-aspect-ratio="1" style="width: 125px; height: 125px; fill: currentColor;">
        <g transform="translate(-0.0634765625,-0.0634765625)">
          <path d="M83.5 34.3125c-1.1875 -0.5625,-2.875 -0.375,-3.8125 0.4375L58.75 51v18.875l20.9375 16.1875c1 0.8125,3.0625 1,4.25 0.4375c1.25 -0.625,1.75 -1.875,1.75 -3.125V37.4375C85.625 36.3125,84.875 35,83.5 34.3125z"></path>
          <path d="M90 54.9375v10.9375c3.75 -0.375,4.875 -2.625,4.875 -5.5C94.875 57.625,93.75 55.3125,90 54.9375z"></path>
          <path d="M30 54.5v11.8125c0 1.75,2.1875 3.6875,3.25 3.6875H40.625c0.875 0,1.5625 0.9375,1.8125 1.75l5.5625 22.625h8l-5.3125 -21.6875c-0.125 -0.5625,0 -1.375,0.3125 -1.8125c0.375 -0.4375,0.875 -0.9375,1.4375 -0.9375H55V53.125H33.25C31 53.125,30 54,30 54.5zM41.875 56.5625c0 -1,0.5625 -1.875,1.5625 -1.875s1.5625 0.8125,1.5625 1.875v9.4375c0 1,-0.5625 1.875,-1.5625 1.875s-1.5625 -0.8125,-1.5625 -1.875V56.5625zM33.75 56.5625c0 -1,1.1875 -1.875,2.1875 -1.875s2.1875 0.8125,2.1875 1.875v9.4375c0 1,-1.1875 1.875,-2.1875 1.875s-2.1875 -0.8125,-2.1875 -1.875V56.5625z"></path>
          <path d="M62.5625 0.0625c-34.5 0,-62.5 28,-62.5 62.5c0 34.5,28 62.5,62.5 62.5c34.5 0,62.5 -28,62.5 -62.5C125.0625 28.0625,97.0625 0.0625,62.5625 0.0625zM90 69.625v13.75c0 2.6875,-1.625 5.1875,-4.1875 6.4375c-0.9375 0.4375,-1.9375 0.6875,-3.125 0.6875c-1.8125 0,-3.625 -0.5625,-4.875 -1.5625l-19.625 -15.375c-0.1875 0.0625,-0.5 0.125,-0.75 0.125h-2.6875l5.25 21.0625c0.125 0.25,0.125 0.5625,0.125 0.8125c0 1,-0.8125 1.9375,-1.875 1.9375c0 0,0 0,0 0H46.5625c-0.875 0,-1.5625 -0.625,-1.8125 -1.4375L39.1875 73.75h-5.9375c-3.5 0,-6.375 -3.875,-6.375 -7.4375V54.5c0 -3.375,2.8125 -5.125,6.375 -5.125h22.9375c0.0625 0,0.0625 -0.4375,0.125 -0.5L77.625 31.875c2.0625 -1.625,5.625 -2,8 -0.875c2.625 1.25,4.375 3.8125,4.375 6.4375v13.75c5 0.375,8.5625 4.3125,8.5625 9.1875C98.5625 65.25,95 69.25,90 69.625z"></path>
        </g>
      </svg>
      <h2>FIND A PROPOSAL</h2>
      <h4>Add your company and target market</h4>
    </a>
    </div>
    <div class="col-sm-4 col-xs-12">
    <a style="text-decoration: none; color: #fff; cursor: pointer;" href="form3/"><!-- data-toggle="modal" data-target="#modal1" -->
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" data-original-aspect-ratio="1" style="width: 125px; height: 125px; fill: currentColor;">
        <g transform="translate(-0.12451171875,-0.18798828125)">
          <path d="M56.625 29.125C49.875 30.3125,43.875 34.375,39.1875 38.125H49.375C51.375 36.25,53.8125 31.6875,56.625 29.125z"></path>
          <path d="M47.375 41.875H35.8125C31.875 48.125,29.4375 53.125,29.1875 60.625h13.8125C43.125 53.125,44.6875 48.125,47.375 41.875z"></path>
          <path d="M43 63.75h-13.75c0.4375 6.875,2.4375 11.25,5.5 16.25h11.9375C44.5625 75,43.3125 70.625,43 63.75z"></path>
          <path d="M74.0625 80c2.3125 -5,3.75 -9.375,4.0625 -16.25H46.875c0.3125 6.875,1.75 11.25,4.0625 16.25H74.0625z"></path>
          <path d="M85.8125 38.125c-4.6875 -3.75,-10.75 -7.8125,-17.4375 -9c2.8125 2.625,5.25 7.125,7.25 9H85.8125z"></path>
          <path d="M73.3125 41.875H51.625c-2.9375 6.25,-4.625 11.25,-4.8125 18.75H78.125C77.9375 53.125,76.25 48.125,73.3125 41.875z"></path>
          <path d="M71 38.125c-2.375 -3.75,-5.25 -6.5,-8.5625 -8.875C59.1875 31.625,56.25 34.375,53.9375 38.125H71z"></path>
          <path d="M82 60.625h13.8125c-0.25 -7.5,-2.6875 -12.5,-6.625 -18.75h-11.5625C80.25 48.125,81.8125 53.125,82 60.625z"></path>
          <path d="M62.625 0.1875C28.125 0.1875,0.125 28.125,0.125 62.6875c0 34.5,28 62.5,62.5 62.5c34.5 0,62.5 -28,62.5 -62.5C125.125 28.125,97.1875 0.1875,62.625 0.1875zM62.5 99.125c-20.5 0,-37.1875 -16.6875,-37.1875 -37.1875c0 -20.5,16.6875 -37.1875,37.1875 -37.1875s37.1875 16.6875,37.1875 37.1875C99.625 82.4375,82.9375 99.125,62.5 99.125z"></path>
          <path d="M48.5625 83.75H37.8125c4.875 5.625,11.375 9.125,18.8125 10.4375C53.375 91.1875,50.6875 86.875,48.5625 83.75z"></path>
          <path d="M78.25 80h11.9375c3.125 -5,5.0625 -9.375,5.5 -16.25h-13.75C81.625 70.625,80.375 75,78.25 80z"></path>
          <path d="M53 83.75c2.5 5,5.6875 7.625,9.5 10.3125c3.75 -2.75,6.9375 -5.3125,9.5 -10.3125H53z"></path>
          <path d="M68.375 94.1875c7.375 -1.3125,13.9375 -4.8125,18.8125 -10.4375h-10.75C74.25 86.875,71.5625 91.1875,68.375 94.1875z"></path>
        </g>
      </svg>
      <h2>FIND A CLIENT</h2>
      <h4>Add your sport agency</h4>
      </a>
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
  