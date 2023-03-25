<?php
session_start();
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

$sql ="UPDATE profile SET email='$_POST[emailid]',location='$_POST[location]',status='$_POST[status]',code='$_POST[code]',phone='$_POST[phone]',description='$_POST[description]' WHERE user_id='$user_id'";
$sql5 ="UPDATE login SET email='$_POST[emailid]' WHERE id='$user_id'";
if(mysqli_query($con,$sql) && mysqli_query($con,$sql5))
{
	header("Location:logout.php?logout");
	
}
else
{
	echo "error";
}





?>