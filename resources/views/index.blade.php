{{-- trae el contenido del footer y el header --}}
@extends('layouts.app')

@section('title', 'END Non-Disparity')

{{-- añadir mas contenido a la pagina principal --}}
{{-- @section('css')
<link rel="stylesheet" href="../resources/css/index_style.css">
<link rel="stylesheet" href="../resources/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection
--}}

@section('css')

    <style>
        /* Estilos del modal */
.modal {
    display: none; /* Oculto por defecto */
    position: fixed; /* Mantenerse en lugar fijo */
    z-index: 1; /* Asegurarse de que esté sobre otros elementos */
    left: 0;
    top: 0;
    width: 100%; /* Ancho completo */
    height: 100%; /* Alto completo */
    overflow: auto; /* Agregar barra de desplazamiento si es necesario */
    background-color: rgb(0,0,0); /* Fondo negro */
    background-color: rgba(0,0,0,0.4); /* Fondo negro con opacidad */
}

/* Contenido del modal */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* Centrando el modal en la pantalla */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Ancho del modal */
}

/* El botón de cerrar */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>

    @endsection


@section('js')
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&currency=MXN"></script>

<script>
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
</script>





@endsection

@section('content')

<div class="video">
    <!-- <video muted autoplay src="css/sources/video/ssstwitter.com_1724080377888.mp4"></video> -->
    <center>
        <img src="https://wp.es.aleteia.org/wp-content/uploads/sites/7/2018/01/web3-poor-poverty-man-street-mexico-proted-mcgrath-cc-by-nc-sa-2-0.jpg" alt="">
    </center>
</div>

<div class="titulo-donativo">
    <h2>Donaciones</h2>
</div>

<section class="cont-donativo">
    <div class="cont-info">
        <h2>Temas referentes</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laborum asperiores ratione error animi alias fuga quibusdam rerum, nulla tempore consequuntur quaerat sunt voluptate? Eaque labore commodi iste impedit ipsam.
        </p>
    </div>
    <div class="donativo">
        <h2>Cantidad</h2>
        <div class="boton-container">
            <button class="boton" type="button" onclick="setAmount(100)">$100</button>
            <button class="boton" type="button" onclick="setAmount(200)">$200</button>
            <button class="boton" type="button" onclick="setAmount(500)">$500</button>
        </div>
        <div class="boton-container">
            <button class="boton" type="button" onclick="setAmount(1000)">$1000</button>
            <button class="boton" type="button" onclick="setAmount(5000)">$5000</button>
            <button class="boton" type="button" onclick="setAmount(10000)">$10000</button>
        </div>
        <br>
        <div style="position: relative;">
            <div id="tooltip" class="tooltip" style="display: none;">
                Por favor, ingrese una cantidad mayor o igual a $5
            </div>
            <input type="number" id="donationAmount" placeholder="Ingrese cantidad">
        </div>
        <br>
        <div class="pago">
            <button class="boton" type="button" onclick="showModal()">Enviar</button>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="paypalModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="paypal-button-container"></div>
        </div>
</div>

<div class="titulo-info">
    <h2>¿Por qué confiar en nosotros?</h2>
</div>

<section>
    <div>
    </div>
</section>

@endsection
