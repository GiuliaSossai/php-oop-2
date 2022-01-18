<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Gold.php";
require_once __DIR__ . "/classes/Order.php";
require_once __DIR__ . "/classes/CreditCard.php";

$utente1 = new User("Agatha", "Christie", "agch@gmail.com", "tenlittleindians");
$utente1->setAge(20);
//$utente1->checkEmail();
var_dump($utente1);

$vip1 = new Gold("itasca", "Amelia Mary", "Earhart", "amyhh@fly.com", "10EElectra");
$vip1->setDiscount(30);
//$vip1->checkEmail();
var_dump($vip1);

$prodotto1 = new Product("Anj-Series Acacia", 3500);
$prodotto1->setDiscount(20);
var_dump($prodotto1);

$ordine1 = new Order(13, 432);
var_dump($ordine1);

$carta1 = new CreditCard("Agata", 34566);
$carta1->setExpirationDate(1992);
var_dump($carta1);


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
    <hr>
    <p>controllo email Agata: <?php echo $utente1->checkEmail() ?></p>
    <p>controllo email Amelia: <?php echo $vip1->checkEmail() ?></p>
    <p>prezzo finale ukulele: <?php echo $prodotto1->getFinalPrice() ?>₱</p>
    <p>controllo carta di credito di Agata: <?php echo $carta1->checkExpirationDate() ?></p>
</body>
</html>