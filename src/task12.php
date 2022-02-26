<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <form action="<?php  echo $_SERVER["PHP_SELF"]  ?>" method="post">
        <label for="id">ID</label>
        <input type="text" name ="id">
        <input type="submit" name ="add" value ="add">
    </form>
</body>
</html>

<?php
    $products = array(
        array(
        "id" => 101,
        "name" => "Basket Ball",
        "image" => "basketball.png",
        "price" => 150
        ),
        array(
        "id" => 102,
        "name" => "Football",
        "image" => "football.png",
        "price" => 120
        ),
        array(
        "id" => 103,
        "name" => "Soccer",
        "image" => "soccer.png",
        "price" => 110
        ),
        array(
        "id" => 104,
        "name" => "Table Tennis",
        "image" => "table-tennis.png",
        "price" => 130
        ),
        array(
        "id" => 105,
        "name" => "Tennis",
        "image" => "tennis.png",
        "price" => 100
        )
        );

if(isset($_POST["add"])){
    $input = $_POST["id"];
    foreach($products as $key => $value){
        if($value["id"]==$input){
            $product_array = array($value["id"], $value["name"], $value["image"], $value["price"]);
            print_r($product_array);
        }
    }
}







?>