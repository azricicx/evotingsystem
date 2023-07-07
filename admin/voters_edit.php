<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$voters_id = $_POST['voters_id'];
		$course = $_POST['course'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$sql = "UPDATE voters SET phone = '$phone', email = '$email', firstname = '$firstname', voters_id = '$voters_id', course = '$course', password = '$password' WHERE password = '$password'";
		if($conn->query($sql) ){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>