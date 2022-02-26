<?php
session_start();
?>

<?php

if(isset($_POST["submit"])){
    $_SESSION["name"]=$_POST["username"];
    $_SESSION["password"]=$_POST["password"];


echo $_SESSION["name"];
echo "<br>";
echo $_SESSION["password"];

echo "<br>";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log_out</title>
</head>
<body>
    <form action="task10_login" method="post">
        <input type="submit" name ="submit1" value="log out">



    </form>
</body>
</html>

<?php
    if(isset($_POST["submit1"])){
        session_destroy();
    }
?>