<?php

    $link = mysqli_connect("localhost", "root", "", "demo");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>