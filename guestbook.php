<?php include_once ('./header.php');?>
<h1>This is the guestbook page</h1>

<?php
    $host="localhost"; //Add your SQL Server host here
    $user="root"; //SQL Username
    $pass="root"; //SQL Password
    $dbname="guestbook"; //SQL Database Name
    $con=mysqli_connect($host,$user,$pass,$dbname);
?>

<section id="entries">
    <div class="entries-wrapper">
        <div class="entry">

            <?php $result = mysqli_query($con,"SELECT firstname, lastname, phonenumber, email, message FROM entries");
                while($row = mysqli_fetch_array($result)){   ?>   
                    <?php include './includes/entries.php' ?> 
                
            <?php } mysqli_close($con); ?>
            

        </div>
    </div>
</section>

<?php include_once ('./footer.php');?>
