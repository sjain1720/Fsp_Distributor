<!DOCTYPE html>
<html>
    <head>
        <title>Distributor</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="hf.css">
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
	<style>
    * {
      box-sizing: border-box;
    }
    .menu{
      width:100%;
      height:100px;
    
    }
    .nav navbar-nav ul :hover
    {
    background-color: #50E3C2;
    }
    .dimen{
        /* width:600px;
        height:800px; */
        border:2px solid black;
        position: absolute;
        margin: auto;
        margin-top: 40px;
        margin-left: 50%;
        background-color: rgb(250, 249, 249);
		margin-bottom:50px;
		border-radius:8px;
    }
    
    h3{
      margin-left: 10px;
    }
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #19FFDD;
    }
    h2{
      padding: 20px;
      font-family: sans-serif;
    }
    hr { 
      display: block;
      margin-top: 0.1em;
      margin-bottom: 0.5em;
      margin-left: auto;
      margin-right: auto;
      border-style: inset;
      border-width: 1px;
    } 
    /* Container for flexboxes */
    section {
      display: -webkit-flex;
      display: flex;
    }
    
    input[type="button"] {
      float: right;
      margin-right: 10px;
    }
      
    input[type=tel]:focus, input[type=tel]:focus {  
      width: 25px;
      padding: 15px;  
      margin: 5px 0 22px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1;  
    } 
    
    /* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
    @media (max-width: 600px) {
      section {
        -webkit-flex-direction: column;
        flex-direction: column;
      }
      .dimen{
          margin-left: 0;
          width: 130%;
      }
      .footer-distributed{
          margin-top: 220%;
      }
    }
    </style>
    </head>
    <body>
      <?php
      
    session_start();

    if(isset($_SESSION['email']))
    {
        
    }
    else
    {
        header("location:index.html");
    }


?>
<?php
require_once('connection.php');
$user=$_SESSION["email"];
$sql1 = "SELECT email,id FROM login where email='$user'";
$result = $con->query($sql1);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


 
  // output data of each row
  
  
  $user_id= $row['id'];
  
  
  

  }}  
  









 


 


$sql2 = "SELECT id,email,user_id,location,status,code,phone,description FROM profile where user_id='$user_id'";
$result = $con->query($sql2);
if ($result->num_rows >0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


 
  // output data of each row
  
  
 
        
          
  

 
?>

	<br><br>
	    <a href="home.php"><p style="text-align: center;"><input type="submit" name="submit" value="Back" style="background-color:black;padding:10px;color:white;border-radius:8px;"></p></a>
           
            <div class="row">
                <div class="col-xs-8">
                    <div class="dimen">
                        <p><img src="propic.png" alt="profile icon" width="100" height="80" style="float:left;margin-top: 20px;"><h2 style="color:#DC143C;">Your company name</h2></p><br><br>
                        <hr>
                        <form id="dashboard" action="update_process.php" method="POST">
                          <p style="margin-left: 10px;font-size: 20px;">Email id: &nbsp; <input type="email"  name="emailid" value=<?php echo $row['email'] ?> id="email-id"> <input type="button" class="btn btn-secondary"  value="Edit" onclick="editEmail()"><!-- <i class="glyphicon glyphicon-pencil"></i> Edit --></p><br><br>
                          <p style="margin-left: 10px;font-size: 20px;">Location:&nbsp; <input type="text" name="location" value=<?php echo $row['location'] ?> id="loc"> <input type="button" class="btn btn-secondary" value="Edit" onclick="editLocation()"></p> <br><br>
                          
                          <p style="margin-left: 10px;font-size: 20px;">Status: &nbsp;<input type="text" name="status" value=<?php echo $row['status'] ?> id="status"> <input type="button"  class="btn btn-secondary" value="Edit" onclick="editStatus()"></p><br><br>
                          <p style="margin-left: 10px;font-size: 20px;">Phone &nbsp; <input type="tel" name="code" value=<?php echo $row['code'] ?> id="code" size="2"/>
                            <input type="text" value=<?php echo $row['phone'] ?> name="phone" id="phone"pattern="^\d{10}$"  size="10"/>
                          <input type="button" class="btn btn-secondary" value="Edit" onclick="editPhone()"></p><br><br>
                          <p style="margin-left: 10px;font-size: 20px;">Description: <input type="button" class="btn btn-secondary" value="Edit" onclick="editDescription()"></p>
                          <textarea id="desc" name="description" form="dashboard" style="margin-left: 10px;"rows="4" cols="50%"><?php echo $row['description'] ?></textarea> <br><br>
                            <p><img src="likedin.png" class="profile1">
                                          <a styel='text-align: center;' href="www.google.com">LinkedIn</a>
                            <img src="facebook.jpeg" class="profile1">
                                          <a styel='text-align: center;' href="www.google.com">Facebook</a></p>
                          
                          <p style="text-align: center;"><input type="submit" name="submit" value="Update" style="background-color:green;padding:10px;color:white;border-radius:8px;"></p>
                        </form>

                        
                    </div>
                    <?php
                    break;
                  }}
                  ?>
                  
                    
                
  
                  


                 

                  
                    <script type="text/javascript">
                      function editEmail() {
                        var email = document.getElementById("email-id");
                        email.focus();
                        email.select();
                      }
                      function editLocation() {
                        var location = document.getElementById("loc");
                        location.focus();
                        location.select();
                      }
                      function editStatus() {
                        var status = document.getElementById("stat");
                        status.focus();
                        status.select();
                      }
                      function editDescription() {
                        var description = document.getElementById("desc");
                        description.focus();
                        description.select();
                      }
                      function editPhone(){
                        var phone = document.getElementById("phone");
                        phone.focus();
                        phone.select();
                      }
                  
                    </script>
                    
                </div>
                
                
            </div>
            
            
        </div>
    </body>
</html>