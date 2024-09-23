    // Variable global para almacenar la cantidad ingresada
    let donationAmount = 0;

    // Función para actualizar la variable global con la cantidad ingresada
    function updateDonationAmount() {
        const amount = parseFloat(document.getElementById('donationAmount').value) || 0;
        donationAmount = parseFloat(amount.toFixed(2));
    }

    // Función para mostrar el modal
    function showModal() {
        // Actualizar la cantidad ingresada
        updateDonationAmount();

        // Verificar si la cantidad es menor a 5
        if (donationAmount < 5) {
            alert('Por favor, ingrese una cantidad mayor o igual a $5');
            return; // No abrir el modal
        }

        // Si la cantidad es válida, mostrar el modal
        document.getElementById('paypalModal').style.display = 'block';

        // Limpiar el contenedor del botón de PayPal antes de renderizarlo nuevamente
        const paypalButtonContainer = document.getElementById('paypal-button-container');
        paypalButtonContainer.innerHTML = '';

        paypal.Buttons({
            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                label: 'donate',
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    application_context: {
                        shipping_preference: 'NO_SHIPPING'
                    },
                    purchase_units: [{
                        amount: {
                            value: `${donationAmount}`
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transacción completada por ' + details.payer.name.given_name);
                });
            }
        }).render('#paypal-button-container');
    }

    function closeModal() {
        document.getElementById('paypalModal').style.display = 'none';
    }

    // Escuchar cambios en el campo de entrada para actualizar la cantidad ingresada
    document.getElementById('donationAmount').addEventListener('input', updateDonationAmount);