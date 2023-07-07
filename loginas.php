<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>Login As</title>
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
<body>
    <div class="col-md-4 offset-md-4 form-wrapper login">
        <h2 class="center" >Login As   </h2>
        <div class="center">
            <form method="" action="login.php">
            <img src="images/voter.png" class="center" alt="" />
            <button class="btn solid" >
            Voter
            </button>
            </form>
        
            <form method="" action="admin/adminlogin.php">
            <img src="images/admin.png" class="center" alt="" />
            <button class="btn solid">
            Admin 
            </button>
            </form>
        </div>
    </div>

</body>
</html>