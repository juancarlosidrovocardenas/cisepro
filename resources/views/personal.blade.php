@extends('layout')
    @section('content')
        <!DOCTYPE html>
        <html>
            <head>
                <title>PERSONAL</title>
            </head>
            <br><br>
            <body>
                <div class="container">
                       <div class="row">
                            <div class=".col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="text-align: center; font-size: x-large">Personal Registrado en la Empresa</div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                                <tr>
                                                    <th>CÓDIGO</th>
                                                    <th>CÉDULA</th>
                                                    <th>NOMBRES</th>
                                                    <th>APELLIDOS</th>
                                                    <th>MOVIL</th>
                                                    <th>TELÉFONO</th>
                                                    <th>PROVINCIA</th>
                                                    <th>DIRECCION</th>
                                                    <th>FECHA DE NACIMIENTO</th>
                                                </tr>

                                            @foreach($personal as $per)
                                                <tr>
                                                    <td>{{$per->ID_PERSONAL}}</td>
                                                    <td>{{$per->CEDULA}} </td>
                                                    <td>{{$per->NOMBRES}}</td>
                                                    <td> {{$per->APELLIDOS}}</td>
                                                    <td>{{$per->MOVIL}} </td>
                                                    <td> {{$per->TELEFONO}} </td>
                                                    <td> {{$per->PROVINCIA}} </td>
                                                    <td> {{$per->DIRECCION}} </td>
                                                    <td> {{$per->FECHA_COMPLETA}} </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {!! $personal->render() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                 </div>
            </body>
        </html>
    @endsection