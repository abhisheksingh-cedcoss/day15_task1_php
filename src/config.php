<?php
session_start();

?>

<?php

$array1 = array(3,4,5,6,);

$_SESSION["array"]=$array1;

echo "original Array <br>";
print_r($_SESSION['array']);
echo"<br>";
$array2 = $_SESSION["array2"];

echo"<br>";
echo "update Array <br>";

print_r($array2);




?>