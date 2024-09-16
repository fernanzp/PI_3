{{-- trae el contenido del footer y el header --}}
@extends('layouts.app')

{{-- titulo de la pagina --}}
@section('title', 'END Non-Disparity')

{{-- logica de paypal (js) --}}
@section('js')
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&currency=MXN"></script>
<script src="../resources/js/paypal.js"></script>
@endsection

{{-- contenido de la pagina --}}
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

<!-- Modal de paypal-->
<div id="paypalModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="paypal-button-container"></div>
        </div>
</div>

<div class="titulo-info">
    <h2>¿Por qué confiar en nosotros?</h2>
</div>

@endsection
