<?php
    $connection = mysqli_connect('localhost','root','');
    $sql='CREATE Database moh';
    $retval=mysqli_query($connection,$sql);
    if(! $retval){
        die('Could not create the database: ');
    }

    echo "Database moh created successfully\n";
    mysqli_close($connection);
?>