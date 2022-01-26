@extends('layouts.start')

@section('title', 'Login')

@section('content')
    <div class="container">
        <h1>Bienvenido</h1>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="column">
                    <label>Correo: </label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="correo@mail.com">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="column">
                    <label>Contraseña: </label>
                    <br>
                    <input type="password" id="password" name="password" placeholder="··········">
                </div>
            </div>

            @error('message')
                <p>{{ $message}}</p>
            @enderror

            
            <button type="submit">Login</button>
            <br><br>
            <span>¿No tienes cuenta? <a href="{{ route('registro.index') }}"> Registrate</a></span>
            <button type="reset" id="limpiar" hidden=""></button>
        </form>
    </div>
    @yield('content')

@endsection

