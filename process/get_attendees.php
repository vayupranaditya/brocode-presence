<?php
require "mysql_connection.php";
require "functions.php";
$date=$_GET["date"];
$attendees=get_attendees($date);
foreach($attendees as $email) {
	echo $email.", ";
	}
?>