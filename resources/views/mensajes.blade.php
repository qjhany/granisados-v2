@extends('layouts.app')

@section('title', 'Mensaje')

@section('content')
<h2 class="text-center mb-4">Mensajes recibidos</h2>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mensajes as $mensaje)
            <tr>
                <td>{{ $mensaje->id }}</td>
                <td>{{ $mensaje->nombres }}</td>
                <td>{{ $mensaje->apellidos }}</td>
                <td>{{ $mensaje->correo }}</td>
                <td>{{ $mensaje->tipo }}</td>
                <td>{{ $mensaje->mensaje }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection