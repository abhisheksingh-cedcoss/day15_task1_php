<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "value are in lower case <br>";
print_r($Color);


$result1 = array_flip($Color);

// print_r($result1);

$result2 = array_change_key_case($result1,CASE_UPPER);

// print_r($result2);
echo "<br> Value are in upper case <br>";

$result3 = array_flip($result2);

print_r($result3);

?>