<?php

$family = array("Harshad", "Pranay", "Sankalp", "Rahul");

foreach ($family as $key => $value) {
    
    $family[$key] = $value." Zagade";
    
    echo "Array item ".$key." is ".$value."<br>";
    
}

echo "<br><br>";

for ($i = 0; $i < sizeof($family); $i++) {
    
    echo $family[$i]."<br>";
    
}

echo "<br><br>";

for ($i = 10; $i >= 0; $i--) {
    
    echo $i."<br>";
    
}


?>