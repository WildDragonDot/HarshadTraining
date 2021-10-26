<?php

$user = "harsh";

if ($user == "harshad") {
    
    echo "Hello harshad!";
    
} else {
    
    echo "I don't know you";
    
}

echo "<br><br>";

$age = 17;

if ($age >= 18 || $user == "harshad") {
    
    echo "You may proceed...";
    
} else {
    
    echo "You are too young, sorry!";
    
}

?>