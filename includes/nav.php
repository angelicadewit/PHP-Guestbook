<!-- <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="guestbook.php">View Guestbook</a></li>
    <li><a href="addcomment.php">Add Comment</a></li> 
</ul> -->

<ul>
    <?php
        $urls = array(
            'Home' => '/',
            'Guestbook' => 'guestbook.php',
            'Add Comment' => 'addcomment.php',

        );

        foreach ($urls as $name => $url) {
            echo '<li><a href="'.$url.'">'.$name.'</a></li>';
        }
    ?>

</ul>