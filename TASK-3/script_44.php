<?php
//Script_44: Extract values from an associative array using array_values()

$associativeArray = ['Roll_no' => 29, 'Name' => 'Harshil', 'City' => 'Rajkot'];

$values = array_values($associativeArray);

print_r($values);

?>