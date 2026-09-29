@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2 mb-0">Mensajes recibidos</h1>
        <span class="badge bg-primary">{{ $mensajes->total() }} registros</span>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Mensaje</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mensajes as $mensaje)
                    <tr>
                        <td>{{ $mensaje->id }}</td>
                        <td>{{ $mensaje->nombres }}</td>
                        <td>{{ $mensaje->apellidos }}</td>
                        <td>{{ $mensaje->correo }}</td>
                        <td>{{ $mensaje->tipo }}</td>
                        <td>{{ $mensaje->mensaje }}</td>
                        <td class="text-end text-nowrap">
                            <a href="{{ route('mensajes.edit', $mensaje->id) }}" class="btn btn-sm btn-outline-primary">
                                Editar
                            </a>
                            <form method="POST" action="{{ route('mensajes.destroy', $mensaje->id) }}" class="d-inline" onsubmit="return confirm('¿Eliminar este mensaje?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay mensajes registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $mensajes->links() }}
    </div>
</div>
@endsection
