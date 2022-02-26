<?php

$cookie_name ="user";

$cookie_value =$_POST["name"];

setcookie($cookie_name, $cookie_value, time()+ (86400*30), '/');

?>

<?php
if(isset($_POST["submit"])){
    if(isset($_COOKIE[$cookie_name])){
        echo $_COOKIE[$cookie_name];
    }
}

?>