@extends('layout')
@section('content')
    <style>
        hr {border: 2px solid khaki; height: 2px; background-color: darkkhaki;}
    </style>
<br><br>
        <div class="title"><h3 style="text-align: center">BIENVENID@</h3></div>
<hr>
@if (Auth::guest())
    <li><a href="{{route('auth/login')}}">Login</a></li>
    <li><a href="{{route('auth/register')}}">Register</a></li>
@else
    <p style="text-align: center">{{ Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
@endif
<hr>
<p style="text-align: center">NOTAS DEL DIA: {{ date("Y-m-d H:i:s", time()) }}</p>
           @foreach($notes as $note)
                   @if(strlen($note->note)>20)
                        <p style="text-align: center"><strong>{{substr($note->note,0,50)}}...</strong></p>
                    @else
                        <p style="text-align: center"><strong>{{$note->note}}</strong></p>
                    @endif
            @endforeach
<hr>
@endsection