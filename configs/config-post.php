<?php
/** 
 * Set up DB connection for our form using POST Vars
*/
?>

<?php

    // var_dump($name); // Dump info about the variable to the view
    // print_r($name . 'this error');
    // die();
    // die('Error:' . mysqli_error($con));

    //if you want to start debugging, use var_dump and die()

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO entries(name, email, message) VALUES ('$name', '$email', '$message')";
    
    if (!mysqli_query($con,$sql)){
        die('Error:' . mysqli_error($con));
    } else {
        echo "Values Stored in our Database!";
        mysqli_close($con);
    }
?>  