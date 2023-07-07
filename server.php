<?php 
    
    include 'includes/conn.php';
    $username = "";
    $email = "";
    $errors = array();

    // connect database
    $db = mysqli_connect('localhost:3307', 'root', '', 'evotingfyp');

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
    if (isset($_POST['login'])) {
        $voter = $_POST['voters_id'];
        $password = $_POST['password'];

        // if form filled
        if (empty($voter)) {
            array_push($errors, "Student ID required");
        }
        if (empty($password)) {
            array_push($errors, "Password required");
        }

        if (count($errors) == 0 ) {
            $sql = "SELECT * FROM voters WHERE voters_id='$voter' AND password='$password' ";
            $query = $conn->query($sql);
            if (mysqli_num_rows($query) == 1 ) {
                // succesfully login
                $row = $query->fetch_assoc();

                $otp = rand(100000,999999);
                $sql = "UPDATE voters SET otp = '$otp' WHERE voters_id='$voter'";
                mysqli_query($db, $sql);

                //trying get in email
                $_SESSION['email'] = $row['email'];
                $_SESSION['voters_id'] = $row['voters_id'];
                $_SESSION['verify'] = $row['verify'];

                if( $_SESSION['verify'] == 0 ){
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;

                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';

                    $mail->Username='azrievotingfyp@gmail.com';
                    $mail->Password='M@choazri1234';

                    $mail->setFrom('azrievotingfyp@gmail.com', 'OTP Verification Code');
                    $mail->addAddress($_SESSION['email']);

                    $mail->isHTML(true);
                    $mail->Subject="OTP Verification request";
                    $mail->Body="<p>Dear student, </p> <h3>Your login OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regards,</p>
                    <b>Admin eVoting System ( Azri )</b>";

                    if(!$mail->send()){
                        ?>
                            <script>
                                alert("<?php echo " Invalid Email "?>");
                            </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("<?php echo "OTP sent"?>");
                        </script>
                        <?php
                    }
                }

                $_SESSION['otp'] = $otp;
                $_SESSION['voter'] = $row['id'];
                $_SESSION['success'] = "You are now Logged In";
                header('location: login.php'); // redirect to..
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