@extends('layouts.app')

@section('title', 'Mi cuenta')

@section('header')
    <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-widest text-pink-500">Mi cuenta</p>
            <h1 class="text-3xl font-extrabold text-gray-900">¡Hola, {{ auth()->user()->name }}! 👋</h1>
        </div>
        <a href="{{ route('profile.edit') }}" class="text-sm font-semibold text-purple-700 hover:text-purple-900">Editar perfil</a>
    </div>
@endsection

@section('content')
<section class="bg-gradient-to-br from-pink-500 via-purple-500 to-indigo-600 py-16 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="max-w-3xl">
            <p class="mb-3 text-lg font-semibold">Sesión iniciada correctamente</p>
            <h2 class="mb-5 text-4xl font-extrabold md:text-5xl">Tu próxima explosión de sabor está a un clic 🍧</h2>
            <p class="mb-8 text-lg text-white/90">Explora el catálogo, agrega tus granizados favoritos al carrito y completa tu pedido.</p>
            <a href="{{ route('menu') }}" class="inline-flex rounded-2xl bg-white px-7 py-4 font-extrabold text-purple-700 shadow-xl transition hover:-translate-y-1">
                Ver productos y comprar
            </a>
        </div>
    </div>
</section>

<section class="mx-auto grid max-w-7xl gap-6 px-6 py-12 md:grid-cols-3">
    <article class="rounded-3xl bg-white p-7 shadow-lg">
        <span class="text-4xl" aria-hidden="true">🍓</span>
        <h3 class="mt-4 text-xl font-bold text-gray-900">Cinco sabores</h3>
        <p class="mt-2 text-gray-600">Opciones refrescantes con precios claros y descripción completa.</p>
    </article>
    <article class="rounded-3xl bg-white p-7 shadow-lg">
        <span class="text-4xl" aria-hidden="true">🛒</span>
        <h3 class="mt-4 text-xl font-bold text-gray-900">Carrito sencillo</h3>
        <p class="mt-2 text-gray-600">Cambia cantidades, revisa el total y compra desde cualquier dispositivo.</p>
    </article>
    <article class="rounded-3xl bg-white p-7 shadow-lg">
        <span class="text-4xl" aria-hidden="true">🔒</span>
        <h3 class="mt-4 text-xl font-bold text-gray-900">Compra demostrativa</h3>
        <p class="mt-2 text-gray-600">El checkout no almacena ni procesa información bancaria real.</p>
    </article>
</section>
@endsection
