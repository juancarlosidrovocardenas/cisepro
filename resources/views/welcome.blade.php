@extends('layout.layoutPrincipal')
@section('content')
    {{-- ESTILOS PARA EL SLIDER SALGA CENTRADO ------------------------------------------------------------------------------------------------------------------}}
    <style>
        div.c-wrapper{
            width: 60%; /* for example */
            margin: auto;
        }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img{
            width: 100%; /* use this, or not */
            margin: auto;
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
        h4 {
            margin-top: 25px;
            text-align: center;
            color: azure;
        }
    </style>
    <!-- Carousel ------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="c-wrapper">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" >
                <img src="../resources/img/slider1.png" alt="...">
                <div class="carousel-caption">
                    <P>Monitoreo</P>
                </div>
            </div>
            <div class="item">
                <img src="../resources/img/slider2.png" alt="...">
                <div class="carousel-caption">
                    <P>Video Vigilancia</P>
                </div>
            </div>
            <div class="item">
                <img src="../resources/img/slider3.png" alt="...">
                <div class="carousel-caption">
                    <P>Seguridad en Municipios</P>
                </div>
            </div>
            <div class="item">
                <img src="../resources/img/slider4.png" alt="...">
                <div class="carousel-caption">
                    <P>Seguridad Empresa del Estado</P>
                </div>
            </div>
            <div class="item">
                <img src="../resources/img/slider5.png" alt="...">
                <div class="carousel-caption">
                    <P>Seguridad en la Banca</P>
                </div>
            </div>
            <div class="item">
                <img src="../resources/img/slider6.png" alt="...">
                <div class="carousel-caption">
                    <P>Instalación de Cámaras</P>
                </div>
            </div>
            <div class="item">
                <img src="../resources/img/slider7.png" alt="...">
                <div class="carousel-caption">
                    <P>Ubicación</P>
                </div>
            </div>
        </div>
        <!-- Controls -------------------------------------------------------------------------------------------------------------------------------------------->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    </div>
    <!-- Carousel ------------------------------------------------------------------------------------------------------------------------------------------>
    {{-----------------------------------------------------------------------------------------------------------------------------------------------}}
    <br>
    <hr>
    <br>
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <h2>
                    <img class="img-circle" src="../resources/img/ball1.png" alt="Generic placeholder image" width="140" height="140">
                </h2>
                <h2>NUESTRA IDENTIDAD</h2>
                <p STYLE="text-align: justify">
                    <strong>RESEÑA HISTÓRICA:</strong>
                    Fue fundada el 23 de Mayo de 1991 en tendencia a una respuesta mundial de protección privada a: personas, bienes e información. El Ecuador uno de los países de mayor riesgo en el incremento organizado de la delincuencia.
                    A partir del año 2008 su diseño implantó una administración técnica y moderna de mejoramiento continuo, en donde todo el personal participa activamente en base a las necesidades del cliente y su satisfacción.
                    <BR> <BR>
                    <strong>MISIÓN:</strong>
                    Servicio al Cliente basado en el mejor talento humano velando por su seguridad y salud, procesos de calidad y tecnología de punta mejorando constantemente.
                    <BR> <BR>
                    <strong>VISIÓN:</strong>
                    Ser un grupo empresarial de Seguridad y negocios a fines con mejoramiento continuo.</p>
                <p><a class="btn btn-default" href="identidad" role="button">Ver detalles &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h2><img class="img-circle" src="../resources/img/ball2.png" alt="Generic placeholder image" width="140" height="140"></h2>
                <h2>SERVICIOS</h2>
                <p STYLE="text-align: justify">
                    Servicio: Cisepro es una sólida organización de equipo humano y procesos alineados para cumplir con nuestros clientes al 100% de su solución.
                    <BR> <BR>
                    Compromiso: Equipo de proyectos encontrado y propio para cumplir con calidad.
                    <BR> <BR>
                    Profesionalismo: Equipo experto de ingeniería para el diseño y ejecución de los proyectos.
                    <BR> <BR>
                    Innovación: Cisepro busca en el mercado nacional e internacional soluciones innovadoras para hacer realidad los proyectos de los clientes.
                    <BR> <BR>
                    Calidad: Cisepro trabaja con fabricantes reconocidos a nivel mundial, que certifica la calidad en el servicio de los proyectos.</p>
                <p><a class="btn btn-default" href="servicio" role="button">Ver detalles &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h2>
                    <img class="img-circle" src="../resources/img/ball3.png" alt="Generic placeholder image" width="140" height="140">
                </h2>
                              <h2>UBICANOS</h2>
                <p STYLE="text-align: justify">
                    La empresa cuenta con oficinas a nivel de las Provincias de Guayas, El Oro, Loja y Zamora.
                    Contamos con central de monitoreo de cámaras ip y análogas en tiempo real en la provincia de El Oro ,
                    dando soluciones tanto operativa como económica, y bajando los niveles de riesgos, en operaciones.</p>
                <p><a class="btn btn-default" href="donde" role="button">Ver detalles &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
    <hr>
@endsection
