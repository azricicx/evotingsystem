<?php

// redirect user to login page if they're not logged in
if (empty($_SESSION['email'])) {
    header('location: loginas.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>Verification Process...</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 home-wrapper">

        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
          unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>

        <h4>Welcome,
          <?php echo $_SESSION['username']; ?>
        </h4>
        <a href="index.php?logout=1" style="color: red">Logout</a>
        <?php if (!$_SESSION['verified']): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          You need to verify your email address!
          Sign into your email account and click
          on the verification link we just emailed you
          at
          <strong><?php echo $_SESSION['email']; ?></strong>
        </div>
        
        <?php else: ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Thank you, you already verify yourself.
            Please kindly wait for admin update the detail.
            <h10><?php echo "<br>"."<br>"."<b> Student ID: </b>".$_SESSION['voters_id']; ?></h10>
            <h10><?php echo "<br>"."<b> Password: </b>".$_SESSION['password']; ?></h10>
            <h10><?php echo "<br>"."<b> Name: </b>".$_SESSION['firstname']; ?></h10>
            <h10><?php echo "<br>"."<b> Course: </b>".$_SESSION['course']."<br>"."<br>"; ?></h10>
            Note: You can refresh your browser.
          </div>
        <button onclick="location.href='login.php'" class="btn btn-lg btn-primary btn-block">Click here to Login</button>
        <?php endif;?>
      </div>
    </div>
  </div>
</body>

</html>