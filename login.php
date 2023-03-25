<!DOCTYPE html>
<html lang="en">
<head>
    <title>LogIn</title>
    <link rel = "icon" href ="logo.jpg"  type = "image/x-icon">
    <link rel="stylesheet" href='login1.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body style="background-color:black;">

			<div class="row">
                <div class="col-xs-8">
					<div class="dimen">

	<h2 style="color:black;text-align:center;"><strong>WELCOME BACK!!</strong></h2>
	<h3 style="color:#a52a2a;text-align:center;"><strong>Login</strong></h3>
   <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>


    <br><br>
    <form action="pro.php" method="post">
        <label for="email"style="font-size: 20px;">Email Address</label>
    <br>
        <input type="email" name="email" id="email"style="width: 100%;padding: 5px;border:none;">
    <br>
    <br>
        <label for="password" style="font-size: 20px;">Password</label>
    <br>
        <input type="password" name="Password" id="password" style="width: 100%;padding: 5px;border:none;">
    <br><br>
   <a><p style="text-align: center;"> <input type="submit" name="Login" value="Login" class="login" style="border: none; width:30%;"></p></a>
    </form>
  
	<br>
  <div class="gmail">
    <p style="text-align:center;font-size: 20px;"><strong>OR</strong></p>

	<a href="#"><p style="text-align: center;"> <input type="submit" value="Login with Google+" class="login" style="border-radius:5px;background-color: #dd4b39;border: none; width:60%;"></p></a><br>
    <a href="#"><p style="text-align: center;"> <input type="submit" value="Login with Facebook" class="login" style="border-radius:5px;background-color: #3B5998;border: none; width:60%;"></p></a><br>
 
  <div class="already">
    Don't have account? Go to 
    <a href="signup.html" >
      SignUp
   </a>
  </div>
  
  </div> 
</div>
  </div>
  </div>   
    
</body>
</html>