// Limitar el input a dos decimales
document.querySelector('.input').addEventListener('input', function() {
    let value = this.value;
    
    // Verifica si el valor tiene más de dos decimales
    if (value.includes('.')) {
        const decimalIndex = value.indexOf('.');
        const decimals = value.substring(decimalIndex + 1);

        if (decimals.length > 2) {
            this.value = parseFloat(value).toFixed(2);  // Redondear a 2 decimales
        }
    }
});

document.querySelectorAll('.boton').forEach(button => {
    button.addEventListener('click', function() {
        const amount = this.textContent.replace('$', '');  // Obtener el valor del botón sin el signo de $
        document.querySelector('.input').value = amount;  // Asignar el valor al input
    });
});

document.querySelector('.boton-aceptar').addEventListener('click', function() {
    const cantidad = document.querySelector('.input').value;
    
    if (cantidad >= 5) {  // Asegurarse de que la cantidad sea mayor a 5
        document.getElementById('cantidadDonar').textContent = `$${cantidad}`;  // Actualizar el valor en el modal

        const modal = new bootstrap.Modal(document.getElementById('modalDonacion'));
        
        // Limpiar el contenedor de PayPal antes de renderizar el botón
        const paypalContainer = document.getElementById('paypal-button-container');
        paypalContainer.innerHTML = '';  // Vaciar el contenedor para evitar duplicados

        // Renderizar los botones de PayPal
        paypal.Buttons({
            style: {
                color: 'blue',
                shape: 'pill',
                label: 'donate',
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    application_context: {
                        shipping_preference: 'NO_SHIPPING'  // No se requiere dirección de envío
                    },
                    purchase_units: [{
                        amount: {
                            value: cantidad,  // Asignar el valor a donar
                        }
                    }]
                });
            },
            onApprove: function(data, actions) { // Capturar la transacción aprobada
                return actions.order.capture().then(function(details) {
                    alert('Transacción completada por ' + details.payer.name.given_name);
                });
            },
            onError: function(err) { //error en el pago
                console.error(err);
                alert('Ocurrió un error al procesar la transacción. Por favor, intenta de nuevo.');
            }
        }).render('#paypal-button-container');  // Asegurarse de renderizar dentro del contenedor correcto

        modal.show();  // Mostrar el modal
    } else {
        alert('Por favor, ingresa una cantidad válida mayor a 5 antes de continuar.');
    }
});
