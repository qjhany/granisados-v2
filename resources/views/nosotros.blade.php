@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white py-20">

    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-6xl font-extrabold mb-6">
            💜 Sobre Nosotros 💜
        </h1>

        <p class="text-2xl font-semibold">
            En GRANIZADOS RELOCOS trabajamos para brindar sabor,
            alegría y la mejor atención a nuestros clientes 😵🍧
        </p>

    </div>

</section>

<!-- INFORMACIÓN -->
<section class="max-w-5xl mx-auto py-20 px-6 text-center">

    <h2 class="text-5xl font-bold text-gray-800 mb-8">
        ✨ ¿Quiénes Somos? ✨
    </h2>

    <p class="text-xl text-gray-600 leading-relaxed">
        Somos una empresa apasionada por crear experiencias refrescantes
        y deliciosas para toda la ciudad de Pasto.
        Nos destacamos por nuestra calidad, excelente atención y
        granizados llenos de sabor y diversión 🍧🔥
    </p>

</section>

<!-- ALERTAS -->
<div class="max-w-4xl mx-auto px-6">

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6 shadow">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6 shadow">

            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

</div>

<!-- FORMULARIO -->
<section class="py-16 bg-gray-100">

    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-5xl font-extrabold text-center text-gray-800 mb-12">
            📩 Formulario PQRS 📩
        </h2>

        <div class="bg-white rounded-3xl shadow-2xl p-10">

            <form action="{{ route('pqrs.store') }}" method="POST">
                @csrf

                <!-- Nombres -->
                <div class="grid md:grid-cols-2 gap-6 mb-6">

                    <div>
                        <label class="block text-lg font-semibold mb-2">
                            Nombres
                        </label>

                        <input type="text"
                               name="nombres"
                               value="{{ old('nombres') }}"
                               class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-pink-500 focus:border-pink-500">
                    </div>

                    <div>
                        <label class="block text-lg font-semibold mb-2">
                            Apellidos
                        </label>

                        <input type="text"
                               name="apellidos"
                               value="{{ old('apellidos') }}"
                               class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-pink-500 focus:border-pink-500">
                    </div>

                </div>

                <!-- Correo -->
                <div class="mb-6">

                    <label class="block text-lg font-semibold mb-2">
                        Correo electrónico
                    </label>

                    <input type="email"
                           name="correo"
                           value="{{ old('correo') }}"
                           class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-pink-500 focus:border-pink-500">

                </div>

                <!-- Tipo -->
                <div class="mb-6">

                    <label class="block text-lg font-semibold mb-2">
                        Tipo de solicitud
                    </label>

                    <select name="tipo"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-pink-500 focus:border-pink-500">

                        <option value="">Seleccione una opción</option>
                        <option value="Queja">Queja</option>
                        <option value="Petición">Petición</option>
                        <option value="Felicitación">Felicitación</option>

                    </select>

                </div>

                <!-- Mensaje -->
                <div class="mb-6">

                    <label class="block text-lg font-semibold mb-2">
                        Mensaje
                    </label>

                    <textarea name="mensaje"
                              rows="5"
                              class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-pink-500 focus:border-pink-500">{{ old('mensaje') }}</textarea>

                </div>

                <!-- Checkbox -->
                <div class="flex items-center mb-8">

                    <input type="checkbox"
                           name="acepto"
                           id="acepto"
                           class="rounded border-gray-300 text-pink-600 shadow-sm focus:ring-pink-500">

                    <label for="acepto" class="ml-3 text-gray-700">
                        Acepto términos y condiciones
                    </label>

                </div>

                <!-- Botón -->
                <button type="submit"
                        class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white py-4 rounded-2xl text-xl font-bold shadow-lg hover:scale-105 transition duration-300">

                    🚀 Enviar Solicitud

                </button>

            </form>

        </div>

    </div>

</section>

@endsection