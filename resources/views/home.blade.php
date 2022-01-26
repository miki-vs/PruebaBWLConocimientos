@extends('layouts.start')

@section('title', 'Home')

@section('content')
<header class="header">
    <nav class="navigation">
        <ul class="show">
            <li><a href="{{ route('login.index')}}">Dashboard</a></li>
            <li><a href="{{ route('login.usuarios')}}">Usuarios</a></li>
            <li><a href="{{ route('login.destroy')}}">Cerrar Sesión</a></li>
        </ul>
    </nav>
</header>
    <aside>
        <div class="card">
            <h1>HOLA MUNDITO</h1>
        </div>
    </aside>
    <section>
            
            <div class="card">
                <h1></h1>
            </div>
            <div class="card">
                <h1>HOLA MUNDO</h1>
            </div>
            <div class="card">
                <h1>HOLA MUNDO</h1>
            </div>
            <div class="card">
                <h1>HOLA MUNDO</h1>
            </div>
            <div class="card">
                <h1>HOLA MUNDO</h1>
            </div>
            <div class="card">
                <h1>HOLA MUNDO</h1>
            </div>
        
    </section>
@endsection