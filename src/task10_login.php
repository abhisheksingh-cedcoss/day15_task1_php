<?php
session_start();

?>



<html >
<head>
        <title>Login</title>
       

</head>
<body>
<form action="task10_logout.php" method ="post">
    <h1>Login</h1>    
    <label for="username">Username</label>
    <input type="text" name="username"><br><br>
    <label for="password">Password</label>
    <input type="text" name="password"><br>
    <input type="submit" name ="submit" value="Login">





</form>
    
</body>
</html>