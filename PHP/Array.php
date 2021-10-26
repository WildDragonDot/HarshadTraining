<?php

$myArray = array("Harshad", "Pranay", "Sankalp", "Rahul");

$myArray[] = "Sahil";

print_r($myArray);

echo $myArray[3];

echo "<br><br>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "burger";

$anotherArray[5] = "coffee";

$anotherArray["myFavouriteFood"] = "ice cream";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array(
    
    "France" => "French", 
    "USA" => "English", 
    "Germany" => "Germany");

unset($thirdArray["France"]);

print_r($thirdArray);

echo "Size Of Third Array ",sizeof($thirdArray);



?>