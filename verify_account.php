<?php session_start(); 
?>
<?php
  if( $_SESSION['verify'] == 1 ){
    ?>
      <script>
        alert("You already verified yourself before !");
        window.location.replace("home.php");
      </script>
      <?php
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
  <style>  
  body  
  {  
  background-image:url("https://images.pexels.com/photos/114979/pexels-photo-114979.jpeg?cs=srgb&dl=pexels-veeterzy-114979.jpg&fm=jpg");
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
  </head>

<body >

  <!-- verify -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper login">
        <form action="#" class="sign-in-form" method="POST">
          <img src="images/locked.png" class="center" alt="" />
          <p>Please verify through your email</p>
          
          <p>Email: <strong><?php echo $_SESSION['email']; ?></strong></p>
          

          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>
              Dear Student, <br>
              Kindly fill up your OTP code that you received by email.
              You only can vote once you verify yourself.
            </p>
          </div>
          <div class="input-field">
            <i class="fas fa-key"></i>
            <input type="text" placeholder="OTP code" name="otp_code" id="code">
            <input type="submit" value="Verify" class="btn solid" name="check_code">
          </div>   
        </form>
      </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
	
	include 'includes/conn.php';
	if(isset($_POST['check_code'])){
    	   $otp_num = $_SESSION['otp'];
         $voters_id = $_SESSION['voters_id'];
      	 $otp = $_POST['otp_code'];
      
      	 if($otp_num != $otp){
          ?>
           <script>
               alert("Invalid OTP code, Please try again");
           </script>
           <?php
         }else{
          mysqli_query($conn, "UPDATE voters SET verify = 1 WHERE voters_id = '$voters_id'");
             ?>
              <script>
                  alert("Succesfully verified, goodluck for your vote !");
                	window.location.replace("home.php");
              </script>
              <?php
         }
    }
?>