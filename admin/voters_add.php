<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$voter_id = $_POST['voter_id'];
		$email = $_POST['email'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$course = $_POST['course'];
		$phone = $_POST['phone'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}


		$sql = "INSERT INTO voters (voters_id, password, firstname, lastname, course, email, phone, photo, verify) VALUES ('$voter_id', '$password', '$firstname', '$lastname', '$course', '$email', '$phone', '$filename', 0)";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>