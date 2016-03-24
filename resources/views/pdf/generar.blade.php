<head>
        <title>CERTIFICADO</title>
    <style>
        h1
        {
            color: #0087C3;
            text-align: center;
        }
        h2
        {
            color: #57B223;
            text-align: center;
        }
        h3
        {
            color: #0087C3;
            text-align: center;
        }
        table
        {
            border-color:#0087C3 ;
            border-top: 5px solid;
        }
        th
        {
            color: #57B223;
        }
        tr
        {
            color: cadetblue;
        }
        tbody
        {
            border-color: cadetblue;
        }
        td
        {
            color: #57B223;
            text-align: center;
        }
        body
        {
            border-style: double;
            border-color: cornflowerblue;
        }
    </style>
    </head>
<body>
    <div id="details" class="clearfix">
        <div>
            <h1>CERTIFICADO </h1>
            <hr>
            <h3> {{ $nombres }}</h3>
            <hr>
            <div><H2>FECHA: {{ $fecha }}</H2> </div>
            <HR>
            <HR>
        </div>
    </div>
    <table border="0" cellspacing="0" cellpadding="0">
        <tbody>

        <tr>

            <td><h3>CÉDULA</h3>{{ $cedula }}</td>
            <td><h3>CANTIDAD</h3>{{ $datos['CANTIDAD'] }}</td>
            <td><h3>DETALLE</h3>{{ $datos['DETALLE'] }}</td>
            <td><h3>HORAS</h3>{{ $datos['HORAS'] }}</td>
            <td><h3>TOTAL    </h3>{{ $datos['TOTAL'] }}</td>
        </tr>

        </tbody>
      </table>
    <BR>
    <HR>
    <HR>
    <footer><p style="text-align: center">&copy; 2016 - https://www.cisepro.com.ec</p></footer>
</body>
</html>