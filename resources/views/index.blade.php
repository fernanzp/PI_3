<!-- trae el contenido del footer y el header -->
@extends('layouts.app')
<!-- titulo de la pagina -->
@section('title', 'END Non-Disparity')






<!-- contenido de la pagina -->
@section('content')

<div class="video">
    <center>
        <img src="https://wp.es.aleteia.org/wp-content/uploads/sites/7/2018/01/web3-poor-poverty-man-street-mexico-proted-mcgrath-cc-by-nc-sa-2-0.jpg" alt="">
    </center>
</div>

    <!-- <div class="bg"> -->
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
                <button class="boton" type="button">$100</button>
                <button class="boton" type="button">$200</button>
                <button class="boton" type="button">$500</button>
            </div>
            <div class="boton-container">
                <button class="boton" type="button">$1000</button>
                <button class="boton" type="button">$5000</button>
                <button class="boton" type="button">$10000</button>
            </div>
            <br>
            <div class="form-control">
                <input class="input input-alt" placeholder="Ingresa la cantidad deseada" required="" type="number">
                <span class="input-border input-border-alt"></span>
            </div>
            <button class="boton-aceptar" type="button" id="btn-modal-donacion"
            data-bs-toggle="modal" data-bs-target="#modal-pago">Aceptar</button>
        </div>
    </section>

    <div class="about-services">
        <div class="contenedor">
            <h2 class="titulo">Maneras de apoyar</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="resources/assets/img/seccion-img1.png" alt="">
                    <h3>Apoyo monetario</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                </div>
                <div class="servicio-ind">
                    <img src="resources/assets/img/seccion-img2.png" alt="">
                    <h3>Asistiendo a actividades</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                </div>
                <div class="servicio-ind">
                    <img src="resources/assets/img/seccion-img3.png" alt="">
                    <h3>Divulgando</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                </div>
                <!-- <div class="servicio-ind">
                    <img src="assets/img/ilustracion4.svg" alt="">
                    <h3>Name</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                </div> -->
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalDonacion" tabindex="-1" aria-labelledby="modalDonacionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDonacionLabel">Confirmar Donación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vas a donar: <span id="cantidadDonar"></span> MXN.
                <div id="paypal-button-container" style="margin-top: 20px;"></div> <!-- Contenedor para PayPal -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<!-- logica de paypal (js) -->
@section('js')
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&currency=MXN"></script>
<script src="../resources/js/paypal.js"></script>

<script>





</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection


@endsection
