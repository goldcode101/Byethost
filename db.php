<?php

try
{
	$pdo = new PDO('mysql:host=sql213.byethost18.com;port=3306:dbname=b18_14786106_WebDB', 'b18_14786106', 'cl102freewebhost');
}
catch(Exception $ex)
{
	die($ex->getMessage());
}
var_dump($pdo)
?>