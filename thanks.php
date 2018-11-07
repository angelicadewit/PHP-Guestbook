<?php include_once ('./header.php');?>

<?php
    session_start();
    echo '<h1>Thank you for your entry, '.$_SESSION["firstname"].' '.$_SESSION["lastname"].'</h1>';
    echo "<p>You've entered the following:</p>";
    echo '<p>Email: '.$_SESSION["email"].'</p>';
    echo '<p>Phone Number: '.$_SESSION["phonenumber"].'</p>';
    echo '<p>Message: '.$_SESSION["message"].'</p>';
?>




<?php
    header('Refresh: 10; URL=guestbook.php');
    echo 'You will be redirected to the guestbook or <a href="'.$urls["Guestbook"].'">click here to visit the page</a>';
?>


<?php include_once ('./footer.php');?>
