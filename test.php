<?php
require("singleton.php");

$email="thomas.lima@viacesi.fr";

        $request = $pdo->prepare("select * from crud where email=:email");
		$request->bindParam(":email", $email, PDO::PARAM_STR, 100);
        $request->execute();
		$rownumber = count($request->fetchAll());

		if ($rownumber != 0) {		
            echo $rownumber;
		}
        else {
            echo"the mail is not in double";
        }
?>