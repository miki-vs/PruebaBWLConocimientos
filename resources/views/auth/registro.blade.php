@extends('layouts.start')

@section('title', 'Registro')

@section('content')
    <div class="container">
        <h1>Crear cuenta nueva</h1>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="column">
                    <label>Nombre: </label>
                    <br>
                    <input type="text" id="name" name="name" placeholder="Ingresa tu nombre">
                </div>
                @error('name')
                    <p>{{ $message}}</p>
                @enderror
            </div>
            <br>

            <div class="row-pas">
                <div id="cont" class="column">
                    <label>Contraseña: </label>
                    <br>
                    <input type="password" id="password" name="password" placeholder="··········">
                </div>
                <br>
                <div id="confpas" class="column">
                    <label>Confirmar: </label>
                    <input type="password" id="confpass" name="confpass" placeholder="··········">
                </div>
                @error('password')
                    <p>{{ $message}}</p>
                @enderror
            </div>
            <br>

            <div class="row">
                <div class="column">
                    <label>Correo: </label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="correo@mail.com">
                </div>
                @error('email')
                    <p>{{ $message}}</p>
                @enderror
            </div>

            <button type="submit">Registrar</button>
            <br><br>
            <button type="reset" id="limpiar" hidden=""></button>
        </form>
        <script>
            $(document).ready(function() {
                $("#limpiar").click();
                $("#form-comun > textarea").html("");
            });
        </script>
    </div>
    @yield('content')
@endsection
