<?php
require "mysql_connection.php";
require "functions.php";
$nim=$_REQUEST["nim"];
$date=date("Y-m-d");
if (isset($_POST["name"])) {
	$name=$_POST["name"];
	$class=$_POST["class"];
	$email=$_POST["email"];
	register($link, $db_member_tb, $db_presence_tb, $nim, $name, $class, $email);
	}
if (nim_check($link, $db_member_tb, $nim)) {
	if (not_presenced($link, $db_presence_tb, $nim, $date)) {
		presence($link, $db_presence_tb, $nim, $date);
		}
	header("location:..?nim=$nim");
	}
else {
	header("location:../register.php?nim=$nim");
	}
?>