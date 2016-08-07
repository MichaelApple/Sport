<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP MySql</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?
include ('db.php');
$title = $_POST['title'];
$type_proposal = $_POST['type_proposal'];
$sport = $_POST['sport'];
$date_of_proposal = $_POST['date_of_proposal'];
$valid_until = $_POST['valid_until'];
$other_sponsors = $_POST['other_sponsors'];
$media_partners = $_POST['media_partners'];
$notes = $_POST['notes'];
$photo = $_POST['photo'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];

if(isset($_POST['ok'])){
    if ($type_proposal){
        foreach ($type_proposal as $type_proposal_value){
         	foreach ($sport as $sport_value) {
         		$query = mysql_query("INSERT INTO main(title, type_proposal, sport, date_of_proposal, valid_until, other_sponsors, media_partners, notes, photo, adress, city, state, zip, country, name, phone, website, email, facebook, twitter) VALUES('$title', '$type_proposal_value', '$sport_value', '$date_of_proposal', '$valid_until', '$other_sponsors', '$media_partners', '$notes', '$photo', '$adress', '$city', '$state', '$zip', '$country', '$name', '$phone', '$website', '$email', '$facebook', '$twitter')");
				exit('Стаття успішно додана!');
			}
		}
	}
}

?>
</body>
</html>