<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['username']) || trim($_SESSION['username']) == ''){
		header('location: adminhome.php');
	}

	$sql = "SELECT * FROM admin WHERE username = 'admin'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>