<?php
	include('conection.php');

	//Verificar si se ha enviado el formulario
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//Recoger los datos del formulario
		$email = $_POST['email'];
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		if ($password != $confirm_password) {
			echo "The passwords doesn't match";
		}else{
			//Consulta para insertar un nuevo usuario en la tabla "users"
			$query = "INSERT INTO users(id, name, email, last_name, password, status, created_at) VALUES (NULL , '$name', '$email' , '$lastname' , '$password', 1, NOW())";
			//Ejecutar la consulta
			if ($conection->query($query) === TRUE){
				header("Location: index.php");
				exit();
			}else {
				echo "Conection failed";
			}
			//Cerrar la conexion
			$conection->close();
		}
	}
?>