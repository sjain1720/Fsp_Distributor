<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from login where email='".$_POST['email']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email']=$_POST['email'];
                header("location:home.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>