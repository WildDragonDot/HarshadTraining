<?php

    $link = mysqli_connect("localhost","root","","demo");

    if(mysqli_connect_error())
    {
        die ("There was an Error");
    }
    
    $query = "SELECT * FROM test";

    if($res = mysqli_query($link, $query));
    {
        $row = mysqli_fetch_array($res);

        echo "Name is ".$row[0]."Email is ".$row[1]."";
    }

?>