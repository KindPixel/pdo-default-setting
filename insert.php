<?php
require_once("singleton.php");

$email="yoyo@viacesi.fr";
$password="yoyo";
$name="yoann";
$phone="6666666666";
$city="eponezoo";

$request = $pdo->prepare("INSERT INTO `crud`( `name`, `email`, `phone`, `city`, `password`) 
VALUES (:name,:email,:phone,:city,:password)");

$request->bindParam(":name",$name, PDO::PARAM_STR, 100);
$request->bindParam(":email", $email, PDO::PARAM_STR, 100);
$request->bindParam(":phone", $phone, PDO::PARAM_STR, 100);
$request->bindParam(":city", $city, PDO::PARAM_STR, 100);
$request->bindParam(":password", $password, PDO::PARAM_STR, 12);

$request->execute();

$request = null;

?>