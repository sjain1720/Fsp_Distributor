
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
?>

