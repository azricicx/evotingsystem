<?php include('adminserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login  </title>
    <style>  
    body  
    {  
    background-image:url("https://media01.stockfood.com/largepreviews/NDAzMTEzMDI2/13003646-A-light-blue-background.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;  
    }
    img {
    border-radius: 50%;
    }
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    }  
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-wrapper login">
                <h3 class="text-center form-title">Admin Login Here</h3>
                <img src="images/admin.png" class="center" alt="" />
                <form method="post" action="adminlogin.php">
                    <!-- display error here -->
                    <div class="alert alert-danger">
                        <?php include('errors.php'); ?>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control form-control-lg">    
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">    
                    </div>
                    <div class="form-group">
                        <button type="submit" name="adminlogin" class="form-control form-control-lg">
                        Login
                        </button>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>