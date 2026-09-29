@extends('layouts.app')

@section('title', 'Editar mensaje')

@section('content')
<div class="container py-4" style="max-width: 760px;">
    <h1 class="h2 mb-4">Editar mensaje #{{ $mensaje->id }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('mensajes.update', $mensaje->id) }}">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="nombres" class="form-label">Nombres</label>
                <input id="nombres" name="nombres" type="text" class="form-control" maxlength="100" required value="{{ old('nombres', $mensaje->nombres) }}">
            </div>

            <div class="col-md-6">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input id="apellidos" name="apellidos" type="text" class="form-control" maxlength="100" required value="{{ old('apellidos', $mensaje->apellidos) }}">
            </div>

            <div class="col-12">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input id="correo" name="correo" type="email" class="form-control" maxlength="255" required value="{{ old('correo', $mensaje->correo) }}">
            </div>

            <div class="col-12">
                <label for="tipo" class="form-label">Tipo</label>
                <select id="tipo" name="tipo" class="form-select" required>
                    @foreach (['Queja', 'Petición', 'Felicitación'] as $tipo)
                        <option value="{{ $tipo }}" @selected(old('tipo', $mensaje->tipo) === $tipo)>{{ $tipo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="6" minlength="10" maxlength="2000" required>{{ old('mensaje', $mensaje->mensaje) }}</textarea>
            </div>
        </div>

        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('mensajes') }}" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
