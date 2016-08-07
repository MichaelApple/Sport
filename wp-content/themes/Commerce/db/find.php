<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
include ('db.php');
?>
<form method="POST" action="search.php" enctype="multipart/form-data">
	Name company </br> <input type="text" name="title" /></br>
	Category </br> 
	<select name="category[]">
		<option>one</option>
		<option>two</option>
		<option>three</option>
		<option>four</option>
	</select></br>
	Location</br>
	State</br>
	<input type="text" name="state"></br>
	Country</br>
	<input type="text" name="country"></br>
	Contacts</br>
	First Name</br>
	<input type="text" name="first_name"></br>
	Last Name</br>
	<input type="text" name="last_name"></br>
	Job title</br>
	<input type="text" name="job_title"></br>
	Phone</br>
	<input type="text" name="phone"></br>
	Email</br>
	<input type="text" name="email"></br>
	Target audience</br>
	Gender</br>
	<select name="gender[]">
		<option>Male</option>
		<option>Female</option>
	</select></br>
	Age</br>
	<select name="age[]">
		<option>0-17</option>
		<option>18-24</option>
		<option>25-34</option>
		<option>35-44</option>
		<option>45-54</option>
		<option>55-64</option>
		<option>64+</option>
	</select></br>
	Marital status</br>
	<select name="marital_status[]">
		<option>Single</option>
		<option>Married/couple</option>
		<option>Couple with children</option>
	</select></br>
	Household income</br>
	<select name="income[]">
		<option>$0-$24,999</option>
		<option>$25,000-$49,999</option>
		<option>$50,000-$74,999</option>
		<option>$75,000-$99,999</option>
		<option>100,000-$149,000</option>
		<option>$150,000 or more</option>
	</select></br>
	<input type="submit" name="ok3" value="Search" />
</form>

</body>
</html>