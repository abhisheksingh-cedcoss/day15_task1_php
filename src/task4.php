<?php
$ori = array( '1','2','3','4','5' );
echo 'Original array : ';
echo "<br>";
foreach ($ori as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $ori, 3, 0, $inserted );
echo "<br>"; 
echo " After inserting '$' the array is : ";
echo "<br>";
foreach ($ori as $x) 
{echo "$x ";}





?>