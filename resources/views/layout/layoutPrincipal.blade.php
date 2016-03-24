
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
            /* Ubicación de la imagen */
            background-image: url('../resources/img/principal.png') ;
            /* Nos aseguramos que la imagen de fondo este centrada vertical y
              horizontalmente en todo momento */
            background-position: center center;
            /* La imagen de fondo no se repite */
            background-repeat: no-repeat;
            /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
               la altura del contenido supere la altura de la imagen. */
            background-attachment: fixed;
            /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
               del navegador */
            background-size: cover;
            /* Fijamos un color de fondo para que se muestre mientras se está
              cargando la imagen de fondo o si hay problemas para cargarla  */
            background-color: transparent;
        }
        h2{
            color: aliceblue;
        }
        p
        {
            color: aliceblue;
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
            <a class="navbar-brand" href="/webcisepro/public/"><i class="fa fa-mixcloud"></i>   CISEPRO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/webcisepro/public/">INICIO</a></li>
                <li><a href="identidad">NUESTRA IDENTIDAD</a></li>
                <li><a href="servicio">SERVICIO</a></li>
                <li><a href="donde">DONDE ESTAMOS</a></li>
                <li><a href="contacto">CONTACTO</a></li>
                <li><a href="auth/login">INGRESAR</a></li>
            </ul>
            /ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- Bootstrap core JavaScript
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../components/jquery/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('content')
<footer><p style="text-align: center">&copy; 2016 - https://www.cisepro.com.ec</p></footer>
</body>
</html>
