<?php
if (isset($_GET["nim"]) && !empty($_GET["nim"])) {
	require "process/mysql_connection.php";
	require "process/functions.php";
	$nim=$_GET["nim"];
	$member=find_member($nim);
	$info="$member[name] berhasil diabsen :)";	
	}
else {
	$info="";
	}
echo "
	<!DOCTYPE html>
	<html>
	<head>
		<title>ABSENSI RESPONSI | BROTHERCODE</title>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='css/presence.css'>
	</head>
	<body>
		<div class='content'>
			<div class='logos'>
				<img src='images/brothercode_logo_transparent.png' class='pull-left' style='height:20vh;'>
				<img src='images/ilmy_logo_transparent.png' class='pull-right' style='height:20vh;'>
			</div>
			<div style='clear: both;'>
			</div>
			<div class='form'>
				<span style='font-size: 6vh'>Absensi Responsi Brothercode</span><br>
				<span style='font-size: 4vh;'> $info </span><br>
				<form action='process/data_processing.php' method='POST'>
					<input type='number' name='nim' placeholder='NIM' autofocus='autofocus' class='field'><br>
				</form>
			</div>
		</div>
	</body>
	</html>";
?>