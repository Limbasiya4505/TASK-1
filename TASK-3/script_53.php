<?php
//Script_53: Remove duplicate values from an associative array using array_unique()

$associativeArray = ['Roll_No' => 29, 'Name' => 'Harshil', 'Name' => 'Harshil', 'Reg_No' => 15618223000];
$uniqueArray = array_unique($associativeArray);

print_r($uniqueArray);

?>