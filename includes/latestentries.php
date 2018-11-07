<?php include_once ('./header.php');?>

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
        <h2>Latest entries</h2>
        <?php 
            $result = mysqli_query($con,"SELECT firstname, lastname, phonenumber, email, message FROM entries WHERE firstname IS NOT NULL AND TRIM(firstname) <> '' ORDER BY id DESC LIMIT 2");

            while($row = mysqli_fetch_array($result)){   ?>   
                <?php include './includes/entries.php' ?> 

        <?php } mysqli_close($con); ?>
                    
        </div>
    </div>
</section>

<?php include_once ('./footer.php');?>
