<?php
	include('register.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>END</title>
	<link rel="shortcut icon" href="assets/img/logo.png" type="">
    <link rel="stylesheet" href="assets/stylesheets/login_register_style.css">
</head>
<body>
	<!--Barra superior de navegación login-->
    <header class="navbarlogin" id="navbarlogin">
        <a href="">
            <img class="navbarlogin-logo" src="assets/img/logo.png">
        </a>
        <div class="navbarlogin-options">
        	<a href="index.php">Inicio</a>
        </div>
    </header>

    <!--Barra superior de navegación register-->
    <header class="navbarregister" id="navbarregister">
    	<div class="navbarregister-options">
        	<a href="index.php">Inicio</a>
        </div>
        <a href="">
            <img class="navbarregister-logo" src="assets/img/logo.png">
        </a>
    </header>

	<!--Video de fondo-->
	<div class="video-container">
        <video autoplay muted loop class="video">
            <source src="assets/videos/video_login_register.mp4" type="video/mp4">
        </video>
	</div>

	<!--Fondo del login y register-->
	<div class="background-loginregister"></div>

	<!--Login y register-->
	<div class="container-loginregister" id="container-loginregister">
		<!--Login-->
		<div class="login">
			<h2>Inicia Sesión</h2>
			<p>¿Aún no tienes una cuenta? <a href="#" id="go-to-register"> Crea una</a></p>
			<form method="post" action="login.php">
				<div class="login-inputcontainer">
					<input type="text" name="email" required>
					<label class="lbl">
						<span class="text-span">Correo</span>
					</label>
				</div>
				<div class="login-inputcontainer">
					<input type="password" name="password" required>
					<label class="lbl">
						<span class="text-span">Contraseña</span>
					</label>
				</div>
				<input type="submit" value="Iniciar Sesión" class="login-btn" name="btnIngresar">
			</form>
		</div>
		<!--Register-->
		<div class="register">
			<h2>Crea una cuenta nueva</h2>
			<p>¿Ya tienes una cuenta? <a href="#" id="go-to-login"> Inicia sesión</a></p>
			<form method="post">
				<div class="login-inputcontainer uno">
					<input type="email" name="email" required>
					<label class="lbl">
						<span class="text-span">Correo</span>
					</label>
				</div>
				<div class="login-inputcontainer">
					<input type="text" name="name" required>
					<label class="lbl">
						<span class="text-span">Nombre</span>
					</label>
				</div>
				<div class="login-inputcontainer">
					<input type="text" name="lastname" required>
					<label class="lbl">
						<span class="text-span">Apellidos</span>
					</label>
				</div>
				<div class="login-inputcontainer">
					<input type="password" name="password" required>
					<label class="lbl">
						<span class="text-span">Contraseña</span>
					</label>
				</div>
				<div class="login-inputcontainer">
					<input type="password" name="confirm_password" required>
					<label class="lbl">
						<span class="text-span">Confirmar contraseña</span>
					</label>
				</div>
				<input type="submit" value="Crear Cuenta" class="register-btn">
			</form>
		</div>
	</div>	
</body>
</html>

<script>
//Función para ir a register
function goToRegister(){
    document.querySelector('.background-loginregister').classList.remove('translate-to-login');
    document.querySelector('.video-container').classList.remove('translate-to-login');
    document.querySelector('.login').classList.remove('translate-to-login');
    document.querySelector('.register').classList.remove('translate-to-login');
    document.querySelector('.navbarlogin').classList.remove('translate-to-login');
    document.querySelector('.navbarregister').classList.remove('translate-to-login');

    setTimeout(function() {
        document.querySelector('.video-container').classList.add('translate-to-register');
    }, 100);

    setTimeout(function() {
        document.querySelector('.background-loginregister').classList.add('translate-to-register');
        document.querySelector('.login').classList.add('translate-to-register');
        document.querySelector('.register').classList.add('translate-to-register');
        document.querySelector('.navbarlogin').classList.add('translate-to-register');
        document.querySelector('.navbarregister').classList.add('translate-to-register');
    }, 50);
}


// Variable que verifica si register se está mostrando
let isRegisterShown = false;

document.getElementById('go-to-register').addEventListener('click', function() {
  // Eliminar las clases anteriores
  document.querySelector('.background-loginregister').classList.remove('translate-to-login');
  document.querySelector('.video-container').classList.remove('translate-to-login');
  document.querySelector('.login').classList.remove('translate-to-login');
  document.querySelector('.register').classList.remove('translate-to-login');
  document.querySelector('.navbarlogin').classList.remove('translate-to-login');
  document.querySelector('.navbarregister').classList.remove('translate-to-login');

  setTimeout(function() {
  	document.querySelector('.video-container').classList.add('translate-to-register');
  }, 100);

  setTimeout(function() {
    document.querySelector('.background-loginregister').classList.add('translate-to-register');
    document.querySelector('.login').classList.add('translate-to-register');
    document.querySelector('.register').classList.add('translate-to-register');
    document.querySelector('.navbarlogin').classList.add('translate-to-register');
    document.querySelector('.navbarregister').classList.add('translate-to-register');
  }, 50);

  // Actualizar el estado de la animación
  isRegisterShown = true;
});

document.getElementById('go-to-login').addEventListener('click', function() {
  // Eliminar las clases de animación anteriores antes de aplicar la animación de inicio de sesión
  document.querySelector('.background-loginregister').classList.remove('translate-to-register');
  document.querySelector('.video-container').classList.remove('translate-to-register');
  document.querySelector('.login').classList.remove('translate-to-register');
  document.querySelector('.register').classList.remove('translate-to-register');
  document.querySelector('.navbarlogin').classList.remove('translate-to-register');
  document.querySelector('.navbarregister').classList.remove('translate-to-register');

  setTimeout(function() {
  	document.querySelector('.video-container').classList.add('translate-to-login');
  }, 100);

  setTimeout(function() {
    document.querySelector('.background-loginregister').classList.add('translate-to-login');
    document.querySelector('.login').classList.add('translate-to-login');
    document.querySelector('.register').classList.add('translate-to-login');
    document.querySelector('.navbarlogin').classList.add('translate-to-login');
    document.querySelector('.navbarregister').classList.add('translate-to-login');
  }, 50);

  // Actualizar el estado de la animación
  isRegisterShown = false;
});
</script>