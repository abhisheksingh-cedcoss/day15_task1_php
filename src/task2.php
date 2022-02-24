<?php
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
echo "<br>";
$x= array_values($x);
echo "";
var_dump($x);


?>