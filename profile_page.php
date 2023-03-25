<!doctype html>

<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html; charset-utf-8" />
	
	<title>Profile Page</title>
    <link rel="stylesheet" href='profile.css'>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "icon" href ="logo.jpg"  type = "image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script>
  <style>
  
  .adjust{
    margin-top: 100px;
    margin-left: 30%; 
    border:1px solid #dfd8d8; 
    width: 35%;
    position: relative;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 35px;
    padding-right: 20px;
    border-radius: 5px;
    background-color: rgb(145,230,181);
    font-family: Calibri, Helvetica, sans-serif;
	}
	body{  
	  background-color: black; 
	}

</style>
  
</head>

<body style="background-color:black;">

<?php
$servername = "localhost";
$username = "root";
$passwor= "";
$dbname = "sample";
$password=$_POST['password'];
$email=$_POST['email'];
$category=$_POST['xyz'];
$name=$_POST['midname'];

// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (category,name,email,password)
VALUES ('$category','$name','$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
session_start();
$_SESSION['email']=$_POST['email'];
?>


<div class="row">
    <div class="col-xs-8">
		<div class="dimen">

	<h2 style="text-align:center; color:#8b0000; font-size:35px;">My Profile</h2> <br>

    <br><br>
	
	<form action="profile_process.php" target="_blank" method="POST">
		<label for="cname"><b style="font-size: 20px;">Company name:</b></label><br>
        <input type="text" id="cname" name="cname"  style="width: 100%;background-color: rgb(230, 233, 206);padding: 5px;border:none;display: inline-block;">
		<br><br>
	
		<label for="profsum" style="font-size: 20px;"><b>Brief Company Profile:</b></label><br>
		<textarea rows="4" cols="50" name="description"  style="width: 100%;background-color: rgb(230, 233, 206);padding: 5px;display: inline-block;border: none;"></textarea>
        <br><br>
	
		<label for="phonen" style="font-size: 20px;"><b>Mobile/Telephone Number:</b></label><br>
        <input type="tel" id="phonen" name="phone" style="width: 100%;background-color: rgb(230, 233, 206);padding: 5px;display: inline-block;  border: none;">
		<br><br>
		
		<label for="emailid" style="font-size: 20px;"><b>Email Id:</b></label><br>
		<input type="email" id="emailid" name="emailid" style="width: 100%;background-color: rgb(230, 233, 206);padding: 5px;display: inline-block;  border: none;">
		<br><br>
		
		<label for="linkedin" style="font-size: 20px;"><b>LinkedIn URL:</b></label><br>
		<input type="text" id="linkedin" name="linkedin" style="width: 100%;background-color: rgb(230, 233, 206);padding: 10px;display: inline-block;border: none;">
		<br><br> 
		
		<label for="facebook" style="font-size: 20px;"><b>Facebook Profile:</b></label><br>
        <input type="text" id="facebook" name="facebook" style="width: 100%;background-color: rgb(230, 233, 206);padding: 10px;display: inline-block;border: none;">
		<br><br>
		
		<label for="role" style="font-size: 20px;"><b>Role:</b></label><br>
		<input type="text" id="role" name="role"  style="width: 100%;background-color: rgb(230, 233, 206);padding: 10px;display: inline-block;border: none;">
		<br><br>
            
		<label for="role" style="font-size: 20px;"><b>Interested In:</b></label><br>
		<input type="text" id="role" name="interested" style="width: 100%;background-color: rgb(230, 233, 206);padding: 10px;display: inline-block;border: none;">
		<br><br>

        <label for="location" style="font-size: 20px;"><b>Location:</b></label><br>
        <input type="text" id="location" name="location" style="width: 100%;background-color: rgb(230, 233, 206);padding: 10px;display: inline-block;border: none;">
		<br><br><br>
 <p style="text-align: center;"> <input type="submit" value="submit" name="submit" onclick="windows.location('home.html')" class="login" style="border: none; width:30%;"></p>
  
</div>
  </div>
  </div>   

    
</body>
	
</html>








