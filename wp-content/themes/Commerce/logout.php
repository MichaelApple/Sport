<?php 
session_start();
session_destroy();

header("location: http://commercia");
 /**
*Template Name: Logout
**/
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <?php 
//  if(!$_SESSION['email']) {
// 	echo "<script>window.open('".bloginfo('wpurl')."/index.php', '_self')</script>";
// }
 ?>
 </body>
 </html>