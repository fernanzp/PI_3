<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../resources/css/index_style.css">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- permite añadir mas contenido a la pagina principal --}}
    {{-- @stack('css') --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

{{-- header de la pagina principal --}}
<header class="nav-bg">
    <div class="zona-izq">
        <div class="logo"></div>
        <h1><a href="index.html">End Non-Disparity</a></h1>
    </div>
    <div class="cont-navbar">
        <!-- <a href="">Inicio</a> -->
        <a href="nosotros.html">Nosotros</a>
        <a href="ayudar.html">Maneras de ayudar</a>
        <a href="contenido.html">Contenido</a>
                                
        <a class="become-a-partner" href="/hazte-socio/">
            Hazte soci
            <span class="letter first">o</span>
            <span class="letter second">a</span>
        </a>
        <!-- <a href="">Noticias</a> -->
        <div class="icono">
            <a href="./login"><i class="fa-solid fa-circle-user fa-2xl"></i></i></a>
        </div>
    </div>
</header>

{{-- contenido de la pagina principal --}}
@yield('content')

{{-- footer de la pagina principal --}}
<footer class="footer">
    <div class="espacio-logo">
        <div class="logo">

        </div>
    </div>
    <div class="registro">
        <h2>Vuélvete Socio</h2>
        <a href="#">Conviértete en beneficiario</a>
        <a href="#">Conviértete en donante</a>
        <a href="#">Conviértete en voluntario</a>
        <h2>¿No tienes una cuenta?</h2>
        <a href="#">Quiero registrarme</a>
    </div>
    <div class="informacion">
        <h2>Información de contacto</h2>
        <p>Fundación: EducationNon-Disparity
            Correo: info@EducationNon-Disparity.org
            Teléfono: +54 91 123 4567
            Horario de atención: Lunes a Viernes, 9:00 a.m - 10:00 p.m
        </p>
    </div>
</footer>

{{-- permite añadir mas contenido a la pagina principal --}}
{{-- @stack('js') --}}
<script src="../resources/js/app.js"></script>
</body>
</html>