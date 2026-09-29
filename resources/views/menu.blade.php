@extends('layouts.app')

@section('title', 'Menú')

@section('content')
<section class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 py-20 text-white">
    <div class="max-w-6xl mx-auto text-center px-6">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">👅 Nuestros Granizados 👅</h1>
        <p class="text-xl md:text-2xl font-semibold">Sabores únicos, refrescantes y completamente RELOCOS 😵🍧</p>
    </div>
</section>

<section class="max-w-7xl mx-auto py-16 px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        @forelse ($productos as $producto)
            <article class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:-translate-y-1 transition duration-300">
                @if ($producto->imagen)
                    <img
                        src="{{ $producto->imagen }}"
                        alt="{{ $producto->nombre }}"
                        class="w-full h-72 object-cover"
                        loading="lazy"
                    >
                @else
                    <div class="w-full h-72 bg-gradient-to-br from-pink-100 to-yellow-100 flex items-center justify-center text-7xl" aria-label="Producto sin imagen">🍧</div>
                @endif

                <div class="p-6">
                    <h2 class="text-3xl font-bold text-pink-600 mb-3">{{ $producto->nombre }}</h2>
                    <p class="text-gray-600 leading-relaxed mb-5">{{ $producto->descripcion }}</p>
                    <p class="text-2xl font-extrabold text-purple-700">
                        ${{ number_format((float) $producto->precio, 0, ',', '.') }}
                    </p>
                </div>
            </article>
        @empty
            <div class="sm:col-span-2 lg:col-span-3 rounded-3xl bg-white p-12 text-center shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Pronto habrá nuevos sabores</h2>
                <p class="text-gray-600">Aún no hay productos publicados en el menú.</p>
            </div>
        @endforelse
    </div>
</section>

<section class="bg-gray-100 py-16">
    <div class="max-w-4xl mx-auto text-center px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-6">😵 ¡El sabor más RELOCO de Pasto! 😵</h2>
        <p class="text-xl text-gray-600">Ven y descubre por qué nuestros granizados son los favoritos de toda la ciudad 🍧🔥</p>
    </div>
</section>
@endsection
