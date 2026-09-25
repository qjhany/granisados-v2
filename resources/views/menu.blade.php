@extends('layouts.app')

@section('title', 'Menú')

@section('content')

<!-- HEADER -->
<section class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 py-20 text-white">

    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-6xl font-extrabold mb-6">
            👅 Nuestros Granizados 👅
        </h1>

        <p class="text-2xl font-semibold">
            Sabores únicos, refrescantes y completamente RELOCOS 😵🍧
        </p>

    </div>

</section>

<!-- PRODUCTOS -->
<section class="max-w-7xl mx-auto py-20 px-6">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition duration-300">

            <img src="https://i.pinimg.com/1200x/20/8c/ff/208cffd1096f5367dbb2683da2ecb97a.jpg"
                 class="w-full h-80 object-cover">

            <div class="p-6">

                <h2 class="text-3xl font-bold text-pink-600 mb-4">
                    🍓 Granizado De Fresita 🍓
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    Nuestro delicioso granizado de fresa combina frescura,
                    dulzura y una textura increíblemente refrescante.
                    Preparado con sabor a fresita que enamora en cada sorbo.
                    Perfecto para refrescarte y disfrutar momentos únicos
                    en GRANIZADOS RELOCOS 😋❄️🍧
                </p>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition duration-300">

            <img src="https://i.pinimg.com/736x/a7/0d/64/a70d648f0b0512325301785e1c4a9560.jpg"
                 class="w-full h-80 object-cover">

            <div class="p-6">

                <h2 class="text-3xl font-bold text-yellow-500 mb-4">
                    🥭 Yogurcito de Manguito 🥭
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    Una explosión tropical llena de sabor y frescura.
                    Nuestro granizado de mango mezcla lo dulce y refrescante
                    para crear una experiencia deliciosa que amarás desde
                    el primer sorbo 🌞🍧😋
                </p>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition duration-300">

            <img src="https://i.pinimg.com/736x/9b/bd/1f/9bbd1f5deeaa3beb0ec1f4cf50c99835.jpg"
                 class="w-full h-80 object-cover">

            <div class="p-6">

                <h2 class="text-3xl font-bold text-green-500 mb-4">
                    🍋 Granizado de Limóncito 🍋
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    Refrescante, cítrico y lleno de energía.
                    El toque ácido del limón combinado con hielo
                    triturado crea el granizado perfecto para combatir
                    el calor y disfrutar algo verdaderamente delicioso 😵❄️🍧
                </p>

            </div>

        </div>

    </div>

</section>

<!-- FRASE FINAL -->
<section class="bg-gray-100 py-16">

    <div class="max-w-4xl mx-auto text-center px-6">

        <h2 class="text-5xl font-extrabold text-gray-800 mb-6">
            😵 ¡El sabor más RELOCO de Pasto! 😵
        </h2>

        <p class="text-xl text-gray-600">
            Ven y descubre por qué nuestros granizados son los favoritos
            de toda la ciudad 🍧🔥
        </p>

    </div>

</section>

@endsection