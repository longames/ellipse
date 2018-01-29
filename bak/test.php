<?php
	require_once("db.php");
	$a = "Test";
	$b = "Test";
	$result_query_insert = $mysqli->query("INSERT INTO `contacts` (`user`, `pass`) VALUES ('".$a."','".$b."')");

?>
