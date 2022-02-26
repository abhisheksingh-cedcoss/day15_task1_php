<?php
session_start();

?>
<?php

$_SESSION["array2"]= array();
foreach($_SESSION["array"] as $i){
    if($i==4){
        $i=10;
    }
    array_push($_SESSION["array2"], $i);
}








?>