<?php

$a = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$b = array('c2' =>'Green', 'c4'=>'Black');


$result = array_diff_key($a,$b);

print_r($result);


?>