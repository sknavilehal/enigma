<?php
session_start();

	if(!isset($_SESSION['isloggedin'])){
		// if($_SESSION['isLoggedIn']==true)
			header('location:login.php');
	}else{
		if($_SESSION['isloggedin']==false)
			header('location:login.php');	
	}
?>