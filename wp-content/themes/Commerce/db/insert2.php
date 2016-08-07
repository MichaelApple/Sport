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

if(isset($_POST['ok2'])){
$query = mysql_query("INSERT INTO target_audience(male, female, age1, age2, age3, age4, age5, age6, age7, edu1, edu2, edu3, edu4, edu5, marital1, marital2, marital3, income1, income2, income3, income4, income5) VALUES ('$male','$female','$age1','$age2','$age3','$age4','$age5','$age6','$age7', '$edu1', '$edu2', '$edu3', '$edu4', '$edu5', '$marital1', '$marital2', '$marital3', '$income1', '$income2', '$income3', '$income4', '$income5')");
}

?>
</body>
</html>