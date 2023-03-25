<?php
    session_start();

    if(isset($_SESSION['email']))
    {
        echo ' Well Come ' . $_SESSION['email'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.html");
    }

?>