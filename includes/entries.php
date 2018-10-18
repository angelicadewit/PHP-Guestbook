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

            <?php $result = mysqli_query($con,"SELECT name,message FROM entries");
                while($row = mysqli_fetch_array($result)){
                
            ?>    
                <div class="entry">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['message']; ?></p>
                </div>
                
            <?php } mysqli_close($con); ?>
            

        </div>
    </div>
</section>