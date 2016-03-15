@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Esto es una prueba
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Fomulario</div>
                <div class="panel-body">
                    <form action="acciones">
                        <div class="form-group-lg">
                            <label class="control-label" for="nombre">Nombre</label>
                            <input class="form-control" type="text" id="nombre" name="nombre">
                            <label class="control-label" for="pass">Contraseña</label>
                            <input class="form-control" type="password" id="pass" name="pass">
                        </div>
                        <br>
                        <input class="input-lg" type="submit" value="Envíar" id="enviar" name="enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
