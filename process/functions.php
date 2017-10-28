<?php
function nim_check($link, $db_member_tb, $nim) {
	mysqli_query(
		$link,
			"SELECT * FROM $db_member_tb 
			WHERE 
			nim = $nim;");
	return (mysqli_affected_rows($link) == 1);
	}
function not_presenced($link, $db_presence_tb, $nim, $date) {
	$find_member=
		mysqli_query(
			$link, 
				"SELECT * FROM $db_presence_tb 
				WHERE 
				nim = $nim AND date = '".$date."';");
	return (mysqli_affected_rows($link) == 0);
	}
function presence($link, $db_presence_tb, $nim, $date) {
	$add_data=
		mysqli_query(
			$link,
				"INSERT INTO $db_presence_tb 
				(nim, date)
				VALUES
				($nim, '".$date."');");
	return $add_data;
	}
function register($link, $db_member_tb, $db_presence_tb, $nim, $name, $class, $email) {
	$class=strtolower($class);
	$email=strtolower($email);
	$add_data=
		mysqli_query(
			$link,
				"INSERT INTO $db_member_tb 
				(nim, name, class, email) 
				VALUES
				($nim, '".$name."', '".$class."', '".$email."');");
	return $add_data;
	}
function find_member($nim) {
	global $link, $db_member_tb;
	$select_data=
		mysqli_query(
			$link,
				"SELECT * FROM $db_member_tb 
				WHERE
				nim = $nim;");
	$member=mysqli_fetch_array($select_data);
	return $member;
	}
/*
function get_attendees($date) {
	global $link, $db_member_tb, $db_presence_tb;
	$data=
		mysqli_query(
			$link,
				"SELECT * FROM $db_member_tb 
				WHERE 
				$db_presence_tb.date ='".$date."'");
	$email=array();
	while ($add_data=mysqli_fetch_array($data, MYSQLI_ASSOC)) {
		array_push($email, $add_data["email"]);
		}
	}
	return $email;
*/
?>