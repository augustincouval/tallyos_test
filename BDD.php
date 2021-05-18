<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>

<?php

$servername = 'localhost';
$username = 'root';
$password ='';
$dbname = 'tallyos_test_ruche';



	$connexion = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               /* echo 'Connexion réussie';*/





?>