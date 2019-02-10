<?php
	$host='localhost';
	$user='root';
	$pass='password';
	$db='enigma';
	$con=mysqli_connect($host,$user,$pass,$db);
	if(!$con){
		die('could not connect'.mysqli_connect_error());
	}
?>