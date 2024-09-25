// Limitar el input a dos decimales
document.querySelector('.input').addEventListener('input', function () {
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
    button.addEventListener('click', function () {
        const amount = this.textContent.replace('$', '');  // Obtener el valor del botón sin el signo de $
        document.querySelector('.input').value = amount;  // Asignar el valor al input
    });
});

document.querySelector('.boton-aceptar').addEventListener('click', function () {
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
                        shipping_preference: 'NO_SHIPPING'
                    },
                    purchase_units: [{
                        amount: {
                            value: cantidad,
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    console.log('Transacción aprobada, enviando datos al servidor...');
            
                    fetch('./guardar-transaccion', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            transaction_id: details.id,
                            amount: details.purchase_units[0].amount.value,
                            payer_email: details.payer.email_address,
                            payer_name: details.payer.name.given_name + ' ' + details.payer.name.surname
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Datos de la transacción guardados correctamente.');
                        } else {
                            alert('Error al guardar los datos.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Ocurrió un error al guardar los datos.');
                    });
                });
            }
            ,
            onError: function(err) {
                console.error('Error en PayPal:', err);
            }
        }).render('#paypal-button-container');
          // Asegurarse de renderizar dentro del contenedor correcto

        modal.show();  // Mostrar el modal
    } else {
        alert('Por favor, ingresa una cantidad válida mayor a 5 antes de continuar.');
    }
});
