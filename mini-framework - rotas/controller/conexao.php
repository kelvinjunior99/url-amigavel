<?php  

try 
{
	$pdo = new PDO("mysql:host=localhost; dbname=dicionario", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	return $pdo;
}
catch(PDOException $erro)
{
	echo $erro->getMessage();
}


?>
