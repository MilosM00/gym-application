<?php 

    $connection = new mysqli("localhost", "root", "", "gym");

    if($connection->connect_error)
    {
        echo "MySQL failed. " . $connection->error;
        exit();
    }

?>