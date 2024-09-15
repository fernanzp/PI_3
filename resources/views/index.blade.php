{{-- trae el contenido del footer y el header --}}
@extends('layouts.app')

@section('title', 'END Non-Disparity')

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
            <button class="boton-aceptar" id="acceptBtn">Aceptar</button>
        </div>
    </section>

    <div class="titulo-info">
        <h2>¿Por qué confiar en nosotros?</h2>
    </div>

    <section>
        <div>
        </div>
    </section>


@endsection
