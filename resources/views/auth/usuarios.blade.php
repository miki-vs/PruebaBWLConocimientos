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
 
<table>
  <thead>
      <tr>
          <th scope="col">
              <font color="white">Nombre</font>
          </th>
          <th scope="col">
              <font color="white">Correo Eléctronico</font>
          </th>
          <th scope="col">
              <font color="white">Fecha de registro</font>
          </th>
          <th scope="col">
              <font color="white">último Login</font>
          </th>
      </tr>
  </thead>
  <tbody>
    @foreach ($datos as $item)
        <tr>
            <td class="text-white">{{$item->name}}</td>
            <td class="text-white">{{$item->email}}</td>
            <td class="text-white">{{$item->created_at}}</td>
            <td class="text-white">{{$item->updated_at}}</td>
        </tr>
      @endforeach
  </tbody>
</table>


@endsection