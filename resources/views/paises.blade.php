@extends('layout')
    @section('content')
    <!DOCTYPE html>
    <html>
        <head>
            <title>PAISES</title>
        </head>
        <br><br>
            <body>
                <div class="container">
                    <div class="row">
                        <div class=".col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="text-align: center; font-size: x-large">Países Registrados</div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>CÓDIGO</th>
                                            <th>PAÍS</th>
                                        </tr>
                                        @foreach($paises as $pais)
                                            <tr>
                                                <td>{{$pais->ID_PAISES}}</td>
                                                <td>{{$pais->NOMBRE_PAISES}} </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    {!! $paises->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
    </html>
@endsection

{{--<div class="content">
    <br><br>
    <div class="title"><h1>PAISES</h1></div>
    <ul>
        @foreach($paises as $pais)

            <li>
                @if($pais->long)
                    {{$pais->summary}}...
                @else
                    {{$pais->ID_PAISES}}
                    {{$pais->NOMBRE_PAISES}}
                @endif
            </li>
        @endforeach
    </ul>
</div>--}}