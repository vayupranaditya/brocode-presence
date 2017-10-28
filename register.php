<?php
$nim=$_GET["nim"];
echo "
	<!DOCTYPE html>
	<head>
	<html>
		<title>MEMBER REGISTRATION | BROTHERCODE</title>
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
				<span style='font-size: 6vh;'>$nim belum terdaftar</span><br>
				<span style='font-size: 4vh;'>Silahkan daftar dengan mengisi form di bawah</span><br>
				<form action='process/data_processing.php' method='POST'>
					<input type='number' name='nim' value='".$nim."' hidden='hidden'>
					<input type='text' name='name' placeholder='Nama Lengkap' required='required' autofocus='autofocus' class='regist_field' style='width:50%; font-size: 4vh;'/><br>
					<br>
					<input type='text' name='class' placeholder='Kelas, Ex. IF-41-00' required='required' class='regist_field'/><br>
					<br>
					<input type='email' name='email' placeholder='Email' required='required' class='regist_field' style='width:50%;' /><br>
					<input type='submit' value='Daftar' hidden='hidden'>
				</form>
			</div>
		</div>
	</body>
	</html>";
?>