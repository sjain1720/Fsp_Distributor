<?php
require_once('connection.php');

    session_start();

$user=$_SESSION["email"];
$sql1 = "SELECT email,id FROM login where email='$user'";
$result = $con->query($sql1);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


 
  // output data of each row
  
  
  $user_id= $row['id'];
  echo $user_id;
  
  

  }} 



$name=$_POST['cname'];
$description=$_POST['description'];
$phone=$_POST['phone'];
$emailid=$_POST['emailid'];
$linkedin=$_POST['linkedin'];
$facebook=$_POST['facebook'];
$role=$_POST['role'];
$interested=$_POST['interested'];
$location=$_POST['location'];



$sql = "INSERT INTO profile (user_id,company_name,email,role,status,location,code,phone,Description,linkedin_url,facebook_profile,interested_in)
VALUES ('$user_id','$name','$emailid','$role','null', '$location','null','$phone','$description','$linkedin','$facebook','$interested')";

if ($con->query($sql) === TRUE) {
	header("location:home.php");
  

} 
else
{
	echo "enter the same email as time of registration";
}

?>