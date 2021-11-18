<?php
require("singleton.php");

$email="thomas.lima@viacesi.fr";
$password="felix95";

$request = $pdo->prepare("select * from crud where email=:email and password=:password");
$request->bindParam(":email", $email, PDO::PARAM_STR, 100);
$request->bindParam(":password", $password, PDO::PARAM_STR, 12);
$request->execute();
$rownumber = count($request->fetchAll());
$request = null;

?>