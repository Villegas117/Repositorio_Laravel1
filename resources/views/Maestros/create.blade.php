@extends('welcome')

@section('titulo', 'Crear Maestros')

@section('contenido')


    <form action="/maestros" method="post">
        @csrf

        <div>
            <label for="" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control">
            <br>
            @error('codigo')
                <small style="color :red">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            @error('nombre')
                <small style="color : red">{{$message}}</small>
            @enderror
        </div>

        <div>
            <label for="" class="form-label">Apellido Paterno</label>
            <input type="text" name="app" id="app" class="form-control">
            @error('apellidopaterno')
                <small style="color : red">{{$message}}</small>
            @enderror
        </div>

        <div>
            <label for="" class="form-label">Apeliido Materno</label>
            <input type="text" name="apm" id="apm" class="form-control">
            @error('apellidomaterno')
                <small style="color : red">{{$message}}</small>
            @enderror
        </div>

        <div>
            <label for="" class="form-label">Correo</label>
            <input type="text" name="correo" id="correo" class="form-control">
            @error('correo')
                <small style="color : red">{{$message}}</small>
            @enderror
        </div>

        <div>
            <label for="" class="form-label">Número de Seguro  Social</label>
            <input type="text" name="nss" id="nss" class="form-control">
            @error('NumerodeSeguroSocial')
                <small style="color : red">{{$message}}</small>
            @enderror
        </div>

        <a href="/maestros" class="btn btn.danger text-light">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

@endsection
