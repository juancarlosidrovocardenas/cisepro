@extends('layout.layoutLogin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">INICIAR SESIÓN</div>
                    <div class="panel-body">
                        {!! Forms::open(['route' => 'auth/login', 'class' => 'form']) !!}
                        <div class="form-group">
                            <label>CORREO</label>
                            {!! Forms::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>CONTRASEÑA</label>
                            {!! Forms::password('password', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="checkbox">
                            <label><input name="remember" type="checkbox"> RECORDAR</label>
                        </div>
                        <div>
                            {!! Forms::submit('INGRESAR',['class' => 'btn btn-primary']) !!}
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        {!! Forms::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection