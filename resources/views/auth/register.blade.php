@extends('layout.layoutLogin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">SESIÓN</div>

                    <div class="panel-body">
                        {!!Forms ::open(['route' => 'auth/register', 'class' => 'form']) !!}

                        <div class="form-group">
                            <label>NOMBRES</label>
                            {!! Forms::input('text', 'first_name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>APELLIDOS</label>
                            {!! Forms::input('text', 'last_name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>TIPO</label>
                            <BR>
                            {!! Forms::select('type', array('user' => 'USUARIO', 'admin' => 'ADMINISTRADOR'), 'user') !!}
                        </div>
                        <div class="form-group">
                            <label>CORREO</label>
                            {!! Forms::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>CONTRASEÑA</label>
                            {!! Forms::password('password', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>CONFIRMAR CONTRASEÑA</label>
                            {!! Forms::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>

                        <div>
                            {!! Forms::submit('INGRESAR',['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Forms::close() !!}
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection