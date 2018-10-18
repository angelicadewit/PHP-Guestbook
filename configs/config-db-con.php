<?php
/** 
 * Sets up connection to our local database running in MAMP
*/
?>

<?php

    $host = "localhost"; //add SQL Server host
    $user = "root"; //SQL username
    $password = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database name

    $con = mysqli_connect($host, $user, $password, $dbname);

    if (mysqli_connect_errno($con)){ //check to see if we are connected to DB
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
?>

