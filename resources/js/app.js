document.addEventListener("DOMContentLoaded", function() {
    const firstLetter = document.querySelector('.letter.first');
    const secondLetter = document.querySelector('.letter.second');
    
    setInterval(() => {
        if (firstLetter.style.opacity === '1') {
            firstLetter.style.opacity = '0';
            secondLetter.style.opacity = '1';
        } else {
            firstLetter.style.opacity = '1';
            secondLetter.style.opacity = '0';
        }
    }, 500); // Cambia el intervalo según tus necesidades
});





//login
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