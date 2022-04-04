<?php
	session_start();
	include('conn.php');

	if(isset($_SESSION['id'])){
		header('location:home.php');
	}
	else{
		header('location: /busa/Views/login.php');
	}

?>

