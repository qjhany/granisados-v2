@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 text-white py-24">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 drop-shadow-lg">
            👽😵 GRANIZADOS RELOCOS 😵👽
        </h1>

        <p class="text-xl md:text-2xl mb-8 font-semibold">
            📍 Disfruta de los mejores granizados de la ciudad de Pasto 📍
        </p>

        <a href="{{ route('menu') }}"
           class="bg-white text-pink-600 px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:bg-gray-200 transition duration-300">

            Ver Menú

        </a>

    </div>

</section>

<!-- GALERÍA -->
<section class="max-w-7xl mx-auto py-20 px-6">

    <h2 class="text-5xl font-extrabold text-center mb-16 text-gray-800">
        ✨ Nuestros Granizados ✨
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition duration-300">

            <img class="w-full h-80 object-cover"
                 src="https://i.pinimg.com/736x/bb/e7/7c/bbe77cc0402cd4f0acfb1c69995dd21f.jpg">

            <div class="p-6">

                <h3 class="text-3xl font-bold text-pink-600 mb-3">
                    Tropical Reloco
                </h3>

                <p class="text-gray-600 text-lg">
                    Refrescante, colorido y lleno de sabor.
                </p>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition duration-300">

            <img class="w-full h-80 object-cover"
                 src="https://i.pinimg.com/1200x/df/0e/d4/df0ed4de67c0bf3e32a03f9ae002beda.jpg">

            <div class="p-6">

                <h3 class="text-3xl font-bold text-purple-600 mb-3">
                    Mega Especial
                </h3>

                <p class="text-gray-600 text-lg">
                    El favorito de todos nuestros clientes.
                </p>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition duration-300">

            <img class="w-full h-80 object-cover"
                 src="https://i.pinimg.com/736x/2b/00/63/2b00636645d263ee71a8545953df42fc.jpg">

            <div class="p-6">

                <h3 class="text-3xl font-bold text-indigo-600 mb-3">
                    Ultra Reloco
                </h3>

                <p class="text-gray-600 text-lg">
                    El granizado más loco y delicioso de Pasto.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- VIDEO -->
<section class="bg-gray-100 py-20">

    <div class="max-w-5xl mx-auto px-6">

        <h2 class="text-5xl font-extrabold text-center mb-12 text-gray-800">
            🎥 Vive la experiencia Reloca 🎥
        </h2>

        <div class="rounded-3xl overflow-hidden shadow-2xl">

            <iframe
                class="w-full h-[500px]"
                src="https://www.youtube.com/embed/GtoX5pYb62E"
                title="Granizados"
                allowfullscreen>
            </iframe>

        </div>

    </div>

</section>

@endsection