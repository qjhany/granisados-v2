@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 text-white py-20">

    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-6xl font-extrabold mb-6">
            ☎️ Contáctanos ☎️
        </h1>

        <p class="text-2xl font-semibold">
            Estamos listos para atenderte y resolver tus dudas 😵🍧
        </p>

    </div>

</section>

<!-- CONTACTO -->
<section class="py-20 bg-gray-100">

    <div class="max-w-5xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-10">

            <!-- INFORMACIÓN -->
            <div class="bg-white rounded-3xl shadow-2xl p-10">

                <h2 class="text-4xl font-extrabold text-gray-800 mb-6">
                    📞 Información de Contacto
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Puedes comunicarte con nosotros a través de nuestros
                    canales oficiales y redes sociales 💜
                </p>

                <div class="space-y-6">

                    <div class="bg-pink-100 p-5 rounded-2xl">
                        <h3 class="text-2xl font-bold text-pink-600 mb-2">
                            📸 Instagram
                        </h3>

                        <p class="text-gray-700 text-lg">
                            💙 richard_y3la
                        </p>

                        <p class="text-gray-700 text-lg">
                            💚 jhanyela117
                        </p>
                    </div>

                    <div class="bg-blue-100 p-5 rounded-2xl">
                        <h3 class="text-2xl font-bold text-blue-600 mb-2">
                            📍 Ubicación
                        </h3>

                        <p class="text-gray-700 text-lg">
                            Pasto - Nariño
                        </p>
                    </div>

                    <div class="bg-yellow-100 p-5 rounded-2xl">
                        <h3 class="text-2xl font-bold text-yellow-600 mb-2">
                            ⏰ Horarios
                        </h3>

                        <p class="text-gray-700 text-lg">
                            Lunes a Domingo
                        </p>

                        <p class="text-gray-700 text-lg">
                            10:00 AM - 10:00 PM
                        </p>
                    </div>

                </div>

            </div>

            <!-- FORMULARIO -->
            <div class="bg-white rounded-3xl shadow-2xl p-10">

                <h2 class="text-4xl font-extrabold text-gray-800 mb-8 text-center">
                    ✉️ Envíanos un mensaje
                </h2>

                <form class="space-y-6">

                    <!-- Nombre -->
                    <div>

                        <label class="block text-lg font-semibold mb-2">
                            Nombre
                        </label>

                        <input type="text"
                               placeholder="Ingresa tu nombre"
                               class="w-full rounded-2xl border-gray-300 shadow-sm focus:ring-cyan-500 focus:border-cyan-500">

                    </div>

                    <!-- Correo -->
                    <div>

                        <label class="block text-lg font-semibold mb-2">
                            Correo electrónico
                        </label>

                        <input type="email"
                               placeholder="Ingresa tu correo"
                               class="w-full rounded-2xl border-gray-300 shadow-sm focus:ring-cyan-500 focus:border-cyan-500">

                    </div>

                    <!-- Motivo -->
                    <div>

                        <label class="block text-lg font-semibold mb-2">
                            Motivo de contacto
                        </label>

                        <select
                            class="w-full rounded-2xl border-gray-300 shadow-sm focus:ring-cyan-500 focus:border-cyan-500">

                            <option>Consulta</option>
                            <option>Pedido</option>
                            <option>Sugerencia</option>
                            <option>Otro</option>

                        </select>

                    </div>

                    <!-- Mensaje -->
                    <div>

                        <label class="block text-lg font-semibold mb-2">
                            Mensaje
                        </label>

                        <textarea rows="5"
                                  placeholder="Escribe tu mensaje"
                                  class="w-full rounded-2xl border-gray-300 shadow-sm focus:ring-cyan-500 focus:border-cyan-500"></textarea>

                    </div>

                    <!-- Botón -->
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-4 rounded-2xl text-xl font-bold shadow-lg hover:scale-105 transition duration-300">

                        🚀 Enviar mensaje

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection