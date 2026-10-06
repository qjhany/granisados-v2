@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<section class="bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 py-16 text-white">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <h1 class="text-5xl font-extrabold">Contáctanos 🍧</h1>
        <p class="mt-4 text-xl font-semibold">Estamos listos para atenderte y resolver tus dudas.</p>
    </div>
</section>

<section class="bg-gray-100 py-16">
    <div class="mx-auto max-w-6xl px-6">
        @if (session('success'))
            <div class="mb-8 rounded-2xl border border-green-200 bg-green-100 p-5 font-semibold text-green-800" role="status">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid gap-10 md:grid-cols-2">
            <div class="rounded-3xl bg-white p-10 shadow-xl">
                <h2 class="mb-6 text-3xl font-extrabold text-gray-800">Información de contacto</h2>
                <div class="space-y-6 text-lg text-gray-700">
                    <div class="rounded-2xl bg-pink-100 p-5">
                        <h3 class="font-bold text-pink-700">Instagram</h3>
                        <p>@richard_y3la · @jhanyela117</p>
                    </div>
                    <div class="rounded-2xl bg-blue-100 p-5">
                        <h3 class="font-bold text-blue-700">Ubicación</h3>
                        <p>Pasto, Nariño</p>
                    </div>
                    <div class="rounded-2xl bg-yellow-100 p-5">
                        <h3 class="font-bold text-yellow-700">Horario</h3>
                        <p>Lunes a domingo, 10:00 a. m. – 10:00 p. m.</p>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl bg-white p-10 shadow-xl">
                <h2 class="mb-8 text-center text-3xl font-extrabold text-gray-800">Envíanos un mensaje</h2>

                <form method="POST" action="{{ route('pqrs.store') }}" class="space-y-5">
                    @csrf
                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="font-semibold text-gray-700">Nombres
                            <input name="nombres" value="{{ old('nombres') }}" required maxlength="100" autocomplete="given-name" class="mt-2 w-full rounded-xl border-gray-300" type="text">
                            @error('nombres')<span class="mt-1 block text-sm text-red-600">{{ $message }}</span>@enderror
                        </label>
                        <label class="font-semibold text-gray-700">Apellidos
                            <input name="apellidos" value="{{ old('apellidos') }}" required maxlength="100" autocomplete="family-name" class="mt-2 w-full rounded-xl border-gray-300" type="text">
                            @error('apellidos')<span class="mt-1 block text-sm text-red-600">{{ $message }}</span>@enderror
                        </label>
                    </div>

                    <label class="block font-semibold text-gray-700">Correo electrónico
                        <input name="correo" value="{{ old('correo') }}" required maxlength="150" autocomplete="email" class="mt-2 w-full rounded-xl border-gray-300" type="email">
                        @error('correo')<span class="mt-1 block text-sm text-red-600">{{ $message }}</span>@enderror
                    </label>

                    <label class="block font-semibold text-gray-700">Tipo de solicitud
                        <select name="tipo" required class="mt-2 w-full rounded-xl border-gray-300">
                            <option value="">Selecciona una opción</option>
                            @foreach (['Queja', 'Petición', 'Felicitación'] as $tipo)
                                <option value="{{ $tipo }}" @selected(old('tipo') === $tipo)>{{ $tipo }}</option>
                            @endforeach
                        </select>
                        @error('tipo')<span class="mt-1 block text-sm text-red-600">{{ $message }}</span>@enderror
                    </label>

                    <label class="block font-semibold text-gray-700">Mensaje
                        <textarea name="mensaje" required minlength="10" maxlength="2000" rows="6" class="mt-2 w-full rounded-xl border-gray-300">{{ old('mensaje') }}</textarea>
                        @error('mensaje')<span class="mt-1 block text-sm text-red-600">{{ $message }}</span>@enderror
                    </label>

                    <button type="submit" class="w-full rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 py-4 text-lg font-bold text-white shadow-lg hover:opacity-90">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
