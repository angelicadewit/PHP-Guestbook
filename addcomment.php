<?php
    session_start();
    //config-db.php
    $host = "localhost"; //add SQL Server host
    $user = "root"; //SQL username
    $password = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database name

    $con = mysqli_connect($host, $user, $password, $dbname);

    if (mysqli_connect_errno($con)){ //check to see if we are connected to DB
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

    //config-post.php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $_SESSION["name"] = "John";

    $_SESSION['firstname'] =  $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['phonenumber'] =  $phonenumber;
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message ;

    $sql = "INSERT INTO entries(firstname, lastname, phonenumber, email, message) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$message')";
    
    if (!mysqli_query($con,$sql)){
        die('Error:' . mysqli_error($con));
    } else {
        header('Location: thanks.php');
        exit;
        mysqli_close($con);
    }
?>
