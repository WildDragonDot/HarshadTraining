<?php

    $link = mysqli_connect("localhost","root","","demo");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

    //$query = "INSERT INTO `test`(`name`, `email`) VALUES ('Harsh','harsh@gmail')";

    $query = "UPDATE `test` SET `name` = 'harish' WHERE `email` = 'harsh@gmail' LIMIT 1";

    mysqli_query($link, $query);

    $query = "SELECT * FROM test";

    if ($result = mysqli_query($link, $query)) {
        
        $row = mysqli_fetch_array($result);
        
        echo "Name is ".$row[0]." Email is ".$row[1]."";
        
    }


?>