<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BIENVENIDOS WEB CISEPRO 2.0</title>
    <link rel="shortcut icon" href="../resources/ico/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../resources/ico/favicon.ico" type="image/x-icon">
    <!-- PARA LOS ICONOS DEL LOGIN -->
    <link rel="stylesheet" href="../vendor/fortawesome/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body
            {
            margin-top: 60px;
            }
    </style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/webcisepro/public/"><i class="fa fa-mixcloud"></i> CISEPRO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::user()->type=='admin')
                    <li class="active"><a href="/">INICIO</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TALENTO HUMANO<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="personal">REGISTRADO</a></li>
                            <li><a href="#">REGISTRAR</a></li>
                            <li><a href="#">UBICACION</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">CONSULTAS</li>
                            <li><a href="#">ROLES</a></li>
                            <li><a href="#">TURNOS</a></li>
                        </ul>
                    </li>
                    <li><a href="paises">PAISES</a></li>
                    <li><a href="acerca">ACERCA</a></li>
                    <li><a href="pdf">CERTIFICADO</a></li>
                    <li><a href="contacto">CONTACTO</a></li>
            </ul>
                @else
                    <li class="active">
                        <a href="/">
                            INICIO
                        </a>
                    </li>
                   <li>
                       <a href="">
                           EMPLEOS
                       </a>
                   </li>
                    <li>
                        <a href="notes">
                            NOTAS
                        </a>
                    </li>
                @endif
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        <a href="{{route('auth/login')}}">
                            Login
                        </a></li>
                    <li>
                        <a href="{{route('auth/register')}}">
                            Register
                        </a></li>
                @else
                    <li>
                        <a href="#">
                            <i class="fa fa-user">

                            </i>
                            <strong>
                                {{ Auth::user()->last_name }}
                            </strong>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('auth/logout')}}">
                            <i class="fa fa-power-off">

                            </i>
                            <strong>
                                SALIR
                            </strong>
                        </a>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @if (Session::has('errors'))
        <div class="alert alert-warning" role="alert">
            <ul>
                <strong>Oops! Something went wrong : </strong>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <!--  -->
        @yield('content')
        <footer><p style="text-align: center">&copy; 2016 - https://www.cisepro.com.ec</p></footer>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../components/jquery/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>
