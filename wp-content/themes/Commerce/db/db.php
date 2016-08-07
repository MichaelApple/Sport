<?php
$host = 'localhost';
$user = '';

$connection = mysql_connect('localhost', 'root', '');
mysql_set_charset('utf8', $connection);
if(!$connection || !mysql_select_db('commerce', $connection)){
	exit(mysql_error());
}
?>