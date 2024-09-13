<?php
	// Datos para la conexión con la base de datos
	$servername = "localhost";
	$username_db = "root";
	$password_db = "";
	$dbname = "end";

	// Variable para la conexión
	$conection = new mysqli($servername, $username_db, $password_db, $dbname);
	$conection->set_charset("utf8");
?>

<!--$servername = "localhost";
	$username_db = "root";
	$password_db = "";
	$dbname = "end";-->