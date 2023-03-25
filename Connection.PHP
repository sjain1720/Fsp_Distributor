
<?php
 
    $con=mysqli_connect('localhost','root','','sample');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>