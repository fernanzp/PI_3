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
    }, 1500); // Cambia el intervalo según tus necesidades
});





//boton donacion
function setAmount(amount) {
  document.getElementById('donationAmount').value = amount;
}






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







        // Función para establecer el valor en el input
        function setValue(value) {
            document.getElementById('inputNumber').value = value;
            document.getElementById('alerta').style.display = 'none'; // Ocultar la alerta si estaba visible
        }

        // Función para enviar el valor
        function enviar(event) {
            event.stopPropagation(); // Evitar que el clic en el botón "Enviar" cierre inmediatamente la alerta
            const valor = document.getElementById('inputNumber').value;
            const alerta = document.getElementById('alerta');

            if (valor < 5) {
                // Mostrar la alerta si el valor es menor a 5
                alerta.style.display = 'block';
            } else {
                // Ocultar la alerta y procesar el envío
                alerta.style.display = 'none';
                alert('Enviado correctamente: ' + valor);
            }
        }

        // Ocultar la alerta al hacer clic en cualquier parte de la página
        document.addEventListener('click', function(event) {
            const alerta = document.getElementById('alerta');
            const input = document.getElementById('inputNumber');
            if (alerta.style.display === 'block') {
                // Si el click no es en el input o en el botón de enviar, ocultar la alerta
                if (!input.contains(event.target)) {
                    alerta.style.display = 'none';
                }
            }
        });




