<?php 
    session_start();

    $username = "";
    $email = "";
    $errors = array();

    // connect database
    $db = mysqli_connect('localhost', 'root', '', 'evotingfyp');

    // if button clicked
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        // if form filled
        if (empty($username)) {
            array_push($errors, "username required");
        }
        if (empty($email)) {
            array_push($errors, "email required");
        }
        if (empty($address)) {
            array_push($errors, "address required");
        }
        if (empty($phone)) {
            array_push($errors, "phone required");
        }
        if (empty($course)) {
            array_push($errors, "course required");
        }
        if (empty($password_1)) {
            array_push($errors, "password required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The password did not match");
        }

        if (count($errors) == 0) {
            $sql = "INSERT INTO users (username, email, password, address, phone, course) 
                    VALUES ('$username', '$email', '$password_1', '$address', '$phone', '$course')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now Logged In";
            header('location: login.php'); // redirect to..
        }
    }


    //log in 
    if (isset($_POST['adminlogin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // if form filled
        if (empty($username)) {
            array_push($errors, "username required");
        }
        if (empty($password)) {
            array_push($errors, "Password required");
        }

        if (count($errors) == 0 ) {
            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1 ) {
                // succesfully login
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now Logged In";
                header('location: adminhome.php'); // redirect to..
            }
            else{
                array_push($errors, "The username or password are wrong");
                
            }
        }
    }

    //logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>