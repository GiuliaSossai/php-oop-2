<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Gold.php";

$utente1 = new User("Agatha", "Christie", "agch@gmail.com", "tenlittleindians");
$utente1->setAge(20);
var_dump($utente1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping oop</title>
</head>
<body>
    
</body>
</html>