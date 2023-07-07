<?php
	$conn = new mysqli('localhost', 'root', '', 'evotingfyp');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>