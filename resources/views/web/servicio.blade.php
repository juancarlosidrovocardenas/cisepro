@extends('layout.layoutPrincipal')
@section('content')
    <style>
        li
        {
            color:aliceblue;
        }
        h1
        {
            text-align: left;
            color: gold;
            font-size: 24px;
        }
        h2
        {
            text-align: center;
            color: gold;

        }
        h3
        {
            text-align: center;
            color: azure;
        }
        h4 {
            margin-top: 25px;
            text-align: justify;
            color: azure;
        }
        .row {
            margin-bottom: 20px;
        }
        .row .row {
            margin-top: 10px;
            margin-bottom: 0;
            background-color: #0087C3;
        }
        [class*="col-"] {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: lavender;
            background-color: lavender;
            border: 2px solid black;
            border: 1px solid black;
        }
        p
        {
            text-align: justify;
            color: black;
        }

        hr {
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .portfolio-item {
            margin-bottom: 25px;
        }

        footer {
            margin: 50px 0;
        }
    </style>
        <br>
    <hr>
    <h3>
        ! ! SERVICIOS ! !
    </h3>
    <hr>
    <div class="container">
        <h1>
            <strong>
                Servicio:
            </strong>
        </h1>
        <h4>
            Cisepro es una sólida organización de equipo humano y procesos alineados para cumplir con nuestros clientes al 100% de su solución.
        </h4>
        <h1>
            <strong>
                Compromiso:
            </strong></h1>
        <h4>
            Equipo de proyectos encontrado y propio para cumplir con calidad.
        </h4>
        <h1>
            <strong>
                Profesionalismo:
            </strong></h1>
        <h4>
            Equipo experto de ingeniería para el diseño y ejecución de los proyectos.
        </h4>
        <h1>
            <strong>
                Innovación:
            </strong>
        </h1>
        <h4>
            Cisepro busca en el mercado nacional e internacional soluciones innovadoras para hacer realidad los proyectos de los clientes.
        </h4>
        <h1>
            <strong>
                Calidad:
            </strong></h1>
        <h4>
            Cisepro trabaja con fabricantes reconocidos a nivel mundial, que certifica la calidad en el servicio de los proyectos.
        </h4>
    </div>
    <hr>
    <div class="container">
        <br>
       <h2>
           SEGURIDAD ELECTRÓNICA Y MONITOREO DE ALARMAS
       </h2>
       <br>
        <div class="row">
            <div class="col-xs-6 col-lg-4">
                CCTV Circuito Cerrado de TV.
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-8">
                Soluciones de alta tecnología CCTV como IP (IPTV).
            </div>
            <div class="col-xs-6 col-lg-4">
                Control de Acceso.
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-8">
                El sistema CCTV o IPTV puede modular y autorizar todo control de acceso.
            </div>
            <div class="col-xs-6 col-lg-4">
                Sistemas de Alarmas para Intrusión.
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-8">
                Sistemas de Alarmas Residenciales y Comerciales.
            </div>
            <div class="col-xs-6 col-lg-4">
                Sistemas de Detección y Extinción de Incendios.
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-8">
                Diferentes tecnologías de detección: Panel analógico y direccionable.
            </div>
            <div class="col-xs-6 col-lg-4">
                Tráfico y Estacionamiento.
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-8">
                Carnetización y Autenticación.
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/img/pic1.png" alt="">
                </a>
                <h3>
                    <a href="#">CCTV Circuito Cerrado de TV</a>
                </h3>
                     <p>
                         Circuito cerrado de televisión o CCTV: es una tecnología de video vigilancia visual diseñada para supervisar una diversidad de ambientes y actividades.
                     </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/img/pic2.png" alt="">
                </a>
                <h3>
                    <a href="#">Control de Acceso</a>
                </h3>
                <p>
                    Un Sistema de Control de Acceso es un conjunto de dispositivos interactuando entre sí que permiten restringir el acceso a una area determinada
                </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/img/pic3.png" alt="">
                </a>
                <h3>
                    <a href="#">
                        Monitoreo Remoto
                    </a>
                </h3>
                <p>
                    Es la integración de la tecnología de comunicación para el monitoreo con Centrales LPL que requiere línea telefónica para hacer el empleo de la alarma
                </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/img/pic4.png" alt="">
                </a>
                <h3>
                    <a href="#">
                        Tráfico y Estacionamiento
                    </a>
                </h3>
                <p>
                    Especialmente diseñado para el control de automóviles a estacionamientos públicos y privados. Este sistema es una variante de control de acceso tradicional. En el caso de estacionamientos se automatiza el cobro de tiempo de estacionamiento.
                </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/img/pic5.png" alt="">
                </a>
                <h3>
                    <a href="#">
                        Detección de incendios
                    </a>
                </h3>
                <p>
                    Detección de incendios se entiende al hecho de descubrir y avisar que hay un incendio en un determinado lugar. Las características que deben valorar cualquier sistema de detección en su conjunto son la rapidez y la fiabilidad en la detección
                </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/img/pic6.png" alt="">
                </a>
                <h3>
                    <a href="#">
                        Seguridad Electrónica y Alarmas
                    </a>
                </h3>
                <p>
                    Equipos especialmente desarrollados para brindar todos los elementos necesarios para el resguardo de la empresa o la residencia. Contamos con equipos de reconocida marca en el mercado y demostrada experiencia.
                </p>
            </div>
        </div>


        <h3>
            Telefonos:
        </h3>
         <div class="row">
            <div class=".col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                EL ORO:
            </div>
             <div class=".col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                 GUAYAS:
             </div>
             <div class=".col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                 AZUAY:
             </div>
             <div class=".col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                 LOJA:
             </div>
             <div class=".col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                 ZAMORA:
             </div>
             <div class=".col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                 MINAS:
             </div>
         </div>
      </div> <!-- /container -->
    <hr>
@endsection