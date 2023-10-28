<?php
//Script_52: Merge two associative arrays using array_merge()

$array1 = ['Roll_No' => 29, 'Name' => 'Harshil'];
$array2 = ['Clg' => 'ABC', 'Reg_No' => 15618223000];

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);

?>