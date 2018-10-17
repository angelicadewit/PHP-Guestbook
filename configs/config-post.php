<?php
/** 
 * Set up Post Variables to connect to DB
*/
?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO entries(name, email, message) VALUES ('$name', '$email', '$message')";
?>  